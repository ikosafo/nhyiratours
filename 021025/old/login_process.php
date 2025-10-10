<?php
// config.php
define('VALID_USERNAME', 'nhyiraba');
define('VALID_PASSWORD', base64_encode('Nhyirab@2024@contact')); // Store encrypted password

session_start();

// Check if user is already logged in
/* if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: /contactinfo.php');
    exit;
} */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the POST data
    $username = $_POST['username'];
    $password = $_POST['password']; // This is already encrypted in Base64 by the client

    // Check if the provided username and encrypted password match the stored values
    if ($username === VALID_USERNAME && $password === VALID_PASSWORD) {
        // Successful login, create session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['last_activity'] = time(); // For idle time checking
        $fileName = 'contactinfo';
        $encodedFileName = base64_encode($fileName); // Encode the file name

        // Send response back to AJAX
        echo json_encode([
            'status' => 'success',
            'redirectUrl' => "/redirector.php?file=" . $encodedFileName // Server-side encoding
        ]);
    } else {
        // Send error message
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid login credentials.'
        ]);
    }
}
