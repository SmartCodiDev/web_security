<?php

// Turn off error reporting
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
// Write session data and close the session
session_write_close();

// Destroy the session
session_destroy();

// Optionally delete the session file (for file-based sessions)
// Only do this if you have access and permission to the session files

$folder_path = './sessions'; // Specify the folder path

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the email is set in the POST request
    if (isset($_POST['email'])) {
        $file_name = $_POST['email'];
        $file_path = $folder_path . DIRECTORY_SEPARATOR . $file_name;

        if (file_exists($file_path)) {
            if (unlink($file_path)) {
                echo "File deleted successfully.";
            } else {
                echo "Error deleting the file.";
            }
        } else {
            echo "File does not exist.";
        }
    }
}


// Delete all other cookies
if (!empty($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach ($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        // Ensure $params is defined before using it
        $params = session_get_cookie_params();
        setcookie($name, '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    }
}

// Redirect to index.php with a query parameter
header('Location: session_expired.php');
exit();
