<?php
// This file is downfile/index.php

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the POST data
    $htmlFilePath = isset($_POST['html']) ? $_POST['html'] : '';
    $pdfFilePath = isset($_POST['pdf']) ? $_POST['pdf'] : '';

    // Sanitize the input data to prevent command injection
    $htmlFilePath = escapeshellarg($htmlFilePath);
    $pdfFilePath = escapeshellarg($pdfFilePath);

    // Construct the command
    $command = "wkhtmltopdf /var/www/html/tsh-pdf/public/html/$htmlFilePath /var/www/html/tsh-pdf/public/pdf/$pdfFilePath";

    // Execute the command and capture the output, errors, and return status
    exec($command, $output, $status);
    
    // Log the output and errors for debugging purposes
    $logData = [
        'command' => $command,
        'output' => implode("\n", $output),
        'status' => $status,
    ];

    // Write the log data to a file or output it for debugging
    file_put_contents(public_path('downfile/file.log'), json_encode($logData, JSON_PRETTY_PRINT), FILE_APPEND);
    
    // Create a response object
    $response = new stdClass();
    $response->output = implode("\n", $output);
    $response->status = $status;

    // Set the content type to application/json
    header('Content-Type: application/json');

    // Return the response as a JSON object
    echo json_encode($response);
} else {
    // If the request method is not POST, return an error response
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'Method Not Allowed';
}
?>
