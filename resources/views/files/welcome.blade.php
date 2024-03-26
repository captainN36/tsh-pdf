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
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/a.png') }}">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/a.png') }}">
                <div class="t m0 x11 hb y91 ff1 fs5 fc0 sc0 ls0 ws0">B</div>
                <div class="t m0 hc y92 ff1 fs6 fc2 sc0 ls0 ws0" style="left: 232px">CHU KỲ VẬN SỐ</div>
                <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                <div class="t m0 x5 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">6</div>
            </div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
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
                p {
                    margin: 0;
                }
                </style>
                <div class="t m0 hf yaf ff2 fs9 fc2 sc0 ls0 ws0" style="flex-wrap: wrap; left: 90px; bottom: 1125px; width: 1950px; text-aligin: justify">
                    {!! $data['data']['cycleFortune']['content'] !!}
                </div>
                @php
                    $array = $data['data']['cycleFortune']['cycleFortune'];
                    $filter = array_filter($array, function ($item) {
                        return $item['year'] == date('Y');
                    });
                    $number = array_values($filter)[0]['indicator'];
                @endphp
                <div class="t m0 hb y276 ff2 fs9 fc2 sc0 ls0 ws0 x16-minus" style="left: -100.253333px !important; bottom: 800px">
                    @php
                        $fileName = $number - 1;
                    @endphp
                    <img src="{{ asset('9/chuky/8.png') }}" alt="" style="width: 2360px; bottom: 900px">
                </div>
        
                @php
                    $string = '';
                    $indicator = '';
                    $num = 1;
                    foreach ($data['data']['cycleFortune']['cycleFortune'] as $item) {
                        $year = $item['year'];
                        $index = $item['indicator'];
                        $str = $year . '<span class="_ _19"> </span>';
                        $indicator .= '<span class="indicator indicator-' . $num . '">' . $index . '</span>';
                        if ($year == date('Y')) {
                            $string = $string . '<span class="ff1 fc6">' . $str . '</span>';
                        } else {
                            $string = $string . $year . '<span class="_ _19"> </span>';
                        }
                        $num++;
                    }
                @endphp
                <div class="t m0 h8 yb8 ff3 fs4 fc2 sc0 ls0 ws0" style="display: inline-flex; bottom: 480px; left: -25px">
                    {!! $indicator !!}
                </div>
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

    </div>
</body>

</html>
