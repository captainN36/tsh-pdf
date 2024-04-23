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



        @php
            function renderTotal($str)
            {
                $sum = 0;
                for ($i = 0; $i < strlen($str); $i++) {
                    $sum += intval($str[$i]);
                }

                while ($sum > 9) {
                    $tempSum = 0;
                    while ($sum != 0) {
                        $tempSum += $sum % 10;
                        $sum = (int) ($sum / 10);
                    }
                    $sum = $tempSum;
                }
                return $sum;
            }
        @endphp

        <div id="pf7" class="pf w0 h0" data-page-no="38">
            @if($path != 9)
                <style>
                    .img-kimtuthap {
                        left: 15px;
                    }
                    .x41 {
                        left: 535px !important;
                    }
                    .x21 {
                        left: 363.475px !important;
                    }
                    .x46 {
                        left: 544px !important;
                    }
                    .x3f {
                        left: 181px !important;
                    }
                    .x43 {
                        left: 720px !important;
                    }
                    .x4b {
                        left: 575px !important;
                    }
                    .x4c {
                        left: 560px !important;
                    }
                    .x49 {
                        left: 510px !important;
                    }
                    .x4a {
                        left: 490px !important;
                    }
                    .x44 {
                        left: 387px !important;
                    }
                    .x45 {
                        left: 370.5px !important;
                    }
                    .x47 {
                        left: 620px !important;
                    }
                    .x48 {
                        left: 600.5px !important;
                    }
                    .x40 {
                        left: 480.5px !important;
                    }
                </style>
            @endif
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1 img-kimtuthap" alt=""
                    src="{{ asset('/' . $path . '/kim-tu-thap.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index" style="left: 90px; bottom: 1440px">16</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">KIM TỰ THÁP SỐ HỌC</div>
                <div class="t m0 x12 h16 y165 ff1 fse fc2 sc0 ls0 ws0">Tháng {{ explode('/', $data['dateOfBirth'])[1] }}</div>
                <div class="t m0 x3f h14 y166 ff1 fsc fc2 sc0 ls0 ws0"><?php echo renderTotal(explode('/', $data['dateOfBirth'])[1]) ?></div>
                <div class="t m0 x40 h4 y165 ff1 fs2 fc2 sc0 ls0 ws0">Ngày {{ explode('/', $data['dateOfBirth'])[0] }}</div>
                <div class="t m0 x41 h14 y166 ff1 fsc fc2 sc0 ls0 ws0"><?php echo renderTotal(explode('/', $data['dateOfBirth'])[0]) ?></div>
                <div class="t m0 x42 h16 y165 ff1 fse fc2 sc0 ls0 ws0">{{ explode('/', $data['dateOfBirth'])[2] }}</div>
                <div class="t m0 x43 h14 y166 ff1 fsc fc2 sc0 ls0 ws0"><?php echo renderTotal(explode('/', $data['dateOfBirth'])[2]) ?></div>
                <div class="t m0 x21 h14 y167 ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstPeakIndicator'] }}</div>
                <div class="t m0 x44 h16 y168 ff1 fse fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['age'][0] .'-'. $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['age'][1] }} tuổi</div>
                <div class="t m0 x45 h5 y169 ff2 fs2 fc2 sc0 ls0 ws0">(2022 - 2030)</div>
                <div class="t m0 x46 h14 y167 ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondPeakIndicator'] }}</div>
                <div class="t m0 x47 h16 y168 ff1 fse fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['age'][0] .'-'. $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['age'][1] }} tuổi</div>
                <div class="t m0 x48 h5 y169 ff2 fs2 fc2 sc0 ls0 ws0">(2030 - 2039)</div>
                <div class="t m0 x41 h14 y16a ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdPeakIndicator'] }}</div>
                <div class="t m0 x49 h16 y16b ff1 fse fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['age'][0] .'-'. $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['age'][1] }} t</div>
                <div class="t m0 x4a h5 y16c ff2 fs2 fc2 sc0 ls0 ws0">(2039 - 2048)</div>
                <div class="t m0 x41 h14 y16d ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthPeakIndicator'] }}</div>
                <div class="t m0 x4b h16 y16e ff1 fse fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['age'][0] }} tuổi</div>
                <div class="t m0 x4c h17 y16f ff2 fse fc2 sc0 ls0 ws0">(2048 - 2057)</div>
                <div class="t m0 x21 h14 y170 ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstChallengeIndicator'] }}<span class="_ _1b"> </span>{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondChallengeIndicator'] }}</div>
                <div class="t m0 x41 h14 y171 ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdChallengeIndicator'] }}</div>
                <div class="t m0 x41 h14 y172 ff1 fsc fc2 sc0 ls0 ws0">{{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthChallengeIndicator'] }}</div>

                <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer')
                <?php $page = $page + 1; ?>
                <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
                <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
                </div>
            </div>
        </div>


        <div id="pf7" class="pf w0 h0" data-page-no="54">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/vochong.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 92px; bottom: 1440px">26</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TỔNG QUAN DỮ LIỆU BÁO CÁO</div>
                <div class="t m0 x5 hf ff2 fs9 fc2 sc0 ls0 ws0" style="left: 0; top: 70px">
                    <img src="{{ asset('/' . $path . '/report.png') }}" alt="" width="2340px">
                </div>
                <div class="report-table__container">
                    <div class="report-table-col report-table-left">
                        <table class="fc7 sc0 ls0 ws0 report-table">
                            <caption>BIỂU ĐỒ NGÀY SINH</caption>
                            <tr>
                                <td>{{ $name->{3} ?? null }}</td>
                                <td>{{ $name->{6} ?? null }}</td>
                                <td>{{ $name->{9} ?? null }}</td>
                            </tr>
                            <tr>
                                <td>{{ $name->{2} ?? null }}</td>
                                <td>{{ $name->{5} ?? null }}</td>
                                <td>{{ $name->{8} ?? null }}</td>
                            </tr>
                            <tr>
                                <td>{{ $name->{1} ?? null }}</td>
                                <td>{{ $name->{4} ?? null }}</td>
                                <td>{{ $name->{7} ?? null }}</td>
                            </tr>
                        </table>
                        <table class="fc7 sc0 ls0 ws0 report-table">
                            <caption>BIỂU ĐỒ TỔNG HỢP HỌ TÊN VÀ NGÀY SINH</caption>
                            <tr class="summary">
                                <td>{{ $summary->{3} ?? null }}</td>
                                <td>{{ $summary->{6} ?? null }}</td>
                                <td>{{ $summary->{9} ?? null }}</td>
                            </tr>
                            <tr class="summary">
                                <td>{{ $summary->{2} ?? null }}</td>
                                <td>{{ $summary->{5} ?? null }}</td>
                                <td>{{ $summary->{8} ?? null }}</td>
                            </tr>
                            <tr class="summary">
                                <td>{{ $summary->{1} ?? null }}</td>
                                <td>{{ $summary->{4} ?? null }}</td>
                                <td>{{ $summary->{7} ?? null }}</td>
                            </tr>
                        </table>

                        <div>
                            <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 445px; left: 135px"><?php echo renderTotal(explode('/', $data['dateOfBirth'])[1]) ?>
                            </div>
                            <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 445px; left: 265px"><?php echo renderTotal(explode('/', $data['dateOfBirth'])[0]) ?>
                            </div>
                            <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 445px; left: 395px"><?php echo renderTotal(explode('/', $data['dateOfBirth'])[2]) ?>
                            </div>
                            <div class="t m0 h14 y167 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 525px; left: 5px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstPeakIndicator'] }}
                            </div>
                            <div class="t m0 h14 y167 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 525px; left: 90px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondPeakIndicator'] }}
                            </div>
                            <div class="t m0 h14 y16a ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 575px; left: 47px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdPeakIndicator'] }}
                            </div>
                            <div class="t m0 h14 y16d ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 630px; left: 47px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthPeakIndicator'] }}
                            </div>
                            <div class="t m0 h14 y170 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 460px; left: 5px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstChallengeIndicator'] }}<span
                                    class="_ _1b" style="width: 183px;">
                                </span>{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondChallengeIndicator'] }}
                            </div>
                            <div class="t m0 h14 y171 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 370px; left: 45px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdChallengeIndicator'] }}
                            </div>
                            <div class="t m0 h14 y171 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 320px; left: 45px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthChallengeIndicator'] }}
                            </div>
                        </div>
                    </div>
                    
                    <div class="report-table-col report-table-right">
                        <table class="fc7 sc0 ls0 ws0 index-table">
                            <tr class="index-caption">
                                <td colspan="2">
                                    PHẦN 1. CHÂN DUNG CỦA BẠN<br>
                                    A/THẾ GIỚI BÊN NGOÀI:
                                </td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ NĂNG LỰC TỰ NHIÊN</td>
                                <td>{{ $data['data']['dobIndicator']['dobIndicator'] }}</td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ TÍNH CÁCH</td>
                                <td>{{ $data['data']['personalIndicator']['personalIndicator'] }}</td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ THÁI ĐỘ</td>
                                <td>{{ $data['data']['attitudeIndicator']['attitudeIndicator'] }}</td>
                            </tr>
                        </table>
                        <table class="fc7 sc0 ls0 ws0 index-table">
                            <tr class="index-caption">
                                <td colspan="2">
                                    B/THẾ GIỚI BÊN TRONG:
                                </td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ LINH HỒN</td>
                                <td>{{ $data['data']['soulIndicator']['soulIndicator'] }}</td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ ĐAM MÊ</td>
                                <td>{{ implode(', ', $data['data']['passionIndicator']['passionIndicator']) }}</td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ TƯ DUY LÝ TRÍ</td>
                                <td>{{ $data['data']['thinkingIndicator']['thinkingIndicator'] }}</td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ TƯ DUY CẢM XÚC</td>
                                <td>{{ $data['data']['emotionalThinkingIndicator']['emotionalThinkingIndicator'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ NĂNG LỰC TRỰC GIÁC</td>
                                <td>{{ $data['data']['intuitiveThinkingIndicator']['intuitiveThinkingIndicator'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ TƯ DUY HÀNH ĐỘNG</td>
                                <td>{{ $data['data']['actionThinkingIndicator']['actionThinkingIndicator'] }}</td>
                            </tr>
                        </table>
                        <table class="fc7 sc0 ls0 ws0 index-table">
                            <tr class="index-caption">
                                <td colspan="2">
                                    C/LỜI KHUYÊN PHÁT TRIỂN BẢN THÂN:
                                </td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ LẶP</td>
                                <td>{{ implode(', ', $data['data']['repeatIndicator']['repeatIndicator']) }}</td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ THIẾU</td>
                                <td>{{ implode(', ', $data['data']['missIndicator']['missIndicator']) }}</td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ LIÊN KẾT LINH HỒN VÀ TÍNH CÁCH</td>
                                <td>{{ $data['data']['linkSoulAndPersonalIndicator']['linkSoulAndPersonalIndicator'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ CÂN BẰNG</td>
                                <td>{{ $data['data']['balanceIndicator']['balanceIndicator'] }}</td>
                            </tr>
                        </table>
                        <table class="fc7 sc0 ls0 ws0 index-table">
                            <tr class="index-caption">
                                <td colspan="2">
                                    PHẦN 2: HÀNH TRÌNH CỦA BẠN
                                </td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ ĐƯỜNG ĐỜI</td>
                                <td>{{ $data['data']['lifePathIndicator']['lifePathIndicator'] }}</td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ SỨ MỆNH</td>
                                <td>{{ $data['data']['missionIndicator']['missionIndicator'] }}</td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ KẾT NỐI ĐƯỜNG ĐỜI SỨ MỆNH</td>
                                <td>{{ $data['data']['linkLifePathAndMission']['linkLifePathAndMission'] }}</td>
                            </tr>
                            <tr>
                                <td>CHỈ SỐ TRƯỞNG THÀNH</td>
                                <td>{{ $data['data']['maturityIndicator']['maturityIndicator'] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer')
                <?php $page = $page + 1; ?>
                <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                <div class="pi"
                    data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
                </div>
            </div>
        </div>

    </div>
</body>

</html>
