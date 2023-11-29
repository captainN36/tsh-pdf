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



    <div id="pf7" class="pf w0 h0" data-page-no="54">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                 src="{{ asset('/' . $path . '/vochong.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0"></div>
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
                        <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 445px; left: 110px">3</div>
                        <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 440px; left: 245px">1</div>
                        <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 440px; left: 375px">3</div>
                        <div class="t m0 h14 y167 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 495px; left: 200px">{{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstPeakIndicator'] }}</div>
                        <div class="t m0 h14 y167 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 495px; left: 285px">{{ $da['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondPeakIndicator'] }}</div>
                        <div class="t m0 h14 y16a ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 545px; left: 245px">{{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdPeakIndicator'] }}</div>
                        <div class="t m0 h14 y16d ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 600px; left: 245px">{{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthPeakIndicator'] }}</div>
                        <div class="t m0 h14 y170 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 390px; left: 170px">{{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstChallengeIndicator'] }}<span class="_ _1b" style="width: 170px;"> </span>{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondChallengeIndicator'] }}</div>
                        <div class="t m0 h14 y171 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 340px; left: 240px">{{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdChallengeIndicator'] }}</div>
                        <div class="t m0 h14 y171 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 290px; left: 240px">{{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthChallengeIndicator'] }}</div>
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
                            <td>{{ $data['data']['emotionalThinkingIndicator']['emotionalThinkingIndicator'] }}</td>
                        </tr>
                        <tr>
                            <td>CHỈ SỐ NĂNG LỰC TRỰC GIÁC</td>
                            <td>{{ $data['data']['intuitiveThinkingIndicator']['intuitiveThinkingIndicator'] }}</td>
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
                            <td>{{ $data['data']['linkSoulAndPersonalIndicator']['linkSoulAndPersonalIndicator'] }}</td>
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
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>






</div>
</body>

</html>
