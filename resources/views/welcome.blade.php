<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="generator" content="pdf2htmlEX" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('pdf.css') }}">
    <title>test</title>
</head>
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
    @endphp
    <div id="pf1" class="pf w0 h0" data-page-no="1">
    <div class="pc pc1 w0 h0 opened">
        @switch($path)
            @case(2)
                <img src="{{ asset('/bia/2.jpg') }}" alt="" class="bi x0 y0 w1 h1">
                @break
            @case(3)
                <img src="{{ asset('/bia/3.jpg') }}" alt="" class="bi x0 y0 w1 h1">
                @break
            @case(4)
                <img src="{{ asset('/bia/4.jpg') }}" alt="" class="bi x0 y0 w1 h1">
                @break
            @case(5)
                <img src="{{ asset('/bia/5.jpg') }}" alt="" class="bi x0 y0 w1 h1">
                @break
            @case(6)
                <img src="{{ asset('/bia/6.jpg') }}" alt="" class="bi x0 y0 w1 h1">
                @break
            @case(7)
                <img src="{{ asset('/bia/7.jpg') }}" alt="" class="bi x0 y0 w1 h1">
                @break
            @case(8)
                <img src="{{ asset('/bia/8.jpg') }}" alt="" class="bi x0 y0 w1 h1">
                @break
            @case(9)
                <img src="{{ asset('/bia/9.jpg') }}" alt="" class="bi x0 y0 w1 h1">
                @break
            @case(10)
                <img src="{{ asset('/bia/10.jpg') }}" alt="" class="bi x0 y0 w1 h1">
                @break
            @case(11)
                <img src="{{ asset('/bia/11.jpg') }}" alt="" class="bi x0 y0 w1 h1">
                @break
            @case(22)
                <img src="{{ asset('/bia/22.jpg') }}" alt="" class="bi x0 y0 w1 h1">
                @break
        @endswitch
        <div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">{{ $data['fullName'] }}</div>
        <div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">{{ $data['dateOfBirth'] }}</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
<div id="pf2" class="pf w0 h0" data-page-no="2">
    <div class="pc pc2 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/'.$path.'/page.png') }}">
        <div class="t m0 x4 h2 y4 ff1 fs0 fc2 sc0 ls0 ws0">Mục lục</div>
        <div class="t m0 x5 h4 y5 ff1 fs2 fc2 sc0 ls0 ws0">Mục<span class="_ _0"> </span>Trang</div>
        <div class="t m0 x5 h4 y6 ff1 fs2 fc2 sc0 ls0 ws0">CHÀO MỪNG BẠN ĐẾN VỚI BÁO CÁO CỦA TRA CỨU THẦN SỐ HỌC<span class="_ _1"></span><span class="ff2">........................................................</span></div><div class="t m0 x6 h5 y7 ff2 fs2 fc2 sc0 ls0 ws0">2</div>
        <div class="t m0 x5 h4 y8 ff1 fs2 fc2 sc0 ls0 ws0">HIỂU VỀ BẢN BÁO CÁO CỦA BẠN<span class="_ _2"></span><span class="ff2">...................................................................................................................</span></div><div class="t m0 x6 h5 y9 ff2 fs2 fc2 sc0 ls0 ws0">4</div>
        <div class="t m0 x5 h4 ya ff1 fs2 fc2 sc0 ls0 ws0">A - TỔNG HỢP CÁC CHỈ SỐ QUAN TRỌNG<span class="_ _3"></span><span class="ff2">.......................................................................................................</span></div><div class="t m0 x6 h5 yb ff2 fs2 fc2 sc0 ls0 ws0">5</div>
        <div class="t m0 x5 h4 yc ff1 fs2 fc2 sc0 ls0 ws0">B - CHU KỲ VẬN SỐ<span class="_ _4"></span><span class="ff2">.............................................................................................................................................</span></div><div class="t m0 x6 h5 yd ff2 fs2 fc2 sc0 ls0 ws0">6</div>
        <div class="t m0 x7 h6 ye ff3 fs2 fc2 sc0 ls0 ws0">1. CHU KỲ VẬN SỐ<span class="_ _1"></span><span class="ff2">............................................................................................................................................</span></div><div class="t m0 x6 h5 yf ff2 fs2 fc2 sc0 ls0 ws0">7</div>
        <div class="t m0 x7 h6 y10 ff3 fs2 fc2 sc0 ls0 ws0">2. CHỈ SỐ CÁC THÁNG<span class="_ _4"></span><span class="ff2">.....................................................................................................................................</span></div><div class="t m0 x6 h5 y11 ff2 fs2 fc2 sc0 ls0 ws0">8</div>
        <div class="t m0 x7 h6 y12 ff3 fs2 fc2 sc0 ls0 ws0">3. CHỈ SỐ CÁC NĂM<span class="_ _5"></span><span class="ff2">..........................................................................................................................................</span></div><div class="t m0 x6 h5 y13 ff2 fs2 fc2 sc0 ls0 ws0">10</div>
        <div class="t m0 x7 h6 y14 ff3 fs2 fc2 sc0 ls0 ws0">4. NHÓM TÍNH CÁCH THEO BẢN NGÃ<span class="_ _3"></span><span class="ff2">...........................................................................................................</span></div><div class="t m0 x8 h5 y15 ff2 fs2 fc2 sc0 ls0 ws0">12</div>
        <div class="t m0 x5 h4 y16 ff1 fs2 fc2 sc0 ls0 ws0">C. PHÂN TÍCH ĐƯỜNG ĐỜI<span class="_ _4"></span><span class="ff2">.............................................................................................................................</span></div><div class="t m0 x8 h5 y17 ff2 fs2 fc2 sc0 ls0 ws0">14</div>
        <div class="t m0 x7 h6 y18 ff3 fs2 fc2 sc0 ls0 ws0">1. CHỈ SỐ ĐƯỜNG ĐỜI<span class="_ _2"></span><span class="ff2">...................................................................................................................................</span></div><div class="t m0 x8 h5 y19 ff2 fs2 fc2 sc0 ls0 ws0">15</div>
        <div class="t m0 x7 h6 y1a ff3 fs2 fc2 sc0 ls0 ws0">2. CHỈ SỐ SỨ MỆNH<span class="_ _3"></span><span class="ff2">........................................................................................................................................</span></div><div class="t m0 x8 h5 y1b ff2 fs2 fc2 sc0 ls0 ws0">17</div>
        <div class="t m0 x7 h6 y1c ff3 fs2 fc2 sc0 ls0 ws0">3. CHỈ SỐ TRƯỞNG THÀNH<span class="_ _5"></span><span class="ff2">..........................................................................................................................</span></div><div class="t m0 x8 h5 y1d ff2 fs2 fc2 sc0 ls0 ws0">20</div>
        <div class="t m0 x7 h6 y1e ff3 fs2 fc2 sc0 ls0 ws0">4. CHỈ SỐ LINH HỒN<span class="_ _5"></span><span class="ff2">.....................................................................................................................................</span></div><div class="t m0 x8 h5 y1f ff2 fs2 fc2 sc0 ls0 ws0">22</div>
        <div class="t m0 x7 h6 y20 ff3 fs2 fc2 sc0 ls0 ws0">5. CHỈ SỐ TÍNH CÁCH<span class="_ _4"></span><span class="ff2">........................................................................................................................................</span></div><div class="t m0 x8 h5 y21 ff2 fs2 fc2 sc0 ls0 ws0">23</div>
        <div class="t m0 x7 h6 y22 ff3 fs2 fc2 sc0 ls0 ws0">6. CHỈ SỐ NĂNG LỰC TỰ NHIÊN<span class="_ _4"></span><span class="ff2">....................................................................................................................</span></div><div class="t m0 x8 h5 y23 ff2 fs2 fc2 sc0 ls0 ws0">24</div>
        <div class="t m0 x7 h6 y24 ff3 fs2 fc2 sc0 ls0 ws0">7. CHỈ SỐ THÁI ĐỘ<span class="_ _1"></span><span class="ff2">.......................................................................................................................................</span></div><div class="t m0 x8 h5 y25 ff2 fs2 fc2 sc0 ls0 ws0">25</div>
        <div class="t m0 x7 h6 y26 ff3 fs2 fc2 sc0 ls0 ws0">8. CHỈ SỐ ĐAM MÊ<span class="_ _3"></span><span class="ff2">........................................................................................................................................</span></div><div class="t m0 x8 h5 y27 ff2 fs2 fc2 sc0 ls0 ws0">27</div>
        <div class="t m0 x7 h6 y28 ff3 fs2 fc2 sc0 ls0 ws0">9. CHỈ SỐ TƯ DUY LÝ TRÍ<span class="_ _5"></span><span class="ff2">...........................................................................................................................</span></div><div class="t m0 x8 h5 y29 ff2 fs2 fc2 sc0 ls0 ws0">29</div>
        <div class="t m0 x7 h6 y2a ff3 fs2 fc2 sc0 ls0 ws0">10. CHỈ SỐ TƯ DUY CẢM XÚC<span class="_ _2"></span><span class="ff2">....................................................................................................................</span></div><div class="t m0 x8 h5 y2b ff2 fs2 fc2 sc0 ls0 ws0">30</div>
        <div class="t m0 x7 h6 y2c ff3 fs2 fc2 sc0 ls0 ws0">11. CHỈ SỐ NĂNG LỰC TRỰC GIÁC<span class="_ _6"></span><span class="ff2">............................................................................................................</span></div><div class="t m0 x8 h5 y2d ff2 fs2 fc2 sc0 ls0 ws0">31</div>
        <div class="t m0 x7 h6 y2e ff3 fs2 fc2 sc0 ls0 ws0">12. CHỈ SỐ TƯ DUY HÀNH ĐỘNG<span class="_ _6"></span><span class="ff2">...............................................................................................................</span></div><div class="t m0 x8 h5 y2f ff2 fs2 fc2 sc0 ls0 ws0">32</div>
        <div class="t m0 x7 h6 y30 ff3 fs2 fc2 sc0 ls0 ws0">13. CHỈ SỐ BẢN CHẤT<span class="_ _7"></span><span class="ff2">..................................................................................................................................</span></div><div class="t m0 x8 h5 y31 ff2 fs2 fc2 sc0 ls0 ws0">33</div>
        <div class="t m0 x7 h6 y32 ff3 fs2 fc2 sc0 ls0 ws0">14. CHỈ SỐ SỨC MẠNH TIỀM THỨC<span class="_ _4"></span><span class="ff2">............................................................................................................</span></div><div class="t m0 x8 h5 y33 ff2 fs2 fc2 sc0 ls0 ws0">35</div>
        <div class="t m0 x7 h6 y34 ff3 fs2 fc2 sc0 ls0 ws0">CHỈ SỐ CHU KY CUỘC ĐỜI LỚN<span class="_ _4"></span><span class="ff2">...............................................................................................................</span></div><div class="t m0 x8 h5 y35 ff2 fs2 fc2 sc0 ls0 ws0">36</div>
        <div class="t m0 x7 h6 y36 ff3 fs2 fc2 sc0 ls0 ws0">CHỈ SỐ KIM TỰ THÁP<span class="_ _8"></span><span class="ff2">...................................................................................................................................</span></div><div class="t m0 x8 h5 y37 ff2 fs2 fc2 sc0 ls0 ws0">38</div>
        <div class="t m0 x7 h6 y38 ff3 fs2 fc2 sc0 ls0 ws0">15. CHỈ SỐ LẶP<span class="_ _8"></span><span class="ff2">...................................................................................................................................................</span></div><div class="t m0 x8 h5 y39 ff2 fs2 fc2 sc0 ls0 ws0">44</div>
        <div class="t m0 x7 h6 y3a ff3 fs2 fc2 sc0 ls0 ws0">16. CHỈ SỐ THIẾU<span class="_ _3"></span><span class="ff2">........................................................................................................................................</span></div><div class="t m0 x8 h5 y3b ff2 fs2 fc2 sc0 ls0 ws0">45</div>
        <div class="t m0 x7 h6 y3c ff3 fs2 fc2 sc0 ls0 ws0">17. CHỈ SỐ CÂN BẰNG<span class="_ _5"></span><span class="ff2">.................................................................................................................................</span></div><div class="t m0 x8 h5 y3d ff2 fs2 fc2 sc0 ls0 ws0">46</div>
        <div class="t m0 x7 h6 y3e ff3 fs2 fc2 sc0 ls0 ws0">18. CHỈ SỐ KẾT NỐI ĐƯỜNG ĐỜI<span class="_ _3"></span><span class="ff2">..................................................................................................................</span></div><div class="t m0 x8 h5 y3f ff2 fs2 fc2 sc0 ls0 ws0">48</div>
        <div class="t m0 x7 h6 y40 ff3 fs2 fc2 sc0 ls0 ws0">19. CHỈ SỐ KẾT NỐI LINH HỒN VÀ TÍNH CÁCH<span class="_ _3"></span><span class="ff2">............................................................................................</span></div><div class="t m0 x8 h5 y41 ff2 fs2 fc2 sc0 ls0 ws0">49</div>
        <div class="t m0 x7 h6 y42 ff3 fs2 fc2 sc0 ls0 ws0">20. CHỈ SỐ NỢ NGHIỆP<span class="_ _1"></span><span class="ff2">.................................................................................................................................</span></div><div class="t m0 x8 h5 y43 ff2 fs2 fc2 sc0 ls0 ws0">50</div>
        <div class="t m0 x7 h6 y44 ff3 fs2 fc2 sc0 ls0 ws0">BIỂU ĐỒ SỨC MẠNH(NGÀY SINH)<span class="_ _6"></span><span class="ff2">................................................................................................................</span></div><div class="t m0 x8 h5 y45 ff2 fs2 fc2 sc0 ls0 ws0">51</div>
        <div class="t m0 x7 h6 y46 ff3 fs2 fc2 sc0 ls0 ws0">BIỂU ĐỒ TÊN VÀ BIỂU ĐỒ TỔNG HỢP<span class="_ _7"></span><span class="ff2">.........................................................................................................</span></div><div class="t m0 x8 h5 y47 ff2 fs2 fc2 sc0 ls0 ws0">52</div>
        <div class="t m0 x7 h6 y48 ff3 fs2 fc2 sc0 ls0 ws0">TƯƠNG HỢP VỢ CHỒNG<span class="_ _7"></span><span class="ff2">...............................................................................................................................</span></div><div class="t m0 x8 h5 y49 ff2 fs2 fc2 sc0 ls0 ws0">53</div>
        <div class="t m0 x7 h6 y4a ff3 fs2 fc2 sc0 ls0 ws0">TƯƠNG HỢP ĐIỆN THOẠI<span class="_ _7"></span><span class="ff2">...............................................................................................................................</span></div><div class="t m0 x8 h5 y4b ff2 fs2 fc2 sc0 ls0 ws0">54</div>
        <div class="t m0 x7 h6 y4c ff3 fs2 fc2 sc0 ls0 ws0">BÁO CÁO<span class="_ _7"></span><span class="ff2">.......................................................................................................................................................</span></div><div class="t m0 x8 h5 y4d ff2 fs2 fc2 sc0 ls0 ws0">55</div>
    </div>
</div>
<div id="pf3" class="pf w0 h0" data-page-no="3">
    <div class="pc pc3 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/'.$path.'/page-1.png') }}">
        <div class="t m0 x9 h7 y4e ff1 fs3 fc3 sc0 ls0 ws0">CHÀO MỪNG BẠN ĐẾN VỚI BÁO CÁO THẦN SỐ HỌC!</div>
        <div class="t m0 x5 h8 y4f ff1 fs4 fc2 sc0 ls0 ws0">Xin chúc mừng {{ $data['nickName'] }}!</div>
        <div class="t m0 x5 h9 y50 ff2 fs4 fc2 sc0 ls0 ws0">Giờ đây, thật đáng tự hào khi bạn là chủ sở hữu của bản báo cáo thần số học này,
        </div>
        <div class="t m0 x5 h9 y51 ff2 fs4 fc2 sc0 ls0 ws0">một bài đánh giáđơn giản nhưng tiết lộ sâu sắc về tiềm năng của bản thân bạn.
        </div>
        <div class="t m0 x5 ha y52 ff2 fs4 fc2 sc0 ls0 ws0">Chúng<span class="_ _9"></span> tôi<span
                class="_ _9"></span> rất<span class="_ _9"></span> vui<span class="_ _9"></span> vì<span
                class="_ _9"></span> bạn<span class="_ _9"></span> đã<span class="_ _9"></span> quyết<span
                class="_ _9"></span> định<span class="_ _9"></span> mang<span class="_ _9"></span> công<span
                class="_ _9"></span> cụ<span class="_ _9"></span> kỳ<span class="_ _9"></span> diệu,<span
                class="_ _9"></span> thú<span class="_ _9"></span> vị<span class="_ _9"></span> và<span
                class="_ _9"></span> đầy<span class="_ _9"></span> sâu<span class="_ _9"></span> sắc
        </div>
        <div class="t m0 x5 ha y53 ff2 fs4 fc2 sc0 ls0 ws0">này vào cuộc sống của bạn.</div>
        <div class="t m0 x5 ha y54 ff2 fs4 fc2 sc0 ls0 ws0">Bạn<span class="_ _a"></span> thân<span
                class="_ _a"></span> mến,<span class="_ _a"></span> chúng<span class="_ _a"></span> tôi<span
                class="_ _a"></span> tin<span class="_ _a"></span> rằng<span class="_ _a"></span> Thần<span
                class="_ _a"></span> Số<span class="_ _a"></span> Học<span class="_ _a"></span> chính<span
                class="_ _a"></span> là<span class="_ _a"></span> chìa<span class="_ _a"></span> khóa<span
                class="_ _a"></span> giúp<span class="_ _a"></span> bạn<span class="_ _a"></span> mở<span
                class="_ _a"></span> ra
        </div>
        <div class="t m0 x5 ha y55 ff2 fs4 fc2 sc0 ls0 ws0">một<span class="_ _9"></span> cuộc<span
                class="_ _a"></span> sống<span class="_ _9"></span> tràn<span class="_ _a"></span> ngập<span
                class="_ _9"></span> niềm<span class="_ _9"></span> vui,<span class="_ _a"></span> tình<span
                class="_ _9"></span> yêu<span class="_ _a"></span> và<span class="_ _9"></span> sự<span
                class="_ _9"></span> thịnh<span class="_ _a"></span> vượng.<span class="_ _9"></span> Một<span
                class="_ _a"></span> khi<span class="_ _9"></span> bạn<span class="_ _9"></span> có<span
                class="_ _a"></span> các
        </div>
        <div class="t m0 x5 ha y56 ff2 fs4 fc2 sc0 ls0 ws0">công<span class="_ _9"></span> cụ<span
                class="_ _9"></span> để<span class="_ _9"></span> hiểu<span class="_ _9"></span> ra<span
                class="_ _b"></span> hơn<span class="_ _b"></span> điều<span class="_ _9"></span> gì<span
                class="_ _9"></span> đang<span class="_ _9"></span> tồn<span class="_ _9"></span> tại<span
                class="_ _b"></span> giữa<span class="_ _9"></span> bạn<span class="_ _9"></span> và<span
                class="_ _9"></span> mục<span class="_ _9"></span> tiêu<span class="_ _b"></span> của<span
                class="_ _9"></span> mình,<span class="_ _9"></span> bạn<span class="_ _9"></span> sẽ
        </div>
        <div class="t m0 x5 ha y57 ff2 fs4 fc2 sc0 ls0 ws0">có<span class="_ _b"></span> thể<span
                class="_ _b"></span> đưa<span class="_ _b"></span> ra<span class="_ _b"></span> những<span
                class="_ _b"></span> lựa<span class="_ _b"></span> chọn<span class="_ _b"></span> tốt<span
                class="_ _b"></span> hơn,<span class="_ _b"></span> ngừng<span class="_ _b"></span> lặp<span
                class="_ _b"></span> lại<span class="_ _b"></span> những<span class="_ _b"></span> quyết<span
                class="_ _b"></span> định<span class="_ _b"></span> sai<span class="_ _b"></span> lầm<span
                class="_ _b"></span> và<span class="_ _b"></span> tự
        </div>
        <div class="t m0 x5 ha y58 ff2 fs4 fc2 sc0 ls0 ws0">tin tiến tới một tương lai tốt đẹp hơn, đi đúng với tiềm năng của bạn.<span class="_ _b"></span></div>
        <div class="t m0 x5 ha y59 ff2 fs4 fc2 sc0 ls0 ws0">Mỗi<span class="_ _a"></span> một<span
                class="_ _9"></span> câu,<span class="_ _a"></span> một<span class="_ _a"></span> chữ<span
                class="_ _a"></span> của<span class="_ _a"></span> báo<span class="_ _9"></span> cáo<span
                class="_ _a"></span> Thần<span class="_ _a"></span> Số<span class="_ _a"></span> Học<span
                class="_ _9"></span> đã<span class="_ _a"></span> được<span class="_ _a"></span> điều<span
                class="_ _a"></span> chỉnh<span class="_ _9"></span> cho<span class="_ _a"></span> phù<span
                class="_ _a"></span> hợp
        </div>
        <div class="t m0 x5 ha y5a ff2 fs4 fc2 sc0 ls0 ws0">với<span class="_ _a"></span> chính<span
                class="_ _c"></span> bản<span class="_ _a"></span> thân<span class="_ _c"></span> bạn.<span
                class="_ _a"></span> Chúng<span class="_ _c"></span> tôi<span class="_ _a"></span> đã<span
                class="_ _c"></span> sử<span class="_ _a"></span> dụng<span class="_ _c"></span> nhiều<span
                class="_ _a"></span> năm<span class="_ _c"></span> tích<span class="_ _a"></span> lũy<span
                class="_ _c"></span> nghiên<span class="_ _a"></span> cứu,<span class="_ _c"></span> với
        </div>
        <div class="t m0 x5 ha y5b ff2 fs4 fc2 sc0 ls0 ws0">những<span class="_ _9"></span> tài<span
                class="_ _9"></span> liệu<span class="_ _a"></span> được<span class="_ _b"></span> xuất<span
                class="_ _a"></span> bản<span class="_ _9"></span> và<span class="_ _9"></span> chưa<span
                class="_ _9"></span> được<span class="_ _a"></span> công<span class="_ _b"></span> bố,<span
                class="_ _a"></span> bởi<span class="_ _9"></span> các<span class="_ _9"></span> nhà<span
                class="_ _9"></span> nghiên<span class="_ _a"></span> cứu<span class="_ _b"></span> Thần
        </div>
        <div class="t m0 x5 ha y5c ff2 fs4 fc2 sc0 ls0 ws0">số<span class="_ _d"></span> học,<span
                class="_ _d"></span> các<span class="_ _d"></span> chuyên<span class="_ _d"></span> gia<span
                class="_ _d"></span> nước<span class="_ _d"></span> ngoài<span class="_ _d"></span> và<span
                class="_ _d"></span> kết<span class="_ _d"></span> hợp<span class="_ _d"></span> thông<span
                class="_ _d"></span> tin<span class="_ _d"></span> chi<span class="_ _d"></span> tiết<span
                class="_ _d"></span> này<span class="_ _d"></span> với<span class="_ _d"></span> hệ<span
                class="_ _d"></span> thống<span class="_ _d"></span> tính
        </div>
        <div class="t m0 x5 ha y5d ff2 fs4 fc2 sc0 ls0 ws0">toán<span class="_ _a"></span> phức<span
                class="_ _9"></span> tạp<span class="_ _a"></span> của<span class="_ _a"></span> chúng<span
                class="_ _a"></span> tôi<span class="_ _a"></span> để<span class="_ _9"></span> tạo<span
                class="_ _a"></span> ra<span class="_ _a"></span> một<span class="_ _a"></span> bản<span
                class="_ _9"></span> báo<span class="_ _a"></span> cáo<span class="_ _a"></span> cực<span
                class="_ _a"></span> kỳ<span class="_ _9"></span> mạnh<span class="_ _a"></span> mẽ<span
                class="_ _a"></span> và<span class="_ _a"></span> chính
        </div>
        <div class="t m0 x5 ha y5e ff2 fs4 fc2 sc0 ls0 ws0">xác về bạn!</div>
        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x6 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">2</div>
        <a class="l" href="J">
            <div class="d m3"
                 style="border-style:none;position:absolute;left:79.260000px;bottom:1120.560000px;width:481.500000px;height:13.000000px;background-color:rgba(255,255,255,0.000001);"></div>
        </a><a class="l" href="J">
            <div class="d m3"
                 style="border-style:none;position:absolute;left:79.260000px;bottom:1090.560000px;width:308.370000px;height:13.000000px;background-color:rgba(255,255,255,0.000001);"></div>
        </a><a class="l" href="J">
            <div class="d m3"
                 style="border-style:none;position:absolute;left:79.260000px;bottom:1060.560000px;width:334.630000px;height:13.000000px;background-color:rgba(255,255,255,0.000001);"></div>
        </a><a class="l" href="J">
            <div class="d m3"
                 style="border-style:none;position:absolute;left:79.260000px;bottom:1030.560000px;width:455.020000px;height:13.000000px;background-color:rgba(255,255,255,0.000001);"></div>
        </a><a class="l" href="J">
            <div class="d m3"
                 style="border-style:none;position:absolute;left:79.260000px;bottom:1000.560000px;width:329.600000px;height:13.000000px;background-color:rgba(255,255,255,0.000001);"></div>
        </a><a class="l" href="J">
            <div class="d m3"
                 style="border-style:none;position:absolute;left:79.260000px;bottom:970.560000px;width:252.910000px;height:13.000000px;background-color:rgba(255,255,255,0.000001);"></div>
        </a></div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
<div id="pf4" class="pf w0 h0" data-page-no="4">
    <div class="pc pc4 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/'.$path.'/phai.png') }}">
        <div class="t m0 x5 h9 y62 ff4 fs4 fc2 sc0 ls0 ws0">Trong bảo báo cáo này, bạn sẽ khám phá các luận giải về:
        </div>
        <div class="t m0 x5 ha y63 ff2 fs4 fc2 sc0 ls0 ws0">- Ý nghĩa tên khai sinh của bạn, bao gồm ý nghĩa của họ tên đầy đủ, tên thường gọi
        </div>
        <div class="t m0 x5 ha y64 ff2 fs4 fc2 sc0 ls0 ws0">- Chỉ số linh hồn của bạn có điều gì đang đợi chờ bạn
        </div>
        <div class="t m0 x5 ha y65 ff2 fs4 fc2 sc0 ls0 ws0">- Chỉ số sứ mệnh của bạn đang có thử thách gì phía trước
        </div>
        <div class="t m0 x5 ha y66 ff2 fs4 fc2 sc0 ls0 ws0">- Tên thường gọi có tác động bù trừ hay làm xấu đi biểu đồ ngày sinh của bạn?
        </div>
        <div class="t m0 x5 ha y67 ff2 fs4 fc2 sc0 ls0 ws0">- Chỉ số đường đời và chu kì vận số năm hiện tại của bạn
        </div>
        <div class="t m0 x5 ha y68 ff2 fs4 fc2 sc0 ls0 ws0">- Và rất nhiều các luận giải nâng cao khác...</div>
        <div class="t m0 x5 h9 y69 ff4 fs4 fc5 sc0 ls0 ws0">Bạn không thể điều khiển gió, nhưng có thể điều khiển cánh buồm của bạn!
        </div>
        <div class="t m0 x5 ha y6a ff2 fs4 fc2 sc0 ls0 ws0">Chúng<span class="_ _d"></span> tôi<span
                class="_ _b"></span> chân<span class="_ _d"></span> thành<span class="_ _b"></span> hy<span
                class="_ _d"></span> vọng<span class="_ _b"></span> báo<span class="_ _d"></span> cáo<span
                class="_ _d"></span> này<span class="_ _b"></span> sẽ<span class="_ _d"></span> chèo<span
                class="_ _b"></span> lái<span class="_ _d"></span> con<span class="_ _b"></span> thuyền<span
                class="_ _d"></span> cuộc<span class="_ _b"></span> đời<span class="_ _d"></span> của<span
                class="_ _b"></span> bạn
        </div>
        <div class="t m0 x5 ha y6b ff2 fs4 fc2 sc0 ls0 ws0">đến bến bờ thành công và hạnh phúc một cách trọn vẹn.
        </div>
        <div class="t m0 x5 ha y6c ff2 fs4 fc2 sc0 ls0 ws0">Thần<span class="_ _a"></span> số<span
                class="_ _9"></span> học<span class="_ _a"></span> là<span class="_ _9"></span> một<span
                class="_ _a"></span> công<span class="_ _9"></span> cụ<span class="_ _a"></span> xuất<span
                class="_ _9"></span> phát<span class="_ _a"></span> từ<span class="_ _9"></span> phương<span
                class="_ _a"></span> Tây<span class="_ _9"></span> rất<span class="_ _a"></span> mạnh<span
                class="_ _a"></span> mẽ,<span class="_ _9"></span> sâu<span class="_ _a"></span> sắc<span
                class="_ _9"></span> và<span class="_ _a"></span> nó
        </div>
        <div class="t m0 x5 ha y6d ff2 fs4 fc2 sc0 ls0 ws0">cũng rất thú<span class="_ _d"></span> vị. Bạn<span
                class="_ _d"></span> sẽ sớm<span class="_ _d"></span> phát hiện<span class="_ _d"></span> ra, chúng tôi<span class="_ _d"></span> đã và<span class="_ _d"></span> sẽ làm<span class="_ _d"></span> mọi thứ<span class="_ _d"></span> có thể<span class="_ _d"></span> trong
        </div>
        <div class="t m0 x5 ha y6e ff2 fs4 fc2 sc0 ls0 ws0">khả<span class="_ _b"></span> năng<span
                class="_ _b"></span> của<span class="_ _b"></span> mình<span class="_ _b"></span> để<span
                class="_ _b"></span> làm<span class="_ _b"></span> cho<span class="_ _9"></span> các<span
                class="_ _b"></span> chỉ<span class="_ _b"></span> số,<span class="_ _b"></span> biểu<span
                class="_ _b"></span> đồ<span class="_ _b"></span> ở<span class="_ _b"></span> trong<span
                class="_ _9"></span> bản<span class="_ _b"></span> báo<span class="_ _b"></span> cáo<span
                class="_ _b"></span> này<span class="_ _b"></span> trở<span class="_ _b"></span> nên
        </div>
        <div class="t m0 x5 ha y6f ff2 fs4 fc2 sc0 ls0 ws0">dễ hiểu và dễ áp dụng vào cuộc sống của chính bạn.</div>
        <div class="t m0 x5 ha y70 ff2 fs4 fc2 sc0 ls0 ws0">Hãy tận<span class="_ _d"></span> hưởng việc<span
                class="_ _d"></span> tìm<span class="_ _d"></span> hiểu về<span class="_ _d"></span> con người<span
                class="_ _d"></span> thật<span class="_ _d"></span> của bạn<span class="_ _d"></span> và nhiều<span
                class="_ _d"></span> cách<span class="_ _d"></span> mà bạn<span class="_ _d"></span> có thể
        </div>
        <div class="t m0 x5 ha y71 ff2 fs4 fc2 sc0 ls0 ws0">cải thiện<span class="_ _d"></span> hạnh phúc<span class="_ _d"></span> và sức<span class="_ _d"></span> khỏe của<span class="_ _d"></span> mình thông<span class="_ _d"></span> qua nghệ<span class="_ _d"></span> thuật khai<span class="_ _d"></span>sáng của<span class="_ _d"></span> Thần
        </div>
        <div class="t m0 x5 ha y72 ff2 fs4 fc2 sc0 ls0 ws0">số học!</div>
        <div class="t m0 xc h9 y73 ff4 fs4 fc2 sc0 ls0 ws0">Trân trọng gửi đến bạn!</div>
        <div class="t m0 xd h9 y74 ff4 fs4 fc2 sc0 ls0 ws0"> - Nhóm Tra cứu thần số học -</div>
        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x5 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">3</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
<div id="pf5" class="pf w0 h0" data-page-no="5">
    <div class="pc pc5 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/'.$path.'/trai.png') }}">
        <div class="t m0 x10 h7 y4e ff1 fs3 fc3 sc0 ls0 ws0">HIỂU VỀ BẢN BÁO CÁO CỦA BẠN</div>
        <div class="t m0 x5 ha y75 ff2 fs4 fc2 sc0 ls0 ws0">{{ $data['nickName'] }},<span class="_ _b"></span> báo<span class="_ _b"></span> cáo<span class="_ _9"></span> Số<span class="_ _b"></span> học<span class="_ _9"></span> của<span class="_ _b"></span> bạn<span class="_ _9"></span> là<span class="_ _b"></span> một<span class="_ _9"></span> nghiên<span class="_ _b"></span> cứu<span class="_ _b"></span> đầy<span class="_ _9"></span> đủ<span class="_ _b"></span> và<span class="_ _9"></span> trải<span class="_ _b"></span> rộng<span class="_ _9"></span> nhất<span class="_ _b"></span> về<span class="_ _9"></span> các</div><div class="t m0 x5 ha y76 ff2 fs4 fc2 sc0 ls0 ws0">phương pháp Số học khác nhau được áp dụng cho cả tên và ngày sinh của bạn.</div><div class="t m0 x5 ha y77 ff2 fs4 fc2 sc0 ls0 ws0">Về<span class="_ _a"></span> cơ<span class="_ _c"></span> bản,<span class="_ _a"></span> một<span class="_ _c"></span> bản<span class="_ _a"></span> báo<span class="_ _a"></span> cáo<span class="_ _c"></span> cá<span class="_ _a"></span> nhân<span class="_ _c"></span> được<span class="_ _a"></span> tạo<span class="_ _c"></span> ra<span class="_ _a"></span> từ<span class="_ _a"></span> việc<span class="_ _c"></span> nghiên<span class="_ _a"></span> cứu<span class="_ _c"></span> 2<span class="_ _a"></span> đối<span class="_ _c"></span> tượng</div><div class="t m0 x5 ha y78 ff2 fs4 fc2 sc0 ls0 ws0">chính.<span class="_ _a"></span> Đó<span class="_ _a"></span> là<span class="_ _a"></span> tên<span class="_ _a"></span> khai<span class="_ _a"></span> sinh<span class="_ _a"></span> và<span class="_ _a"></span> ngày<span class="_ _a"></span> tháng<span class="_ _a"></span> năm<span class="_ _a"></span> sinh<span class="_ _a"></span> dương<span class="_ _a"></span> lịch<span class="_ _a"></span> của<span class="_ _a"></span> đối<span class="_ _a"></span> tượng<span class="_ _a"></span> được</div><div class="t m0 x5 ha y79 ff2 fs4 fc2 sc0 ls0 ws0">quan tâm.</div><div class="t m0 x5 ha y7a ff2 fs4 fc2 sc0 ls0 ws0">Tên cá<span class="_ _d"></span> nhân được<span class="_ _d"></span> sử dụng<span class="_ _d"></span> để cung<span class="_ _d"></span> cấp về<span class="_ _d"></span> một<span class="_ _d"></span> số chỉ<span class="_ _d"></span> số trong<span class="_ _d"></span> bản báo<span class="_ _d"></span> cáo này<span class="_ _d"></span> bao</div><div class="t m0 x5 ha y7b ff2 fs4 fc2 sc0 ls0 ws0">gồm:</div><div class="t m0 x5 ha y7c ff2 fs4 fc2 sc0 ls0 ws0">- Chỉ số sứ mệnh</div><div class="t m0 x5 ha y7d ff2 fs4 fc2 sc0 ls0 ws0">- Chỉ số linh hồn</div><div class="t m0 x5 ha y7e ff2 fs4 fc2 sc0 ls0 ws0">- Chỉ số nhân cách</div><div class="t m0 x5 ha y7f ff2 fs4 fc2 sc0 ls0 ws0">- Các chỉ số tiếp cận</div><div class="t m0 x5 ha y80 ff2 fs4 fc2 sc0 ls0 ws0">- Và một vài chỉ số khác liên quan tới thể hiện của bạn ra thế giới bên ngoài.</div><div class="t m0 x5 ha y81 ff2 fs4 fc2 sc0 ls0 ws0">Chúng tôi cung cấp các bài phân tích về tên như vậy và bạn sẽ sớm phát hiện ra, tên</div><div class="t m0 x5 ha y82 ff2 fs4 fc2 sc0 ls0 ws0">của bạn<span class="_ _d"></span> liên quan<span class="_ _d"></span> rất nhiều<span class="_ _d"></span> đến phương<span class="_ _d"></span> pháp và<span class="_ _d"></span> lý do<span class="_ _d"></span> bạn định<span class="_ _d"></span> hình ra<span class="_ _d"></span> thế giới<span class="_ _d"></span> xung</div><div class="t m0 x5 ha y83 ff2 fs4 fc2 sc0 ls0 ws0">quanh mình.</div><div class="t m0 x5 ha y84 ff2 fs4 fc2 sc0 ls0 ws0">Ngày sinh<span class="_ _d"></span> của<span class="_ _d"></span> bạn<span class="_ _d"></span> và<span class="_ _d"></span> các<span class="_ _d"></span> chỉ<span class="_ _d"></span> số<span class="_ _d"></span> được<span class="_ _d"></span> tính<span class="_ _d"></span> từ ngày<span class="_ _d"></span> sinh<span class="_ _d"></span> là<span class="_ _d"></span> kết<span class="_ _d"></span> quả<span class="_ _d"></span> của<span class="_ _d"></span> những<span class="_ _d"></span> gì<span class="_ _d"></span> bạn</div><div class="t m0 x5 ha y85 ff2 fs4 fc2 sc0 ls0 ws0">nhận<span class="_ _d"></span> được<span class="_ _b"></span> từ<span class="_ _d"></span> vũ<span class="_ _b"></span> trụ,<span class="_ _d"></span> ngay<span class="_ _b"></span> cả<span class="_ _b"></span> khi<span class="_ _d"></span> bạn<span class="_ _b"></span> cảm<span class="_ _d"></span> thấy<span class="_ _b"></span> mình<span class="_ _d"></span> không<span class="_ _b"></span> tham<span class="_ _b"></span> gia<span class="_ _d"></span> vào<span class="_ _b"></span> việc<span class="_ _d"></span> tạo<span class="_ _b"></span> ra</div><div class="t m0 x5 ha y86 ff2 fs4 fc2 sc0 ls0 ws0">những<span class="_ _9"></span> nguyên<span class="_ _a"></span> nhân<span class="_ _9"></span> dẫn<span class="_ _a"></span> tới<span class="_ _9"></span> những<span class="_ _9"></span> sự<span class="_ _a"></span> việc<span class="_ _9"></span> mà<span class="_ _a"></span> bạn<span class="_ _9"></span> gặp<span class="_ _9"></span> phải.<span class="_ _a"></span> Điều<span class="_ _9"></span> này<span class="_ _a"></span> tương<span class="_ _9"></span> đồng</div><div class="t m0 x5 ha y87 ff2 fs4 fc2 sc0 ls0 ws0">với<span class="_ _c"></span> Luân<span class="_ _c"></span> hồi<span class="_ _c"> </span> Nhân<span class="_ _c"> </span> quả<span class="_ _e"> </span> và<span class="_ _c"></span> có<span class="_ _c"></span> thể<span class="_ _c"> </span> được<span class="_ _c"> </span> lý<span class="_ _e"> </span> giải<span class="_ _c"></span> trong<span class="_ _c"></span> đạo<span class="_ _c"> </span> PHẬT<span class="_ _c"> </span> rằng<span class="_ _e"> </span> đó<span class="_ _c"></span> là<span class="_ _c"></span> sự<span class="_ _c"> </span> tích</div><div class="t m0 x5 ha y88 ff2 fs4 fc2 sc0 ls0 ws0">Nghiệp và Đức của bạn từ vô lượng kiếp trước kiếp sống này của bạn.</div><div class="t m0 x5 ha y89 ff2 fs4 fc2 sc0 ls0 ws0">Một vài luận giải<span class="_ _d"></span> có thể bạn chưa<span class="_ _d"></span> hiểu bây giờ nhưng<span class="_ _d"></span> bạn sẽ sớm tìm<span class="_ _d"></span> ra cách bạn có</div><div class="t m0 x5 ha y8a ff2 fs4 fc2 sc0 ls0 ws0">thể thay<span class="_ _d"></span> đổi<span class="_ _d"></span> để<span class="_ _d"></span> sống<span class="_ _d"></span> một<span class="_ _d"></span> cuộc sống<span class="_ _d"></span> mà<span class="_ _d"></span> bạn<span class="_ _d"></span> muốn.<span class="_ _d"></span> Hãy<span class="_ _d"></span> kiên<span class="_ _d"></span> trì đọc<span class="_ _d"></span> bản<span class="_ _d"></span> báo<span class="_ _d"></span> cáo<span class="_ _d"></span> này</div><div class="t m0 x5 ha y8b ff2 fs4 fc2 sc0 ls0 ws0">nhiều lần, bạn sẽ thấy những câu trả lời tương ứng.</div><div class="t m0 x5 ha y8c ff2 fs4 fc2 sc0 ls0 ws0">Ngoài<span class="_ _b"></span> ra,<span class="_ _9"></span> chúng<span class="_ _9"></span> tôi<span class="_ _9"></span> sử<span class="_ _9"></span> dụng<span class="_ _b"></span> chủ<span class="_ _9"></span> đề<span class="_ _9"></span> màu<span class="_ _9"></span> của<span class="_ _9"></span> file<span class="_ _b"></span> báo<span class="_ _9"></span> cáo<span class="_ _9"></span> này<span class="_ _9"></span> trùng<span class="_ _9"></span> với<span class="_ _b"></span> màu<span class="_ _9"></span> số<span class="_ _9"></span> chủ</div><div class="t m0 x5 ha y8d ff2 fs4 fc2 sc0 ls0 ws0">đạo<span class="_ _b"></span> của<span class="_ _9"></span> bạn.<span class="_ _9"></span> Vì<span class="_ _9"></span> đây<span class="_ _9"></span> là<span class="_ _9"></span> màu<span class="_ _9"></span> rất<span class="_ _9"></span> phù<span class="_ _9"></span> với<span class="_ _9"></span> số<span class="_ _b"></span> chủ<span class="_ _9"></span> đạo<span class="_ _9"></span> 7<span class="_ _9"></span> nên<span class="_ _9"></span> bạn<span class="_ _9"></span> có<span class="_ _9"></span> thể<span class="_ _9"></span> lựa<span class="_ _9"></span> chọn<span class="_ _9"></span> màu</div><div class="t m0 x5 ha y8e ff2 fs4 fc2 sc0 ls0 ws0">này<span class="_ _f"> </span> cho<span class="_ _f"> </span> các<span class="_ _f"> </span> công<span class="_ _f"> </span> việc<span class="_ _f"> </span> hoặc<span class="_ _f"> </span> đồ<span class="_ _f"> </span> vật<span class="_ _f"> </span> quan<span class="_ _f"> </span> trọng.<span class="_ _f"> </span> Tuy<span class="_ _f"> </span> nhiên,<span class="_ _f"> </span> việc<span class="_ _f"> </span> chọn<span class="_ _f"> </span> màu<span class="_ _f"> </span> thông</div><div class="t m0 x5 ha y8f ff2 fs4 fc2 sc0 ls0 ws0">thường<span class="_ _c"> </span> hoàn<span class="_ _e"> </span> toàn<span class="_ _e"> </span> là<span class="_ _c"> </span> do<span class="_ _e"> </span> sở<span class="_ _e"> </span> thích<span class="_ _c"> </span> và<span class="_ _e"> </span> bạn<span class="_ _e"> </span> có<span class="_ _e"> </span> thể<span class="_ _c"> </span> không<span class="_ _e"> </span> cần<span class="_ _e"> </span> quan<span class="_ _c"> </span> tâm<span class="_ _e"> </span> tới<span class="_ _e"> </span> màu<span class="_ _c"> </span> sắc</div><div class="t m0 x5 ha y90 ff2 fs4 fc2 sc0 ls0 ws0">trong thần số học.</div><div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x6 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">4</div></div><div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
<div id="pf6" class="pf w0 h0" data-page-no="6">
    <div class="pc pc7 w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/'.$path.'/1.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">1</div><div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TỔNG HỢP CÁC CHỈ SỐ QUAN TRỌNG</div>
        <div class="t m0 x5 hf y95 ff2 fs9 fc2 sc0 ls0 ws0">Phần này<span class="_ _d"></span> dành<span class="_ _d"></span> cho chuyên<span class="_ _d"></span> gia<span class="_ _d"></span> hoặc những<span class="_ _d"></span> người<span class="_ _d"></span> có hiểu<span class="_ _d"></span> biết<span class="_ _d"></span> về<span class="_ _d"></span> thần số<span class="_ _d"></span> học<span class="_ _d"></span> để nhìn<span class="_ _d"></span> được</div><div class="t m0 x5 hf y96 ff2 fs9 fc2 sc0 ls0 ws0">sơ bộ bức tranh tổng quan của báo cáo.</div>
        <div class="t m0 x3 hc y97 ff1 fs6 fc0 sc0 ls0 ws0" style="@php if ($path > 10) { echo 'left: 165px';}  @endphp">{{ $path }}<span class="_ _10" style="@php if ($path > 10) { echo 'margin-left: -35px;';}  @endphp"> </span>{{ $data['data']['attitudeIndicator']['attitudeIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['maturityIndicator']['maturityIndicator'] }}</div>
        <div class="t m0 x15 h10 y98 ff1 fs9 fc2 sc0 ls0 ws0">ĐƯỜNG ĐỜI<span class="_ _11"> </span>THÁI ĐỘ<span class="_ _12"> </span>TRƯỞNG THÀNH</div>
        <div class="t m0 x16 h11 y99 ff3 fsa fc2 sc0 ls0 ws0">Điểm mạnh yếu, tổng quan về đường</div>
        <div class="t m0 x17 h11 y9a ff3 fsa fc2 sc0 ls0 ws0">đời, các sự phù hợp trong tình yêu, sự</div>
        <div class="t m0 x18 h11 y9b ff3 fsa fc2 sc0 ls0 ws0">nghiệp, mối quan hệ, ...</div>
        <div class="t m0 x19 h11 y99 ff3 fsa fc2 sc0 ls0 ws0">Thái độ, cách phản ứng bản năng của</div>
        <div class="t m0 x1a h11 y9a ff3 fsa fc2 sc0 ls0 ws0">bạn trước những sự việc một cách tự</div>
        <div class="t m0 x1b h11 y9b ff3 fsa fc2 sc0 ls0 ws0">nhiên, đặc biệt là trong những lần đầu.</div>
        <div class="t m0 x1c h11 y99 ff3 fsa fc2 sc0 ls0 ws0">Giá trị, con người của bạn, lĩnh vực mà</div>
        <div class="t m0 x1d h11 y9a ff3 fsa fc2 sc0 ls0 ws0">bạn có nhiều tiềm năng nhất trong giai</div>
        <div class="t m0 x1c h11 y9b ff3 fsa fc2 sc0 ls0 ws0">đoạn trưởng thành (khoảng từ 40 tuổi).</div>
        <div class="t m0 x3 hc y9c ff1 fs6 fc0 sc0 ls0 ws0">{{ $data['data']['missionIndicator']['missionIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['natureIndicator']['natureIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['linkSoulAndPersonalIndicator']['linkSoulAndPersonalIndicator'] }}</div>
        <div class="t m0 x1e h10 y9d ff1 fs9 fc2 sc0 ls0 ws0">SỨ MỆNH<span class="_ _13"> </span>NHÂN CÁCH<span class="_ _14"> </span>LINH HỒN</div>
        <div class="t m0 x1f h11 y9e ff3 fsa fc2 sc0 ls0 ws0">Cách bạn đạt được các mục tiêu lớn</div>
        <div class="t m0 x17 h11 y9f ff3 fsa fc2 sc0 ls0 ws0">nhỏ. Con số này tác động vào mọi giai</div>
        <div class="t m0 x20 h11 ya0 ff3 fsa fc2 sc0 ls0 ws0">đoạn cuộc đời bạn.</div>
        <div class="t m0 x1b h11 y9e ff3 fsa fc2 sc0 ls0 ws0">Thể hiện phản hồi mà người khác cảm</div>
        <div class="t m0 x19 h11 y9f ff3 fsa fc2 sc0 ls0 ws0">thấy bạn qua phản ứng, lựa chọn, suy</div>
        <div class="t m0 x21 h11 ya0 ff3 fsa fc2 sc0 ls0 ws0">nghĩ, lời nói và việc làm của bạn.</div>
        <div class="t m0 x22 h11 y9e ff3 fsa fc2 sc0 ls0 ws0">Sự khao sát sâu trong con người của</div>
        <div class="t m0 x23 h11 y9f ff3 fsa fc2 sc0 ls0 ws0">bạn. Nó cho biết điều gì mới thực sự</div>
        <div class="t m0 x24 h11 ya0 ff3 fsa fc2 sc0 ls0 ws0">khiến bạn thỏa mãn và trọn vẹn.</div>
        <div class="t m0 x3 hc ya1 ff1 fs6 fc0 sc0 ls0 ws0">{{ $data['data']['missionIndicator']['missionIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['natureIndicator']['natureIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['linkSoulAndPersonalIndicator']['linkSoulAndPersonalIndicator'] }}</div>
        <div class="t m0 x9 h10 ya2 ff1 fs9 fc2 sc0 ls0 ws0">THỬ THÁCH SỨ MỆNH<span class="_ _15"> </span>THỬ THÁCH NHÂN CÁCH<span class="_ _16"> </span>THỬ THÁCH LINH HỒN</div>
        <div class="t m0 x5 h11 ya3 ff3 fsa fc2 sc0 ls0 ws0">Những kiểu thử thách thường gặp nhất</div>
        <div class="t m0 x7 h11 ya4 ff3 fsa fc2 sc0 ls0 ws0">trong suốt cuộc đời mà bạn sẽ phải</div>
        <div class="t m0 x14 h11 ya5 ff3 fsa fc2 sc0 ls0 ws0">vượt qua nó.</div>
        <div class="t m0 x25 h11 ya3 ff3 fsa fc2 sc0 ls0 ws0">Giúp cải thiện cách người khác cảm</div>
        <div class="t m0 x1b h11 ya4 ff3 fsa fc2 sc0 ls0 ws0">nhận bạn qua phản ứng, lựa chọn, suy</div>
        <div class="t m0 x26 h11 ya5 ff3 fsa fc2 sc0 ls0 ws0">nghĩ, lời nói của bạn.</div>
        <div class="t m0 x27 h11 ya3 ff3 fsa fc2 sc0 ls0 ws0">Trở ngại mà bạn phải đối mặt bên</div>
        <div class="t m0 x28 h11 ya4 ff3 fsa fc2 sc0 ls0 ws0">trong nội tâm của mình để vượt qua</div>
        <div class="t m0 x29 h11 ya5 ff3 fsa fc2 sc0 ls0 ws0">chúng và trở nên trưởng thành.</div>
        <div class="t m0 x3 hc ya6 ff1 fs6 fc0 sc0 ls0 ws0">{{ $data['data']['dobIndicator']['dobIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['thinkingIndicator']['thinkingIndicator'] }}<span class="_ _10"> </span>{{ $data['data']['attitudeIndicator']['attitudeIndicator'] }}</div>
        <div class="t m0 x2a h10 ya7 ff1 fs9 fc2 sc0 ls0 ws0">NĂNG LỰC TỰ NHIÊN<span class="_ _17"> </span>NĂNG LỰC TƯ DUY<span class="_ _18"> </span>VƯỢT KHÓ</div>
        <div class="t m0 x2b h11 ya8 ff3 fsa fc2 sc0 ls0 ws0">Năng khiếu bẩm sinh, thứ mà bạn có</div>
        <div class="t m0 x7 h11 ya9 ff3 fsa fc2 sc0 ls0 ws0">thể làm dễ dàng; những tài năng và</div>
        <div class="t m0 x2c h11 yaa ff3 fsa fc2 sc0 ls0 ws0">năng lực hỗ trợ bạn trên đường đời.</div>
        <div class="t m0 x25 h11 ya8 ff3 fsa fc2 sc0 ls0 ws0">Cách trí óc bạn hoạt động trong các</div>
        <div class="t m0 x2d h11 ya9 ff3 fsa fc2 sc0 ls0 ws0">tình huống khác nhau, mức độ thông</div>
        <div class="t m0 x2e h11 yaa ff3 fsa fc2 sc0 ls0 ws0">minh và khả năng tư duy logic của bạn.</div>
        <div class="t m0 x22 h11 ya8 ff3 fsa fc2 sc0 ls0 ws0">Cách bạn phản ứng với những thách</div>
        <div class="t m0 x2f h11 ya9 ff3 fsa fc2 sc0 ls0 ws0">thức, cùng lời khuyên để vận dụng tốt</div>
        <div class="t m0 x23 h11 yaa ff3 fsa fc2 sc0 ls0 ws0">nhất khả năng đối mặt với khó khăn.</div>
        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x6 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">5</div></div><div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
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
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHU KỲ VẬN SỐ</div>

        <div class="t m0 x30 hf yab ff2 fs9 fc2 sc0 ls0 ws0" style="width: 1500px; white-space: normal">
            {!! substr($data['data']['cycleFortune']['description'], 0) !!}
        </div>
        <div class="t m0 hf yaf ff2 fs9 fc2 sc0 ls0 ws0" style="display: flex; flex-wrap: wrap; left: 70px; bottom: 980px">
            <p>
                {!! $data['data']['cycleFortune']['content'] !!}
            </p>
        </div>
        @php
            $array = $data['data']['cycleFortune']['cycleFortune'];
            $filter = array_filter($array, function ($item) {
                return $item['year'] == 2023;
            });
            $number = array_values($filter)[0]['indicator'];
        @endphp
        <div class="t m0 hf yab ff2 fs9 fc2 sc0 ls0 ws0" style="bottom: 60%; left: -60px">
            @php
                $fileName = $number - 1;
            @endphp
            <img src="{{ asset($path . '/chuky/' . $fileName . '.png') }}" alt="" style="width: 2000px;">
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

<div id="pfb" class="pf w0 h0" data-page-no="8">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/chi-so-nam.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">2</div>
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">Chỉ số các năm</div>
        <div class="t m0 x4d h12 y64 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2023</div>
        <div class="t m0 x4e h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1120px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['nowYearIndicator'] }}</div>
        <div class="t m0 x4d h12 y66 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2024</div>
        <div class="t m0 x4e h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1060px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['nextYearIndicator'] }}</div>
        <div class="t m0 x4d h12 y68 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2025</div>
        <div class="t m0 x4e h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1000px">
            {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['twoYearsLaterIndicator'] }}</div>

        <div class="t m0 x5 hf y1ca ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! $data['data']['yearIndicator']['description'] !!}
        </div>
        <div class="t m0 x5 h9 yc7 ff4 fs4 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['nowYearIndicator']['content'], 0, 1500) !!}
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">8</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

@if(substr($data['data']['yearIndicator']['nowYearIndicator']['content'], 1500, 3500) !== null)
<div id="pfc" class="pf w0 h0" data-page-no="9">
    <div class="pc pce w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
        <div class="t m0 x5 h12 yf3 ff3 fs4 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['nowYearIndicator']['content'], 1500, 3500) !!}
        </div>
        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">9</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@endif
@if(substr($data['data']['yearIndicator']['nowYearIndicator']['content'], 4500) !== null)
<div id="pfc" class="pf w0 h0" data-page-no="9">
    <div class="pc pce w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
             src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
        <div class="t m0 x5 h12 yf3 ff3 fs4 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['nowYearIndicator']['content'], 4500) !!}
        </div>
        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">9</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@endisset


<div id="pfd" class="pf w0 h0" data-page-no="10">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['nextYearIndicator']['content'], 0, 4000) !!}
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">10</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@if(substr($data['data']['yearIndicator']['nextYearIndicator']['content'], 4000) !== null)
<div id="pfd" class="pf w0 h0" data-page-no="10">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['nextYearIndicator']['content'], 4000) !!}
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">10</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@endif

<div id="pfd" class="pf w0 h0" data-page-no="11">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['twoYearsLaterIndicator']['content'], 0, 4000) !!}
        </div>

        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">11</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@if(substr($data['data']['yearIndicator']['twoYearsLaterIndicator']['content'], 4000) !== null)
<div id="pfd" class="pf w0 h0" data-page-no="11">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['yearIndicator']['twoYearsLaterIndicator']['content'], 4000) !!}
        </div>

        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">11</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>
@endif


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
        <div class="t m0 x4e h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px; bottom: 1000px">
            {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['twoMonthsLaterIndicator'] }}
        </div>

        <div class="t m0 x5 hf y1ca ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! $data['data']['monthIndicator']['description'] !!}
        </div>
        <div class="t m0 x5 h9 ff4 fs4 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal; bottom: 800px">
            {!! substr($data['data']['monthIndicator']['nowMonthIndicator']['content'], 0) !!}
        </div>

        <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">12</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

<div id="pfd" class="pf w0 h0" data-page-no="13">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['monthIndicator']['nextMonthIndicator']['content'], 0) !!}
        </div>

        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">13</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

<div id="pfd" class="pf w0 h0" data-page-no="11">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/page-trang-phai.png') }}">
        <div class="t m0 x5 hf yf3 ff2 fs9 fc2 sc0 ls0 ws0" style="width: 2000px; white-space: normal">
            {!! substr($data['data']['monthIndicator']['twoMonthsLaterIndicator']['content'], 0) !!}
        </div>

        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">11</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

<div id="pfd" class="pf w0 h0" data-page-no="12">
    <div class="pc pcb w0 h0 opened">
        <img class="bi x0 y0 w1 h1" alt=""
            src="{{ asset('/' . $path . '/bannga.png') }}">
        <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">4</div>
        <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">NHÓM TÍNH CÁCH THEO BẢN NGÃ</div>

        <div class="t m0 hf ff2 fs9 fc2 sc0 ls0 ws0" style="width: 1300px; white-space: normal; top: 70px; left: 400px">
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
        <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">14</div>
    </div>
    <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
</div>

    
    @include('pages.duongdoi')

    <div id="pf7" class="pf w0 h0" data-page-no="54">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/vochong.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0"></div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TỔNG QUAN DỮ LIỆU BÁO CÁO</div>
            <div class="t m0 x5 hf ff2 fs9 fc2 sc0 ls0 ws0" style="left: 0; top: 70px">
                <img src="{{ asset('/' . $path . '/report.png') }}" alt="" width="2000px">
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 1070px">
                {{ $name->{3} ?? null }}<span class="_ _21"></span>{{ $name->{6} ?? null }}<span class="_ _21"> </span>{{ $name->{9} ?? null }}<span class="_ _27" style="width: 1310px;"> </span>{{ $data['data']['dobIndicator']['dobIndicator'] }}
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 1000px">
                {{ $name->{2} ?? null }}<span class="_ _21"></span>{{ $name->{5} ?? null }}<span class="_ _24"> </span>{{ $name->{8} ?? null }}<span class="_ _27" style="width: 1310px;"> </span><span style="top: -60px">{{ $data['data']['personalIndicator']['personalIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 930px">
                {{ $name->{1} ?? null }}<span class="_ _21"></span>{{ $name->{4} ?? null }}<span class="_ _24"> </span>{{ $name->{7} ?? null }}<span class="_ _27" style="width: 1340px;"> </span><span style="top: -135px">{{ $data['data']['attitudeIndicator']['attitudeIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 40px;bottom: 820px">
                {{ $summary->{3} ?? null }}<span class="_ _21"></span>{{ $summary->{6} ?? null }}<span class="_ _24"> </span>{{ $summary->{9} ?? null }}<span class="_ _27" style="width: 1250px;"> </span><span style="top: -135px">{{ $data['data']['soulIndicator']['soulIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 750px">
                {{ $summary->{2} ?? null }}<span class="_ _21"></span>{{ $summary->{5} ?? null }}<span class="_ _24"> </span>{{ $summary->{8} ?? null }}<span class="_ _27" style="width: 1270px;"> </span><span style="top: -200px">{{ implode(', ', $data['data']['passionIndicator']['passionIndicator']) }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 680px">
                {{ $summary->{1} ?? null }}<span class="_ _21"></span>{{ $summary->{4} ?? null }}<span class="_ _24"> </span>{{ $summary->{7} ?? null }}<span class="_ _27" style="width: 1335px;"> </span><span style="top: -275px">{{ $data['data']['thinkingIndicator']['thinkingIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 640px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -275px">{{ $data['data']['emotionalThinkingIndicator']['emotionalThinkingIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 600px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -260px">{{ $data['data']['intuitiveThinkingIndicator']['intuitiveThinkingIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 560px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -250px">{{ $data['data']['actionThinkingIndicator']['actionThinkingIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 450px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -250px">{{ implode(', ', $data['data']['repeatIndicator']['repeatIndicator']) }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 405px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -250px">{{ implode(', ', $data['data']['missIndicator']['missIndicator']) }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 350px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -250px">{{ $data['data']['linkSoulAndPersonalIndicator']['linkSoulAndPersonalIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 300px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -250px">{{ $data['data']['balanceIndicator']['balanceIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 250px">
                <span class="_ _27" style="width: 1600px;"> </span><span style="top: -100px">{{ $data['data']['lifePathIndicator']['lifePathIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 205px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -100px">{{ $data['data']['missionIndicator']['missionIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 150px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -120px">{{ $data['data']['linkLifePathAndMission']['linkLifePathAndMission'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 105px">
                <span class="_ _27" style="width: 1640px;"> </span><span style="top: -120px">{{ $data['data']['maturityIndicator']['maturityIndicator'] }}</span>
            </div>

            <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 355px; left: 95px">3</div>
            <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 355px; left: 205px">1</div>
            <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 355px; left: 315px">3</div>
            <div class="t m0 h14 y167 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 400px; left: 170px">{{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstPeakIndicator'] }}</div>
            <div class="t m0 h14 y167 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 400px; left: 245px">{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondPeakIndicator'] }}</div>
            <div class="t m0 h14 y16a ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 440px; left: 205px">{{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdPeakIndicator'] }}</div>
            <div class="t m0 h14 y16d ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 487px; left: 205px">{{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthPeakIndicator'] }}</div>
            <div class="t m0 h14 y170 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 310px; left: 170px">{{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstChallengeIndicator'] }}<span class="_ _1b" style="width: 170px;"> </span>{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondChallengeIndicator'] }}</div>
            <div class="t m0 h14 y171 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 260px; left: 205px">{{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdChallengeIndicator'] }}</div>
            <div class="t m0 h14 y171 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 220px; left: 205px">{{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthChallengeIndicator'] }}</div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">55</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>
</div>
</body>

</html>
