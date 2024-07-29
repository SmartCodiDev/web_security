<?php
require 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function verify_jwt($token)
{
    $key = "s3cR3tK3y@123!";
    try {
        // Debug statement to log the token value
        error_log("Token: " . var_export($token, true));
        
        $decoded = JWT::decode($token, new Key($key, 'HS256'));
        return ['valid' => true, 'data' => $decoded];
    } catch (Exception $e) {
        return ['valid' => false, 'message' => $e->getMessage()];
    }
}

// Example token for testing
$token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2RieCIsImF1ZCI6Imh0dHA6Ly9sb2NhbGhvc3QvZGJ4IiwiaWF0IjoxNzIyMDQ2MDc1LCJuYmYiOjE3MjIwNDYwODAsImV4cCI6MTcyMjA0NjM3NSwiZW1haWwiOiJzbWFydGNvZGlkZXYxMTI1QGdtYWlsLmNvbSJ9.1MKPTuIbW4SBgvuAz6UkOlqy48gELMO0wpQMB2V1CO0';

// Debug statement to check if the token is null or not
error_log("Token before verification: " . var_export($token, true));

$result = verify_jwt($token);
echo json_encode($result);
?>