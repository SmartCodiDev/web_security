<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(1);

require 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function verify_jwt($token, $key)
{
    try {
        $decoded = JWT::decode($token, new Key($key, 'HS256'));
        return ['valid' => true, 'data' => (array) $decoded];
    } catch (Exception $e) {
        return ['valid' => false, 'data' => $e->getMessage()];
    }
}


header('Content-Type: application/json');
$input = json_decode(file_get_contents('php://input'), true);

// Log the received input for debugging
error_log(print_r($input, true));

// Check if JSON decoding was successful
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['valid' => false, 'message' => 'Invalid JSON data']);
    exit;
}

$token = $input['token'] ?? '';

// Log the token for debugging
error_log('Received token: ' . $token);

if ($token) {
    $key = getenv('JWT_SECRET_KEY') ?: 's3cR3tK3y@123!';
    $result = verify_jwt($token, $key);

    if ($result['valid']) {
        echo json_encode(['valid' => true, 'stat' => $result]);
    } else {
        echo json_encode(['valid' => false, 'stat' => $result]);
    }
} else {
    echo json_encode(['valid' => false, 'stat' => 'No token provided']);
}