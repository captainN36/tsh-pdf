<?php
$host = $_SERVER['SERVER_NAME'];
$port = 8888;

$socket = fsockopen('tcp://' . $host, $port, $errno, $errstr, 30);
if (!$socket) {
    echo "Failed to open socket: $errstr ($errno)\n";
    exit(1);
}

$headers = "GET / HTTP/1.1\r\n";
$headers .= "Host: $host:$port\r\n";
$headers .= "Upgrade: websocket\r\n";
$headers .= "Connection: Upgrade\r\n";
$headers .= "Sec-WebSocket-Key: " . base64_encode(openssl_random_pseudo_bytes(16)) . "\r\n";
$headers .= "Sec-WebSocket-Version: 13\r\n";
$headers .= "\r\n";

fwrite($socket, $headers);

$response = fread($socket, 1024);

if (strpos($response, ' 101 ') === false) {
    echo "WebSocket handshake failed\n";
    exit(1);
} else {
    echo "Connected to server 8881\n";

    $url = $_REQUEST['drive'] == 'youtube' ? "https://www.youtube.com/watch?v=" . $_REQUEST['videoId'] : "https://drive.google.com/file/d/" . $_REQUEST['videoId'] . "/view?usp=drive_link";
    $file = $_REQUEST['file'];
    $message = json_encode(["url" => $url, 'channelId' => $_REQUEST['videoId'], 'file' => $file, 'drive' => $_REQUEST['drive']]);
    $encodedMessage = encodeMessage($message);
    fwrite($socket, $encodedMessage);
}


function encodeMessage($message) {
    $length = strlen($message);
    $data = chr(0x81);
    if ($length <= 125) {
        $data .= chr(0x80 | $length);
    } elseif ($length <= 65535) {
        $data .= chr(0x80 | 126) . pack('n', $length);
    } else {
        $data .= chr(0x80 | 127) . pack('NN', 0, $length);
    }
    $mask = openssl_random_pseudo_bytes(4);
    $data .= $mask;
    for ($i = 0; $i < $length; $i++) {
        $data .= $message[$i] ^ $mask[$i % 4];
    }
    return $data;
}
