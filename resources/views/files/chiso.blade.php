<div id="pf6" class="pf w0 h0" data-page-no="6">
    <div class="pc pc7 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/'.$path.'/1.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">1</div><div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TỔNG HỢP CÁC CHỈ SỐ QUAN TRỌNG</div>
        <div class="t m0 x5 hf y95 ff2 fs9 fc2 sc0 ls0 ws0">Phần này<span class="_ _d"></span> dành<span class="_ _d"></span> cho chuyên<span class="_ _d"></span> gia<span class="_ _d"></span> hoặc những<span class="_ _d"></span> người<span class="_ _d"></span> có hiểu<span class="_ _d"></span> biết<span class="_ _d"></span> về<span class="_ _d"></span> thần số<span class="_ _d"></span> học<span class="_ _d"></span> để nhìn<span class="_ _d"></span> được</div><div class="t m0 x5 hf y96 ff2 fs9 fc2 sc0 ls0 ws0">sơ bộ bức tranh tổng quan của báo cáo.</div>
        <div class="t m0 x3 hc y97 ff1 fs6 fc0 sc0 ls0 ws0" style="@php if ($path > 10) { echo 'left: 165px';}  @endphp">{{ $path }}<span class="_ _10" style="@php if ($path > 10) { echo 'margin-left: -35px;';}  @endphp"> </span>{{ $data['data']['soulIndicator']['soulIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['personalIndicator']['personalIndicator'] }}</div>
        <div class="t m0 x15 h10 y98 ff1 fs9 fc2 sc0 ls0 ws0" style="font-weight: bold">Đường Đời<span class="_ _11" style="width: 500.472px;"> </span>Linh Hồn<span class="_ _12" style="width: 500.312px;"> </span>Tính Cách</div>
        
        <div class="t m0 x3 hc y9c ff1 fs6 fc0 sc0 ls0 ws0">{{ $data['data']['missionIndicator']['missionIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['maturityIndicator']['maturityIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['natureIndicator']['natureIndicator'] }}</div>
        <div class="t m0 x1e h10 y9d ff1 fs9 fc2 sc0 ls0 ws0" style="font-weight: bold;">Sứ Mệnh<span class="_ _13"> </span>Trưởng Thành<span class="_ _14" style="width: 397.688px"> </span>Bản Chất</div>
        
        <div class="t m0 x3 hc ya1 ff1 fs6 fc0 sc0 ls0 ws0">{{ $data['data']['dobIndicator']['dobIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['attitudeIndicator']['attitudeIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['thinkingIndicator']['thinkingIndicator'] }}</div>
        <div class="t m0 x9 h10 ya2 ff1 fs9 fc2 sc0 ls0 ws0" style="font-weight: bold;">Năng Lực Tự Nhiên<span class="_ _15" style="width: 365.984px"> </span>Thái Độ<span class="_ _16" style="width: 444.224px"> </span>Tư Duy Lý Trí</div>
        
        <div class="t m0 x3 hc ya6 ff1 fs6 fc0 sc0 ls0 ws0">{{ $data['data']['emotionalThinkingIndicator']['emotionalThinkingIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['intuitiveThinkingIndicator']['intuitiveThinkingIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['actionThinkingIndicator']['actionThinkingIndicator'] }}</div>
        <div class="t m0 x2a h10 ya7 ff1 fs9 fc2 sc0 ls0 ws0" style="font-weight: bold">Tư Duy Cảm Xúc<span class="_ _17" style="width: 264.336px"> </span>Năng Lực Trực Giác<span class="_ _18" style="width: 233.096px"> </span>Tư Duy Hành Động</div>
        
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x6 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">5</div></div><div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
