<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="generator" content="pdf2htmlEX" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pdf.css') }}">
    <title>test</title>
    <script>
        var headerElements = document.getElementsByClassName("c-header-index");

        for (var i = 0; i < headerElements.length; i++) {
            headerElements[i].id = "chiso-" + (i + 1).toString();
            headerElements[i].innerText = (i + 1).toString();
        }
    </script>
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
            $nickname = new stdClass();
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
            if (isset($data['data']['drawNameAndSummaryChart']['drawNickNameChart'])) {
                foreach ($data['data']['drawNameAndSummaryChart']['drawNickNameChart'] as $value) {
                    $strName = $value[1];
                    $text = '';
                    for ($index = 1; $index <= $strName; $index++) {
                        $text .= $value[0];
                    }
                    $nickname->{$value[0]} = $text;
                }
            }

            $page = 8;
        @endphp
        @include('files.first')
        @include('files.chiso')


        <div id="pfd" class="pf w0 h0" data-page-no="12">
            <div class="pc pcb w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/chi-so-nam.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 110px; bottom: 1440px">2</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">Chỉ số các tháng</div>
                <div class="t m0 x4d h12 y64 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->month }}</div>
                <div class="t m0 x4e h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 580px; bottom: 1330px">
                    {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['nowMonthIndicator'] }}
                </div>
                <div class="t m0 x4d h12 y66 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->month + 1 }}
                </div>
                <div class="t m0 x4e h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 580px; bottom: 1260px">
                    {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['nextMonthIndicator'] }}
                </div>
                <div class="t m0 x4d h12 y68 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->month + 2 }}</div>

                <div class="t m0 x4e h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0"
                    style="width: 2360px !important; left: 580px; bottom: 1190px">
                    {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['twoMonthsLaterIndicator'] }}
                </div>

                <?php
                $nowMonthIndicator = contentText($data['data']['monthIndicator']['firstContent']);
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['monthIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs9 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; font-size: 58px">
                        {!! $nowMonthIndicator[0] !!}
                    </div>
                </div>

                <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                <?php $page = $page + 1; ?>
                <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
            </div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>

    </div>
</body>

</html>
