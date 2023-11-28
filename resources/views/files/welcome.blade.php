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
    @include('files.first')
    @include('files.chiso')


    <div id="pf7" class="pf w0 h0" data-page-no="7">
    <div class="pc pc6 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/a.png') }}">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/a.png') }}">
        <div class="t m0 x11 hb y91 ff1 fs5 fc0 sc0 ls0 ws0">B</div>
        <div class="t m0 hc y92 ff1 fs6 fc2 sc0 ls0 ws0" style="left: 232px">CHU KỲ VẬN SỐ</div>
        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x5 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">6</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
<div id="pf8" class="pf w0 h0" data-page-no="8">
    <div class="pc pc8 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/2.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 110px; bottom: 1440px">1</div>
        <div id="header1" class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHU KỲ VẬN SỐ</div>

        <div class="t m0 x30 hf yab ff2 fs9 fc2 sc0 ls0 ws0" style="width: 1500px; white-space: normal; text-aligin: justify">
            {!! substr($data['data']['cycleFortune']['description'], 0) !!}
        </div>
        <style>
        .t.m0.hf.yaf.ff2.fs9.fc2.sc0.ls0.ws0 p {
           white-space: break-spaces;
            font-size:45px;
        }
        </style>
        <div class="t m0 hf yaf ff2 fs9 fc2 sc0 ls0 ws0" style="display: flex; flex-wrap: wrap; left: 90px; bottom: 1125px; width: 1950px; text-aligin: justify">
            {!! $data['data']['cycleFortune']['content'] !!}
        </div>
        @php
            $array = $data['data']['cycleFortune']['cycleFortune'];
            $filter = array_filter($array, function ($item) {
                return $item['year'] == 2023;
            });
            $number = array_values($filter)[0]['indicator'];
        @endphp
        <div class="t m0 hb y276 ff2 fs9 fc2 sc0 ls0 ws0 x16-minus" style="left: -75.253333px !important;">
            @php
                $fileName = $number - 1;
            @endphp
            <img src="{{ asset($path . '/chuky/' . $fileName . '.png') }}" alt="" style="width: 2360px; bottom: 900px">
        </div>

        @php
            $string = '';
            foreach ($data['data']['cycleFortune']['cycleFortune'] as $item) {
                $year = $item['year'];
                $str = $year . '<span class="_ _19"> </span>';
                if ($year == 2023) {
                    $string = $string . '<span class="ff1 fc6">' . $str . '</span>';
                } else {
                    $string = $string . $year . '<span class="_ _19"> </span>';
                }
            }
        @endphp
        <div class="t m0 h8 yb8 ff3 fs4 fc2 sc0 ls0 ws0">
            {!! $string !!}
        </div>
        <div class="t m0 x1a h9 yb9 ff4 fs4 fc2 sc0 ls0 ws0">Chu kỳ vận số của bạn</div>
        <div class="t m0 x5 h12 yba ff3 fs4 fc2 sc0 ls0 ws0">Năm<span class="_ _a"></span> nay<span
                class="_ _a"></span> 2023,<span class="_ _a"></span> bạn<span class="_ _9"></span> có<span
                class="_ _a"></span> chỉ<span class="_ _a"></span> số<span class="_ _a"></span> năm<span
                class="_ _a"></span> (vận<span class="_ _a"></span> niên<span class="_ _a"></span> cá<span
                class="_ _9"></span> nhân)<span class="_ _a"></span> là<span class="_ _a"></span> 2<span
                class="_ _a"></span> và<span class="_ _a"></span> đang<span class="_ _a"></span> ở<span
                class="_ _a"></span> giai<span class="_ _a"></span> đoạn<span class="_ _9"></span> đầu</div>
        <div class="t m0 x5 h12 ybb ff3 fs4 fc2 sc0 ls0 ws0">của<span class="_ _d"></span> chu<span
                class="_ _b"></span> kỳ<span class="_ _b"></span> vận<span class="_ _b"></span> số.<span
                class="_ _d"></span> Xem<span class="_ _b"></span> thêm<span class="_ _b"></span> Phần<span
                class="_ _b"></span> B<span class="_ _d"></span> Mục<span class="_ _b"></span> 7<span
                class="_ _b"></span> "CHỈ<span class="_ _b"></span> SỐ<span class="_ _d"></span> CÁC<span
                class="_ _b"></span> NĂM"<span class="_ _b"></span> để<span class="_ _d"></span> biết<span
                class="_ _b"></span> hướng<span class="_ _b"></span> phát</div>
        <div class="t m0 x5 h12 ybb ff3 fs4 fc2 sc0 ls0 ws0" style="bottom: 230px">triển trong năm nay và 2 năm tới!
        </div>
        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x5 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">7</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

<div id="pfb" class="pf w0 h0" data-page-no="8">
    <div class="pc pc5 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/chi-so-nam.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 110px; bottom: 1440px">2</div>
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ CÁC NĂM</div>
        <div class="t m0 x4d h12 y64 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2023</div>
        <div class="t m0 x4e h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 630px; bottom: 1330px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['nowYearIndicator'] }}</div>
        <div class="t m0 x4d h12 y66 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2024</div>
        <div class="t m0 x4e h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 630px; bottom: 1260px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['nextYearIndicator'] }}</div>
        <div class="t m0 x4d h12 y68 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2025</div>

        <div class="t m0 x4e h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="left: 630px; bottom: 1190px; width: 2360px !important">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['twoYearsLaterIndicator'] }}
        </div>
            <?php
                $yearIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'yearIndicator', $data['data']['yearIndicator']['description'], false);
                $nowYearIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'nowYearIndicator', $data['data']['yearIndicator']['nowYearIndicator']['content'], false);
                $inputString = '';
                for ($i = 1; $i <= count($yearIndicator); $i++) {
                    $inputString .= $yearIndicator[$i];
                }
                for ($i = 1; $i <= count($nowYearIndicator); $i++) {
                    $inputString .= $nowYearIndicator[$i];
                }
                $lines = explode("\n", $inputString);

                $linesPerPartFirst = 22;
                $linesPerPartRest = 42;
                foreach($lines as $key => $line) {

                    if (strlen($line) < 100) {
                        $lines[$key] = $line . "\r";
                    }
                }
                $parts = [];
                for ($i = 0; $i < count($lines); $i += $linesPerPart) {
                    $linesPerPart = ($i == 0) ? $linesPerPartFirst : $linesPerPartRest;

                    $part = array_slice($lines, $i, $linesPerPart);

                    $part = array_filter($part);

                    if (!empty($part)) {
                        $parts[] = implode("\n", $part);
                    }
                }
                $array = [];
                $first = $parts[0];
                $first = str_replace("\r\n", "\r", $first);
                $first = str_replace("\n", " ", $first);
                for ($i = 1; $i < count($parts); $i++) {
                    $html = str_replace("\r\n ", "\r", $parts[$i]);
                    $html = str_replace("\n", " ", $parts[$i]);

                    $array[$i] = $html;
                    $array[$i] = str_replace("\r \r", "\r", $array[$i]);
                }
            ?>
            ?>
        <div class="t m0 x5 h9 yc7 ff4 fs4 fc2 sc0 ls0 ws0" style="width: 2360px !important; white-space: normal; text-align: justify; bottom: 1010px">
            {!! nl2br(e($first)) !!}
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

@for($i = 1; $i <= count($array); $i++)
        <?php $page++; ?>
    <div id="pfd" class="pf w0 h0" data-page-no="13">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                 src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            <div class="t m0 x5 hf yf3 ff4 fs9 fc2 sc0 ls0 ws0" style="width: 2360px; white-space: normal; text-align: justify;">
                @if (isset($array[$i]))
                    {!! nl2br(e($array[$i])) !!}
                @endif
            </div>
            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>
@endfor

<?php
    $nextYearIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'nextYearIndicator', $data['data']['yearIndicator']['nextYearIndicator']['content'], false);
    $inputString = '';
    for ($i = 1; $i <= count($nextYearIndicator); $i++) {
        $inputString .= $nextYearIndicator[$i];
    }
    $lines = explode("\n", $inputString);

    $linesPerPart = 32;
    $parts = [];

    for ($i = 0; $i < count($lines); $i += $linesPerPart) {
        $part = array_slice($lines, $i, $linesPerPart);
        $part = array_filter($part);
        if (!empty($part)) {
            $parts[] = implode("\n", $part);
        }
    }

    $array = [];
    $first = preg_replace("/\n/", "\r", $parts[0], 2);
    $first = str_replace("\n ", ' ', $first);
    $first = str_replace("\n", " ", $first);
    $first = str_replace("<br>", "\r", $first);
    $array[0] = $first;

    for ($i = 1; $i < count($parts); $i++) {
        $html = str_replace("\n ", '', $parts[$i]);
        $html = str_replace("\n\n", "\r", $parts[$i]);
        $html = str_replace("\n", " ", $parts[$i]);
        $array[$i] = $html;
    }
?>

@for($i = 0; $i < count($array); $i++)
        <?php $page++; ?>
    <div id="pfd" class="pf w0 h0" data-page-no="13">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                 src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            <div class="t m0 x5 hf yf3 ff4 fs9 fc2 sc0 ls0 ws0" style="width: 2360px; white-space: normal; text-align: justify;">
                @if (isset($array[$i]) && $i != 1)
                    {!! nl2br(e($array[$i])) !!}
                @else
                    {!! $array[$i] !!}
                @endif
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])

            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>
@endfor


<?php
    $twoYearsLaterIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'twoYearsLaterIndicator', $data['data']['yearIndicator']['twoYearsLaterIndicator']['content'], false);
    $inputString = '';
    for ($i = 1; $i <= count($twoYearsLaterIndicator); $i++) {
        $inputString .= $twoYearsLaterIndicator[$i];
    }
    $lines = explode("\n", $inputString);

    $linesPerPart = 43;
    $parts = [];

    for ($i = 0; $i < count($lines); $i += $linesPerPart) {
        $part = array_slice($lines, $i, $linesPerPart);

        $part = array_filter($part);

        if (!empty($part)) {
            $parts[] = implode("\n", $part);
        }
    }
    $array = [];
    $first = preg_replace("/\n/", "\r", $parts[0], 2);
    $first = str_replace("\n ", '', $first);
    $first = str_replace("\n", " ", $first);
    $array[0] = $first;

    for ($i = 1; $i < count($parts); $i++) {
        $html = str_replace("\n ", '', $parts[$i]);
        $html = str_replace("\n\n", "\r", $parts[$i]);
        $html = str_replace("\n", " ", $parts[$i]);
        $array[$i] = $html;
    }
?>

@for($i = 0; $i < count($array); $i++)
        <?php $page++; ?>
    <div id="pfd" class="pf w0 h0" data-page-no="13">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                 src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            <div class="t m0 x5 hf yf3 ff4 fs9 fc2 sc0 ls0 ws0" style="width: 2360px !important; white-space: normal; text-align: justify;">
                @if (isset($array[$i]))
                    {!! nl2br(e($array[$i])) !!}
                @endif
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>
@endfor



    <div id="pfd" class="pf w0 h0" data-page-no="12">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                 src="{{ asset('/' . $path . '/chi-so-nam.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 110px; bottom: 1440px">3</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">Chỉ số các tháng</div>
            <div class="t m0 x4d h12 y64 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->format('m/Y') }}</div>
            <div class="t m0 x4e h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 630px; bottom: 1330px">
                {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['nowMonthIndicator'] }}</div>
            <div class="t m0 x4d h12 y66 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->addMonths(1)->format('m/Y') }}</div>
            <div class="t m0 x4e h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 630px; bottom: 1260px">
                {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['nextMonthIndicator'] }}</div>
            <div class="t m0 x4d h12 y68 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->addMonths(2)->format('m/Y') }}</div>

            <div class="t m0 x4e h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="width: 2360px !important; left: 630px; bottom: 1190px">
                {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['twoMonthsLaterIndicator'] }}
            </div>

            <?php
            $monthIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'monthIndicator', $data['data']['monthIndicator']['description'], false);
            $nowMonthIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'nowMonthIndicator', $data['data']['monthIndicator']['nowMonthIndicator']['content'], false);
            $page = $page + 1;

            $inputString = '';
            for ($i = 1; $i <= count($monthIndicator); $i++) {
                $inputString .= $monthIndicator[$i];
            }
            for ($i = 1; $i <= count($nowMonthIndicator); $i++) {
                $inputString .= $nowMonthIndicator[$i];
            }
            $lines = explode("\n", $inputString);

            $linesPerPartFirst = 23;
            $linesPerPartRest = 30;
            foreach($lines as $key => $line) {

                if (strlen($line) < 100) {
                    $lines[$key] = $line . "\r";
                }
            }
            $parts = [];
            for ($i = 0; $i < count($lines); $i += $linesPerPart) {
                $linesPerPart = ($i == 0) ? $linesPerPartFirst : $linesPerPartRest;

                $part = array_slice($lines, $i, $linesPerPart);

                $part = array_filter($part);

                if (!empty($part)) {
                    $parts[] = implode("\n", $part);
                }
            }
            $array = [];
            $first = $parts[0];
            $first = str_replace("\r\n", "\r", $first);
            $first = str_replace("\n", " ", $first);
            $array[0] = $first;
            if (count($parts) > 1) {
                for ($i = 1; $i < count($parts); $i++) {
                    $html = str_replace("\r\n ", "\r", $parts[$i]);
                    $html = str_replace("\n", " ", $parts[$i]);
                    $array[$i] = $html;
                    $array[$i] = str_replace("\r \r", "\r", $array[$i]);
                }
            }        ?>
            <div class="t m0 x5 h9 ff4 fs4 fc2 sc0 ls0 ws0" style="width: 2360px !important; white-space: normal; bottom: 1010px; text-align: justify;">
                @if ($first)
                    {!! nl2br(e($first)) !!}
                @endif
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <?php $page = $page + 1; ?>
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>

    <?php
    $nextMonthIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'nextMonthIndicator', $data['data']['monthIndicator']['nextMonthIndicator']['content'], false);
    $twoMonthsLaterIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'twoMonthsLaterIndicator', $data['data']['monthIndicator']['twoMonthsLaterIndicator']['content'], false);
    $inputString = '';
    for ($i = 1; $i <= count($nextMonthIndicator); $i++) {
        $inputString .= $nextMonthIndicator[$i];
    }
    $inputString .= "\r";
    for ($i = 1; $i <= count($twoMonthsLaterIndicator); $i++) {
        $inputString .= $twoMonthsLaterIndicator[$i];
    }
    $lines = explode("\n", $inputString);

    $linesPerPart = 55;
    foreach($lines as $key => $line) {

        if (strlen($line) < 100) {
            $lines[$key] = $line . "\r";
        }
    }
    $parts = [];
    for ($i = 0; $i < count($lines); $i += $linesPerPart) {
        $part = array_slice($lines, $i, $linesPerPart);

        $part = array_filter($part);

        if (!empty($part)) {
            $parts[] = implode("\n", $part);
        }
    }
    $array = [];
    $first = $parts[0];
    $first = str_replace("\r\n", "\r", $first);
    $first = str_replace("\f", " ", $first);
    $first = str_replace("\n", " ", $first);
    $array[0] = $first;
    if (count($parts) > 1) {
        for ($i = 1; $i < count($parts); $i++) {
            $html = str_replace("\r\n ", "\r", $parts[$i]);
            $html = str_replace("\n", " ", $parts[$i]);
            $array[$i] = $html;
            $array[$i] = str_replace("\r \r", "\r", $array[$i]);
        }
    }
    ?>
    @if (!empty($array))
        @for($i = 0; $i < count($array); $i++)
            <?php $page++; ?>
            <div id="pfd" class="pf w0 h0" data-page-no="13">
                <div class="pc pcb w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt=""
                         src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                    <div class="t m0 x5 hf yf3 ff4 fs9 fc2 sc0 ls0 ws0" style="width: 2360px !important; white-space: normal; text-align: justify;">
                        @if (isset($array[$i]))
                            {!! nl2br(e($array[$i])) !!}
                        @endif
                    </div>

                    <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                    @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                    <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
                </div>
                <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
            </div>
        @endfor
    @endif

    <?php
    $array = [];
    foreach ($data['data']['percentIndicator'] as $key => $val) {
        $array[] = $val[1];
    }
    $max = max($array);
    ?>

    <div id="pfd" class="pf w0 h0" data-page-no="15">
        <style>
            @isset($data['data']['percentIndicator'][0])
        .bannga-1 {
                height: 90px;
                background-color: #DC3444;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{ $data['data']['percentIndicator'][0][1] == $max ? 2280 : ( 2280/100) * (($data['data']['percentIndicator'][0][1]/$max) * 100) }}px;
                bottom: 1030px;
                left: 110px;
            }
            @endisset
        @isset($data['data']['percentIndicator'][1])
        .bannga-2 {
                height: 90px;
                background-color: #CA8A03;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{ $data['data']['percentIndicator'][1][1] == $max ? 2280 : ( 2280/100) * (($data['data']['percentIndicator'][1][1]/$max) * 100) }}px;
                bottom: 920px;
                left: 110px;
            }
            @endisset
        @isset($data['data']['percentIndicator'][2])
        .bannga-3 {
                height: 90px;
                background-color: #21C55D;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{ $data['data']['percentIndicator'][2][1] == $max ? 2280 : ( 2280/100) * (($data['data']['percentIndicator'][2][1]/$max) * 100) }}px;
                bottom: 810px;
                left: 110px;
            }
            @endisset
        @isset($data['data']['percentIndicator'][3])
        .bannga-4 {
                height: 90px;
                background-color: #166434;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{ $data['data']['percentIndicator'][3][1] == $max ? 2280 : ( 2280/100) * (($data['data']['percentIndicator'][3][1]/$max) * 100) }}px;
                bottom: 710px;
                left: 110px;
            }
            @endisset
        @isset($data['data']['percentIndicator'][4])
        .bannga-5 {
                height: 90px;
                background-color: #1C4ED8;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{ $data['data']['percentIndicator'][4][1] == $max ? 2280 : ( 2280/100) * (($data['data']['percentIndicator'][4][1]/$max) * 100) }}px;
                bottom: 600px;
                left: 110px;
            }
            @endisset
        @isset($data['data']['percentIndicator'][5])
        .bannga-6 {
                height: 90px;
                background-color: #2463EB;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{ $data['data']['percentIndicator'][5][1] == $max ? 2280 : ( 2280/100) * (($data['data']['percentIndicator'][5][1]/$max) * 100) }}px;
                bottom: 495px;
                left: 110px;
            }
            @endisset
        @isset($data['data']['percentIndicator'][6])
        .bannga-7 {
                height: 90px;
                background-color: #9333E9;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{ $data['data']['percentIndicator'][6][1] == $max ? 2280 : ( 2280/100) * (($data['data']['percentIndicator'][6][1]/$max) * 100) }}px;
                bottom: 385px;
                left: 110px;
            }
            @endisset
        @isset($data['data']['percentIndicator'][7])
        .bannga-8 {
                height: 90px;
                background-color: #EC4899;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{ $data['data']['percentIndicator'][7][1] == $max ? 2280 : ( 2280/100) * (($data['data']['percentIndicator'][7][1]/$max) * 100) }}px;
                bottom: 280px;
                left: 110px;
            }
            @endisset
        @isset($data['data']['percentIndicator'][8])
        .bannga-9 {
                height: 90px;
                background-color: #FACC14;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{ $data['data']['percentIndicator'][8][1] == $max ? 2280 : ( 2280/100) * (($data['data']['percentIndicator'][8][1]/$max) * 100) }}px;
                bottom: 170px;
                left: 110px;
            }
            @endisset
        </style>
        <div class="pc pcb w0 h0 opened">
            <?php
            $pth = $path == 9 ? 8 : $path;
            ?>
            <img class="bi x0 y0 w1 h1" alt=""
                 src="{{ asset('/' . $pth . '/bannga.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">4</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">NHÓM TÍNH CÁCH THEO BẢN NGÃ</div>

            <div class="t m0 hf ff2 fs9 fc2 sc0 ls0 ws0" style="width: 1360px; text-align: justify; white-space: normal; top: 70px; left: 450px">
                {!! $data['data']['monthIndicator']['description'] !!}
            </div>

            <div class="t m0 x5 h8 yc3 ff1 fs4 fc2 sc0 ls0 ws0">1.1. Mạnh mẽ - Độc lập - Tự tin</div>
            @isset($data['data']['percentIndicator'][0])
                <div class="t m0 x33 h10 yc4 ff1 fs9 fc0 sc0 ls0 ws0 bannga-1">{{ $data['data']['percentIndicator'][0][1] }}%</div>
            @endisset
            <div class="t m0 x5 h8 yc5 ff1 fs4 fc2 sc0 ls0 ws0">1.2. Lắng nghe - Khéo léo - Nhạy cảm</div>
            @isset($data['data']['percentIndicator'][1])
                <div class="t m0 x34 h10 yc6 ff1 fs9 fc0 sc0 ls0 ws0 bannga-2">{{ $data['data']['percentIndicator'][1][1] }}%</div>
            @endisset
            <div class="t m0 x5 h8 yc7 ff1 fs4 fc2 sc0 ls0 ws0">1.3. Sáng tạo - Hoạt bát - Lạc quan</div>
            @isset($data['data']['percentIndicator'][2])
                <div class="t m0 x35 h10 yc8 ff1 fs9 fc0 sc0 ls0 ws0 bannga-3">{{ $data['data']['percentIndicator'][2][1] }}%</div>
            @endisset
            <div class="t m0 x5 h8 yc9 ff1 fs4 fc2 sc0 ls0 ws0">1.4. Cẩn thận - Cầu toàn - Thực tế</div>
            @isset($data['data']['percentIndicator'][3])
                <div class="t m0 x34 h10 yca ff1 fs9 fc0 sc0 ls0 ws0 bannga-4">{{ $data['data']['percentIndicator'][3][1] }}%</div>
            @endisset
            <div class="t m0 x5 h8 ycb ff1 fs4 fc2 sc0 ls0 ws0">1.5. Năng động - Linh hoạt - Tò mò</div>
            @isset($data['data']['percentIndicator'][4])
                <div class="t m0 x35 h10 ycc ff1 fs9 fc0 sc0 ls0 ws0 bannga-5">{{ $data['data']['percentIndicator'][4][1] }}%</div>
            @endisset
            <div class="t m0 x5 h8 ycd ff1 fs4 fc2 sc0 ls0 ws0">1.6. Quan tâm - Yêu thương - Kiểm soát</div>
            @isset($data['data']['percentIndicator'][5])
                <div class="t m0 x12 h10 yce ff1 fs9 fc0 sc0 ls0 ws0 bannga-6">{{ $data['data']['percentIndicator'][5][1] }}%</div>
            @endisset
            <div class="t m0 x5 h8 ycf ff1 fs4 fc2 sc0 ls0 ws0">1.7. Thông thái - Khám phá - Truyền đạt</div>
            @isset($data['data']['percentIndicator'][6])
                <div class="t m0 x36 h10 yd0 ff1 fs9 fc0 sc0 ls0 ws0 bannga-7">{{ $data['data']['percentIndicator'][6][1] }}%</div>
            @endisset
            <div class="t m0 x5 h8 yd1 ff1 fs4 fc2 sc0 ls0 ws0">1.8. Công bằng - Tập trung - Lý tưởng</div>
            @isset($data['data']['percentIndicator'][7])
                <div class="t m0 x12 h10 yd2 ff1 fs9 fc0 sc0 ls0 ws0 bannga-8">{{ $data['data']['percentIndicator'][7][1] }}%</div>
            @endisset
            <div class="t m0 x5 h8 yd3 ff1 fs4 fc2 sc0 ls0 ws0">1.9. Trách nhiệm - Rộng lượng - Hào phóng</div>
            @isset($data['data']['percentIndicator'][8])
                <div class="t m0 x37 h10 yd4 ff1 fs9 fc0 sc0 ls0 ws0 bannga-9">{{ $data['data']['percentIndicator'][8][1] }}%</div>
            @endisset
            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <?php $page = $page + 1; ?>
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $page; ?></div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>


    <div id="pf7" class="pf w0 h0" data-page-no="16">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                 src="{{ asset('/' . $path . '/c.png') }}">
            <div class="t m0 x11 hb y91 ff1 fs5 fc0 sc0 ls0 ws0">C</div>
            <div class="t m0 hc y92 ff1 fs6 fc2 sc0 ls0 ws0" style="left: 150px">PHÂN TÍCH ĐƯỜNG ĐỜI</div>
            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <?php $page = $page + 1; ?>
            <div class="t m0 x5 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>
    <div id="pf7" class="pf w0 h0" data-page-no="17">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                 src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 110px; bottom: 1440px">1</div>
            @php
                $title = $data['data']['lifePathIndicator']['title'];
                $arr = explode('<span class="text-success">', $title);
                $end = end($arr);
                $final = explode('</span', $end);
                $numberLifePath = $final[0];
            @endphp
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ ĐƯỜNG ĐỜI (SỐ CHỦ ĐẠO)</div>
            <div class="t m0 x39 h7 yd5 ff4 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">{{ $numberLifePath }}</div>
            <?php
            $lifePathIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'lifePath_description', $data['data']['lifePathIndicator']['description'], false);
            $lifePathIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'lifePathIndicator', $data['data']['lifePathIndicator']['content'], false);
            $inputString = '';
            for ($i = 1; $i <= count($lifePathIndicator_description); $i++) {
                $inputString .= $lifePathIndicator_description[$i];
            }
            $inputString .= "\r\r";
            for ($i = 1; $i <= count($lifePathIndicator); $i++) {
                $result = preg_replace('/\·\n\n/', '·  ', $lifePathIndicator[$i]);
                $result = preg_replace('/\.\n\n/', '.  ', $result);
                $inputString .= $result;
            }
            $lifePathIndicator_description_lines = explode("\n", $lifePathIndicator_description[1]);
            $lines = explode("\n", $inputString);
            $linesPerPartFirst = 50;
            $linesPerPartRest = 70;

            $parts = [];

            for ($i = 0; $i < count($lines); $i += $linesPerPart) {
                $linesPerPart = ($i == 0) ? $linesPerPartFirst : $linesPerPartRest;

                $part = array_slice($lines, $i, $linesPerPart);

                $part = array_filter($part);

                if (!empty($part)) {
                    $parts[] = implode("\n", $part);
                }
            }
            ?>
            <div class="t m0 x5 hf yd7 ff4 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2360px; text-align: justify; bottom: 1110px">
                <div style="margin-top: 180px">
                    <?php $result = preg_replace('/\·\n\n/', '·', $lifePathIndicator[1]); ?>
                    <?php $result = preg_replace('/\.\n\n/', '.', $result); ?>
                    {!! nl2br(e($parts[0])) !!}
                </div>
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <?php $page = $page + 1; ?>
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
        </div>
    </div>

    @if(count($parts) >= 2)
        @for ($i = 1 ; $i < count($parts) ; $i++)
                <?php $page++; ?>
            <div id="pfd" class="pf w0 h0" data-page-no="18">
                <div class="pc pcb w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt=""
                         src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                    <div class="t m0 x5 hf yf3 ff4 fs9 fc2 sc0 ls0 ws0" style="width: 2360px; white-space: normal; text-align: justify;">
                        {!! nl2br(e($parts[$i])) !!}
                    </div>
                    <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                    @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                    <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
                </div>
                <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
            </div>
        @endfor
    @endif

    <div id="pf77" class="pf w0 h0" data-page-no="17">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                 src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 110px; bottom: 1440px">2</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ SỨ MỆNH</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                {{ $data['data']['missionIndicator']['missionIndicator'] }}
            </div>
            <?php
            $missionIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'missionIndicator_description', $data['data']['missionIndicator']['description'], false);
            $missionIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'missionIndicator', $data['data']['missionIndicator']['content'], false);

            $inputString = '';
            for ($i = 1; $i <= count($missionIndicator_description); $i++) {
                $inputString .= $missionIndicator_description[$i];
            }
            $inputString .= "\r";
            for ($i = 1; $i <= count($missionIndicator); $i++) {
                $inputString .= $missionIndicator[$i];
            }
            $lines = explode("\n", $inputString);

            $linesPerPartFirst = 27;
            $linesPerPartRest = 43;
            foreach($lines as $key => $line) {

                if (strlen($line) < 100) {
                    $lines[$key] = $line . "\r";
                }
            }
            $parts = [];
            for ($i = 0; $i < count($lines); $i += $linesPerPart) {
                $linesPerPart = ($i == 0) ? $linesPerPartFirst : $linesPerPartRest;

                $part = array_slice($lines, $i, $linesPerPart);

                $part = array_filter($part);

                if (!empty($part)) {
                    $parts[] = implode("\n", $part);
                }
            }
            $array = [];
            $first = $parts[0];
            $first = str_replace("\r\n", "\r", $first);
            $first = str_replace("\n", " ", $first);
            $array[0] = $first;
            if (count($parts) > 1) {
                for ($i = 1; $i < count($parts); $i++) {
                    $html = str_replace("\r\n ", "\r", $parts[$i]);
                    $html = str_replace("\n", " ", $parts[$i]);
                    $array[$i] = $html;
                    $array[$i] = str_replace("\r \r", "\r", $array[$i]);
                }
            }
            ?>
            <div class="t m0 x5 hf yd7 ff4 fs9 fc2 sc0 ls0 ws0" style="white-space: normal;width: 2360px;bottom: 1010px; text-align: justify;">
                {!! nl2br(e($array[0])) !!}
            </div>
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <?php $page = $page + 1; ?>
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>
    @if(count($array) >= 2)
        @for ($i = 1; $i < count($array); $i++)
            <?php $page++; ?>
            <div id="pfc" class="pf w0 h0" data-page-no="9">
                <div class="pc pce w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt=""
                         src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                    <div class="t m0 x5 h12 yf3 ff3 fs4 fc2 sc0 ls0 ws0" style="width: 2360px; white-space: normal; text-align: justify;">
                        @if(isset($array[$i]))
                        {!! nl2br(e($array[$i])) !!}
                        @endif
                    </div>
                    <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                    @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                    <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$i}}</div>
                </div>
                <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
            </div>
        @endfor
    @endif

    <div id="pf7-8" class="pf w0 h0" data-page-no="22">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                 src="{{ asset('/' . $path . '/duongdoi.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 110px; bottom: 1440px">4</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ LINH HỒN</div>
            <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                {{ $data['data']['soulIndicator']['soulIndicator'] }}</div>

            <?php
            $soulIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'soulIndicator', $data['data']['soulIndicator']['content'])
            ?>
            <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                 style="white-space: normal; width: 2360px; bottom: 1010px; text-align: justify;">
                {!! $data['data']['soulIndicator']['description'] !!}
                <br>
                <br>
                {!! nl2br(e($soulIndicator[1])) !!}
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <?php $page = $page + 1; ?>
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>


</div>
</body>

</html>
