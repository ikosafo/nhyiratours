<?php
// redirector.php

if (isset($_GET['file'])) {
    // Decode the Base64 encoded file name
    $decodedFileName = base64_decode($_GET['file']);

    // Security check: allow only specific files
    $allowedFiles = ['contactinfo'];

    if (in_array($decodedFileName, $allowedFiles)) {
        // Redirect to the decoded file
        header("Location: /" . $decodedFileName);
        exit();
    } else {
        // Handle invalid or disallowed file names
        echo "Invalid file requested.";
    }
} else {
    echo "No file specified.";
}
?>
