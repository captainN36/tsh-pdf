<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $htmlFilePath = isset($_POST['html']) ? $_POST['html'] : '';
    $pdfFilePath = isset($_POST['pdf']) ? $_POST['pdf'] : '';

    $htmlFilePath = escapeshellarg($htmlFilePath);
    $pdfFilePath = escapeshellarg($pdfFilePath);

    $command = "wkhtmltopdf /var/www/html/tsh-pdf/public/html/$htmlFilePath /var/www/html/tsh-pdf/public/pdf/$pdfFilePath";

    exec($command, $output, $status);

    $response = new stdClass();
    $response->output = implode("\n", $output);
    $response->status = $status;

    header('Content-Type: application/json');

    echo json_encode($response);
} else {
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'Method Not Allowed';
}
?>
