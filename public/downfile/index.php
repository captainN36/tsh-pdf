<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $htmlFilePath = isset($_POST['html']) ? $_POST['html'] : '';
    $pdfFilePath = isset($_POST['pdf']) ? $_POST['pdf'] : '';

    $htmlFilePath = escapeshellarg($htmlFilePath);
    $pdfFilePath = escapeshellarg($pdfFilePath);

    $htmlFilePath = '/var/www/html/tsh-pdf/public/html/' . $htmlFilePath;
    $pdfFilePath = '/var/www/html/tsh-pdf/public/pdf/' . $pdfFilePath;

    $command = "wkhtmltopdf $htmlFilePath $pdfFilePath";

    $output = [];
    $status = -1;

    exec($command . " 2>&1", $output, $status);

    $outputString = implode("\n", $output);

    $response = new stdClass();
    $response->output = $command;
    $response->status = $status;

    file_put_contents('/var/www/html/tsh-pdf/public/downfile/file.log', json_encode(['command' => $command, 'output' => $outputString, 'status' => $status], JSON_PRETTY_PRINT), FILE_APPEND);

    header('Content-Type: application/json');

    echo json_encode($response);
} else {
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'Method Not Allowed';
}
?>
