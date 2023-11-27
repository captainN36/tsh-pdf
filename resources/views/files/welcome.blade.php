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

<div id="pfd" class="pf w0 h0" data-page-no="15">
    <style>
        @isset($data['data']['percentIndicator'][0])
        .bannga-1 {
            height: 90px;
            background-color: #DC3444;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: {{$data['data']['percentIndicator'][0][1] >= 10 ? (2280/100) * $data['data']['percentIndicator'][0][1] : 135 }}px;
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
            width: {{$data['data']['percentIndicator'][1][1] >= 10 ? (2280/100) * $data['data']['percentIndicator'][1][1] : 135 }}px;
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
            width: {{$data['data']['percentIndicator'][2][1] >= 10 ? (2280/100) * $data['data']['percentIndicator'][2][1] : 135 }}px;
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
            width: {{$data['data']['percentIndicator'][3][1] >= 10 ? (2280/100) * $data['data']['percentIndicator'][3][1] : 135 }}px;
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
            width: {{$data['data']['percentIndicator'][4][1] >= 10 ? (2280/100) * $data['data']['percentIndicator'][4][1] : 135 }}px;
            bottom: 600px;
            left: 110px;
        }
        @endisset
        .bannga-6 {
            height: 90px;
            background-color: #2463EB;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 135px;
            bottom: 495px;
            left: 110px;
        }
        @isset($data['data']['percentIndicator'][5])
        .bannga-7 {
            height: 90px;
            background-color: #9333E9;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: {{$data['data']['percentIndicator'][5][1] >= 10 ? (2280/100) * $data['data']['percentIndicator'][5][1] : 135 }}px;
            bottom: 385px;
            left: 110px;
        }
        @endisset
        @isset($data['data']['percentIndicator'][6])
        .bannga-8 {
            height: 90px;
            background-color: #EC4899;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: {{$data['data']['percentIndicator'][6][1] >= 10 ? (2280/100) * $data['data']['percentIndicator'][6][1] : 135 }}px;
            bottom: 280px;
            left: 110px;
        }
        @endisset
        @isset($data['data']['percentIndicator'][7])
        .bannga-9 {
            height: 90px;
            background-color: #FACC14;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: {{$data['data']['percentIndicator'][7][1] >= 10 ? (2280/100) * $data['data']['percentIndicator'][7][1] : 135 }}px;            bottom: 170px;
            left: 110px;
        }
        @endisset
    </style>
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/bannga.png') }}">
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
            <div class="t m0 x12 h10 yce ff1 fs9 fc0 sc0 ls0 ws0 bannga-6">2%</div>
        <div class="t m0 x5 h8 ycf ff1 fs4 fc2 sc0 ls0 ws0">1.7. Thông thái - Khám phá - Truyền đạt</div>
        @isset($data['data']['percentIndicator'][5])
            <div class="t m0 x36 h10 yd0 ff1 fs9 fc0 sc0 ls0 ws0 bannga-7">{{ $data['data']['percentIndicator'][5][1] }}%</div>
        @endisset
        <div class="t m0 x5 h8 yd1 ff1 fs4 fc2 sc0 ls0 ws0">1.8. Công bằng - Tập trung - Lý tưởng</div>
        @isset($data['data']['percentIndicator'][6])
            <div class="t m0 x12 h10 yd2 ff1 fs9 fc0 sc0 ls0 ws0 bannga-8">{{ $data['data']['percentIndicator'][6][1] }}%</div>
        @endisset
        <div class="t m0 x5 h8 yd3 ff1 fs4 fc2 sc0 ls0 ws0">1.9. Trách nhiệm - Rộng lượng - Hào phóng</div>
        @isset($data['data']['percentIndicator'][7])
            <div class="t m0 x37 h10 yd4 ff1 fs9 fc0 sc0 ls0 ws0 bannga-9">$data['data']['percentIndicator'][7][1]%</div>
        @endisset    
        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <?php $page = $page + 1; ?>
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $page; ?></div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
</div>
</body>

</html>
