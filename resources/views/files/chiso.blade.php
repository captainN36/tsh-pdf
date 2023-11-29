<div id="pf6" class="pf w0 h0" data-page-no="6">
    <div class="pc pc7 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/'.$path.'/1.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 110px; bottom: 1440px">1</div><div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TỔNG HỢP CÁC CHỈ SỐ QUAN TRỌNG</div>
        <div class="t m0 x5 hf y95 ff2 fs9 fc2 sc0 ls0 ws0">Phần này<span class="_ _d"></span> dành<span class="_ _d"></span> cho chuyên<span class="_ _d"></span> gia<span class="_ _d"></span> hoặc những<span class="_ _d"></span> người<span class="_ _d"></span> có hiểu<span class="_ _d"></span> biết<span class="_ _d"></span> về<span class="_ _d"></span> thần số<span class="_ _d"></span> học<span class="_ _d"></span> để nhìn<span class="_ _d"></span> được</div><div class="t m0 x5 hf y96 ff2 fs9 fc2 sc0 ls0 ws0">sơ bộ bức tranh tổng quan của báo cáo.</div>
        <table class="t m0 x3 hc y97 ff1 fs6 fc0 sc0 ls0 ws0" style="width: 2450px; left: 70px; bottom: 1140px;">
            <tr>
                <td>{{ $path }}</td>
                <td>{{ $data['data']['soulIndicator']['soulIndicator'] }}</td>
                <td>{{ $data['data']['personalIndicator']['personalIndicator'] }}</td>
            </tr>
        </table>
        <table class="t m0 x15 h10 y98 ff1 fs9 fc2 sc0 ls0 ws0" style="width: 2450px; left: 70px; bottom: 1070px;">
            <tr class="custom-font">
                <td>ĐƯỜNG ĐỜI</td>
                <td>LINH HỒN</td>
                <td>TÍNH CÁCH</td>
            </tr>
        </table>

        <table class="t m0 x3 hc y9c ff1 fs6 fc0 sc0 ls0 ws0" style="width: 2450px; left: 70px; bottom: 850px;">
            <tr>
                <td>{{ $data['data']['missionIndicator']['missionIndicator'] }}</td>
                <td>{{ $data['data']['maturityIndicator']['maturityIndicator'] }}</td>
                <td>{{ $data['data']['natureIndicator']['natureIndicator'] }}</td>
            </tr>

        </table>
        <table class="t m0 x1e h10 y9d ff1 fs9 fc2 sc0 ls0 ws0" style="width: 2450px; left: 70px; bottom: 780px;">
            <tr class="custom-font">
                <td>SỨ MỆNH</td>
                <td>TRƯỞNG THÀNH</td>
                <td>BẢN CHẤT</td>
            </tr>
        </table>

        <table class="t m0 x3 hc ya1 ff1 fs6 fc0 sc0 ls0 ws0" style="width: 2450px; left: 70px; bottom: 570px;">
            <tr>
                <td>{{ $data['data']['dobIndicator']['dobIndicator'] }}</td>
                <td>{{ $data['data']['attitudeIndicator']['attitudeIndicator'] }}</td>
                <td>{{ $data['data']['thinkingIndicator']['thinkingIndicator'] }}</td>
            </tr>
        </table>
        <table class="t m0 x9 h10 ya2 ff1 fs9 fc2 sc0 ls0 ws0" style="width: 2450px; left: 70px; bottom: 500px;">
            <tr class="custom-font">
                <td>NĂNG LỰC TỰ NHIÊN</td>
                <td>THÁI ĐỘ</td>
                <td>TƯ DUY LÝ TRÝ</td>
            </tr>
        </table>

        <table class="t m0 x3 hc ya6 ff1 fs6 fc0 sc0 ls0 ws0" style="width: 2450px; left: 70px; bottom: 285px;">
            <tr>
                <td>{{ $data['data']['emotionalThinkingIndicator']['emotionalThinkingIndicator'] }}</td>
                <td>{{ $data['data']['intuitiveThinkingIndicator']['intuitiveThinkingIndicator'] }}</td>
                <td>{{ $data['data']['actionThinkingIndicator']['actionThinkingIndicator'] }}</td>
            </tr>
        </table>
        <table class="t m0 x2a h10 ya7 ff1 fs9 fc2 sc0 ls0 ws0" style="width: 2450px; left: 70px; bottom: 217px;">
            <tr class="custom-font">
                <td>TƯ DUY CẢM XÚC</td>
                <td>NĂNG LỰC TRỰC GIÁC</td>
                <td>TƯ DUY HÀNH ĐỘNG</td>
            </tr>
        </table>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x6 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">5</div></div><div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
