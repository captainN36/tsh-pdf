<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="generator" content="pdf2htmlEX" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pdf.css') }}">
    <title>test</title>
</head>
<div id="sidebar">
    <div id="outline">
    </div>
</div>
<div id="page-container">
    @php
        $path = $data['data']['lifePathIndicator']['lifePathIndicator'];
        $path = explode('/', $path)[0];
        $name = new stdClass();
        $summary = new stdClass();
        foreach ($data['data']['drawNameAndSummaryChart']['drawNameChart'] as $value) {
            $strName = $value[1];
            $text = '';
            for ($index = 1; $index <= $strName; $index++) {
                $text .= $value[0];
            }
            $name->{$value[0]} = $text;
        }
        foreach ($data['data']['drawNameAndSummaryChart']['drawSummaryChart'] as $value) {
            $strName = $value[1];
            $text = '';
            for ($index = 1; $index <= $strName; $index++) {
                $text .= $value[0];
            }
            $summary->{$value[0]} = $text;
        }
    @endphp
    @include('test.vanso')


    
</div>
<script>
    document.querySelectorAll('.toc div').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
</body>

</html>
