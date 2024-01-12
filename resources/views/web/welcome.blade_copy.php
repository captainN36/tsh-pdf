<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="generator" content="pdf2htmlEX" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pdf.css') }}">
    <title>test</title>
</head>
<body>
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
            $page = 8;

    @endphp

<?php
    $content = $data['data']['yearIndicator']['nowYearIndicator']['content'];
    $midpoint = 2860;
    $beforeMidpoint = strrpos(substr($content, 0, $midpoint), ' ');
    $afterMidpoint = strpos(substr($content, $midpoint), ' ');
    $splitPosition = ($midpoint - $beforeMidpoint < $afterMidpoint) ? $beforeMidpoint : $afterMidpoint + $midpoint;
?>

<div id="pfb" class="pf w0 h0" data-page-no="8">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/chi-so-nam.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">2</div>
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ CÁC NĂM</div>
        <div class="t m0 x4d h12 y64 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2023</div>
        <div class="t m0 x4e h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1120px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['nowYearIndicator'] }}</div>
        <div class="t m0 x4d h12 y66 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2024</div>
        <div class="t m0 x4e h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1060px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['nextYearIndicator'] }}</div>
        <div class="t m0 x4d h12 y68 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2025</div>
        <div class="t m0 x4e h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1000px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['twoYearsLaterIndicator'] }}
        </div>

        <div class="t m0 x5 h9 yc7 ff4 fs4 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal; text-align: justify; bottom: 900px">
            {!! substr($content, 0, $splitPosition) !!}
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $page; ?></div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

<?php
    $remain = strlen($content) - $splitPosition;

    

    while ($remain > 0) {
?>
    <?php 
        $midpoint = strlen($content) - $remain;
        $beforeMidpoint = strrpos(substr($content, 0, $midpoint), ' ');
        $afterMidpoint = strpos(substr($content, $midpoint), ' ');
        $splitPosition = ($midpoint - $beforeMidpoint < $afterMidpoint) ? $beforeMidpoint : $afterMidpoint + $midpoint;
    ?>

    <div id="pfc" class="pf w0 h0" data-page-no="9">
        <div class="pc pce w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            <div class="t m0 x5 h12 yf3 ff3 fs4 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal; text-align: justify;">
                {!! substr($content, $splitPosition, 3500) !!}
            </div>
            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $page; ?></div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>
<?php $remain -= 3500; } ?>

<script>
    var headerElements = document.getElementsByClassName("c-header-index");

    for (var i = 0; i < headerElements.length; i++) {
        headerElements[i].innerText = (i + 1).toString();
    }
</script>
</body>

</html>
