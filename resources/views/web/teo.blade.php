<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display PDF</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>
    <style>
        #pdfViewer {
            width: 100%;
            height: 600px;
            border: 1px solid #000;
            overflow-y: scroll;
            position: relative;
        }
        canvas {
            display: block;
        }
        .toc {
            position: fixed;
            top: 10px;
            left: 10px;
            background: white;
            padding: 10px;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <h1>PDF Viewer</h1>
    <div class="toc">
        <h2>Table of Contents</h2>
        <ul id="tocList"></ul>
    </div>
    <div id="pdfViewer"></div>

    <script>
        var url = 'https://pdf.tracuuthansohoconline.com/pdf/100-2024-05-14.pdf';
        var pdfDoc = null;
        var scale = 1.0;
        var pdfViewer = document.getElementById('pdfViewer');
        var tocList = document.getElementById('tocList');
        var pageNumberToCanvasMap = {};

        // Asynchronous download of PDF
        pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
            pdfDoc = pdfDoc_;
            // Render all pages
            for (let num = 1; num <= pdfDoc.numPages; num++) {
                renderPage(num);
            }
        });

        function renderPage(num) {
            pdfDoc.getPage(num).then(function(page) {
                var viewport = page.getViewport({ scale: scale });

                var canvas = document.createElement('canvas');
                var context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Store the canvas to allow scrolling to it later
                pageNumberToCanvasMap[num] = canvas;

                page.render({ canvasContext: context, viewport: viewport }).promise.then(function() {
                    pdfViewer.appendChild(canvas);
                });

                // Extract text for Table of Contents
                page.getTextContent().then(function(textContent) {
                    textContent.items.forEach(function(item) {
                        // Adjust this condition to match your titles
                        if (item.str.match(/Title\s\d/)) {
                            let li = document.createElement('li');
                            li.innerHTML = `<a href="#" onclick="scrollToPage(${num})">${item.str}</a>`;
                            tocList.appendChild(li);
                        }
                    });
                });
            });
        }

        function scrollToPage(pageNum) {
            let canvas = pageNumberToCanvasMap[pageNum];
            if (canvas) {
                pdfViewer.scrollTo({
                    top: canvas.offsetTop,
                    behavior: 'smooth'
                });
            }
        }
    </script>
</body>
</html>
