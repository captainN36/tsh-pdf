<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>wellcome</h1>
    <script>
    const socket = new WebSocket('wss://pdf.tracuuthansohoconline.com:8881');

    socket.addEventListener('open', function(event) {
        console.log('Connected to server');
    });
    socket.send("dkmm")
    </script>
</body>
</html>