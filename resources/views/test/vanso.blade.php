<style>
        body {
            text-align: justify;
        }

        p {
            text-align: justify;
            text-justify: inter-word;
        }
    </style>
<div style="margin: 3em">

{{
    \App\Http\Controllers\PDFController::renderText($data['data']['yearIndicator']['nowYearIndicator']['content'], 'chiso')[1]
}}



</div>