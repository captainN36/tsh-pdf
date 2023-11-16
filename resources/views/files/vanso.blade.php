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
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">1</div>
        <div id="header1" class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHU KỲ VẬN SỐ</div>

        <div class="t m0 x30 hf yab ff2 fs9 fc2 sc0 ls0 ws0" style="width: 1650px !important; white-space: normal;text-align: justify;">
            {!! substr($data['data']['cycleFortune']['description'], 0) !!}
        </div>
        <div class="t m0 hf yaf ff2 fs9 fc2 sc0 ls0 ws0" style="display: flex; flex-wrap: wrap; left: 75px; top: 310px; width: 1950px">
            {!! $data['data']['cycleFortune']['content'] !!}
        </div>
        @php
            $array = $data['data']['cycleFortune']['cycleFortune'];
            $filter = array_filter($array, function ($item) {
                return $item['year'] == 2023;
            });
            $number = array_values($filter)[0]['indicator'];
        @endphp
        <div class="t m0 hf yab ff2 fs9 fc2 sc0 ls0 ws0" style="margin-top: 200px !important; left: -60px">
            @php
                $fileName = $number - 1;
            @endphp
            <img src="{{ asset($path . '/chuky/' . $fileName . '.png') }}" alt="" style="width: 2400px;">
        </div>

        @php
            $string = '';
            foreach ($data['data']['cycleFortune']['cycleFortune'] as $item) {
                $year = $item['year'];
                $str = $year . '<span class="_ _19" style="width: 90px"> </span>';
                if ($year == 2023) {
                    $string = $string . '<span class="ff1 fc6">' . $str . '</span>';
                } else {
                    $string = $string . $year . '<span class="_ _19" style="width: 90px"> </span>';
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
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">2</div>
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ CÁC NĂM</div>
        <div class="t m0 x4d h12 y64 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2023</div>
        <div class="t m0 x4e h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1120px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['nowYearIndicator'] }}</div>
        <div class="t m0 x4d h12 y66 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2024</div>
        <div class="t m0 x4e h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1060px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['nextYearIndicator'] }}</div>
        <div class="t m0 x4d h12 y68 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2025</div>

        <div class="t m0 x4e h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1000px; width: 2360px !important">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['twoYearsLaterIndicator'] }}
        </div>

        <div class="t m0 x5 hf y1ca ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2360px !important; white-space: normal; text-align: justify;">
            {!! $data['data']['yearIndicator']['description'] !!}
        </div>
            <?php
                $nowYearIndicator = \App\Http\Controllers\PDFController::renderText('nowYearIndicator', $data['data']['yearIndicator']['nowYearIndicator']['content'], false);
                $inputString = '';
                for ($i = 1; $i <= count($nowYearIndicator); $i++) {
                    $inputString .= $nowYearIndicator[$i];
                }
                $lines = explode("\n", $inputString);

                $linesPerPartFirst = 20;
                $linesPerPartRest = 35;

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
                $first = preg_replace("/\n/", "\r", $parts[0], 2);
                $first = str_replace("\n ", '', $first);
                $first = str_replace("\n", " ", $first);
                for ($i = 1; $i < count($parts); $i++) {
                    $html = str_replace("\n ", '', $parts[$i]);
                    $html = str_replace("\n\n", "\r", $parts[$i]);
                    $html = str_replace("\n", " ", $parts[$i]);
                    $array[$i] = $html;
                }
            ?>
        <div class="t m0 x5 h9 yc7 ff4 fs4 fc2 sc0 ls0 ws0" style="width: 2360px !important; white-space: normal; text-align: justify;">
            {!! nl2br(e($first)) !!}
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">8</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

@for($i = 1; $i <= count($array); $i++)
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
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">13</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@endfor
<?php 
    $nextYearIndicator = \App\Http\Controllers\PDFController::renderText('nextYearIndicator', $data['data']['yearIndicator']['nextYearIndicator']['content'], false);
    $inputString = '';
    for ($i = 1; $i <= count($nextYearIndicator); $i++) {
        $inputString .= $nextYearIndicator[$i];
    }
    $lines = explode("\n", $inputString);

    $linesPerPart = 45;
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
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">13</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@endfor


<?php 
    $twoYearsLaterIndicator = \App\Http\Controllers\PDFController::renderText('twoYearsLaterIndicator', $data['data']['yearIndicator']['twoYearsLaterIndicator']['content'], false);
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
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">13</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@endfor



<div id="pfd" class="pf w0 h0" data-page-no="12">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/chi-so-nam.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">3</div>
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">Chỉ số các tháng</div>
        <div class="t m0 x4d h12 y64 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->format('m/Y') }}</div>
        <div class="t m0 x4e h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1120px">
            {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['nowMonthIndicator'] }}</div>
        <div class="t m0 x4d h12 y66 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->addMonths(1)->format('m/Y') }}</div>
        <div class="t m0 x4e h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1060px">
            {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['nextMonthIndicator'] }}</div>
        <div class="t m0 x4d h12 y68 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->addMonths(2)->format('m/Y') }}</div>
        
        <div class="t m0 x4e h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="width: 2360px !important; left: 530px; bottom: 1000px">
            {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['twoMonthsLaterIndicator'] }}
        </div>

        <div class="t m0 x5 hf y1ca ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2360px !important; white-space: normal; text-align: justify;">
            {!! $data['data']['monthIndicator']['description'] !!}
        </div>
        <?php
            $nowMonthIndicator = \App\Http\Controllers\PDFController::renderText('nowMonthIndicator', "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>".$data['data']['monthIndicator']['nowMonthIndicator']['content'])
        ?>
        <div class="t m0 x5 h9 ff4 fs4 fc2 sc0 ls0 ws0" style="width: 2360px !important; white-space: normal; bottom: 730px; text-align: justify;">
            @if ($nowMonthIndicator)
                {!! nl2br(e($nowMonthIndicator[1])) !!}
            @endif
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">12</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

<?php
    $nextMonthIndicator = \App\Http\Controllers\PDFController::renderText('nextMonthIndicator', $data['data']['monthIndicator']['nextMonthIndicator']['content'])
?>
@if ($nextMonthIndicator)
    @for($i = 1; $i <= count($nextMonthIndicator); $i++)
    <div id="pfd" class="pf w0 h0" data-page-no="13">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
            <div class="t m0 x5 hf yf3 ff4 fs9 fc2 sc0 ls0 ws0" style="width: 2360px !important; white-space: normal; text-align: justify;">
                {!! nl2br(e($nextMonthIndicator[$i])) !!}
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">13</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>
    @endfor
@endif
<?php
    $twoMonthsLaterIndicator = \App\Http\Controllers\PDFController::renderText('twoMonthsLaterIndicator', $data['data']['monthIndicator']['twoMonthsLaterIndicator']['content'])
?>
@if ($twoMonthsLaterIndicator)
    @for($i = 1; $i <= count($twoMonthsLaterIndicator); $i++)
    <div id="pfd" class="pf w0 h0" data-page-no="14">
        <div class="pc pcb w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
            <div class="t m0 x5 hf yf3 ff4 fs9 fc2 sc0 ls0 ws0" style="width: 2360px !important; white-space: normal; text-align: justify;">
                {!! nl2br(e($twoMonthsLaterIndicator[$i])) !!}
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">14</div>
        </div>
        <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
    </div>
    @endfor
@endif

<div id="pfd" class="pf w0 h0" data-page-no="15">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/bannga.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">4</div>
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">NHÓM TÍNH CÁCH THEO BẢN NGÃ</div>

        <div class="t m0 hf ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2360px !important; white-space: normal; top: 70px; left: 400px">
            {!! $data['data']['monthIndicator']['description'] !!}
        </div>

        <div class="t m0 x5 h8 yc3 ff1 fs4 fc2 sc0 ls0 ws0">1.1. Mạnh mẽ - Độc lập - Tự tin</div>
        <div class="t m0 x33 h10 yc4 ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][0][1] }}%</div>
        <div class="t m0 x5 h8 yc5 ff1 fs4 fc2 sc0 ls0 ws0">1.2. Lắng nghe - Khéo léo - Nhạy cảm</div>
        <div class="t m0 x34 h10 yc6 ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][1][1] }}%</div>
        <div class="t m0 x5 h8 yc7 ff1 fs4 fc2 sc0 ls0 ws0">1.3. Sáng tạo - Hoạt bát - Lạc quan</div>
        <div class="t m0 x35 h10 yc8 ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][2][1] }}%</div>
        <div class="t m0 x5 h8 yc9 ff1 fs4 fc2 sc0 ls0 ws0">1.4. Cẩn thận - Cầu toàn - Thực tế</div>
        <div class="t m0 x34 h10 yca ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][3][1] }}%</div>
        <div class="t m0 x5 h8 ycb ff1 fs4 fc2 sc0 ls0 ws0">1.5. Năng động - Linh hoạt - Tò mò</div>
        <div class="t m0 x35 h10 ycc ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][4][1] }}%</div>
        <div class="t m0 x5 h8 ycd ff1 fs4 fc2 sc0 ls0 ws0">1.6. Quan tâm - Yêu thương - Kiểm soát</div>
        <div class="t m0 x12 h10 yce ff1 fs9 fc0 sc0 ls0 ws0">2%</div>
        <div class="t m0 x5 h8 ycf ff1 fs4 fc2 sc0 ls0 ws0">1.7. Thông thái - Khám phá - Truyền đạt</div>
        @isset($data['data']['percentIndicator'][5])
            <div class="t m0 x36 h10 yd0 ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][5][1] }}%</div>
        @endisset
        @isset($data['data']['percentIndicator'][6])
            <div class="t m0 x5 h8 yd1 ff1 fs4 fc2 sc0 ls0 ws0">1.8. Công bằng - Tập trung - Lý tưởng</div>
            <div class="t m0 x12 h10 yd2 ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][6][1] }}%</div>
        @endisset
        @isset($data['data']['percentIndicator'][7])
            <div class="t m0 x5 h8 yd3 ff1 fs4 fc2 sc0 ls0 ws0">1.9. Trách nhiệm - Rộng lượng - Hào phóng</div>
            <div class="t m0 x37 h10 yd4 ff1 fs9 fc0 sc0 ls0 ws0">{{ $data['data']['percentIndicator'][7][1] }}%</div>
        @endisset
        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">15</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
