<?php
// downfile/index.php

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the POST data
    $htmlFilePath = isset($_POST['html']) ? $_POST['html'] : '';
    $pdfFilePath = isset($_POST['pdf']) ? $_POST['pdf'] : '';

    // Sanitize the input data
    $htmlFilePath = escapeshellarg($htmlFilePath);
    $pdfFilePath = escapeshellarg($pdfFilePath);

        // Đường dẫn tệp đã được sửa
    $htmlFilePath = '/var/www/html/tsh-pdf/public/html/' . $htmlFilePath;
    $pdfFilePath = '/var/www/html/tsh-pdf/public/pdf/' . $pdfFilePath;

    // Construct the command
    $command = "wkhtmltopdf $htmlFilePath $pdfFilePath";

    // Execute the command and capture the output and error output
    $output = [];
    $status = -1;

    // Execute the command
    exec($command . " 2>&1", $output, $status);

    // Convert output array to a string
    $outputString = implode("\n", $output);

    // Create a response object
    $response = new stdClass();
    $response->output = $outputString;
    $response->status = $status;

    // Log the command output and error for debugging purposes
    file_put_contents('/var/www/html/tsh-pdf/public/downfile/file.log', json_encode(['command' => $command, 'output' => $outputString, 'status' => $status], JSON_PRETTY_PRINT), FILE_APPEND);

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
