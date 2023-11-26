<div id="pf6" class="pf w0 h0" data-page-no="6">
    <div class="pc pc7 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/'.$path.'/1.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 110px; bottom: 1440px">1</div><div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TỔNG HỢP CÁC CHỈ SỐ QUAN TRỌNG</div>
        <div class="t m0 x5 hf y95 ff2 fs9 fc2 sc0 ls0 ws0">Phần này<span class="_ _d"></span> dành<span class="_ _d"></span> cho chuyên<span class="_ _d"></span> gia<span class="_ _d"></span> hoặc những<span class="_ _d"></span> người<span class="_ _d"></span> có hiểu<span class="_ _d"></span> biết<span class="_ _d"></span> về<span class="_ _d"></span> thần số<span class="_ _d"></span> học<span class="_ _d"></span> để nhìn<span class="_ _d"></span> được</div><div class="t m0 x5 hf y96 ff2 fs9 fc2 sc0 ls0 ws0">sơ bộ bức tranh tổng quan của báo cáo.</div>
        <table class="t m0 x3 hc y97 ff1 fs6 fc0 sc0 ls0 ws0" style="width: 2420px; left: 70px; color: black; bottom: 1130px;">
            <tr>
                <td>{{ $path }}</td>
                <td>{{ $data['data']['soulIndicator']['soulIndicator'] }}</td>
                <td>{{ $data['data']['personalIndicator']['personalIndicator'] }}</td>
            </tr>
        </table>
        <div class="t m0 x15 h10 y98 ff1 fs9 fc2 sc0 ls0 ws0">ĐƯỜNG ĐỜI<span class="_ _11"> </span>THÁI ĐỘ<span class="_ _12"> </span>TRƯỞNG THÀNH</div>

        <table class="t m0 x3 hc y9c ff1 fs6 fc0 sc0 ls0 ws0" style="width: 2420px; left: 70px; color: black; bottom: 855px;">
            <tr>
                <td>{{ $data['data']['missionIndicator']['missionIndicator'] }}</td>
                <td>{{ $data['data']['maturityIndicator']['maturityIndicator'] }}</td>
                <td>{{ $data['data']['natureIndicator']['natureIndicator'] }}</td>
            </tr>

        </table>
        <div class="t m0 x1e h10 y9d ff1 fs9 fc2 sc0 ls0 ws0">SỨ MỆNH<span class="_ _13"> </span>NHÂN CÁCH<span class="_ _14"> </span>LINH HỒN</div>

        <table class="t m0 x3 hc ya1 ff1 fs6 fc0 sc0 ls0 ws0" style="width: 2420px; left: 70px; color: black; bottom: 580px;">
            <tr>
                <td>{{ $data['data']['dobIndicator']['dobIndicator'] }}</td>
                <td>{{ $data['data']['attitudeIndicator']['attitudeIndicator'] }}</td>
                <td>{{ $data['data']['thinkingIndicator']['thinkingIndicator'] }}</td>
            </tr>
        </table>
        <div class="t m0 x9 h10 ya2 ff1 fs9 fc2 sc0 ls0 ws0" style="font-weight: bold; left: 130px">Năng Lực Tự Nhiên<span class="_ _15" style="width: 440px"> </span>Thái Độ<span class="_ _16" style="width: 550px"> </span>Tư Duy Lý Trí</div>

        <table class="t m0 x3 hc ya6 ff1 fs6 fc0 sc0 ls0 ws0" style="width: 2420px; left: 70px; color: black; bottom: 312px;">
            <tr>
                <td>{{ $data['data']['emotionalThinkingIndicator']['emotionalThinkingIndicator'] }}</td>
                <td>{{ $data['data']['intuitiveThinkingIndicator']['intuitiveThinkingIndicator'] }}</td>
                <td>{{ $data['data']['actionThinkingIndicator']['actionThinkingIndicator'] }}</td>
            </tr>
        </table>
        <div class="t m0 x2a h10 ya7 ff1 fs9 fc2 sc0 ls0 ws0" style="font-weight: bold; left: 140px">Tư Duy Cảm Xúc<span class="_ _17" style="width: 310px"> </span>Năng Lực Trực Giác<span class="_ _18" style="width: 240px"> </span>Tư Duy Hành Động</div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x6 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">5</div></div><div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
