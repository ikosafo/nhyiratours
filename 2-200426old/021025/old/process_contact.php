<?php
// Include the database configuration
include('config.php');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and collect form data
    $fullName = $mysqli->real_escape_string($_POST['fullName']);
    $emailAddress = $mysqli->real_escape_string($_POST['emailAddress']);
    $subject = $mysqli->real_escape_string($_POST['subject']);
    $message = $mysqli->real_escape_string($_POST['message']);
    $createdAt = date('Y-m-d H:i:s');
    $ipAddress = $_SERVER['REMOTE_ADDR'];

    // Insert data into the database
    $query = "INSERT INTO contactus (fullName, emailAddress, subject, message, createdAt, ipAddress) 
              VALUES ('$fullName', '$emailAddress', '$subject', '$message', '$createdAt', '$ipAddress')";

    // Check if the insertion was successful
    if ($mysqli->query($query)) {
        // Return success response
        http_response_code(200); // OK
        echo json_encode(['status' => 'success']);
    } else {
        // Return error response
        http_response_code(500); // Internal Server Error
        echo json_encode(['status' => 'error', 'message' => $mysqli->error]);
    }
} else {
    // Return method not allowed if not a POST request
    http_response_code(405); // Method Not Allowed
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
