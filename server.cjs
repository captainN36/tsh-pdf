const WebSocket = require('ws');
const { spawn } = require('child_process');
const fs = require('fs');


const wss = new WebSocket.Server({ port: 8881 });

const channelUrls = {};

wss.on('connection', function connection(ws) {
    console.log('Client connected from php');

    ws.on('message', function incoming(message) {
        console.log("message.toString()");
        // const { url, channelId, file, drive } = JSON.parse(message);

        // if (!channelUrls[channelId]) {
        //     channelUrls[channelId] = [];
        // }
        // channelUrls[channelId].push(url);

        // processUrl(url, channelId, file, drive);
    });
});

function processUrl(url, channelId, file, drive) {
    const command = 'yt-dlp';

    if (drive == 'youtube') {
        var args = [
            '-f',
            'bestvideo[ext=mp4][vcodec*=avc1]+bestaudio[ext=m4a]/mp4',
            url,
            '-o',
            file
        ];
    } else {
        var args = [
            url,
            '-o',
            file
        ];
    }

    const pingProcess = spawn(command, args);

    pingProcess.stdout.on('data', function(data) {
        sendMessage(channelId, url, data.toString());
    });

    pingProcess.stderr.on('data', function(data) {
        sendMessage(channelId, url, 'Error: ' + data.toString());
    });
}

function sendMessage(channelId, url, message) {
    wss.clients.forEach(client => {
        if (client.readyState === WebSocket.OPEN) {
            if (channelUrls[channelId].includes(url)) {
                client.send(JSON.stringify({ channelId: channelId, message: message}));
            }
        }
    });
}


function fileExists(filePath) {
    try {
        fs.accessSync(filePath, fs.constants.F_OK);
        return true;
    } catch (err) {
        return false;
    }
}
