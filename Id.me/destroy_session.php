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

// Redirect to index.php with a query parameter
// header('Location: index.php');
exit();
