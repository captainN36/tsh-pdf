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

    <div id="pfd" class="pf w0 h0" data-page-no="15">
        <style>
            @isset($data['data']['percentIndicator'][0])
            .bannga-1 {
                height: 79px;
                background-color: #DC3444;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{$data['data']['percentIndicator'][0][1] >= 10 ? (2360/100) * $data['data']['percentIndicator'][0][1] : 135 }}px;
                bottom: 1077.410000px;
                left: 90px;
            }
            @endisset
            @isset($data['data']['percentIndicator'][1])
            .bannga-2 {
                height: 79px;
                background-color: #CA8A03;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{$data['data']['percentIndicator'][1][1] >= 10 ? (2360/100) * $data['data']['percentIndicator'][1][1] : 135 }}px;
                bottom: 987.410000px;
                left: 90px;
            }
            @endisset
            @isset($data['data']['percentIndicator'][2])
            .bannga-3 {
                height: 79px;
                background-color: #21C55D;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{$data['data']['percentIndicator'][2][1] >= 10 ? (2360/100) * $data['data']['percentIndicator'][2][1] : 135 }}px;
                bottom: 897.410000px;
                left: 90px;
            }
            @endisset
            @isset($data['data']['percentIndicator'][3])
            .bannga-4 {
                height: 79px;
                background-color: #166434;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{$data['data']['percentIndicator'][3][1] >= 10 ? (2360/100) * $data['data']['percentIndicator'][3][1] : 135 }}px;
                bottom: 770px;
                left: 90px;
            }
            @endisset
            @isset($data['data']['percentIndicator'][4])
            .bannga-5 {
                height: 79px;
                background-color: #1C4ED8;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{$data['data']['percentIndicator'][4][1] >= 10 ? (2360/100) * $data['data']['percentIndicator'][4][1] : 135 }}px;
                bottom: 680px;
                left: 90px;
            }
            @endisset
            .bannga-6 {
                height: 79px;
                background-color: #2463EB;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: 135px;
                bottom: 520px;
                left: 90px;
            }
            @isset($data['data']['percentIndicator'][5])
            .bannga-7 {
                height: 79px;
                background-color: #9333E9;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{$data['data']['percentIndicator'][5][1] >= 10 ? (2360/100) * $data['data']['percentIndicator'][5][1] : 135 }}px;
                bottom: 420px;
                left: 90px;
            }
            @endisset
            @isset($data['data']['percentIndicator'][6])
            .bannga-8 {
                height: 79px;
                background-color: #EC4899;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{$data['data']['percentIndicator'][6][1] >= 10 ? (2360/100) * $data['data']['percentIndicator'][6][1] : 135 }}px;
                bottom: 350px;
                left: 90px;
            }
            @endisset
            @isset($data['data']['percentIndicator'][7])
            .bannga-9 {
                height: 79px;
                background-color: #FACC14;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: {{$data['data']['percentIndicator'][7][1] >= 10 ? (2360/100) * $data['data']['percentIndicator'][7][1] : 135 }}px;
                bottom: 57.410000px;
                left: 90px;
            }
            @endisset
        </style>
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/bannga.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">4</div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">NHÓM TÍNH CÁCH THEO BẢN NGÃ</div>
    
            <div class="t m0 hf ff2 fs9 fc2 sc0 ls0 ws0" style="width: 1233px; text-align: justify; white-space: normal; top: 70px; left: 500px">
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
                <div class="t m0 x37 h10 yd4 ff1 fs9 fc0 sc0 ls0 ws0 bannga-9">{{ $data['data']['percentIndicator'][7][1] }}%</div>
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
