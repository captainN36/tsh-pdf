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
        @include('new_file.first')
        @include('new_file.chiso')


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
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/2.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 110px; bottom: 1440px">1</div>
                <div id="header1" class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHU KỲ VẬN SỐ</div>

                <div class="t m0 x30 hf yab ff2 fs9 fc2 sc0 ls0 ws0"
                    style="width: 1500px; white-space: normal; text-aligin: justify">
                    {!! substr($data['data']['cycleFortune']['description'], 0) !!}
                </div>
                <style>
                    .t.m0.hf.yaf.ff2.fs9.fc2.sc0.ls0.ws0 p {
                        white-space: break-spaces;
                        font-size: 45px;
                    }
                </style>
                <div class="t m0 hf yaf ff2 fs9 fc2 sc0 ls0 ws0"
                    style="display: flex; flex-wrap: wrap; left: 90px; bottom: 1125px; width: 1950px; text-aligin: justify">
                    {!! $data['data']['cycleFortune']['content'] !!}
                </div>
                @php
                    $array = $data['data']['cycleFortune']['cycleFortune'];
                    $filter = array_filter($array, function ($item) {
                        return $item['year'] == 2023;
                    });
                    $number = array_values($filter)[0]['indicator'];
                @endphp
                <div class="t m0 hb y276 ff2 fs9 fc2 sc0 ls0 ws0 x16-minus"
                    style="left: -75.253333px !important; bottom: 800px">
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
                        if ($year == 2023) {
                            $string = $string . '<span class="ff1 fc6">' . $str . '</span>';
                        } else {
                            $string = $string . $year . '<span class="_ _19"> </span>';
                        }
                        $num++;
                    }
                @endphp
                <div class="t m0 h8 yb8 ff3 fs4 fc2 sc0 ls0 ws0"
                    style="display: inline-flex; bottom: 480px; left: -25px">
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
                        class="_ _a"></span> giai<span class="_ _a"></span> đoạn<span class="_ _9"></span> đầu
                </div>
                <div class="t m0 x5 h12 ybb ff3 fs4 fc2 sc0 ls0 ws0">của<span class="_ _d"></span> chu<span
                        class="_ _b"></span> kỳ<span class="_ _b"></span> vận<span class="_ _b"></span> số.<span
                        class="_ _d"></span> Xem<span class="_ _b"></span> thêm<span class="_ _b"></span>
                    Phần<span class="_ _b"></span> B<span class="_ _d"></span> Mục<span class="_ _b"></span>
                    7<span class="_ _b"></span> "CHỈ<span class="_ _b"></span> SỐ<span class="_ _d"></span>
                    CÁC<span class="_ _b"></span> NĂM"<span class="_ _b"></span> để<span class="_ _d"></span>
                    biết<span class="_ _b"></span> hướng<span class="_ _b"></span> phát</div>
                <div class="t m0 x5 h12 ybb ff3 fs4 fc2 sc0 ls0 ws0" style="bottom: 230px">triển trong năm nay và 2 năm
                    tới!
                </div>
                <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                <div class="t m0 x5 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">7</div>
            </div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>

        <div id="pfb" class="pf w0 h0" data-page-no="8">
            <div class="pc pc5 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/chi-so-nam.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 110px; bottom: 1440px">2</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ CÁC NĂM</div>
                <div class="t m0 x4d h12 y64 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2023</div>
                <div class="t m0 x4e h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 630px; bottom: 1330px">
                    {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['nowYearIndicator'] }}</div>
                <div class="t m0 x4d h12 y66 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2024</div>
                <div class="t m0 x4e h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 630px; bottom: 1260px">
                    {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['nextYearIndicator'] }}</div>
                <div class="t m0 x4d h12 y68 ff3 fs4 fc7 sc0 ls0 ws0">NĂM 2025</div>

                <div class="t m0 x4e h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0"
                    style="left: 630px; bottom: 1190px; width: 2360px !important">
                    {{ $data['data']['yearIndicator']['nowYearIndicator']['yearIndicator']['twoYearsLaterIndicator'] }}
                </div>
                <?php
                // $yearIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'yearIndicator', $data['data']['yearIndicator']['description'], false);
                // $nowYearIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'nowYearIndicator', $data['data']['yearIndicator']['nowYearIndicator']['content'], false);
                // $data['data']['yearIndicator']['nowYearIndicator']['content']
                ?>
                <style>
                    h1 {
                        margin: 0;
                        font-size: inherit;
                        font-weight: inherit;
                    }
                </style>
                <?php
                $text =
                    '<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><em>Những con số này cho biết ở mỗi năm bạn nên tập trung định hướng phát triển theo con số nào. Thường thì cuộc đời sẽ tự đẩy bạn đi theo những con số này. Nếu đi lệch, bạn thường sẽ bị cảm thấy cuộc sống mất cân bằng hoặc bất an. Còn nếu đi đúng hướng bạn thường cảm thấy rất bình an và thuận lợi.</em></p><p><em>Lưu ý: Sau khi sử dụng VIP, mỗi năm bạn vào lại website tra cứu hoặc tải lại file để xem luận giải 3 năm tiếp theo và các nội dung luận giải mới nếu có!</em></p><p><br></p><h1><strong><em>VẬN SỐ NĂM 2024 CỦA BẠN LÀ : 8</em></strong></h1><p>THU HOẠCH, THÀNH TỰU VÀ TĂNG TRƯỞNG</p><p>Đây là năm mà bạn có thể đạt được những bước tiến quan trọng trong cuộc đời. Sau một khoảng thời gian rất chậm chạp và nội tâm của năm ngoái, thì năm này bạn có thể bắt đầu cảm thấy một số tham vọng được khuấy động. Năm nay sẽ nhấn mạnh vào sự thăng tiến, các vấn đề tài chính, địa vị xã hội, kinh doanh và thành tích. Bạn sẽ có cơ hội cải thiện vị thế nghề nghiệp, tài chính và danh tiếng của mình, đồng thời sẽ được công nhận về tiềm năng và kỹ năng của bạn. Trên bình diện công việc, năm nay bạn cần phải hành động với một tinh thần "máu lửa", phán đoán tốt, thực tế và hiệu quả trong suốt cả năm. Với một cơ hội lớn sẽ mở ra, bạn có khả năng cao sẽ gặt hái được nhiều thành tựu và có một sự thay đổi đáng kể trong môi trường làm việc của mình. Trực giác và trí thông minh của bạn cũng sẽ được nâng cao đáng kể nên bạn sẽ thấy mình có nhiều ý tưởng độc đáo mang tính thực tế cao. Tuy nhiên, quyền lực và tiền bạc trong năm nay có thể khiến bạn trở thành con mồi của những hành động bốc đồng hoặc kế hoạch “làm giàu nhanh chóng”, vì vậy hãy cẩn thận vấn đề này.</p><p><br></p><p>Về tài chính, năm nay sẽ thuận lợi cho việc kinh doanh của bạn; mua bán đất </p><></><p>đai, nhà cửa hay các giao dịch tài chính khác và bạn có thể đa dạng hóa nguồn thu nhập của mình. Nếu bạn biết suy xét một cách khôn ngoan, tránh tình cảm cũng như cảm tính thì bạn sẽ có thể có được rất nhiều tài lộc và công danh. Bạn cũng cần học cách kiểm soát chi tiêu của mình. Bên cạnh đó, năm nay bạn cần cẩn thận đừng để bị dẫn dắt vào các liên kết không sinh lợi thông qua việc người quen thuyết phục. Ngoài ra, nếu bạn theo đuổi tiền bạc vì quyền lực, lòng tham, hoặc yêu thích sự giàu có, nó sẽ lọt qua kẽ tay Ngoài ra, nếu bạn theo đuổi tiền bạc vì quyền lực, lòng tham, hoặc yêu thích sự giàu có, nó sẽ lọt qua kẽ tay Ngoài ra, nếu bạn theo đuổi tiền bạc vì quyền lực, lòng tham, hoặc bạn nhanh chóng như khi kiếm được. Hãy duy trì một thái độ lành mạnh đối với tiền bạc, nếu không bạn có thể mất tất cả, rơi vào tình trạng phá sản, mất cân bằng năng lượng. Cố gắng không đánh giá quá cao khả năng của bạn hoặc giá trị của bất kỳ thứ gì bạn đang giao dịch, đặc biệt là các khoản đầu tư, mua hoặc bán bất động sản hoặc tài sản. Những sai lầm lớn về tiền bạc có thể mắc phải nếu bạn không cẩn thận; những sai lầm này có thể ảnh hưởng đến bạn trong nhiều năm tới. Nên nhớ rằng tiền kiếm được một cách trung thực và hiệu quả có thể tăng lên, mang lại cổ tức lớn hơn. Điều quan trọng là bạn phải cân bằng quyền lực với lòng trắc ẩn và sự quan tâm đến người khác.</p><p>Trong các mối quan hệ, năm nay bạn có thể tạo dựng được nhiều mối quan hệ chất lượng, bền lâu. Cuộc sống sẽ đưa bạn tiếp xúc với những người quan trọng. Nếu bạn đang có ý định kết hôn thì đây chính là một năm lý tưởng cho hôn nhân. Bạn và nửa kia sẽ tìm cách truyền cho mối quan hệ nhiều cảm xúc và tâm linh hơn. Điều bạn cần lưu ý là không nên để nửa kia của bạn tự giải quyết các vấn đề, hãy luôn ở đó vì họ và hỗ trợ họ. Bạn cũng nên dành thời gian để quan tâm và chăm sóc những người thân yêu. Đồng thời hãy luôn duy trì vấn đề độc lập tài chính trong gia đình bạn. Nếu bạn đang yêu xa, năm nay bạn có thể có cơ hội gặp gỡ nửa kia của mình. Hoặc nếu bạn đang độc thân, bạn có khả năng sẽ tìm thấy một người bạn đời lý tưởng.</p><p>Trong vấn đề sức khỏe, năm cá nhân số 8 thường cho thấy bạn có một sức khỏe tốt. Nếu bạn đang mắc một số bệnh lâu năm, bạn có thể mong đợi sự nhẹ nhõm và thậm chí hồi phục nhanh hơn. Hãy theo dõi sức khỏe của bạn cũng như của cả gia đình và đảm bảo họ được kiểm tra thường xuyên. Tuy nhiên, đôi lúc bạn cũng có những sự mệt mỏi, lo lắng, điều này sẽ gây căng thẳng cho sức khỏe của bạn. Hãy tập thể dục một cách thường xuyên; tập thể dục nhịp điệu và ăn nhiều thức ăn bổ dưỡng hơn. Ngoài ra, bạn có thể di chuyển hoặc thay đổi điều kiện sống của mình, điều này tốt cho sức khỏe </p><p><br></p><p><br></p><></><p>thể chất và tinh thần của bạn.</p><p>Liên quan đến học tập thi cử, nếu bạn đang là học sinh, năm nay khả năng cao sẽ đỗ đạt đại học hoặc tham gia vào một chương trình học nào đó. Đây cũng là thời điểm thuận lợi cho những người đang tìm kiếm việc làm, vì có thể sẽ có được những vị trí lý tưởng. Những người chọn đi du học nước ngoài hoặc theo đuổi các chương trình học thạc sĩ, tiến sĩ,... cũng sẽ rất phù hợp. Nhìn chung, năm nay sẽ rất tốt cho việc học hành thi cử của bạn.</p><p>Về bản thân, năm nay bạn cần cải thiện các mối quan hệ trong cuộc sống cũng như trong công việc của bạn và nên yêu cầu trợ giúp khi bạn gặp khó khăn. Bạn có thể cần sự hỗ trợ của cố vấn tài chính để quản lý tài chính của mình. Bạn nên chú ý đến các đề xuất của họ và hành động theo chúng. Ngoài ra, nếu bạn gặp những vấp ngã trong năm nay, hãy tìm ra nguyên nhân và giải pháp cho vấn đề đó, rút kinh nghiệm rồi tiếp tục mạnh mẽ đứng dậy bước tiếp.</p><p>Tóm lại năm này là năm thu hoạch của những thứ bạn đã nỗ lực trong thời gian trước, vì vậy khả năng cao sẽ mang đến thành công, quyền lực và bạn sẽ đạt được những gì mình <span style="color: rgb(20, 20, 20);">mong muốn. Những thành tựu trong năm nay chỉ là bước khởi đầu cho sự thăng tiến lâu dài của bạn. Tuy nhiên, bạn cũng cần làm việc chăm chỉ và hành động mạnh mẽ. Đừng quên bạn cần xem xét thật kỹ các vấn đề về mặt đạo đức và pháp lý, vì năng lượng của năm cá nhân số 8 có thể khiến bạn vướng vào các rắc rối pháp lý</span></p><></>';
                $yearIndicator = contentText($text);
                ?>
                <div class="t m0 x5 h9 yc7 ff4 fs4 fc2 sc0 ls0 ws0"
                    style="width: 2360px !important; white-space: normal; text-align: justify; top: 0">
                    {!! $yearIndicator[0] !!}
                </div>

                <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
            </div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>

        @for ($i = 1; $i < count($yearIndicator); $i++)
            <?php $page++; ?>
            <div id="pfd" class="pf w0 h0" data-page-no="13">
                <div class="pc pcb w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt=""
                        src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                    <div class="t m0 x5 hf yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                        style="width: 2360px; white-space: normal; text-align: justify;">
                        @if (isset($yearIndicator[$i]))
                            {!! $yearIndicator[$i] !!}
                        @endif
                    </div>
                    <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                    @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                    <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                </div>
                <div class="pi"
                    data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
            </div>
        @endfor

        <?php
        // $nextYearIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'nextYearIndicator', $data['data']['yearIndicator']['nextYearIndicator']['content'], false);
        ?>
        <?php
        $text =
            '<h1><strong><em>VẬN SỐ NĂM 2025 CỦA BẠN LÀ : 9</em></strong></h1><h1><strong><em>NHÌN LẠI, SUY NGẪM, CHO ĐI VÀ VƯƠN XA</em></strong></h1><p>Đây là một năm hoàn thành, kết thúc và là thời điểm mà bạn có khả năng kiểm tra lại nhiều yếu tố trong cuộc sống của mình, một số yếu tố trong số đó bạn chắc chắn tự hào và cũng có những yếu tố mà bạn có thể muốn thay đổi. Đây là cũng năm để bạn giải phóng bản thân mình, hoàn thành nốt những dự án, kế hoạch còn dang dở. Và bạn sẽ có xu hướng chuẩn bị để bắt đầu một chu kỳ 9 năm mới. Trong công việc, giai đoạn này bạn cần nhìn lại và suy ngẫm xem công việc hiện tại có thực sự phù hợp với mình không. Bạn có thể phải đối mặt với những thách thức nội tâm trong việc đánh giá đó, chẳng hạn như mất niềm tin vào khả năng làm việc hoặc sự nghiệp của mình. Tuy nhiên, bài tập này là cần thiết cho sự chuyển đổi đáng kể để thăng tiến trong sự nghiệp của bạn. Bạn sẽ hiểu rõ hơn về các mục tiêu nghề nghiệp của mình cho chu kỳ tiếp theo. Năm số 9 cũng sẽ khiến bạn nhận ra rằng bạn đưa ra những quyết định về nghề nghiệp tốt nhất khi bạn đi theo tiếng gọi bên trong của mình thay vì bị ảnh hưởng bởi những gì người khác nghĩ là tốt nhất cho bạn. Cuối cùng, bạn cần lưu ý rằng năm nay không phải là thời điểm phù hợp để tham gia vào việc kinh doanh mới. Tốt hơn hết, hãy đợi đến năm sau. Tuy nhiên, trong năm nay, nếu bạn tham gia vào nghệ thuật với tư cách là một diễn viên, nhà văn hoặc nghệ sĩ biểu diễn, bạn sẽ thấy sự cải thiện về tài năng và mở ra nhiều cơ hội mới cho sự thăng tiến và phát triển của bạn. Về các mối quan hệ, đây sẽ là thời điểm mà bạn cần quan tâm nhiều hơn tới người khác và việc cho đi có thể trở nên quan trọng. Trong tình cảm, nếu bạn dự định hàn gắn mối quan hệ cá nhân, hãy cân nhắc kỹ trước khi tiến tới hôn nhân. Ngay cả khi bạn và người ấy của mình đã bên nhau nhiều năm, thì đây cũng không phải là năm để kết hôn. Các mối quan hệ cá nhân bắt đầu trong năm nay có thể kết thúc sớm. Bạn sẽ gặp phải những thay đổi thất thường về tâm trạng và những điều bất ngờ có thể xảy ra. Nếu các mối quan hệ bạn bè, hôn nhân và đối tác đang bị lung lay, bạn sẽ phải đối mặt và xử lý. Những trải nghiệm hoặc mối quan hệ đi ra khỏi cuộc đời bạn có thể để lại cảm giác mất mát sâu sắc và những vết thương cũ sẽ mở ra. Hãy sống theo lý trí, đừng coi việc kết thúc là một sự thất bại hay nỗi buồn. Mặc dù nó có thể không rõ ràng ngay lập tức, nhưng hãy hiểu rằng kết thúc sẽ cho phép nhiều sự tự do hơn. Những cuộc tình qua sự phù phiếm sẽ dễ dàng tan vỡ. Bạn có thể phải học một bài học rằng cuối cùng thì tình yêu sẽ không phải là sự hạn chế hay ràng buộc nhau, mà là sự hỗ trợ tự do. Xét về sức khỏe, năm nay đòi hỏi bạn cần có một tính cách mạnh mẽ và nguyên tắc cao vì nhiều trải nghiệm và thử thách về cảm xúc sẽ</p><p><br></p><></><p> đến với bạn. Nếu bạn không cẩn thận, căng thẳng thần kinh và lo lắng có thể gây ra các vấn đề về sức khỏe. Hãy theo dõi sức khỏe của bạn; đây sẽ là thời điểm tốt để bạn đi kiểm tra sức khỏe tổng thể. Bạn hãy giữ thể lực và nên tập thể dục thường xuyên. Bạn cũng cần cẩn thận và quan sát những gì bạn làm vì bạn có thể dễ gặp tai nạn hơn trong năm nay. Đi du lịch nếu bạn có thể. Hãy bước ra ngoài và hít thở, cảm nhận làn gió tươi mát, lắng nghe tiếng chim hót, hoặc hồi tưởng với những người bạn cũ. Điều này sẽ giúp sức khỏe thể chất và tinh thần của bạn được tốt hơn. Trên phương diện tài chính, năm nay chưa phải là thời điểm tốt cho việc đầu tư kinh doanh, mua bán đất đai hoặc các giao dịch tài chính khác. Nếu buộc phải đưa ra các quyết định lớn, bạn hãy thận trọng. Đây là năm mà tốt nhất bạn nên ngồi xuống, nhìn lại, xem xét mọi thứ và đúc rút ra cho mình những bài <span style="color: rgb(20, 20, 20);">học. Điều này sẽ là tiền đề để bạn có những lựa chọn và hướng đi đúng cho năm số 1 tới - năm của những khởi đầu mới. Liên quan đến học tập thi cử, nếu bạn có dự định học lên các cấp học cao hơn hoặc đi du học thì năm nay khá phù hợp cho bạn. Bạn có thể sẽ đón nhận được một số cơ hội sẽ đến với bạn trong năm tiếp theo. Về bản thân, đây là thời điểm tốt nhất để sắp xếp lại cuộc sống của bạn, nhận ra những cảm xúc chưa trưởng thành, suy nghĩ tiêu cực, những khuôn mẫu hành vi hạn chế và loại bỏ chúng. Hãy học cách bình tĩnh, cân bằng và chấp nhận cuộc sống, tha thứ cho những người trong quá khứ của bạn và để họ tiếp tục cuộc sống của họ, cũng như bạn phải tiếp tục với cuộc sống của mình. Đây là năm để vứt bỏ những điều đã cũ, cho đi những yêu thương đã mất và đọc lại những cuốn sách hay. Bám víu vào quá khứ sẽ chỉ gây ra rắc rối cho tương lai. Đã đến lúc phải buông tay. Tóm lại thành công của bạn vào năm này là việc chấm dứt hoặc kết thúc một cách tốt đẹp những gì đã diễn ra không thuận lợi từ trước và sau đó chuẩn bị cho những giai đoạn tiếp theo. Đây cũng là năm cho đi sự giúp đỡ của bạn với mọi người. Bạn cũng cần sắp xếp lại cuộc sống của mình, dọn dẹp và điều chỉnh lại cảm xúc, loại bỏ những suy nghĩ tiêu cực, tha thứ cho những người trong quá khứ đã làm tổn thương bạn, chuẩn bị cho một cuộc sống mới.</span></p>';
        $yearIndicator = contentText($text);
        ?>

        @for ($i = 0; $i < count($yearIndicator); $i++)
            <?php $page++; ?>
            <div id="pfd" class="pf w0 h0" data-page-no="13">
                <div class="pc pcb w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt=""
                        src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                    <div class="t m0 x5 hf yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                        style="width: 2360px; white-space: normal; text-align: justify;">
                        {!! $yearIndicator[$i] !!}
                    </div>

                    <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                    @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])

                    <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                </div>
                <div class="pi"
                    data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
            </div>
        @endfor


        <?php
        // $twoYearsLaterIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'twoYearsLaterIndicator', $data['data']['yearIndicator']['twoYearsLaterIndicator']['content'], false);
        ?>
        <?php
        $text =
            '<h1><strong><em>VẬN SỐ NĂM 2026 CỦA BẠN LÀ : 1</em></strong></h1><h1><strong><em>MỘT KHỞI ĐẦU MỚI TRONG CUỘC SỐNG CỦA BẠN</em></strong></h1><p>Đây là năm đánh dấu sự khởi đầu của chu kỳ chín năm mới trong cuộc đời bạn. Năm này sẽ đưa bạn vào vạch xuất phát, thúc đẩy cơ hội bắt đầu một vòng đời chín năm mới, sẽ có một vài thử thách nảy sinh trong năm cá nhân số 1, tuy nhiên điều đó sẽ tùy thuộc vào mức độ bạn nhìn nhận vấn đề. Đây là năm hứa hẹn sẽ trở thành một cuộc phiêu lưu mới đầy thú vị, với cuộc sống đón nhận những thử thách mới mở đường cho chu kỳ chín năm tiếp theo trong cuộc đời bạn. Nó khuyến khích bạn sống một cuộc sống trọn vẹn hơn bằng cách nhận ra tiềm năng mới đang xuất hiện. Đó là thời điểm chuyển tiếp và có những khởi đầu mới ở các khía cạnh khác nhau của cuộc sống của bạn.</p><p>Trong khía cạnh công việc, những gì bạn làm trong năm nay sẽ định hướng cho 9 năm tiếp theo của bạn. Năm cá nhân số 1 là thời điểm tốt nhất để thực hiện bất cứ điều gì quan trọng đối với bạn trong công việc, lĩnh vực kinh doanh hoặc hoạt động sáng tạo. Không có thời gian nào tốt hơn năm nay để bạn thực hiện những điều đó.</p><p>Vì vậy, bạn hãy ngồi xuống, vạch ra các mục tiêu của mình một cách rõ ràng, hợp lý và hành động theo các mục tiêu đó. Về các mối quan hệ, sự khởi đầu của một chu kỳ chín năm có khả năng mang lại những thay đổi trong đời sống tình cảm của bạn. Bạn thậm chí có thể tìm thấy các mối quan hệ mới trong năm nay. Nhiều khả năng bạn sẽ có các cơ hội gặp những người mới nếu hiện tại bạn chưa có mối quan hệ lãng mạn nào. Nếu bạn đang ở trong một mối quan hệ lãng mạn, bạn có thể thấy mình đang có những bước phát triển mới có khả năng cải thiện mối quan hệ đó.</p><p>Những mối quan hệ mới không chỉ giúp bạn hiểu bản thân hơn bằng cách bộc lộ những khía cạnh mới của bản thân mà còn là thước đo hữu ích cho sự tiến bộ trong cuộc sống của bạn. Thậm chí nếu bạn quyết định chấm dứt một mối quan hệ, bạn vẫn học được những bài học nhất định. Liên quan đến sức khỏe, năm cá nhân số 1 đại diện cho một khởi đầu mới và bạn có thể được truyền cảm hứng để bắt đầu các mục tiêu về sức khỏe của mình vì nó đi đầu trong chu kỳ chín năm.Năm nay sẽ giúp bạn dễ dàng rèn luyện tâm trí để tập trung vào các mục tiêu của mình. Với sự tập trung, bạn làm chủ tinh thần; cơ thể vật lý của bạn vẫn có thể duy trì hoạt động ngay cả khi ngủ ít; bạn cũng sẽ dễ dàng từ bỏ những thói quen xấu hơn. Sức mạnh thể chất của bạn sẽ tăng lên trong năm nay, có lẽ tốt hơn so với trước đây. Tóm lại, năm nay bạn cần theo đuổi các hoạt động thể dục thể thao, rèn luyện tâm trí để nâng cao sức khỏe thể chất cũng như tinh thần. Nếu bạn đang có </p><p><br></p><></><p>những thói quen xấu ảnh hưởng đến sức khỏe, năm nay cũng là thời điểm thuận lợi giúp bạn từ bỏ chúng dễ dàng hơn.</p><p>Xét về tài chính, đây là một năm tuyệt vời để khám phá các lựa chọn đầu tư khác nhau. Nhiều lựa chọn đầu tư tốt và ý tưởng kinh doanh sẽ đến với bạn. Bạn cần dành nhiều thời gian để phân tích các lựa chọn đó và đưa ra lựa chọn đúng đắn, phù hợp nhất với bạn. Nếu muốn đầu tư vào đất đai, năm nay là thời điểm thuận lợi vì nó sẽ đem lại cho bạn cơ hội sinh lời cao trong các năm về sau. Hoặc nếu bạn có ý định mua đất để xây dựng nhà cửa thì năm nay cũng là năm phù hợp để bạn thực hiện điều đó.</p><p>Về học tập thi cử, năm nay là khoảng thời gian tốt để bạn bắt đầu học tập, nghiên cứu về những khía cạnh, lĩnh vực mới. Nếu bạn đang có ý định thay đổi ngành học, học lên các cấp học cao hơn hoặc có định hướng đi du học thì đây là năm rất tốt để bạn thực hiện những dự định đó. Trên khía cạnh bản thân, trước xu hướng năng lượng của năm nay, bạn nên bắt đầu thiết lập những thói quen mới giúp nâng cao trí tuệ, giá trị bản thân như đọc sách, thiền định, chơi một loại nhạc cụ mới hoặc học một ngôn ngữ mới, ... Hoặc nếu bạn còn "non trẻ" trong công việc, lĩnh vực mà bạn đang quan tâm, năm nay cũng là thời điểm mà bạn nên bắt đầu tìm cho mình những người "thầy" tốt. Họ có thể là bạn bè, cộng sự của bạn, hoặc có thể là các tiền bối đi trước... Ngoài ra, bạn cũng cần phát triển tính độc lập, khả năng lãnh đạo và sự tự tin vào bản thân để đủ mạnh mẽ đối mặt với những tình huống thử thách.</p><p>Tóm lại đây là một năm có xu hướng năng động với nhiều quyết định phải đưa ra, để đạt được thành công vào năm này, bạn cần bắt đầu những điều mới (tạo một thói quen mới, làm một việc mới, dự án mới,...). Nếu bạn không thể hoặc không sẵn sàng trả lời những lời kêu gọi thay đổi từ hoàn cảnh của bạn và thực hiện những bước đi mới, cần thiết trong năm nay thì triển vọng phát triển của bạn có thể bị trì hoãn cho đến chu kỳ 9 năm tiếp theo. Vì vậy năm nay hãy mạnh dạn thay đổi và bắt đầu những dự định cho cuộc đời của bạn. Ở một số khía cạnh, cuộc sống như đang bắt đầu lại.</p><p><br></p>';
        $yearIndicator = contentText($text);
        ?>

        @for ($i = 0; $i < count($yearIndicator); $i++)
            <?php $page++; ?>
            <div id="pfd" class="pf w0 h0" data-page-no="13">
                <div class="pc pcb w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt=""
                        src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                    <div class="t m0 x5 hf yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                        style="width: 2360px !important; white-space: normal; text-align: justify;">
                        @if (isset($yearIndicator[$i]))
                            {!! $yearIndicator[$i] !!}
                        @endif
                    </div>

                    <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                    @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                    <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                </div>
                <div class="pi"
                    data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
            </div>
        @endfor



        <div id="pfd" class="pf w0 h0" data-page-no="12">
            <div class="pc pcb w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/chi-so-nam.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 110px; bottom: 1440px">3</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">Chỉ số các tháng</div>
                <div class="t m0 x4d h12 y64 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->format('m/Y') }}</div>
                <div class="t m0 x4e h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 630px; bottom: 1330px">
                    {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['nowMonthIndicator'] }}
                </div>
                <div class="t m0 x4d h12 y66 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->addMonths(1)->format('m/Y') }}
                </div>
                <div class="t m0 x4e h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 630px; bottom: 1260px">
                    {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['nextMonthIndicator'] }}
                </div>
                <div class="t m0 x4d h12 y68 ff3 fs4 fc7 sc0 ls0 ws0">Tháng {{ now()->addMonths(2)->format('m/Y') }}
                </div>

                <div class="t m0 x4e h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0"
                    style="width: 2360px !important; left: 630px; bottom: 1190px">
                    {{ $data['data']['monthIndicator']['nowMonthIndicator']['monthIndicator']['twoMonthsLaterIndicator'] }}
                </div>

                <?php
                // $monthIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'monthIndicator', $data['data']['monthIndicator']['description'], false);
                // $nowMonthIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'nowMonthIndicator', $data['data']['monthIndicator']['nowMonthIndicator']['content'], false);
                $page = $page + 1;
                $text =
                    '<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><em>Những con số này cho biết ở mỗi năm bạn nên tập trung định hướng phát triển theo con số nào. Thường thì cuộc đời sẽ tự đẩy bạn đi theo những con số này. Nếu đi lệch ra bạn thường sẽ bị cảm thấy cuộc sống mất cân bằng hoặc bất an. Còn nếu đi đúng hướng bạn thường cảm thấy rất bình an và thuận lợi.</em></p><p><em>Lưu ý: Sau khi sử dụng VIP, mỗi năm bạn vào lại website tra cứu hoặc tải lại file để xem luận giải 3 năm tiếp theo và các nội dung luận giải mới nếu có!</em></p><p><br></p><h1><strong><em>CHỈ SỐ THÁNG 1/2024 CỦA BẠN LÀ 9</em></strong></h1><p>Đây là tháng để bạn nhìn lại cuộc sống của mình trong suốt thời gian qua và xem bạn đã đạt được những gì. Liên quan</p><p>đến công việc, tháng này bạn nên xem xét nghề nghiệp hiện tại có thực sự phù hợp với bạn hay không. Hoặc bạn nên đánh giá lại xem những gì bạn đã làm tốt, những gì vẫn còn thiếu sót để bắt đầu lên kế hoạch học tập và phát triển trong tháng tiếp theo. Cuối cùng là hãy hoàn thành các dự án còn dang dở và giải quyết nốt những công việc còn tồn động. Xét về sức khỏe, đây là thời điểm phù hợp để bạn đi kiểm tra sức khỏe tổng quát hằng năm. Ngoài ra, bạn cũng nên chấm dứt những thói quen xấu. Điều này sẽ giúp bạn giải phóng thời gian và năng lượng cho cuộc sống. Về bản thân, hãy tổ chức lại các kế hoạch của bạn và chuẩn bị cho những nguồn năng lượng mới đang đến. Dành thời gian để thư giãn và cầu nguyện. Nếu bạn vẫn thấy cuộc sống của mình khó khăn, bạn có thể cần suy nghĩ lại về những gì mình đang làm, phải chăng ở đâu đó trên con đường đang đi, bạn đã đầu tư năng lượng của mình sai chỗ. Đây cũng là thời điểm để bạn bừng tỉnh, đừng đắm mình trong quá khứ. Lưu ý rằng, bạn đang sống trong hiện tại và bạn cần tập trung vào cách để bản thân có thể cải thiện cuộc sống của mình cho hôm nay và ngày mai. Năng lượng mới sẽ đến trong tháng tới để bạn tạo ra một tương lai đầy hy vọng. Tóm lại, đây là tháng bạn nên nhìn lại và chấm dứt một cách</p><p><br></p><></><p> tốt đẹp những việc cần kết thúc hoặc những thứ không còn phù hợp với bạn nữa. Đã đến lúc suy nghĩ về đích đến và tương lai của bạn.</p>';
                $yearIndicator = contentText($text);
                ?>
                <div class="t m0 x5 h9 ff4 fs4 fc2 sc0 ls0 ws0"
                    style="width: 2360px !important; white-space: normal; top: 0; text-align: justify;">
                    @if ($yearIndicator[0])
                        {!! $yearIndicator[0] !!}
                    @endif
                </div>

                <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                <?php $page = $page + 1; ?>
                <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
            </div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
        @if (count($yearIndicator) >= 2)
            @for ($i = 1; $i < count($yearIndicator); $i++)
                <?php $page++; ?>
                <div id="pfc" class="pf w0 h0" data-page-no="9">
                    <div class="pc pce w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 h12 yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px; white-space: normal; text-align: justify;">
                            @if (isset($yearIndicator[$i]))
                                {!! $yearIndicator[$i] !!}
                            @endif
                        </div>
                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif
        <?php
        // $nextMonthIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'nextMonthIndicator', $data['data']['monthIndicator']['nextMonthIndicator']['content'], false);
        // $twoMonthsLaterIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'twoMonthsLaterIndicator', $data['data']['monthIndicator']['twoMonthsLaterIndicator']['content'], false);
        $text =
            '<h1><strong><em>CHỈ SỐ THÁNG 2/2024 CỦA BẠN LÀ 1</em></strong></h1><p>Đây là một tháng quan trọng đối với bạn.Trong công việc, tháng này là thời điểm tuyệt vời để bắt đầu một dự án mới, kế hoạch mới hoặc một công việc mới. Bạn nên suy ngẫm về các mục tiêu của mình và tập trung vào phát triển chúng. Đặc biệt, khoảng thời gian này thuận lợi cho mọi việc bạn làm, vì vậy tốt hơn hết bạn nên hoàn thành những nhiệm vụ quan trọng và có lợi cho mình chứ không phải ai khác. Ngoài ra, một điều bạn cần lưu ý là những gì bạn làm trong tháng này có thể có tác động lâu dài, vì vậy hãy làm cho nó có giá trị! Liên quan đến sức khỏe, đa phần tháng này bạn khá khỏe mạnh. Đây là tháng tốt để bạn bắt đầu thiết lập thói quen tập thể dục nếu bạn muốn có một cơ thể đẹp và sức khỏe dẻo dai sau này. Về học tập phát triển bản thân, tháng này bạn nên bắt đầu những thói quen mới giúp nâng cao giá trị bản thân. Bạn có thể tham gia vào một số khóa học, học một ngôn ngữ mới, tạo lập một thói quen tốt mới,... Những điều này sẽ giúp bạn đi đúng năng lượng của tháng và đem lại cho bạn rất nhiều giá trị trong thời gian tới.Tóm lại, đây là một tháng rất tốt để bạn bắt đầu làm những điều mới mẻ. Vì vậy, hãy nắm bắt lấy nó.</p><p><br></p>';
        $yearIndicator = contentText($text);
        ?>
        @if (!empty($yearIndicator))
            @for ($i = 0; $i < count($yearIndicator); $i++)
                <?php $page++; ?>
                <div id="pfd" class="pf w0 h0" data-page-no="13">
                    <div class="pc pcb w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 hf yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px !important; white-space: normal; text-align: justify;">
                            @if (isset($yearIndicator[$i]))
                                {!! $yearIndicator[$i] !!}
                            @endif
                        </div>

                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif

        <?php
        $text =
            '<h1><strong><em>CHỈ SỐ THÁNG 3/2024 CỦA BẠN LÀ 2</em></strong></h1><p>Tháng này bạn nên tạo được sự cân bằng trong cuộc sống của mình. Trực giác của bạn sẽ trở nên nhạy bén hơn, chính nó sẽ dẫn dắt bạn đi đến những quyết định đúng đắn trong cuộc sống của mình. Về các mối quan hệ, đây là một tháng để bạn kết nối sâu sắc hơn với những người xung quanh trong cuộc sống như bạn bè, đồng nghiệp, đối tác,... Nếu gần đây bạn là người cô độc, thì đã đến lúc tìm kiếm tình yêu cùng với sự lãng mạn. Xét về công việc, tháng này đề cao sự hợp tác thay vì làm việc hoặc đưa ra những quyết định độc lập. Nếu có thể, bạn nên tham gia vào các dự án nhóm hoặc những việc đề cao tính đồng đội. Những người làm các công việc liên quan đến sáng tạo sẽ thấy công việc của mình được cải thiện nhờ trực giác của tháng số 2 này. Liên quan đến sức khỏe, đây là tháng mà bạn cần học cách kiểm soát cảm xúc của mình để giữ được sức khỏe tinh thần tốt. Sự nhạy cảm của bạn trong tháng này sẽ tăng lên, đồng nghĩa với việc bạn dễ dàng đồng cảm với cảm xúc của những người xung quanh. Thế nhưng, bạn cũng có thể dễ bị những cảm xúc tiêu cực quấn lấy, vậy nên hãy tỉnh táo hơn nhé. Về thể chất, đôi khi bạn có thể cảm thấy không được khỏe mạnh và trì hoãn trong việc tập thể dục. Bạn cần học cách chăm sóc bản thân mình và kiên trì luyện tập thể dục thể thao. Về học tập và rèn luyện, tháng này bạn nên bắt đầu hoặc duy trì thói quen đọc sách, thiền định, yoga,...Điều này sẽ giúp bạn tập trung, kiểm soát cảm xúc tốt hơn và nâng cao trí tuệ cũng như thể chất. Tóm lại, đây là tháng mà bạn nên tập trung vào sự hợp tác và phát triển giá trị của bản thân. Bạn cũng nên tin tưởng vào bản thân và cảm xúc của mình, bạn sẽ thấy rằng những điều này không bao giờ biết nói dối.</p><p><br></p>';
        $yearIndicator = contentText($text);
        ?>

        @if (!empty($yearIndicator))
            @for ($i = 0; $i < count($yearIndicator); $i++)
                <?php $page++; ?>
                <div id="pfd" class="pf w0 h0" data-page-no="13">
                    <div class="pc pcb w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 hf yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px !important; white-space: normal; text-align: justify;">
                            @if (isset($yearIndicator[$i]))
                                {!! $yearIndicator[$i] !!}
                            @endif
                        </div>

                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif

        <?php
        $array = [];
        foreach ($data['data']['percentIndicator'] as $key => $val) {
            $array[] = $val[1];
        }
        $max = max($array);
        ?>

        <div id="pfd" class="pf w0 h0" data-page-no="15">
            @include('new_file.style', ['data' => $data])
            <div class="pc pcb w0 h0 opened">
                <?php
                $pth = $path == 9 ? 8 : $path;
                ?>
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $pth . '/bannga.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0" style="left: 92px">4</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">NHÓM TÍNH CÁCH THEO BẢN NGÃ</div>

                <div class="t m0 hf ff2 fs9 fc2 sc0 ls0 ws0"
                    style="width: 1360px; text-align: justify; white-space: normal; top: 70px; left: 450px">
                    {!! $data['data']['monthIndicator']['description'] !!}
                </div>

                <div class="t m0 x5 h8 yc3 ff1 fs4 fc2 sc0 ls0 ws0">1.1. Mạnh mẽ - Độc lập - Tự tin</div>
                @isset($data['data']['percentIndicator'][0])
                    <div class="t m0 x33 h10 yc4 ff1 fs9 fc0 sc0 ls0 ws0 bannga-1">
                        {{ $data['data']['percentIndicator'][0][1] }}%</div>
                @endisset
                <div class="t m0 x5 h8 yc5 ff1 fs4 fc2 sc0 ls0 ws0">1.2. Lắng nghe - Khéo léo - Nhạy cảm</div>
                @isset($data['data']['percentIndicator'][1])
                    <div class="t m0 x34 h10 yc6 ff1 fs9 fc0 sc0 ls0 ws0 bannga-2">
                        {{ $data['data']['percentIndicator'][1][1] }}%</div>
                @endisset
                <div class="t m0 x5 h8 yc7 ff1 fs4 fc2 sc0 ls0 ws0">1.3. Sáng tạo - Hoạt bát - Lạc quan</div>
                @isset($data['data']['percentIndicator'][2])
                    <div class="t m0 x35 h10 yc8 ff1 fs9 fc0 sc0 ls0 ws0 bannga-3">
                        {{ $data['data']['percentIndicator'][2][1] }}%</div>
                @endisset
                <div class="t m0 x5 h8 yc9 ff1 fs4 fc2 sc0 ls0 ws0">1.4. Cẩn thận - Cầu toàn - Thực tế</div>
                @isset($data['data']['percentIndicator'][3])
                    <div class="t m0 x34 h10 yca ff1 fs9 fc0 sc0 ls0 ws0 bannga-4">
                        {{ $data['data']['percentIndicator'][3][1] }}%</div>
                @endisset
                <div class="t m0 x5 h8 ycb ff1 fs4 fc2 sc0 ls0 ws0">1.5. Năng động - Linh hoạt - Tò mò</div>
                @isset($data['data']['percentIndicator'][4])
                    <div class="t m0 x35 h10 ycc ff1 fs9 fc0 sc0 ls0 ws0 bannga-5">
                        {{ $data['data']['percentIndicator'][4][1] }}%</div>
                @endisset
                <div class="t m0 x5 h8 ycd ff1 fs4 fc2 sc0 ls0 ws0">1.6. Quan tâm - Yêu thương - Kiểm soát</div>
                @isset($data['data']['percentIndicator'][5])
                    <div class="t m0 x12 h10 yce ff1 fs9 fc0 sc0 ls0 ws0 bannga-6">
                        {{ $data['data']['percentIndicator'][5][1] }}%</div>
                @endisset
                <div class="t m0 x5 h8 ycf ff1 fs4 fc2 sc0 ls0 ws0">1.7. Thông thái - Khám phá - Truyền đạt</div>
                @isset($data['data']['percentIndicator'][6])
                    <div class="t m0 x36 h10 yd0 ff1 fs9 fc0 sc0 ls0 ws0 bannga-7">
                        {{ $data['data']['percentIndicator'][6][1] }}%</div>
                @endisset
                <div class="t m0 x5 h8 yd1 ff1 fs4 fc2 sc0 ls0 ws0">1.8. Công bằng - Tập trung - Lý tưởng</div>
                @isset($data['data']['percentIndicator'][7])
                    <div class="t m0 x12 h10 yd2 ff1 fs9 fc0 sc0 ls0 ws0 bannga-8">
                        {{ $data['data']['percentIndicator'][7][1] }}%</div>
                @endisset
                <div class="t m0 x5 h8 yd3 ff1 fs4 fc2 sc0 ls0 ws0">1.9. Trách nhiệm - Rộng lượng - Hào phóng</div>
                @isset($data['data']['percentIndicator'][8])
                    <div class="t m0 x37 h10 yd4 ff1 fs9 fc0 sc0 ls0 ws0 bannga-9">
                        {{ $data['data']['percentIndicator'][8][1] }}%</div>
                @endisset
                <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                <?php $page = $page + 1; ?>
                <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $page; ?></div>
            </div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>


        <div id="pf7" class="pf w0 h0" data-page-no="16">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/c.png') }}">
                <div class="t m0 x11 hb y91 ff1 fs5 fc0 sc0 ls0 ws0">C</div>
                <div class="t m0 hc y92 ff1 fs6 fc2 sc0 ls0 ws0" style="left: 150px">PHÂN TÍCH ĐƯỜNG ĐỜI</div>
                <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                <?php $page = $page + 1; ?>
                <div class="t m0 x5 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
            </div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
        <div id="pf7" class="pf w0 h0" data-page-no="17">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 110px; bottom: 1440px">1</div>
                @php
                    $title =
                        '<p><span style="color: rgb(32, 33, 36);">1. CHỈ SỐ ĐƯỜNG ĐỜI (SỐ CHỦ ĐẠO) CỦA BẠN LÀ: <span class="text-success">SỐ 10 - THỦ LĨNH</span></span></p>';
                    $arr = explode('<span class="text-success">', $title);
                    $end = end($arr);
                    $final = explode('</span', $end);
                    $numberLifePath = $final[0];
                @endphp
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ ĐƯỜNG ĐỜI (SỐ CHỦ ĐẠO)</div>
                <div class="t m0 x39 h7 yd5 ff4 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $numberLifePath }}
                </div>
                <?php
                // $lifePathIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'lifePath_description', $data['data']['lifePathIndicator']['description'], false);
                // $lifePathIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'lifePathIndicator', $data['data']['lifePathIndicator']['content'], false);
                $lifePathIndicator = contentText($data['data']['lifePathIndicator']['content']);
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0" id="lifePathDescription"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['lifePathIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs4 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; text-align: justify;">
                        {!! $lifePathIndicator[0] !!}
                    </div>
                </div>



                <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                <?php $page = $page + 1; ?>
                <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                <div class="pi"
                    data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
            </div>
        </div>

        @if (count($lifePathIndicator) >= 2)
            @for ($i = 1; $i < count($lifePathIndicator); $i++)
                <?php $page++; ?>
                <div id="pfd" class="pf w0 h0" data-page-no="18">
                    <div class="pc pcb w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 hf yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px; white-space: normal; text-align: justify;">
                            {!! $lifePathIndicator[$i] !!}
                        </div>
                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif

        <div id="pf77" class="pf w0 h0" data-page-no="17">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 110px; bottom: 1440px">2</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ SỨ MỆNH</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['missionIndicator']['missionIndicator'] }}
                </div>
                <?php
                // $missionIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'missionIndicator_description', $data['data']['missionIndicator']['description'], false);
                // $missionIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'missionIndicator', $data['data']['missionIndicator']['content'], false);
                $missionIndicator = contentText($data['data']['missionIndicator']['content']);
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0" id="lifePathDescription"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['missionIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs4 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; text-align: justify;">
                        {!! $missionIndicator[0] !!}
                    </div>
                </div>
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
            <?php $page = $page + 1; ?>
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
        @if (count($missionIndicator) >= 2)
            @for ($i = 1; $i < count($missionIndicator); $i++)
                <?php $page++; ?>
                <div id="pfc" class="pf w0 h0" data-page-no="9">
                    <div class="pc pce w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 h12 yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px; white-space: normal; text-align: justify;">
                            @if (isset($missionIndicator[$i]))
                                {!! $missionIndicator[$i] !!}
                            @endif
                        </div>
                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif

        <div id="pf7-8" class="pf w0 h0" data-page-no="22">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 110px; bottom: 1440px">3</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ TRƯỞNG THÀNH</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['maturityIndicator']['maturityIndicator'] }}
                </div>
                <?php
                // $maturityIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'maturityIndicator_description', $data['data']['maturityIndicator']['content'], false);
                // $maturityIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'maturityIndicator', $data['data']['maturityIndicator']['content'], false);
                $page = $page + 1;
                $maturityIndicator = contentText($data['data']['maturityIndicator']['content']);
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0" id="lifePathDescription"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['maturityIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs4 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; text-align: justify;">
                        {!! $maturityIndicator[0] !!}
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

        @if (count($maturityIndicator) >= 2)
            @for ($i = 1; $i < count($maturityIndicator); $i++)
                <?php $page++; ?>
                <div id="pfc" class="pf w0 h0" data-page-no="9">
                    <div class="pc pce w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 h12 yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px; white-space: normal; text-align: justify;">
                            {!! $maturityIndicator[$i] !!}
                        </div>
                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif
        <style>
            p {
                margin: 0;
            }
        </style>
        <div id="pf7-8" class="pf w0 h0" data-page-no="22">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 110px; bottom: 1440px">4</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ LINH HỒN</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['soulIndicator']['soulIndicator'] }}</div>

                <?php
                // $soulIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'soulIndicator', $data['data']['soulIndicator']['content'])
                $soulIndicator = contentText($data['data']['soulIndicator']['content']);
                $page = $page + 1;
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0" id="lifePathDescription"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['soulIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs4 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; text-align: justify;">
                        {!! $soulIndicator[0] !!}
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

        @if (count($soulIndicator) >= 2)
            @for ($i = 1; $i < count($soulIndicator); $i++)
                <?php $page++; ?>
                <div id="pfc" class="pf w0 h0" data-page-no="9">
                    <div class="pc pce w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 h12 yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px; white-space: normal; text-align: justify;">
                            {!! $soulIndicator[$i] !!}
                        </div>
                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif



        <div id="pf7" class="pf w0 h0" data-page-no="23">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 110px; bottom: 1440px">5</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ TÍNH CÁCH</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['personalIndicator']['personalIndicator'] }}</div>
                <?php
                // $personalIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'personalIndicator_description', $data['data']['personalIndicator']['description']);
                // $personalIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'personalIndicator', $data['data']['personalIndicator']['content']);
                $personalIndicator = contentText($data['data']['personalIndicator']['content']);
                $page = $page + 1;
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0" id="lifePathDescription"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['personalIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs4 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; text-align: justify;">
                        {!! $personalIndicator[0] !!}
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

        @if (count($personalIndicator) >= 2)
            @for ($i = 1; $i < count($personalIndicator); $i++)
                <?php $page++; ?>
                <div id="pfc" class="pf w0 h0" data-page-no="9">
                    <div class="pc pce w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 h12 yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px; white-space: normal; text-align: justify;">
                            {!! $personalIndicator[$i] !!}
                        </div>
                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif

        <div id="pf7" class="pf w0 h0" data-page-no="24">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 110px; bottom: 1440px">6</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ NĂNG LỰC TỰ NHIÊN</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['dobIndicator']['dobIndicator'] }}</div>

                <?php
                // $dobIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'dobIndicator_description', $data['data']['dobIndicator']['description']);
                // $dobIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'dobIndicator', $data['data']['dobIndicator']['content']);
                $dobIndicator = contentText($data['data']['dobIndicator']['content']);
                $page = $page + 1;
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0" id="lifePathDescription"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['dobIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs4 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; text-align: justify;">
                        {!! $dobIndicator[0] !!}
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

        @if (count($dobIndicator) >= 2)
            @for ($i = 1; $i < count($dobIndicator); $i++)
                <?php $page++; ?>
                <div id="pfc" class="pf w0 h0" data-page-no="9">
                    <div class="pc pce w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 h12 yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px; white-space: normal; text-align: justify;">
                            {!! $dobIndicator[$i] !!}
                        </div>
                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif

        <div id="pf7" class="pf w0 h0" data-page-no="23">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 110px; bottom: 1440px">7</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ THÁI ĐỘ</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['attitudeIndicator']['attitudeIndicator'] }}
                </div>
                <?php
                // $attitudeIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'attitudeIndicator_description', $data['data']['attitudeIndicator']['description'], false);
                // $attitudeIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'attitudeIndicator', $data['data']['attitudeIndicator']['content'], false);
                $attitudeIndicator = contentText($data['data']['attitudeIndicator']['content']);
                $page = $page + 1;
                
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0" id="lifePathDescription"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['attitudeIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs4 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; text-align: justify;">
                        {!! $attitudeIndicator[0] !!}
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

        @if (count($attitudeIndicator) >= 2)
            @for ($i = 1; $i < count($attitudeIndicator); $i++)
                <?php $page++; ?>
                <div id="pfc" class="pf w0 h0" data-page-no="9">
                    <div class="pc pce w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 h12 yf3 ff4 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px; white-space: normal; text-align: justify;">
                            {!! $attitudeIndicator[$i] !!}
                        </div>
                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif




        <div id="pf7" class="pf w0 h0" data-page-no="27">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 110px; bottom: 1440px">8</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ ĐAM MÊ</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ implode(', ', $data['data']['passionIndicator']['passionIndicator']) }}
                </div>
                <div class="t m0 x5 hf yd7 ff4 fs9 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; bottom: 1010px; text-align: justify;">
                    {!! $data['data']['passionIndicator']['description'] !!}
                    <br>
                    <br>
                    @isset($data['data']['passionIndicator']['data'][0])
                        {!! $data['data']['passionIndicator']['data'][0] !!}
                    @endisset
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

        <?php
        $pages = ceil((count($data['data']['passionIndicator']['data']) - 1) / 2);
        $index = 1;
        ?>

        @for ($i = 0; $i < $pages; $i++)
            <?php $page++; ?>
            <div id="pfd-data" class="pf w0 h0" data-page-no="28">
                <div class="pc pcb w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt=""
                        src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                    <div class="t m0 x5 hf yf3 ff4 fs9 fc2 sc0 ls0 ws0"
                        style="width: 2360px; white-space: normal; text-align: justify">
                        @for ($j = 0; $j < 2; $j++)
                            @if (isset($data['data']['passionIndicator']['data'][$index]))
                                {!! $data['data']['passionIndicator']['data'][$index] !!}
                            @endif
                            <?php $index++; ?>
                        @endfor
                    </div>

                    <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                    @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                    <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                </div>
                <div class="pi"
                    data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
                </div>
            </div>
        @endfor



        <div id="pf7" class="pf w0 h0" data-page-no="29">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 110px; bottom: 1440px">9</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ TƯ DUY LÝ TRÍ</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['thinkingIndicator']['thinkingIndicator'] }}</div>
                <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2360px">
                    {!! $data['data']['thinkingIndicator']['description'] !!}
                </div>
                <?php
                // $thinkingIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'thinkingIndicator', $data['data']['thinkingIndicator']['content'])
                $text =
                    '<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><span style="color: rgb(20, 20, 20);"><span class="ql-cursor">﻿</span>Khi đối diện với những tình huống có vấn đề trong cuộc sống, năng lực Tư duy Lý trí của bạn luôn hướng đến sự khách</span></p><p><span style="color: rgb(20, 20, 20);">quan, bác ái và tinh thần cộng đồng. Bạn có tư duy của một nhà lãnh đạo tinh thần, bạn quan tâm tới những vấn đề xã hội,</span></p><p><span style="color: rgb(20, 20, 20);">những vấn đề mang tính "chúng ta" nhiều hơn là cái "Tôi". Bạn chân thành và mong muốn hướng đến những lý tưởng nhân văn cao đẹp, như cải thiện điều kiện sống hoặc giúp đỡ những người yếu thế hơn mình. Chính vì thế, suy nghĩ của bạn luôn hướng thượng và có tầm nhìn xa. Bạn có lòng trắc ẩn và vị tha rất lớn nên rất biết cách đối nhân xử thế với hầu hết mọi người thuộc nhiều tầng lớp khác nhau. Bạn không có nhiều thành kiến khi nhìn nhận các vấn đề trong cuộc sống. Chính vì vậy, nên lý trí của bạn thường không phát huy mạnh mẽ khi giải quyết các tình huống xảy ra. Bạn làm việc gì cũng sẽ đều suy nghĩ tới cảm nhận của mọi người trước, nên cho dù bạn có lập luận vô cùng sắc bén đến đâu, phân tích kỹ càng đến đâu nhưng khi nó ảnh hưởng tới mọi người thì bạn sẽ xử lý theo hướng cảm tính nhiều hơn. Số 9 ở Tư duy lý trí mang theo lý tưởng cao và năng lượng tột cùng có thể chạm đến trái tim của vũ trụ. Chính vì lẽ đó, bạn là trường hợp đặc biệt, hãy cứ cống hiến không vụ lợi cho những mục đích xứng đáng, bạn sẽ nhận lại sự thành công, tôn trọng và ngưỡng vọng từ mọi người.</span></p>';
                $yearIndicator = contentText($text);
                $page = $page + 1;
                ?>
                <div class="t m0 x5 hf yd7 ff4 fs4 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; top: 0; text-align: justify;">
                    {!! $yearIndicator[0] !!}
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

        <div id="pf7" class="pf w0 h0" data-page-no="30">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 90px; bottom: 1440px">10</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ TƯ DUY CẢM XÚC</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['emotionalThinkingIndicator']['emotionalThinkingIndicator'] }}</div>
                <?php
                // $emotionalThinkingIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'emotionalThinkingIndicator', $data['data']['emotionalThinkingIndicator']['content'])
                $emotionalThinkingIndicator = contentText($data['data']['emotionalThinkingIndicator']['content']);
                $page = $page + 1;
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0" id="lifePathDescription"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['emotionalThinkingIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs4 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; text-align: justify;">
                        {!! $emotionalThinkingIndicator[0] !!}
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

        <div id="pf7" class="pf w0 h0" data-page-no="31">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 90px; bottom: 1440px">11</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ NĂNG LỰC TRỰC GIÁC</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['intuitiveThinkingIndicator']['intuitiveThinkingIndicator'] }}</div>

                <?php
                // $intuitiveThinkingIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'intuitiveThinkingIndicator', $data['data']['intuitiveThinkingIndicator']['content'])
                $intuitiveThinkingIndicator = contentText($data['data']['intuitiveThinkingIndicator']['content']);
                $page = $page + 1;
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0" id="lifePathDescription"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['intuitiveThinkingIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs4 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; text-align: justify;">
                        {!! $intuitiveThinkingIndicator[0] !!}
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



        <div id="pf7" class="pf w0 h0" data-page-no="32">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 90px; bottom: 1440px">12</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ TƯ DUY HÀNH ĐỘNG</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['actionThinkingIndicator']['actionThinkingIndicator'] }}</div>


                <?php
                // $actionThinkingIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'actionThinkingIndicator', $data['data']['actionThinkingIndicator']['content'])
                $actionThinkingIndicator = contentText($data['data']['actionThinkingIndicator']['content']);
                $page = $page + 1;
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0" id="lifePathDescription"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['actionThinkingIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs4 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; text-align: justify;">
                        {!! $actionThinkingIndicator[0] !!}
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

        <div id="pf7" class="pf w0 h0" data-page-no="33">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 90px; bottom: 1440px">13</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">SỐ BẢN CHẤT CỦA BẠN</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['natureIndicator']['natureIndicator'] }}</div>
                <div class="t m0 x5 hf yd7 ff4 fs9 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; bottom: 1060px; text-align: justify; font-size: 54px">
                    {!! $data['data']['natureIndicator']['description'] !!}
                    {!! $data['data']['natureIndicator']['data'][0] !!}
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

        <div id="pfd" class="pf w0 h0" data-page-no="34">
            <div class="pc pcb w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                <div class="t m0 x5 hf yf3 ff4 fs9 fc2 sc0 ls0 ws0"
                    style="width: 2360px; white-space: normal; text-align: justify;">
                    {!! $data['data']['natureIndicator']['data'][1] !!}
                </div>

                <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                <?php $page = $page + 1; ?>
                <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
            </div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>



        <div id="pf7" class="pf w0 h0" data-page-no="35">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 90px; bottom: 1440px">14</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ TIỀM THỨC</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['subconsciousPowerIndicator']['subconsciousPowerIndicator'] }}</div>
                <?php
                // $subconsciousPowerIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'subconsciousPowerIndicator', $data['data']['subconsciousPowerIndicator']['content'])
                $subconsciousPowerIndicator = contentText($data['data']['subconsciousPowerIndicator']['content']);
                $page = $page + 1;
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0" id="lifePathDescription"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['subconsciousPowerIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs4 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; text-align: justify;">
                        {!! $subconsciousPowerIndicator[0] !!}
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



        <div id="pf7" class="pf w0 h0" data-page-no="36">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/ck-duong-doi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 90px; bottom: 1440px">15</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHU KỲ ĐƯỜNG ĐỜI</div>

                <div class="t m0 x3c h13 y124 ff1 fsb fc8 sc0 ls0 ws0">3<span class="_ _1b"> </span><span
                        class="fc9">1<span class="_ _1b"> </span><span class="fca">3</span></span></div>
                <div class="t m0 x3d h8 y125 ff1 fs4 fc8 sc0 ls0 ws0">Chu kỳ 1<span class="_ _1c"> </span><span
                        class="fc9">Chu kỳ 2<span class="_ _1d"> </span><span class="fca">Chu kỳ
                            3</span></span>
                </div>
                <div class="t m0 x35 h14 y126 ff1 fsc fc8 sc0 ls0 ws0">GIEO HẠT<span class="_ _1e"> </span><span
                        class="fc9">CHÍN<span class="_ _1f"> </span><span class="fca">THU HOẠCH</span></span>
                </div>
                <div class="t m0 x3e h6 y127 ff3 fs2 fc2 sc0 ls0 ws0">Đầu đời - 29 tuổi (2030)<span class="_ _20">
                    </span>30 - 56 tuổi (2031 - 2057)<span class="_ _21"> </span>57 tuổi về sau (2058 trở đi)</div>

                <div class="t m0 x5 hf y6f ff2 fs9 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; text-align: justify">
                    {!! $data['data']['lifeCircleIndicator']['description'] !!}
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

        <div id="pfd" class="pf w0 h0" data-page-no="37">
            <div class="pc pcb w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                <div class="t m0 x5 hf yf3 ff4 fs9 fc2 sc0 ls0 ws0"
                    style="width: 2360px; white-space: normal; text-align: justify; font-size: 48px;">
                    {!! $data['data']['lifeCircleIndicator']['content'] !!}
                </div>

                <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                <?php $page = $page + 1; ?>
                <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
            </div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>



        <div id="pf7" class="pf w0 h0" data-page-no="38">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/kim-tu-thap.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 90px; bottom: 1440px">16</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">KIM TỰ THÁP SỐ HỌC</div>

                <div class="t m0 x12 h16 y165 ff1 fse fc2 sc0 ls0 ws0">Tháng 03</div>ự
                <div class="t m0 x3f h14 y166 ff1 fsc fc2 sc0 ls0 ws0">3</div>
                <div class="t m0 x40 h4 y165 ff1 fs2 fc2 sc0 ls0 ws0">Ngày 10</div>
                <div class="t m0 x41 h14 y166 ff1 fsc fc2 sc0 ls0 ws0">1</div>
                <div class="t m0 x42 h16 y165 ff1 fse fc2 sc0 ls0 ws0">2001</div>
                <div class="t m0 x43 h14 y166 ff1 fsc fc2 sc0 ls0 ws0">3</div>
                <div class="t m0 x21 h14 y167 ff1 fsc fc2 sc0 ls0 ws0">
                    {{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstPeakIndicator'] }}
                </div>
                <div class="t m0 x44 h16 y168 ff1 fse fc2 sc0 ls0 ws0">
                    {{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['age'][0] . '-' . $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['age'][1] }}
                    tuổi</div>
                <div class="t m0 x45 h5 y169 ff2 fs2 fc2 sc0 ls0 ws0">(2022 - 2030)</div>
                <div class="t m0 x46 h14 y167 ff1 fsc fc2 sc0 ls0 ws0">
                    {{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondPeakIndicator'] }}
                </div>
                <div class="t m0 x47 h16 y168 ff1 fse fc2 sc0 ls0 ws0">
                    {{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['age'][0] . '-' . $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['age'][1] }}
                    tuổi</div>
                <div class="t m0 x48 h5 y169 ff2 fs2 fc2 sc0 ls0 ws0">(2030 - 2039)</div>
                <div class="t m0 x41 h14 y16a ff1 fsc fc2 sc0 ls0 ws0">
                    {{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdPeakIndicator'] }}
                </div>
                <div class="t m0 x49 h16 y16b ff1 fse fc2 sc0 ls0 ws0">
                    {{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['age'][0] . '-' . $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['age'][1] }}
                    t</div>
                <div class="t m0 x4a h5 y16c ff2 fs2 fc2 sc0 ls0 ws0">(2039 - 2048)</div>
                <div class="t m0 x41 h14 y16d ff1 fsc fc2 sc0 ls0 ws0">
                    {{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthPeakIndicator'] }}
                </div>
                <div class="t m0 x4b h16 y16e ff1 fse fc2 sc0 ls0 ws0">
                    {{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['age'][0] }} tuổi
                </div>
                <div class="t m0 x4c h17 y16f ff2 fse fc2 sc0 ls0 ws0">(2048 - 2057)</div>
                <div class="t m0 x21 h14 y170 ff1 fsc fc2 sc0 ls0 ws0">
                    {{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstChallengeIndicator'] }}<span
                        class="_ _1b">
                    </span>{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondChallengeIndicator'] }}
                </div>
                <div class="t m0 x41 h14 y171 ff1 fsc fc2 sc0 ls0 ws0">
                    {{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdChallengeIndicator'] }}
                </div>
                <div class="t m0 x41 h14 y172 ff1 fsc fc2 sc0 ls0 ws0">
                    {{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthChallengeIndicator'] }}
                </div>

                <div class="t m0 x5 hf yd6 ff2 fs9 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; bottom: 450px; text-align: justify">
                    {!! $data['data']['challengeIndicator']['description'] !!}
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


        <div id="pf7-8" class="pf w0 h0" data-page-no="22">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 92px; bottom: 1440px">17</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ LẶP</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ implode(', ', $data['data']['repeatIndicator']['repeatIndicator']) }}
                </div>
                <?php
                // $repeatIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'repeatIndicator_description', $data['data']['repeatIndicator']['description'], false);
                // $repeatIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'repeatIndicator', $data['data']['repeatIndicator']['content'], false);
                $page = $page + 1;
                
                $yearIndicator = contentText($text);
                $page = $page + 1;
                ?>
                <div class="t m0 x5 hf yd7 ff4 fs9 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; top: 0; text-align: justify;">
                    {!! $yearIndicator[0] !!}
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

        @if (count($yearIndicator) >= 2)
            @for ($i = 1; $i < count($yearIndicator); $i++)
                <?php $page++; ?>
                <div id="pfc" class="pf w0 h0" data-page-no="9">
                    <div class="pc pce w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 h12 yf3 ff3 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px; white-space: normal; text-align: justify;">
                            {!! $yearIndicator[$i] !!}
                        </div>
                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif
        @if (isset($data['data']['missIndicator']))
            <div id="pf7-8" class="pf w0 h0" data-page-no="22">
                <div class="pc pc6 w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                    <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                        style="left: 92px; bottom: 1440px">18</div>
                    <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CÁC CHỈ SỐ THIẾU</div>
                    <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                        {{ implode(', ', $data['data']['missIndicator']['missIndicator']) }}
                    </div>
                    <?php
                    // $missIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'missIndicator_description', $data['data']['missIndicator']['description'], false);
                    // $missIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'missIndicator', $data['data']['missIndicator']['content'], false);
                    $page = $page + 1;
                    
                    $yearIndicator = contentText($text);
                    $page = $page + 1;
                    ?>
                    <div class="t m0 x5 hf yd7 ff4 fs9 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; top: 0; text-align: justify;">
                        {!! $yearIndicator[0] !!}
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

            @if (count($yearIndicator) >= 2)
                @for ($i = 1; $i < count($yearIndicator); $i++)
                    <?php $page++; ?>
                    <div id="pfc" class="pf w0 h0" data-page-no="9">
                        <div class="pc pce w0 h0 opened">
                            <img class="bi x0 y0 w1 h1" alt=""
                                src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                            <div class="t m0 x5 h12 yf3 ff3 fs4 fc2 sc0 ls0 ws0"
                                style="width: 2360px; white-space: normal; text-align: justify;">
                                {!! $yearIndicator[$i] !!}
                            </div>
                            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                            @include('footer', [
                                'name' => $data['fullName'],
                                'date' => $data['dateOfBirth'],
                            ])
                            <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                        </div>
                        <div class="pi"
                            data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
                        </div>
                    </div>
                @endfor
            @endif
        @endif
        <div id="pf7-8" class="pf w0 h0" data-page-no="22">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 92px; bottom: 1440px">19</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ CÂN BẰNG</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['balanceIndicator']['balanceIndicator'] }}
                </div>
                <?php
                // $balanceIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'balanceIndicator_description', $data['data']['balanceIndicator']['description'], false);
                // $balanceIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'balanceIndicator', $data['data']['balanceIndicator']['content'], false);
                $page = $page + 1;
                $balanceIndicator = contentText($data['data']['balanceIndicator']['content']);
                $page = $page + 1;
                ?>
                <div class="t m0 x5 hf yd7 ff2 fs4 fc2 sc0 ls0 ws0" id="lifePathDescription"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify;">
                    {!! $data['data']['balanceIndicator']['description'] !!}
                    <br>
                    <div id="lpc" class="ff4 fs4 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; text-align: justify;">
                        {!! $balanceIndicator[0] !!}
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

        @if (count($balanceIndicator) >= 2)
            @for ($i = 1; $i < count($balanceIndicator); $i++)
                <?php $page++; ?>
                <div id="pfc" class="pf w0 h0" data-page-no="9">
                    <div class="pc pce w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 h12 yf3 ff3 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px; white-space: normal; text-align: justify;">
                            {!! $balanceIndicator[$i] !!}
                        </div>
                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif

        <div id="pf7-8" class="pf w0 h0" data-page-no="22">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 92px; bottom: 1440px">20</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ KẾT NỐI ĐƯỜNG ĐỜI VÀ SỨ MỆNH</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['linkLifePathAndMission']['linkLifePathAndMission'] }}
                </div>
                <?php
                // $linkLifePathAndMission_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'linkLifePathAndMission_description', $data['data']['linkLifePathAndMission']['description'], false);
                // $linkLifePathAndMission = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'linkLifePathAndMission', $data['data']['linkLifePathAndMission']['content'], false);
                $page = $page + 1;
                
                $text =
                    '<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><em style="color: rgb(20, 20, 20);"><span class="ql-cursor">﻿</span>Chỉ số này cho bạn biết cần phải làm gì để có thể nhanh chóng đưa các bài học mà cuộc đời đã dạy bạn vào việc hoàn thành sứ mệnh của cuộc đời. Hay nói cách khác, nó là sự kết nối giữa đường đời của bạn và sứ mệnh của bạn. Nếu chỉ số này trùng với năng lực tự nhiên của bạn thì thật là tuyệt vời!</em></p><p><br></p><p><br></p><p><br></p><p><span style="color: rgb(20, 20, 20);">Nếu bạn có con số cầu nối 0 nghĩa là bạn có ít nhất hai con số cốt lõi giống nhau. Đây là một điều may mắn và là cơ hội để bạn tiến bộ trong cuộc sống được thể hiện qua những con số lặp lại. Tuy nhiên, nếu bạn có ba hoặc nhiều hơn các con số cốt lõi giống nhau, bạn có thể không còn duy trì được sự cân bằng. Nếu bạn có ba con số lõi giống nhau trở lên, hãy nghiên cứu con số này và tự hỏi bản thân xem liệu bạn có biểu hiện quá mức các đặc điểm của nó hay không.</span></p>';
                $yearIndicator = contentText($text);
                $page = $page + 1;
                ?>
                <div class="t m0 x5 hf yd7 ff4 fs9 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; top: 0; text-align: justify;">
                    {!! $yearIndicator[0] !!}
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

        @if (count($yearIndicator) >= 2)
            @for ($i = 1; $i < count($yearIndicator); $i++)
                <?php $page++; ?>
                <div id="pfc" class="pf w0 h0" data-page-no="9">
                    <div class="pc pce w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 h12 yf3 ff3 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px; white-space: normal; text-align: justify;">
                            {!! $yearIndicator[$i] !!}
                        </div>
                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif

        <div id="pf7-8" class="pf w0 h0" data-page-no="22">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 92px; bottom: 1440px">21</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CHỈ SỐ KẾT NỐI LINH HỒN VÀ TÍNH CÁCH</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ $data['data']['linkSoulAndPersonalIndicator']['linkSoulAndPersonalIndicator'] }}
                </div>
                <?php
                // $linkSoulAndPersonalIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'linkSoulAndPersonalIndicator_description', $data['data']['linkSoulAndPersonalIndicator']['description'], false);
                // $linkSoulAndPersonalIndicator = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . '-' . 'linkSoulAndPersonalIndicator', $data['data']['linkSoulAndPersonalIndicator']['content'], false);
                $page = $page + 1;
                
                $text =
                    '<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><span style="color: rgb(20, 20, 20);"><span class="ql-cursor">﻿</span>Chỉ số kết nối linh hồn và tính cách tiết lộ giải pháp giúp bạn thống nhất con người bên trong và bên ngoài của mình. Hiểu được chỉ số này bạn sẽ có phương pháp để tránh được sự mâu thuẫn và phát triển bản thân ngày một hoàn thiện hơn. Nếu chỉ số Linh hồn và Nhân cách của bạn trùng nhau có nghĩa là năng lượng giữa bên trong và bên ngoài bạn khá hoà hợp, lúc này bạn sẽ không cần tới chỉ số hoà hợp nữa. Ngược lại, nếu hai chỉ số này khác nhau thì năng lượng của bạn sẽ đa dạng, đôi khi xung khắc hay mâu thuẫn với nhau, lúc này bạn sẽ cần tới chỉ số hoà hợp để có giải pháp hoàn thiện bản thân mình.</span></p><p><br></p><p><br></p><p><br></p><p><span style="color: rgb(20, 20, 20);">Con số này chỉ có thể là kết quả của tổ hợp 9 trừ 1. Vấn đề chủ chốt ở đây là bạn cần hiểu được giá trị của đồng tiền. Tiền nên là một công cụ dùng để giao dịch, không hơn không kém.</span></p><p><br></p><p><span style="color: rgb(20, 20, 20);">Đôi khi số 1 lấn át số 9 sẽ khiến bạn bị ám ảnh bởi thành công cá nhân. Tuy nhiên, phần lớn số 9 và số 1 khi đi cùng nhau sẽ giúp bạn có khả năng trở thành một nhà nhân đạo đầy tham vọng và có tiềm năng thành công ở tổ chức mang tầm quốc tế</span></p>';
                $yearIndicator = contentText($text);
                $page = $page + 1;
                ?>
                <div class="t m0 x5 hf yd7 ff4 fs9 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; top: 0; text-align: justify;">
                    {!! $yearIndicator[0] !!}
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

        @if (count($yearIndicator) >= 2)
            @for ($i = 1; $i < count($yearIndicator); $i++)
                <?php $page++; ?>
                <div id="pfc" class="pf w0 h0" data-page-no="9">
                    <div class="pc pce w0 h0 opened">
                        <img class="bi x0 y0 w1 h1" alt=""
                            src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                        <div class="t m0 x5 h12 yf3 ff3 fs4 fc2 sc0 ls0 ws0"
                            style="width: 2360px; white-space: normal; text-align: justify;">
                            {!! $yearIndicator[$i] !!}
                        </div>
                        <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                        @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                        <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                    </div>
                    <div class="pi"
                        data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
                </div>
            @endfor
        @endif



        <div id="pf7" class="pf w0 h0" data-page-no="50">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/duongdoi.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 92px; bottom: 1440px">22</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">CÁC CHỈ SỐ NỢ NGHIỆP</div>
                <div class="t m0 h7 yd5 ff1 fs3 fc7 sc0 ls0 ws0 index-center" style="width: 2800px !important">
                    {{ implode(', ', $data['data']['karmicIndicator']['karmicIndicator']) }}</div>
                <?php
                // $karmicIndicator_description = \App\Http\Controllers\PDFController::renderText($data['id'] . '-' . $data['dateSearch'] . 'karmicIndicator_description', $data['data']['karmicIndicator']['description'], false);
                
                $text =
                    '<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><em style="color: rgb(20, 20, 20);">Chỉ số này thể hiện các bài học cụ thể mà bạn cần chinh phục trong kiếp này vì đã không được học chúng ở kiếp trước. Mỗi chỉ số nợ nghiệp lại có bài học và gánh nặng riêng. Tất cả các nghiệp này đều có số 1 đứng đầu tức là đều do cái tôi mà ra. Nếu bạn học được cách bỏ đi cái tôi của mình và đức nhẫn nhịn sẽ khắc phục được rất nhiều các nhược điểm và nợ nghiệp cho kiếp sau bạn nhé!</em></p><p><br></p><p><br></p><p><br></p><p><span style="color: rgb(20, 20, 20);">NỢ NGHIỆP SỐ 19</span></p><p><span style="color: rgb(20, 20, 20);">Một người có nợ nghiệp 19/1 sẽ cần học được tính độc lập và cách sử dụng quyền lực hợp lý. Bạn sẽ bị buộc phải đứng lên cho chính mình, và thường bị mọi người bỏ lại để đi một mình trên con đường của mình. Khó khăn sẽ phải đối mặt và vượt qua sẽ thông qua việc nỗ lực một cách cá nhân.</span></p><p><span style="color: rgb(20, 20, 20);">- Một trong những bài học trọng tâm cho những người nợ nghiệp 19 là bạn phải bỏ đi sự ngoan cố chống lại sự giúp đỡ từ người khác. Phần lớn sự độc lập của bạn là do bạn tự áp đặt; bạn chỉ đơn giản là không muốn lắng nghe người khác, hoặc chấp nhận sự giúp đỡ hoặc lời khuyên của người khác.</span></p><p><span style="color: rgb(20, 20, 20);">- Nợ nghiệp 19 có thể trở thành nhà tù tự áp đặt nếu bạn không cởi mở với thực tế rằng mọi người cần phụ thuộc lẫn nhau và yêu thương lẫn nhau.</span></p><p><span style="color: rgb(20, 20, 20);">- Bài học quan trọng nhất cho bạn là: Trong khi bạn tìm cách đứng trên đôi chân của chính mình, bạn vẫn là một con người, có mối liên hệ sâu sắc với những người khác và cần sự hỗ trợ, giúp đỡ và hiểu biết của con người mà tất cả mọi người cần.</span></p><p><span style="color: rgb(20, 20, 20);">- Bạn phải học cách xét đến nhu cầu, cảm nhận ý kiến của người khác, thay vì chỉ làm theo ý mình. - Bằng cách dũng cảm đón nhận sự giúp đỡ của mọi người, thừa nhận những lỗi sai của bản thân, và hiểu được quan điểm của người khác (cho dù họ có đúng hay sai), bạn sẽ vượt qua được bài học này.</span></p>';
                $yearIndicator = contentText($text);
                $page = $page + 1;
                ?>

                <div class="t m0 x5 hf yd7 ff4 fs9 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; top: 0; text-align: justify">
                    {!! $yearIndicator[0] !!}
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

        @for ($i = 1; $i < count($yearIndicator); $i++)
            <?php $page++; ?>
            <div id="pfc" class="pf w0 h0" data-page-no="9">
                <div class="pc pce w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt=""
                        src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                    <div class="t m0 x5 h12 yf3 ff3 fs4 fc2 sc0 ls0 ws0"
                        style="width: 2360px; white-space: normal; text-align: justify;">
                        @if (isset($yearIndicator[$i]))
                            {!! $yearIndicator[$i] !!}
                        @endif
                    </div>
                    <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                    @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                    <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $page; ?></div>
                </div>
                <div class="pi"
                    data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}"></div>
            </div>
        @endfor

        <div id="pf7" class="pf w0 h0" data-page-no="51">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/suc-manh.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 92px; bottom: 1440px">23</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0 custom-font">BIỂU ĐỒ SỨC MẠNH(rất quan trọng)</div>
                @php
                    $strength = new stdClass();
                    foreach ($data['data']['drawStrengthChart'] as $value) {
                        $strStrength = $value[1];
                        $text = '';
                        for ($index = 1; $index <= $strStrength; $index++) {
                            $text .= $value[0];
                        }
                        $strength->{$value[0]} = $text;
                    }
                @endphp
                <div class="strength-table">
                    <table class="pdf7-table">
                        <tr>
                            <td>{{ $strength->{3} ?? null }}</td>
                            <td>{{ $strength->{6} ?? null }}</td>
                            <td>{{ $strength->{9} ?? null }}</td>
                        </tr>
                        <tr>
                            <td>{{ $strength->{2} ?? null }}</td>
                            <td>{{ $strength->{5} ?? null }}</td>
                            <td>{{ $strength->{8} ?? null }}</td>
                        </tr>
                        <tr>
                            <td>{{ $strength->{1} ?? null }}</td>
                            <td>{{ $strength->{4} ?? null }}</td>
                            <td>{{ $strength->{7} ?? null }}</td>
                        </tr>
                    </table>
                </div>
                @php
                    $return = [];
                    if (isset($strength->{1}) && isset($strength->{2}) && isset($strength->{3})) {
                        array_push($return, [
                            'title' => '- 1 TRỤC LẬP KẾ HOẠCH (1-2-3)',
                            'content' =>
                                'Trục này cho thấy bạn là người có khả năng lập kế hoạch tốt và thường làm theo kế hoạch vạch ra. Bạn làm việc gì thường cũng có những bước định sẵn trong đầu rõ ràng.',
                        ]);
                    } elseif (empty($strength->{1}) && empty($strength->{2}) && empty($strength->{3})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC LẬP KẾ HOẠCH (1-2-3) MÀ BẠN THIẾU',
                            'content' =>
                                'Người thiếu cả ba số 1-2-3 trong biểu đồ ngày sinh có thể mang những đặc điểm tiêu cực như lộn xộn, rối loạn, thiếu tính tổ chức, thiếu tính kỉ luật. Công việc và cuộc sống dễ bị đảo lộn, bừa bãi hoặc bê bối. Điều này sẽ khiến họ có đạt được thành công trong cuộc sống.',
                        ]);
                    }
                    if (isset($strength->{4}) && isset($strength->{5}) && isset($strength->{6})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC Ý CHÍ (4-5-6)',
                            'content' =>
                                'Đây là trục có rất ít người sở hữu, người sở hữu nó thường rất năng động, luôn thể hiện nguồn lực sống mạnh mẽ. Tuy nhiên những người này thường có xu hướng muốn áp chế người khác để khẳng định cái tôi và sức mạnh bản thân. Họ rất có bản lĩnh, có tinh thần vươn lên tự kỉ luật mình. Đây cũng là những người có tố chất của nhà lãnh đạo, thường gặp may mắn trong cuộc sống.',
                        ]);
                    } elseif (empty($strength->{4}) && empty($strength->{5}) && empty($strength->{6})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC Ý CHÍ (4-5-6) MÀ BẠN THIẾU',
                            'content' =>
                                'Thường bạn sẽ có cảm giác bực bội, thất vọng kéo dài khi bạn không làm được điều mà mình muốn hoặc người khác làm việc không đúng như ý của bạn. Lời khuyên là bạn hãy luyện tập để tăng thêm các số 4, 5 hoặc 6. Nếu tên của bạn cũng chứa những số này thì bạn dễ dàng đạt được hơn. Số 4 bạn luyện tập bằng cách làm việc thực tế hơn và cẩn thận hơn.Số 5 bạn đạt được bằng cách để mở rộng kết giao những người bạn mới, du lịch khám phá những điều mới mẻ.Số 6 bạn đạt được bằng cách yêu thương và chăm sóc đến người khác nhiều hơn.',
                        ]);
                    }
                    if (isset($strength->{7}) && isset($strength->{8}) && isset($strength->{9})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC HÀNH ĐỘNG (7-8-9)',
                            'content' =>
                                'Bạn thường thụ động. Khi làm việc bạn thường dựa dẫm vào người khác nhiều hơn là tự mình làm. Lời khuyên cho bạn là hãy luyện tập để tăng các số 7, 8 hoặc 9 lên.Số 7 bạn có thể tăng bằng cách dám dấn thân hơn, thực hiện nhiều các hoạt động mới trong ngày hoặc trong tuần, làm những việc bạn chưa bao giờ làm. Số 8 bạn có thể tăng bằng cách học kinh doanh, học bán hàng, từ đó có khả năng nhạy cảm với lợi ích, tiền bạcSố 9 bạn có thể tăng bằng cách cho đi, giúp đỡ người khác nhiều hơn và đặt những mục tiêu lớn hơn cho bản thân.',
                        ]);
                    } elseif (empty($strength->{7}) && empty($strength->{8}) && empty($strength->{9})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC HÀNH ĐỘNG (7-8-9) MÀ BẠN THIẾU',
                            'content' =>
                                'Trục này cho thấy bạn có tính hành động và chủ động cao, ít dựa dẫm vào người khác. Trong khi người khác còn đang nói hoặc nghĩ thì bạn lại muốn hành động luôn.',
                        ]);
                    }
                    if (isset($strength->{1}) && isset($strength->{4}) && isset($strength->{7})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC THỂ CHẤT (1-4-7)',
                            'content' =>
                                'Trục này đại diện cho hoạt động của con người. Trục này quản lý lời nói, ngôn ngữ hình thể, động lực, óc tổ chức, tính kiên nhẫn, tính vật chất và sự lĩnh hội thông qua mất mát (học hỏi qua những lần vấp ngã).',
                        ]);
                    } elseif (empty($strength->{1}) && empty($strength->{4}) && empty($strength->{7})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC THỂ CHẤT (1-4-7) MÀ BẠN THIẾU',
                            'content' =>
                                'Bạn thường thiếu tính thực tế trong công việc và thường thiếu ngăn nắp, hay mơ mộng. Lời khuyên cho bạn là hãy luyện tập để tăng các số 1, 4 hoặc 7 lên. Số 1 bạn có thể tăng bằng cách tập viết nhật ký, học cách bộc lộ quan điểm, chính kiến, đặt mục tiêu rõ ràng. Số 4 bạn luyện tập bằng cách làm việc thực tế hơn và cẩn thận hơn. Số 7 bạn có thể tăng bằng cách dám dấn thân hơn, thực hiện nhiều các hoạt động mới trong ngày hoặc trong tuần, làm những việc bạn chưa bao giờ làm.',
                        ]);
                    }
                    if (isset($strength->{2}) && isset($strength->{5}) && isset($strength->{8})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC TINH THẦN (2-5-8)',
                            'content' =>
                                'Trục này đại diện cho những gì liên quan đến trái tim của con người. Trục này phụ trách toàn bộ cảm giác, bao gồm trực giác, tình yêu thương, sự tự do, các cảm xúc tích cực, các biểu đạt nghệ thuật, sự độc lập về tinh thần, và trí tuệ/sự thông thái.',
                        ]);
                    } elseif (empty($strength->{2}) && empty($strength->{5}) && empty($strength->{8})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC THỂ CHẤT (1-4-7) MÀ BẠN THIẾU',
                            'content' =>
                                'Bạn thường nhạy cảm quá mức nên dễ bị tổn thương về mặt tâm lý. Lời khuyên cho bạn là hãy luyện tập để tăng các số 2, 5 hoặc 8 lên. Số 2 bạn có thể tăng bằng cách lắng nghe, cảm nhận suy nghĩ của người khác. Tập thiền hoặc tập yoga. Số 5 bạn đạt được bằng cách để mở rộng kết giao những người bạn mới, du lịch khám phá những điều mới mẻ. Số 8 bạn có thể tăng bằng cách học kinh doanh, học bán hàng, từ đó có khả năng nhạy cảm với lợi ích, tiền bạc.',
                        ]);
                    }
                    if (isset($strength->{3}) && isset($strength->{6}) && isset($strength->{9})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC TRÍ TUỆ (3-6-9)',
                            'content' =>
                                'Trục này đại diện cho những gì liên quan đến đầu óc của con người. Trục này phụ trách trí nhớ, suy nghĩ, tư duy phân tích, lý trí, trí tưởng tượng, óc sáng tạo, tinh thần trách nhiệm, hoài bão/tham vọng và lý tưởng sống.',
                        ]);
                    } elseif (empty($strength->{3}) && empty($strength->{6}) && empty($strength->{9})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC TRÍ TUỆ (3-6-9) MÀ BẠN THIẾU',
                            'content' =>
                                'Bạn thường mau quên và gặp khó khăn trong việc học các kiến thức mới. Lời khuyên cho bạn là hãy luyện tập để tăng các số 3, 6 hoặc 9 lên. Số 3 bạn có thể tăng bằng cách tập kể chuyện cười và tham gia vào các hoạt động vui vẻ sôi nổi nhiều hơn. Số 6 bạn đạt được bằng cách yêu thương và chăm sóc đến người khác nhiều hơn. Số 9 bạn có thể tăng bằng cách cho đi, giúp đỡ người khác nhiều hơn và đặt những mục tiêu lớn hơn cho bản thân.',
                        ]);
                    }
                    if (isset($strength->{1}) && isset($strength->{5}) && isset($strength->{9})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC QUYẾT TÂM (1-5-9)',
                            'content' =>
                                'Trục này cho thấy bạn có sự quyết tâm cao và hành động ngay khi muốn thực hiện một việc hoặc kế hoạch nào đó mà không trì hoãn. Bạn thường muốn làm đến cùng những công việc mà bạn tin tưởng và những điều mà bạn cho là đúng.',
                        ]);
                    } elseif (empty($strength->{1}) && empty($strength->{5}) && empty($strength->{9})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC QUYẾT TÂM (1-5-9) MÀ BẠN THIẾU',
                            'content' =>
                                'Người không có cả ba số 1-5-9 trong biểu đồ ngày sinh thường thiếu quết tâm, hay trì hoãn thậm chí không làm gì cả. Điều này ảnh hưởng tiêu cực đến sự phát triển hay thành công của họ, khiến bản thân họ lẫn mọi người xung quanh đều khó chịu. Điều này cần phải được phát hiện sớm để điều chỉnh kịp thời.',
                        ]);
                    }
                    if (isset($strength->{3}) && isset($strength->{5}) && isset($strength->{7})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC NHẠY BÉN (3-5-7)',
                            'content' =>
                                'Trục này cho thấy bạn có sự quyết tâm cao và hành động ngay khi muốn thực hiện một việc hoặc kế hoạch nào đó mà không trì hoãn. Bạn thường muốn làm đến cùng những công việc mà bạn tin tưởng và những điều mà bạn cho là đúng.',
                        ]);
                    } elseif (empty($strength->{3}) && empty($strength->{5}) && empty($strength->{7})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC NHẠY BÉN (3-5-7) MÀ BẠN THIẾU',
                            'content' =>
                                'Người không có cả ba số 1-5-9 trong biểu đồ ngày sinh thường thiếu quyết tâm, hay trì hoãn thậm chí không làm gì cả. Điều này ảnh hưởng tiêu cực đến sự phát triển hay thành công của họ, khiến bản thân họ lẫn mọi người xung quanh đều khó chịu. Điều này cần phải được phát hiện sớm để điều chỉnh kịp thời.',
                        ]);
                    }
                    if (count($return) > 4) {
                        $data1 = array_slice($return, 0, 5);
                        $data2 = array_slice($return, 5);
                    } else {
                        $data1 = $return;
                    }

                @endphp
                <div class="t m0 x5 hf yd6 ff4 fs9 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; text-align: justify">
                    @foreach ($data1 as $item)
                        {!! $item['title'] !!}
                        <p>{!! $item['content'] !!}</p>
                    @endforeach
                </div>

                <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer')
                <?php $page = $page + 1; ?>
                <div class="t m0 x5 h5 y61 ff4 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                <div class="pi"
                    data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
                </div>
            </div>
        </div>

        @if (isset($data2))
            <div id="pfd" class="pf w0 h0" data-page-no="52">
                <div class="pc pcb w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt=""
                        src="{{ asset('/' . $path . '/page-trang-trai.png') }}">

                    <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; top: 0px; text-align: justify">
                        @foreach ($data2 as $item)
                            {!! $item['title'] !!}
                            <p>{!! $item['content'] !!}</p>
                        @endforeach
                    </div>

                    <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                    @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                    <?php $page = $page + 1; ?>
                    <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                </div>
                <div class="pi"
                    data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
                </div>
            </div>
        @endif

        <div id="pfd" class="pf w0 h0" data-page-no="52">
            <div class="pc pcb w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/page-trang-trai.png') }}">
                @php
                    $strengthTWO = [];
                    $jsonStrength =
                        '[{"key":1,"title":["Bạn thuộc về tuýp người gặp một ít khó khăn trong việc tự diễn đạt bằng ngôn ngữ. Điều này không có nghĩa là bạn không nói tốt, mà là bạn khó diễn đạt được cảm xúc nội tâm mình. Bạn có thể nói rất lưu loát, mạnh mẽ về các đề tài không liên quan đến diễn đạt cảm xúc cá nhân, nhưng cảm thấy để diễn tả về mình hoặc những gì mình đang cảm thấy, thật không biết làm sao mà nói. Chỉ khi nào đủ trưởng thành và thấu hiểu mọi chuyện hơn, điều này mới được cải thiện. Đôi khi, trước một tình huống, bạn sẽ phát ra những lời nói hoàn toàn trái ngược với những gì trong lòng bạn thực nghĩ, theo một cách diễn đạt khá ‘sắc nhọn’, dễ làm người khác tổn thương hoặc thấy xúc phạm. Điều này ắt làm trầm trọng hóa vấn đề ban đầu, đưa đến những cuộc cãi vã, tranh luận gay gắt. Bạn cần học suy nghĩ cẩn trọng trước khi phát biểu, và cần học phản ứng chậm lại trước các ý kiến, lời phê bình..., bởi lời nói đã phát ra khó thu hồi lại được, mà cảm giác thương tổn cũng khó mà hàn gắn. Về cuộc sống, những người có một số 1 thường hay cảm thấy thiếu thiếu một điều gì đó trong cuộc sống, cho dẫu thoạt nhìn bạn rất đủ đầy ở một số mặt.","Người có hai số 1 (11) là người may mắn nhất trong cả nhóm, bởi sự cân bằng trời cho trong việc diễn đạt nội tâm. Đây là một đặc điểm đầy giá trị trong biểu đồ ngày sinh mà bạn nên sử dụng một cách khôn ngoan – không bao giờ lạm dụng nó cho mục đích áp đảo người khác. (Luôn nhớ ý thức tránh bực bội hay coi thường những người không được may mắn (có 11 giống bạn), đặc biệt là nếu bạn đang yêu hoặc kết hôn với một người không được có 11). Người có 11 thường có khả năng nhìn nhận các vấn đề hay các cuộc tranh luận, tranh cãi theo cả hai mặt đối lập, và vì vậy, bạn hoàn toàn có khả năng đổi hướng giữa chừng nếu trong một cuộc thảo luận, bạn cảm thấy quả thật hướng đối nghịch thực sự mang lại giá trị lớn lao hơn. Điều này khiến cho bạn không bị sa vào bảo thủ khư khư giữ ý kiến mình khiến tầm hiểu biết bị giới hạn một chiều, mà cũng không bị ‘chấp’ với những điều mình cho là ‘lỗi’, là ‘sai’ ở người, dễ tha thứ cho người. Điều này tạo cho bạn điều kiện lĩnh hội được nhiều kiến thức rộng lớn hơn, khả năng thấu hiểu lòng người cũng sâu hơn. Hệ quả là: bạn thường dễ có cuộc sống cân bằng, an vui, nói vui là “Ok I’m fine”, dẫu cho cuộc sống có thế nào. Chính vì những yếu tố tích cực và dung hòa, cân bằng này mà người có hai số 1 dễ tìm thấy trong các chính trị gia thành công hoặc những người của công chúng, người nổi tiếng. Yếu tố hai số 1 làm nổi bật khả năng nhận thức, thấu hiểu con người, cũng như khả năng diễn đạt bản thân mình, giảm thiểu khả năng bị hiểu lầm hoặc hiểu lầm người khác, và khả năng nhìn nhận các vấn đề một cách đa chiều, không phiến diện.","Với những người có ba lần số 1 trở lên được lặp lại trong ngày sinh, có hai khả năng khá đối lập xảy ra trong thực tế. Thường gặp nhất là những người... rất yêu nói, nói rất nhiều,thường có mặt trong rất nhiều hoạt động sôi nổi mà trong đó, họ trở nên nổi bật, thú vị. Nhìn chung bạn thấy cuộc sống dễ chịu và hay cố gắng chia sẻ điều đó với những người xung quanh mình.Nhóm thứ hai thuộc về một số người, cũng có ba số 1 trở lên, nhưng lại trống nguyên hàng ngang chính giữa là trục Tinh thần (tức vắng mặt các số 2,5,8). Những người này thường hay im lặng, khá hướng nội, khá bẽn lẽn, đặc biệt với người lạ. Tuy vậy những người này cũng sẽ trở nên hoạt bát và nói nhiều trong những lúc họ cảm thấy thân tình, dễ chịu, trong một nhóm bạn bè thân hay người thân trong nhà. Những người này cảm thấy họ diễn đạt những cảm xúc cá nhân hay nội tâm tốt hơn thông qua việc viết xuống tâm tình mình, bằng cách này những tư tưởng của họ liền mạch hơn, không bị sự nhạy cảm quá mức của họ làm cho cản trở. Nếu bạn thuộc nhóm này mà chưa biết sức mạnh của khả năng viết lách của mình, hãy thử nhé. Còn một khả năng nữa ở những người này đó là... tâm trạng lúc vui lúc buồn. Mà tùy theo những yếu tố khác trong biểu đồ ngày sinh tác động mà tỉ lệ ‘vui – buồn’ này gia giảm"]},{"key":2,"title":["Biểu đồ có mỗi một con 2 chỉ một mức độ trực giác cơ bản, nhưng không phải lúc nào cũng đủ trong thế giới đầy tính cạnh tranh này, đặc biệt là đối với đàn ông. Với muôn mặt xã hội hiện giờ đang chú trọng nhiều vào những giá trị nhân tạo, mỗi cá nhân cần phải tự uyển chuyển lắm mới khớp được vào guồng chung, mới mong cạnh tranh thành công. Và điều này không thể có được nếu không có một mức độ nhạy cảm cân bằng cao. Nếu không có sự cân bằng, những người mang bản chất nhạy cảm sẽ dễ dàng bị tổn thương, và thường vì thế đưa ra những phản ứng thiếu khôn ngoan. Giới đàn ông thường dễ chịu tình trạng này hơn phái nữ. Một con 2 cung cấp một nền tảng giá trị cho việc phát triển tính nhạy cảm cân bằng, nhưng giá trị cân bằng lý tưởng nhất nằm ở cặp đôi 22 nha. Phái nữ có một con 2 thì vẫn ổn, bởi trời sinh phái nữ vốn đã... đủ nhạy cảm rồi. Nhìn chung, người có một con 2 thường dễ cảm thấy họ cần nhiều thời gian để thư giãn, ở ngoài thiên nhiên và tránh xa môi trường cạnh tranh căng thẳng.","Trực giác và độ nhạy cảm lý tưởng này sẽ cho phép người có cặp 22 đạt được trí thông minh trên mức trung bình, dựa trên khả năng thấu hiểu trời cho đối với con người và vạn tình huống xảy ra. Khi cần cái gọi là ‘ấn tượng đầu tiên’, trực giác của những người này cực đáng tin cậy, với độ chính xác và nhanh chóng đáng kinh ngạc. Người khác đối với họ là chân thành hay không, họ đều nhận ra được ngay, miễn là họ không để cái tôi hay trí tưởng tưởng của họ nhảy vào và tô màu, làm biến màu trực giác nguyên thủy họ có. Sự cân bằng trong độ nhạy cảm xuất phát từ trực giác này, nếu được diễn đạt tích cực, sẽ có khuynh hướng kéo họ vào rất nhiều mặt của cuộc sống. Thường họ sẽ xử lý những việc này rất suôn sẻ, thành công, nhưng họ cũng cần để ý để tránh bị liên quan vào quá nhiều vụ việc, vì việc nào cũng đáng làm. Nếu cứ mê mải lao vào những việc đều cần làm này, hạnh phúc gia đình có thể chịu phương hại. Và nên nhớ, việc gì cũng phải nhớ giữ cân bằng, cân bằng là chìa khóa mở cửa thành công.","Một khi đã gọi là ‘vượt ngưỡng cân bằng’, chúng ta sẽ bị quá đà. Người có ba số 2 trở lên trong biểu đồ ngày sinh thường chịu sự nhạy cảm không cân bằng, một sự quá mức có thể phát triển thành một dạng gánh nặng tâm lý khó thể chịu nổi. Điều này có nghĩa là người này rất dễ bị tác động bởi tâm trạng của người khác, hậu quả là khả năng rất cao luôn bị lôi kéo sâu vào các vấn đề, các trục trặc của người khác. Để đảm bảo một chế độ tự bảo vệ đầy nhạy cảm, những người này hay bỏ nhiều thời gian chìm đắm trong thế giới riêng của mình, qua đó lộ ra vẻ đơn độc mà nếu để lâu, dần dà phát triển thành sự cô độc. Nhiều người với ba số 2 trở lên làm việc trong ngành giải trí sẽ dễ dàng chạm tới thành công khi áp mình vào khắc họa tính cách của những nhân vật khác nhau. Tuy vậy, nói nôm na là đôi khi quá nhập tâm vào các vai diễn, họ khó trả vai ra được, khiến họ luôn cảm thấy tổn thương. Từ điểm này, lúc nào họ cũng tìm cách tự vệ mình, hay phát biểu một số câu bốc đồng khiến tổn thương người khác. Trẻ có ba số 2 trở lên thường bắt chước người khác rất giỏi, và chúng luôn có bản năng tự nhiên muốn chia sẻ những cảm giác của người khác. Tuy vậy, việc cảm xúc cứ trồi trồi sụt sụt theo cảm giác, vui buồn của người khác cứ như suốt ngày nhảy lên chơi trò chơi tàu uốn lượn khiến chúng mệt mỏi và mất cân bằng, nên việc này cần được các bậc cha mẹ quan sát và hướng dẫn con cẩn thận. Bởi nhiệm vụ quan trọng của các bậc cha mẹ là giúp con có được nền tảng vững chắc về sự tự tin, cùng với định hướng đường đời theo con số chủ đạo mà ngày sinh con cộng ra."]},{"key":3,"title":["Được ví như một cái ‘mỏ neo’ trụ chặt trí nhớ, con số 3 duy nhất ở biểu đồ ngày sinh giúp cho một người có trí nhớ rất tốt và lâu dài, miễn là nó được nhớ mà mang ra sử dụng (trong quá trình tiến hóa, cái gì không được dùng thường xuyên sẽ dần bị teo lại). Con số 3 duy nhất giúp người này giữ được sự nhanh nhạy trong hoạt động trí não. Các bạn nhỏ có một số 3 sẽ rất có lợi thế trong việc học tập, cả học chính thức và học hỏi ngoài đời. Họ sẽ luôn chủ động quan tâm tới cuộc sống và môi trường họ đang sống. Người có một số 3 cũng sẽ rất linh hoạt và thường sống khá tích cực, và đem năng lượng tích cực này thổi vào hầu hết công việc mà họ làm. Họ cũng có mức tự tin trên mức trung bình, điều này cũng góp phần không nhỏ vào thành công của họ trong cuộc sống.","Nhân đôi độ nhạy về phần trí não, người có hai con ba trong biểu đồ ngày sinh dễ trở nên giàu trí tưởng tượng và tăng khả năng văn chương. Tuy vậy, những sức mạnh này cần được theo dõi chặt chẽ để có thể phát triển chúng theo hướng tích cực và cân bằng nhất, tránh khả năng đi theo hướng tiêu cực, dễ có những hành vi (phản kháng xã hội). Để kích hoạt được khả năng tự kỷ luật cho bản thân, người có hai số 3 nên thực hành thiền tĩnh tâm những khi có thể, cùng với những bài tập luyện trí nhớ, và bài tập luyện phát triển trực giác. Những điều này, nói nôm na giống như ‘kéo bớt’ người có 33 về với thực tế, với tính chất xây dựng và tích cực hơn. Chứ nếu không, đầu óc quá nhạy chiều tưởng tượng của những người này sẽ làm hỏng cái nhìn khách quan hay một tầm hiểu biết toàn diện. Mà nếu cứ tiếp tục nuông chiều óc tưởng tượng, suy diễn của mình, dần dà họ mất luôn tính thực tế. Người có hai hay ba số 3 trong biểu đồ ngày sinh thường có khả năng viết lách đáng kể. Nếu được khích lệ, họ có khả năng viết xuất sắc, khai thác được nhiều nguồn chất liệu dồi dào, và hoàn toàn có khả năng đưa kỹ năng này thành một công việc nghiêm túc có thể mang về thu nhập đáng kể","Người có ba số 3 trở lên trong biểu đồ ngày sinh có sự nhạy bén tâm trí vượt mức bình thường Họ thường nghĩ về tương lai và khó tập trung vào hiện tại. Họ thường hay bị quá căng thẳng và xao lãng, khó tin tưởng người khác cũng bởi độ nhạy bén trong tâm trí họ đã trở nên quá cao. Do đó, họ khó có bạn thân, khó có hạnh phúc. Người có ba số 3 trở lên thường dễ đắm chìm vào tâm tưởng, quên mất hiện tại."]},{"key":4,"title":["Người có một số 4 trong biểu đồ ngày sinh là những người rất chủ động, làm việc gì cũng hăng hái, thực tế, bao gồm các hoạt động có liên quan đến các khâu tổ chức, kỹ thuật, tài chánh hay hoạt động thể chất như làm vườn, các nghệ thuật tạo hình từ đôi tay, xây dựng, vv... Ở đây con số chủ đạo của họ sẽ bao trùm lên để khi bạn ghép hai yếu tố này lại, cái gì rõ nét ở cả hai yếu tố sẽ được ưu tiên chọn lựa để theo đuổi. Những người có một số 4 sẽ thích nhào vô làm việc phần thực tế hơn là ngồi nghiền ngẫm các hệ thống lý luận, và đặc biệt, những người này sẽ dễ hoài nghi, không tin nếu họ thấy hay nghe cái gì có vẻ quá mơ hồ, trừu tượng. Họ thích thực tế hơn lý thuyết, và dễ mất kiên nhẫn với những ai thất hẹn. Họ thích nhào vô xúc tiến công việc ngay lập tức và điều này gần như trở thành điều ‘bất di bất dịch’ ở họ, đặc biệt là khi họ có thêm một con số 7 nữa trong ngày sinh của mình. Nếu quan tâm quá nhiều đến khía cạnh thể chất có thể khiến những người có một số 4 trở nên hơi qua thiên về vật chất. Điều này có thể là một khía cạnh tiêu cực của số 4, mục đích là để dạy cho những người có số này học cách dùng lòng kiên nhẫn tự nhiên của mình để tránh chạy theo chủ nghĩa vật chất. Điều này đạt được cao nhất thông qua việc phát triển sự quan tâm và lòng trắc ẩn lòng thương của mình với những người khác. Nói một cách khác, bạn càng học quan tâm và thương người khác nhiều thêm chừng nào, tự nhiên dần dần bạn sẽ không còn màng nhiều đến những giá trị vật chất quanh mình nữa. Và bằng cách này, bạn sẽ đạt được tình bạn, hay hạnh phúc lâu dài.","Nhân đôi số 4 có thể làm những người có cặp số 4 trong ngày sinh dễ có cái nhìn không cân bằng về cuộc sống, trong đó họ hay quy mọi cái về các giá trị thực tế và vật chất. Vậy điều người có hai số 4 cần học là cách hài hòa mọi cái cho cân bằng giữa ba mặt: thể chất/vật chất, tinh thần, và trí não. Như vậy họ sẽ thấy thoải mái khi sống với cảm xúc hay tư duy hơn. Nếu những người này có Con số chủ đạo là một trong các trục Tâm hồn (số 2,5,8) hoặc trục Trí não (số 3,6,9), những người này có khả năng vươn lên để cảm nhận các vấn đề về tinh thần hay trí não cao hơn những người cũng có con số chủ đạo là một số thuộc trục Thể chất (các số 4,7). Nói chung, càng có nhiều số 4, càng cần phải học cách cân đối ba yếu tố đã nhắc trên, và khi chọn bạn bè, cần phải để ý tránh xa các bạn bè có khả năng tác động tiêu cực đến bạn. Ngược lại, nếu bạn chọn được những người bạn biết trân trọng những giá trị thẩm mỹ, văn hóa, đạo đức của cuộc, thì cuộc đời của bạn cũng sẽ được cân bằng nhanh về hướng tốt đẹp","Người có ba số 4 trở lên thường bị cột chặt vào vật chất, bị lôi kéo bởi các giá trị vật chất. Họ thường lao vào kiếm tiền, làm việc cực nhọc, áp lực liên tục và trở thành tôi tớ của đồng tiền."]},{"key":5,"title":["Nếu có được một con số 5 trong biểu đồ ngày sinh, người ta sẽ có cơ hội tốt nhất đạt được một cá tính cân bằng. Đây cũng là con số duy nhất đảm bảo tất cả các con số nằm ở bốn góc biểu đồ (1,3,7,9) không bị trống ba bề, để có nguy cơ rơi vào thế ‘Con số đơn độc’ (Isolated numbers). Đặc biệt, người có con số này thường kiểm soát cảm xúc rất tốt, bởi nó đảm bảo sự nhạy cảm với cuộc sống ở con người này phát triển vừa phải để làm một nguồn hướng dẫn thiên về trực giác đáng tin cậy. Điều này cho phép họ xuất sắc hơn trong việc chọn lựa những điều nên làm, hơn là bốc đồng phản ứng lại các tình huống một cách thiếu suy nghĩ. Như một rào bảo vệ đầy giá trị với sự nhạy bén, một con số 5 kích hoạt mạnh mẽ tính can trường và lòng trắc ẩn, qua đó tạo ra một cá tính đầy mạnh mẽ. Nó cũng tạo ra sức mạnh của lòng thương và tự do để thúc đẩy mạnh thêm giá trị của tất cả những hình thức biểu hiện khác. Số 5 duy nhất có mặt trong biểu đồ cũng hỗ trợ cá nhân chủ nó hiểu thấu những cảm giác của chính họ, và vì thế phát triển được một sự trân trọng sâu sắc với cảm nhận của những người khác.","Người có hai con 5 trong biểu đồ ngày sinh thường được nhận dạng bởi tính căng thẳng, thể hiện ra bên ngoài bằng đôi mắt nhìn trừng và đôi lông mày hay nhíu lại. Quyết tâm được sắt lại tạo cho họ một vẻ rất tự tin, mà đôi khi mạnh hơn thực tế. Khi họ trưởng thành, tính tự tin này nếu không có ý thức kiểm soát dễ bị phát triển thành tính tự tôn, và họ cảm thấy khó chịu được những vấn đề về tình cảm/cảm xúc, về nghề nghiệp hay gia đình... vốn thỉnh thoảng vẫn xuất hiện trong cuộc đời họ. Họ cần để ý không bị làm trầm trọng hóa các vấn đề này và giữ cho mọi việc nhẹ nhàng như nó vốn dĩ như vậy. Đôi khi mãnh lực và sự nhiệt tình ở những người có hai số 5 trở nên không thể chịu nổi, và bùng ra những sự hiểu lầm hay nổi giận nơi những người thân gần với họ. Đôi khi do quá nghiêm túc thể hiện qua thái độ hay lời nói, họ tạo ra những ‘cục rối’ cảm xúc trong môi trường họ sống rồi từ đó bị phát triển các vấn đề sức khỏe có liên quan đến khu vực bụng. Họ thường xuyên chịu chứng khó tiêu. Những người hai số 5 cần chú trọng quản lý cảm xúc, nếu không họ dễ sa đà vào các chất hay thói quen gây nghiện để giải tỏa bớt những năng lượng cảm xúc bị dồn nén của mình.","Người có ba số 5 trở lên thường mạnh mẽ kiên định, nhưng đôi lúc tự tin thái quá, dễ có xu hướng nghiêm trọng hóa vấn đề. Họ cần học cách bày tỏ, giải tỏa cảm xúc."]},{"key":6,"title":["Là một con số chỉ óc sáng tạo, diễn đạt phổ biến nhất của những người có một con 6 là tình yêu sâu đậm với gia đình, hoặc mái ấm nhà mình. Tuy vậy, khi diễn đạt thành hành động hay thái độ cụ thể, nó có thể diễn dịch thành những điều nghệ thuật hơn, như sáng tác, biểu diễn, vẽ tranh, làm gốm... về những đề tài gia đình. Người có một số 6 rất tập trung và có trách nhiệm với gia đình. Tuy vậy, khi trưởng thành hơn, những người này cảm thấy chỉ trách nhiệm với gia đình thôi chưa đủ. Và họ sẽ tỏa sức mạnh của họ ra thêm nhiều lĩnh vực nữa để diễn đạt cho thỏa tính sáng tạo của mình, hoặc họ sẽ tiếp tục thắc mắc vì sao họ mãi vẫn chưa nhận được điều có thể thỏa những gì họ khát khao. Khi họ phát hiện ra các thể loại nghệ thuật phù hợp với họ và đặc biệt sức mạnh sáng tạo của âm nhạc, cuộc sống của họ sẽ thăng hoa một cách đáng kinh ngạc.","Tùy thuộc vào con số chủ đạo và nhiều yếu tố khác nữa trong ngày sinh của mỗi người, mà người có hai con 6 trong biểu đồ ngày sinh chịu một trong hai khả năng: hoặc là một người tính khá ‘bướng’, hoặc là một người chịu khuyết tật hoặc bệnh tật về một mặt nào đó. Và cũng tùy thuộc vào các yếu tố môi trường sống, đặc biệt là ảnh hưởng của cha mẹ lên con cái trong giai đoạn đầu đời, mà mỗi cá nhân của trường hợp này có thể vượt qua điều này thế nào. Với người có ý thức kém hơn, những khía cạnh tiêu cực thể hiện khá rõ nét, như sự lo lắng, bồn chồn, stress, dễ nóng giận, đặc biệt là ở nhà hay ở chỗ làm. Những người thân những người thương xung quanh họ cảm nhận sự tiêu cực này rõ nhất, và bởi vì tất cả đều liên quan với nhau, điều này tạo ra môi trường khá căng thẳng thần kinh, thậm chí bệnh tật. Để hóa giải điều này, tốt nhất là hướng mối quan tâm của họ vượt ra ngoài những ngưỡng giới hạn trong gia đình để vươn tới những lĩnh vực sáng tạo đa dạng hơn, bất kể là dạng gì, đều tốt cả. Nghề nghiệp của những người có hai số 6 trong ngày sinh nên theo những ngành chú trọng tính sáng tạo, được gợi cảm hứng bởi sự tự tin và thấu hiểu sâu về một vấn đề. Họ cần được hướng dẫn nhẹ nhàng trong mọi trường hợp, không bao giờ được hối thúc hay đe dọa họ. Với họ, lúc nào cũng cần những lời ăn tiếng nói nhẹ nhàng, đầy yêu thương và thấu hiểu, xoa dịu nhẹ hệ thống dây thần kinh rất nhạy của họ. Những người này cần thư giãn nghỉ ngơi nhiều nhất, bởi họ tiêu hao rất nhiều năng lượng thần kinh vào những hoạt động sáng tạo hay hoạt động thường ngày. Họ cần tập tĩnh tâm, hoặc thiền càng tốt, hàng ngày trước khi đi ngủ, để đảm bảo giấc ngủ của họ thực sự được thư giãn. Họ cũng cần những giấc ngủ trưa mỗi khi có thể, điều này thì dĩ nhiên tốt cho mọi người rồi, nhưng với những người có hai số 6, điều này là đặc biệt cần thiết.","Người có ba số 6 trở lên thường căng thẳng trong chuyện gia đình, nhất là đối với phụ nữ. Họ dễ bị kiểm soát người thân quá mức, khiến mọi người xung quanh cảm thấy khó chịu."]},{"key":7,"title":["Nếu có một con số 7 trong biểu đồ ngày sinh, những sự hy sinh trong một trong ba lĩnh vực sau đây: sức khỏe, tiền tài hay tình yêu sẽ hoặc đã xuất hiện trong cuộc đời bạn như một phần thiết yếu trong tiến trình học hỏi của vòng đời này. Những đau thương, hy sinh này là một phần để tâm hồn bạn chịu ‘hé mở’, kiểu như con trai ngọc phải chịu cái đau cắt thịt của hạt cát rạch vào trong thịt mới tiết ra được chất ngọc. Nhưng thông thường, những người chịu tổn thất, hy sinh này hay rên xiết, đau khổ mà không nhận ra bản chất của bài học dạng này chính là “buông bỏ để đạt được”. Về mặt tiền tài vật chất, khi chúng ta chấp nhận buông bỏ những giá trị sở hữu, chúng ta học được sự khác biệt giữa cảm giác ‘thích có thì hay’ và ‘bắt buộc phải có’. Về mặt sức khỏe hay tình yêu, bất kỳ sự mất mát nào về mặt này đều để trui rèn hay thanh lọc thái độ hay thói quen sống của ta. Nếu chúng ta ý thức rằng đàng nào chúng ta cũng cần phải hoàn thành mục đích sống của ta khi đến với trái đất này, ở vòng đời này, chúng ta phải đảm bảo rằng sức khỏe của chúng ta được trưởng dưỡng lành mạnh. Trong tình yêu, ta thường hay nhầm lẫn sự thèm muốn (có được tình yêu) với một dạng tình yêu vô điều kiện. Hãy nhớ rằng, nếu chúng ta thực hành yêu vô điều kiện, ta sẽ chẳng bao giờ mất mát gì cả, bởi vốn dĩ ta đâu có đặt ra ‘cầu mong’ gì đâu mà mất! Tuy vậy, thực tế là nhiều người trong chúng ta hiếm khi duy trì được tình yêu dài lâu, bởi chúng ta cứ gắn kèm chữ ‘tình yêu’ với biết bao là đòi hỏi, kỳ vọng về cảm xúc cần phải được đáp lại.","Hai con số 7 ngầm chỉ mức độ ‘bài học’ trong cuộc đời của một người sẽ được ‘tô đậm’ lên thêm gấp hai lần. Những người có hai số 7 trong biểu đồ ngày sinh sẽ thấy những bài học tổn thất, thương đau trong cuộc đời họ xuất hiện ở hai trong số ba khía cạnh cơ bản của đời sống: sức khỏe, tình cảm, hay tiền tài. Những loại trải nghiệm thương đau này nhằm để nhắc nhở người có hai số 7 để ý cố mà thấu hiểu những triết lý sống sâu sắc ở đời. Những tổn thất đau thương này làm cho họ rốt cục phải quan tâm đến các vấn đề tâm linh (vì sao ta lại chịu như vậy, vì sao ta lại ra nông nỗi này...), rồi từ sự quan tâm và tìm hiểu các vấn đề tâm linh cao hơn những gì mắt thấy tai nghe thông thường, họ sẽ đạt được những tầng thấu cảm nhất định, từ đó đạt được những năng lực chữa lành, định hướng và lòng từ ái, cho cả bản thân và cho người khác. Nếu họ không nhận ra những giá trị sâu xa này, người có hai số 7 sẽ dễ rơi vào trạng thái sống tiêu cực, và không ngừng than vãn về những mất mát đau thương xảy đến trong cuộc đời họ, trách móc mọi người về các vấn đề của họ, và lên án cuộc đời sao bất công với họ. Họ sẽ trở thành những người cộc cằn, xấu tính mà hầu như ai cũng muốn né.","Người có ba số 7 trở lên sẽ gặp phải sự mất mát ở 3 khía cạnh: sức khỏe, tình yêu, sự nghiệp. Nếu họ vượt qua được bài học trên thì họ sẽ có cảm nhận sâu sắc về cuộc đời, sở hữu trí tuệ thông thái, trở thành bậc thầy chia sẻ."]},{"key":8,"title":["Khi có một con 8 trong biểu đồ ngày sinh, người tích cực sẽ có tính tỉ mỉ, hệ thống đâu ra đó. Nếu không được tích cực, người có một số 8 sẽ tỏ ra hờ hững, hay không ổn định. Tính ngăn nắp, tỉ mỉ, chú ý vào chi tiết và quan tâm đến hiệu quả của từng chi tiết nhỏlà một bản chất tự nhiên của những người này. Đây là những khía cạnh của trí tuệ thực tiễn được nằm dưới sự phát triển tính độc lập của họ. Tuy nhiên, nếu những người này chọn hướng tiêu cực, họ trở nên lắt lay cảm xúc, dễ bực bội và bức xúc, hệ quả đưa đến nhiều thay đổi trong công việc, đổi nhà, thay đổi cả những mối quan hệ.","Độ sắc bén của năng lực thể hiện của hai con số 8 trên biểu đồ ngày sinh có thể cực kỳ có lợi hoặc cực kỳ chênh chao, tùy thuộc vào mỗi cá nhân sống tích cực đến độ nào. Nếu nói về tính tỉ mỉ, đi vào từng chi tiết, những người này có độ xuất sắc khó ai bì kịp. Nhưng những người này cũng ý thức rằng độ tinh nhạy mà họ có được trong lĩnh vực này không được làm họ trở nên độc tài từ sự quá tự tin. Điều này sẽ dẫn đến mâu thuẫn cảm xúc nội tại, gây ra sự bất ổn định tinh thần và cực kỳ bứt rứt. Nhu cầu tìm đến bản chất sự thật đến cùng, cũng như khát khao đạt được trí tuệ cũng có thể kích thích sự bứt rứt tương tự, nhưng theo một hướng tích cực. Nó sẽ làm cho những người này rất muốn đi đó đi đây, mà qua đó, họ sẽ lượm lặt được nhiều kinh nghiệm và kiến thức, và trí tuệ. Nếu lúc trẻ họ không đi nhiều, sự ẩn ức từ trong lòng có thể phát triển, trở thành sự bức xúc ngày càng trầm trọng. Điều này có thể gây ra một cảm giác bị trói buộc, và chỉ khi nào họ có cơ hội đi đó đây, họ mới có thể tìm lại được chút cảm giác an yên trong tâm trí.","Ở người có ba số 8 trở lên, cảm giác bồn chồn khó chịu đưa đến khía cạnh tiêu cực thường gặp hơn đối với khía cạnh tích cực. Họ hay cảm thấy cuộc sống thiếu định hướng và đáng tức giận, và trở thành nạn nhân của sự bi quan cùng cực. Vì vậy những người này cần rất nhiều tình yêu thương và sự hướng dẫn để khuyến khích họ tập có cái nhìn rộng mở và lạc quan hơn về cuộc đời. Suy cho cùng, cái mà họ cần hiểu thấu là cuộc sống này vẫn tiếp diễn, cho dù họ tích cực hay tiêu cực, có thưởng thức được nó hay không. Tất cả điều họ cần làm là thay đổi thái độ và, thay vì ngồi than thở về cái ‘bể khổ’ Với người có ba số 8 trở lên biết hướng về hướng tích cực, mỗi ngày họ sống là một ngày ngập tràn năng lượng tích cực, cảm giác độc lập và lĩnh hội được nhiều điều mở mang trí tuệ thật tuyệt vời. Ngay cả mặc dù họ luôn thích di chuyển, rất năng động, họ vẫn có một sự bình ổn và niềm vui chan chứa từ bên trong, khiến cho họ có rất nhiều bạn bè."]},{"key":9,"title":["Nói ngay cho dễ nhớ: số 9 mang ba giá trị lớn: tham vọng/hoài bão, trách nhiệm, và lý tưởng. Bởi ai sinh ra cũng có ba giá trị này ‘giắt túi’, nên sức mạnh này từng là nền tảng cho sự phát triển của xã hội thế kỷ trước, thúc đẩy chúng ta tìm hiểu cuộc sống rõ hơn và cũng kiểm soát, chế ngự nó nhiều hơn. Theo tác giả David A. Phillips, đừng cho rằng ôm ba giá trị lớn này, chúng ta đã thành công. Mặc dù chúng ta có vẻ đã hiểu nhiều hơn về môi trường sống và những gì xung quanh con người, hơn hẳn từ chặng đầu thế kỷ 20 trở về trước, thế nhưng cái giá đi kèm cũng thật quá đắt: chúng ta đã làm môi trường xuống cấp, bệnh tật nhiều hơn, nạn đói nghèo cũng diễn ra nhiều hơn. Vậy điều ‘sai sai’ nằm ở đâu? Phải chăng chúng ta đã đặt quá nhiều trọng tâm vào tham vọng và không chú trọng đủ đến hai yếu tố còn lại: trách nhiệm và lý tưởng? Để phát huy sức mạnh của một con số 9 lành mạnh, hiệu quả nhất, chúng ta cần học cách cân bằng ba giá trị này, tạo thành thế hài hòa, như kiềng ba chân. Bất kỳ sự cố gắng đền bù quá mức nào cũng chỉ tổ làm lệch thế cân bằng này, dẫn đến những điều tệ hại khác mà thôi. Ở đây việc duy trì sự hài hòa cân bằng là tối quan trọng, như Pythagoras từng dạy.","Mức lý tưởng hóa cao độ và nhiệt tâm theo đuổi lý tưởng được tăng cao, đi kèm với những suy nghĩ cực kỳ nghiêm túc, đó là những khái niệm để mô tả những người có hai số 9 trong biểu đồ ngày sinh. Họ thường bày tỏ sự hoàn hảo lý tưởng đáng ghen tị, nhưng sau đó thường quá lý tưởng để trở thành thực tế. Họ cần cẩn thận giữ sự cân bằng giữa tính thực tế và lý tưởng. Nếu muốn tìm thấy hạnh phúc, an lạc trong cuộc sống, những người này cần tránh tối đa khuynh hướng hay phê bình người khác có khả năng yếu lý tưởng hơn mình, hoặc đã có thì ráng vượt qua. Tuy vậy những người này thường là những người có tư duy sâu sắc, làm việc với tất cả sự nhiệt tâm, và họ ước mong được hữu ích khi giúp người. Chỉ cần ráng nhớ diễn đạt ý của mình cho rõ ràng, và tránh lòng tốt mình bị coi như đương nhiên nhé.","Với ba số 9 trở lên trong biểu đồ ngày sinh, sức mạnh lý tưởng và tham vọng/hoài bão vượt trội khiến họ khó mà kiểm soát được, và đôi khi tạo ra sự mất cân bằng với những ai không nhận ra sức mạnh của họ. Vấn đề này cần được tránh bằng cách nhận dạng trẻ em có ba số 9 trở lên ngay từ các em còn bé, và dạy các em diễn đạt đồng đều trên cả ba trục: thể chất, tâm hồn và trí não, hơn là chỉ tập trung diễn đạt mọi cái trên trục Trí não. Thêm vào đó, ở những người này còn hay gặp thêm khuynh hướng này đây: khi họ sống tiêu cực, họ hay bị tình trạng ‘chuyện bé xé ra to’, dẫn đến nhiều trận bộc phát, mất kiểm soát cảm xúc, thậm chí có khi còn đưa tới tình trạng mất cân bằng trí não đáng nguy hại. Bài học cần thiết cho những người nhóm này là tập nhìn mọi việc một cách khách quan và chi tiết theo giá trị đúng của họ. Điều này sẽ giúp giải tỏa sự phán xét họ hay áp đặt lên mọi điều, và cho phép họ chấp nhận tách rời khỏi những hệ thống lý tưởng khá cứng chắc của họ"]}]';
                    $arrData = json_decode($jsonStrength);
                    foreach ($data['data']['drawStrengthChart'] as $item) {
                        $check = array_filter($arrData, function ($value) use ($item) {
                            return $value->key == $item[0];
                        });
                        $check = array_values($check)[0];
                        switch ($item[1]) {
                            case 1:
                                array_push($strengthTWO, $check->title[0]);
                                break;
                            case 2:
                                array_push($strengthTWO, $check->title[1]);
                                break;
                            case 3:
                                array_push($strengthTWO, $check->title[2]);
                                break;
                        }
                    }
                @endphp
                <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; top: 0px; text-align: justify">
                    @foreach ($strengthTWO as $item)
                        {!! $item !!}
                    @endforeach
                </div>

                <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                <?php $page = $page + 1; ?>
                <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
            </div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>

        <div id="pf7" class="pf w0 h0" data-page-no="53">
            <div class="pc pc6 w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/ngay-sinh.png') }}">
                <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                    style="left: 92px; bottom: 1440px">24</div>
                <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">BIỂU ĐỒ TỔNG HỢP NGÀY SINH, HỌ TÊN VÀ NGHỆ DANH
                </div>



                <div class="pdf7-table__container">
                    <div class="pdf7-table-col">
                        <table class="pdf7-table">
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
                    </div>
                    <div class="pdf7-table-col">
                        <table class="pdf7-table">
                            <tr>
                                <td>{{ $summary->{3} ?? null }}</td>
                                <td>{{ $summary->{6} ?? null }}</td>
                                <td>{{ $summary->{9} ?? null }}</td>
                            </tr>
                            <tr>
                                <td>{{ $summary->{2} ?? null }}</td>
                                <td>{{ $summary->{5} ?? null }}</td>
                                <td>{{ $summary->{8} ?? null }}</td>
                            </tr>
                            <tr>
                                <td>{{ $summary->{1} ?? null }}</td>
                                <td>{{ $summary->{4} ?? null }}</td>
                                <td>{{ $summary->{7} ?? null }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                @php
                    $return = [];
                    if (isset($summary->{1}) && isset($summary->{2}) && isset($summary->{3})) {
                        array_push($return, [
                            'title' => '- 1 TRỤC LẬP KẾ HOẠCH (1-2-3)',
                            'content' =>
                                'Trục này cho thấy bạn là người có khả năng lập kế hoạch tốt và thường làm theo kế hoạch vạch ra. Bạn làm việc gì thường cũng có những bước định sẵn trong đầu rõ ràng.',
                        ]);
                    } elseif (empty($summary->{1}) && empty($summary->{2}) && empty($summary->{3})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC LẬP KẾ HOẠCH (1-2-3) MÀ BẠN THIẾU',
                            'content' =>
                                'Người thiếu cả ba số 1-2-3 trong biểu đồ ngày sinh có thể mang những đặc điểm tiêu cực như lộn xộn, rối loạn, thiếu tính tổ chức, thiếu tính kỉ luật. Công việc và cuộc sống dễ bị đảo lộn, bừa bãi hoặc bê bối. Điều này sẽ khiến họ có đạt được thành công trong cuộc sống.',
                        ]);
                    }
                    if (isset($summary->{4}) && isset($summary->{5}) && isset($summary->{6})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC Ý CHÍ (4-5-6)',
                            'content' =>
                                'Đây là trục có rất ít người sở hữu, người sở hữu nó thường rất năng động, luôn thể hiện nguồn lực sống mạnh mẽ. Tuy nhiên những người này thường có xu hướng muốn áp chế người khác để khẳng định cái tôi và sức mạnh bản thân. Họ rất có bản lĩnh, có tinh thần vươn lên tự kỉ luật mình. Đây cũng là những người có tố chất của nhà lãnh đạo, thường gặp may mắn trong cuộc sống.',
                        ]);
                    } elseif (empty($summary->{4}) && empty($summary->{5}) && empty($summary->{6})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC Ý CHÍ (4-5-6) MÀ BẠN THIẾU',
                            'content' =>
                                'Thường bạn sẽ có cảm giác bực bội, thất vọng kéo dài khi bạn không làm được điều mà mình muốn hoặc người khác làm việc không đúng như ý của bạn. Lời khuyên là bạn hãy luyện tập để tăng thêm các số 4, 5 hoặc 6. Nếu tên của bạn cũng chứa những số này thì bạn dễ dàng đạt được hơn. Số 4 bạn luyện tập bằng cách làm việc thực tế hơn và cẩn thận hơn.Số 5 bạn đạt được bằng cách để mở rộng kết giao những người bạn mới, du lịch khám phá những điều mới mẻ.Số 6 bạn đạt được bằng cách yêu thương và chăm sóc đến người khác nhiều hơn.',
                        ]);
                    }
                    if (isset($summary->{7}) && isset($summary->{8}) && isset($summary->{9})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC HÀNH ĐỘNG (7-8-9)',
                            'content' =>
                                'Bạn thường thụ động. Khi làm việc bạn thường dựa dẫm vào người khác nhiều hơn là tự mình làm. Lời khuyên cho bạn là hãy luyện tập để tăng các số 7, 8 hoặc 9 lên.Số 7 bạn có thể tăng bằng cách dám dấn thân hơn, thực hiện nhiều các hoạt động mới trong ngày hoặc trong tuần, làm những việc bạn chưa bao giờ làm. Số 8 bạn có thể tăng bằng cách học kinh doanh, học bán hàng, từ đó có khả năng nhạy cảm với lợi ích, tiền bạcSố 9 bạn có thể tăng bằng cách cho đi, giúp đỡ người khác nhiều hơn và đặt những mục tiêu lớn hơn cho bản thân.',
                        ]);
                    } elseif (empty($summary->{7}) && empty($summary->{8}) && empty($summary->{9})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC HÀNH ĐỘNG (7-8-9) MÀ BẠN THIẾU',
                            'content' =>
                                'Trục này cho thấy bạn có tính hành động và chủ động cao, ít dựa dẫm vào người khác. Trong khi người khác còn đang nói hoặc nghĩ thì bạn lại muốn hành động luôn.',
                        ]);
                    }
                    if (isset($summary->{1}) && isset($summary->{4}) && isset($summary->{7})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC THỂ CHẤT (1-4-7)',
                            'content' =>
                                'Trục này đại diện cho hoạt động của con người. Trục này quản lý lời nói, ngôn ngữ hình thể, động lực, óc tổ chức, tính kiên nhẫn, tính vật chất và sự lĩnh hội thông qua mất mát (học hỏi qua những lần vấp ngã).',
                        ]);
                    } elseif (empty($summary->{1}) && empty($summary->{4}) && empty($summary->{7})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC THỂ CHẤT (1-4-7) MÀ BẠN THIẾU',
                            'content' =>
                                'Bạn thường thiếu tính thực tế trong công việc và thường thiếu ngăn nắp, hay mơ mộng. Lời khuyên cho bạn là hãy luyện tập để tăng các số 1, 4 hoặc 7 lên. Số 1 bạn có thể tăng bằng cách tập viết nhật ký, học cách bộc lộ quan điểm, chính kiến, đặt mục tiêu rõ ràng. Số 4 bạn luyện tập bằng cách làm việc thực tế hơn và cẩn thận hơn. Số 7 bạn có thể tăng bằng cách dám dấn thân hơn, thực hiện nhiều các hoạt động mới trong ngày hoặc trong tuần, làm những việc bạn chưa bao giờ làm.',
                        ]);
                    }
                    if (isset($summary->{2}) && isset($summary->{5}) && isset($summary->{8})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC TINH THẦN (2-5-8)',
                            'content' =>
                                'Trục này đại diện cho những gì liên quan đến trái tim của con người. Trục này phụ trách toàn bộ cảm giác, bao gồm trực giác, tình yêu thương, sự tự do, các cảm xúc tích cực, các biểu đạt nghệ thuật, sự độc lập về tinh thần, và trí tuệ/sự thông thái.',
                        ]);
                    } elseif (empty($summary->{2}) && empty($summary->{5}) && empty($summary->{8})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC THỂ CHẤT (1-4-7) MÀ BẠN THIẾU',
                            'content' =>
                                'Bạn thường nhạy cảm quá mức nên dễ bị tổn thương về mặt tâm lý. Lời khuyên cho bạn là hãy luyện tập để tăng các số 2, 5 hoặc 8 lên. Số 2 bạn có thể tăng bằng cách lắng nghe, cảm nhận suy nghĩ của người khác. Tập thiền hoặc tập yoga. Số 5 bạn đạt được bằng cách để mở rộng kết giao những người bạn mới, du lịch khám phá những điều mới mẻ. Số 8 bạn có thể tăng bằng cách học kinh doanh, học bán hàng, từ đó có khả năng nhạy cảm với lợi ích, tiền bạc.',
                        ]);
                    }
                    if (isset($summary->{3}) && isset($summary->{6}) && isset($summary->{9})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC TRÍ TUỆ (3-6-9)',
                            'content' =>
                                'Trục này đại diện cho những gì liên quan đến đầu óc của con người. Trục này phụ trách trí nhớ, suy nghĩ, tư duy phân tích, lý trí, trí tưởng tượng, óc sáng tạo, tinh thần trách nhiệm, hoài bão/tham vọng và lý tưởng sống.',
                        ]);
                    } elseif (empty($summary->{3}) && empty($summary->{6}) && empty($summary->{9})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC TRÍ TUỆ (3-6-9) MÀ BẠN THIẾU',
                            'content' =>
                                'Bạn thường mau quên và gặp khó khăn trong việc học các kiến thức mới. Lời khuyên cho bạn là hãy luyện tập để tăng các số 3, 6 hoặc 9 lên. Số 3 bạn có thể tăng bằng cách tập kể chuyện cười và tham gia vào các hoạt động vui vẻ sôi nổi nhiều hơn. Số 6 bạn đạt được bằng cách yêu thương và chăm sóc đến người khác nhiều hơn. Số 9 bạn có thể tăng bằng cách cho đi, giúp đỡ người khác nhiều hơn và đặt những mục tiêu lớn hơn cho bản thân.',
                        ]);
                    }
                    if (isset($summary->{1}) && isset($summary->{5}) && isset($summary->{9})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC QUYẾT TÂM (1-5-9)',
                            'content' =>
                                'Trục này cho thấy bạn có sự quyết tâm cao và hành động ngay khi muốn thực hiện một việc hoặc kế hoạch nào đó mà không trì hoãn. Bạn thường muốn làm đến cùng những công việc mà bạn tin tưởng và những điều mà bạn cho là đúng.',
                        ]);
                    } elseif (empty($summary->{1}) && empty($summary->{5}) && empty($summary->{9})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC QUYẾT TÂM (1-5-9) MÀ BẠN THIẾU',
                            'content' =>
                                'Người không có cả ba số 1-5-9 trong biểu đồ ngày sinh thường thiếu quết tâm, hay trì hoãn thậm chí không làm gì cả. Điều này ảnh hưởng tiêu cực đến sự phát triển hay thành công của họ, khiến bản thân họ lẫn mọi người xung quanh đều khó chịu. Điều này cần phải được phát hiện sớm để điều chỉnh kịp thời.',
                        ]);
                    }
                    if (isset($summary->{3}) && isset($summary->{5}) && isset($summary->{7})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC NHẠY BÉN (3-5-7)',
                            'content' =>
                                'Trục này cho thấy bạn có sự quyết tâm cao và hành động ngay khi muốn thực hiện một việc hoặc kế hoạch nào đó mà không trì hoãn. Bạn thường muốn làm đến cùng những công việc mà bạn tin tưởng và những điều mà bạn cho là đúng.',
                        ]);
                    } elseif (empty($summary->{3}) && empty($summary->{5}) && empty($summary->{7})) {
                        array_push($return, [
                            'title' => '-  1 TRỤC NHẠY BÉN (3-5-7) MÀ BẠN THIẾU',
                            'content' =>
                                'Người không có cả ba số 1-5-9 trong biểu đồ ngày sinh thường thiếu quyết tâm, hay trì hoãn thậm chí không làm gì cả. Điều này ảnh hưởng tiêu cực đến sự phát triển hay thành công của họ, khiến bản thân họ lẫn mọi người xung quanh đều khó chịu. Điều này cần phải được phát hiện sớm để điều chỉnh kịp thời.',
                        ]);
                    }

                    if (count($return) > 4) {
                        $data1 = array_slice($return, 0, 5);
                        $data2 = array_slice($return, 5);
                    } else {
                        $data1 = $return;
                    }
                @endphp


                <div class="t m0 x5 hf yd7 ff4 fs9 fc2 sc0 ls0 ws0"
                    style="white-space: normal; width: 2360px; bottom: 1050px; text-align: justify">
                    @foreach ($data1 as $item)
                        {!! $item['title'] !!}
                        <p>{!! $item['content'] !!}</p>
                    @endforeach
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


        @if (!empty($data2))
            <div id="pfd" class="pf w0 h0" data-page-no="52">
                <div class="pc pcb w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt=""
                        src="{{ asset('/' . $path . '/page-trang-trai.png') }}">

                    <div class="t m0 x5 hf yd7 ff4 fs9 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; top: 0px; text-align: justify">
                        @foreach ($data2 as $item)
                            {!! $item['title'] !!}
                            <p>{!! $item['content'] !!}</p>
                        @endforeach
                    </div>

                    <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                    @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                    <?php $page = $page + 1; ?>
                    <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
                </div>
                <div class="pi"
                    data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
                </div>
            </div>
        @endif



        <div id="pfd" class="pf w0 h0" data-page-no="54">
            <div class="pc pcb w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt=""
                    src="{{ asset('/' . $path . '/page-trang-phai.png') }}">

                @php
                    $arr = [
                        'con số của sự độc lập, quyết đoán (biểu đồ của bạn còn có khả năng tạo được cặp số đẹp 11).',
                        'con số của sự nhẹ nhàng, hợp tác và cảm xúc (biểu đồ của bạn còn có khả năng tạo được cặp số đẹp 22).',
                        'con số của trí tuệ sáng tạo, vui vẻ và hoạt ngôn.',
                        'con số của sự cẩn thận và thực tế, kiên trì và chăm chỉ.',
                        'con số của tự do, khám phá và thay đổi linh hoạt.',
                        'con số của trí tuệ cảm xúc và quan tâm người khác.',
                        'con số của tri thức và khả năng tự học hỏi.',
                        'con số của khả năng nhạy bén tài chính và quyền lực.',
                        'con số của lý tưởng, sự cho đi và đức hy sinh.',
                    ];
                    $missing = [];
                    foreach (range(1, 9) as $item) {
                        if (!empty($summary->{$item})) {
                            array_push($missing, $arr[$item - 1]);
                        }
                    }
                @endphp


                <div class="t m0 x5 hf yf3 ff4 fs9 fc2 sc0 ls0 ws0"
                    style="width: 2360px; white-space: normal; text-align: justify">
                    @foreach ($missing as $item)
                        {!! $item !!}
                    @endforeach
                </div>

                <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                <?php $page = $page + 1; ?>
                <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{ $page }}</div>
            </div>
            <div class="pi"
                data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>

        @isset($data['isCouple'])
            <div id="pf7" class="pf w0 h0" data-page-no="53">
                <div class="pc pc6 w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/vochong.png') }}">
                    <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                        style="left: 92px; bottom: 1440px">25</div>
                    <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TƯƠNG HỢP VỢ CHỒNG</div>
                    <div class="t m0 x5 hf ff2 fs9 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; top: 200px">
                        @switch($data['data']['coupleIndicator'])
                            @case(0)
                                Hai bạn cực kì hợp nhau và có thể sẽ có những bước tiến mới trong mối quan hệ này.
                            @break

                            @case(1)
                                Nếu bạn có một hoặc hai cặp số Thách thức xuất hiện trong So sánh Biểu đồ Thần số học thì cũng
                                không phải vấn đề to tát gì. Các bạn sẽ tìm ra được cách thỏa hiệp, bởi những điều Tích cực luôn
                                đánh bại những Tiêu cực trong mối quan hệ. Lưu ý: có một ngoại lệ nếu tuân theo quy tắc này. Nếu
                                người đó đang lạm dụng chất kích thích, thì bạn nên dừng lại! Cho dù So sánh Biểu đồ Thần số học
                                có tốt như thế nào, thì nó cũng sẽ bị bóp méo bởi các chất gây nghiện.
                            @break

                            @case(2)
                                Nếu bạn có một hoặc hai cặp số Thách thức xuất hiện trong So sánh Biểu đồ Thần số học thì cũng
                                không phải vấn đề to tát gì. Các bạn sẽ tìm ra được cách thỏa hiệp, bởi những điều Tích cực luôn
                                đánh bại những Tiêu cực trong mối quan hệ. Lưu ý: có một ngoại lệ nếu tuân theo quy tắc này. Nếu
                                người đó đang lạm dụng chất kích thích, thì bạn nên dừng lại! Cho dù So sánh Biểu đồ Thần số học
                                có tốt như thế nào, thì nó cũng sẽ bị bóp méo bởi các chất gây nghiện.
                            @break

                            @case(3)
                                Nếu bạn có ba cặp số Thách thức trong So sánh Biểu đồ Thần số học, mối quan hệ này sẽ rất dễ đứt
                                gánh giữa đường. Nếu bạn sẵn lòng cam kết và thấu hiểu xem cả hai khác biệt nhau ở điểm nào,và
                                tìm cách chấp nhận, thì mối quan hệ này có thể dịu đi nhiều phần.
                            @break

                            @default
                                Nếu có bốn hoặc nhiều hơn các cặp số Thách thức xuất hiện khi So sánh Biểu đồ Thần số học, bạn
                                thực sự phải tự hỏi bản thân, “Mối quan hệ này có đáng không?”. Trừ khi bạn là loài bò sát máu
                                lạnh sống trên đỉnh núi và không cần lo lắng về bất kì điều gì trên đời, bằng không thì mối quan
                                hệ đó sẽ rất hỗn độn. Việc các bạn thu hút lẫn nhau hoàn toàn có thể hiểu được như cách con ngài
                                lao vào ngọn lửa. Con số Thách thức hầu như luôn là chất xúc tác mà bạn không thể cưỡng lại. Tuy
                                nhiên, khi cuộc sống bạn trở nên khó khăn, người với bốn con số Thách thức kia sẽ đứng trơ mắt
                                nhìn và không hề giúp đỡ bạn. Tôi cũng từng gặp được một đôi vợ chồng có bốn hoặc nhiều con số
                                Thách thức trong biểu đồ và bởi cả hai đều đang sống ở phía Tích cực của Rung động, họ thành
                                công giữ cho mối quan hệ hiệu quả thông qua việc tôn trọng nhau. Tuy nhiên, điều này là rất hiếm
                                khi xảy ra. Nghiên cứu kỹ chương này để ghi nhớ các cặp số Hòa hợp Tự nhiên, Tương thích và
                                Thách thức. Sau đó, bạn sẽ có thể tự tin tìm thấy tình yêu mà mình mong muốn, hoặc khiến các mối
                                quan hệ bạn phong phú hơn.
                            @break
                        @endswitch
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
        @endisset

        @isset($data['phones'])
            <div id="pf7" class="pf w0 h0" data-page-no="54">
                <div class="pc pc6 w0 h0 opened">
                    <img class="bi x0 y0 w1 h1" alt="" src="{{ asset('/' . $path . '/vochong.png') }}">
                    <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0 c-header-index"
                        style="left: 92px; bottom: 1440px">25</div>
                    <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TƯƠNG HỢP SỐ ĐIỆN THOẠI</div>
                    <div class="t m0 x5 hf ff2 fs9 fc2 sc0 ls0 ws0"
                        style="white-space: normal; width: 2360px; top: 100px; text-align: justify">
                        @foreach ($data['data']['phoneIndicator']['data'] as $item)
                            {!! $item !!}
                        @endforeach
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
        @endisset



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
                            <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 445px; left: 110px">3
                            </div>
                            <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 445px; left: 245px">1
                            </div>
                            <div class="t m0 h14 y166 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 445px; left: 375px">3
                            </div>
                            <div class="t m0 h14 y167 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 495px; left: 200px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstPeakIndicator'] }}
                            </div>
                            <div class="t m0 h14 y167 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 495px; left: 285px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondPeakIndicator'] }}
                            </div>
                            <div class="t m0 h14 y16a ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 545px; left: 242px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdPeakIndicator'] }}
                            </div>
                            <div class="t m0 h14 y16d ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 600px; left: 242px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['fourthChallenge']['fourthPeakIndicator'] }}
                            </div>
                            <div class="t m0 h14 y170 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 393px; left: 200px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['firstChallenge']['firstChallengeIndicator'] }}<span
                                    class="_ _1b" style="width: 183px;">
                                </span>{{ $data['data']['challengeIndicator']['challengeIndicator']['secondChallenge']['secondChallengeIndicator'] }}
                            </div>
                            <div class="t m0 h14 y171 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 340px; left: 240px">
                                {{ $data['data']['challengeIndicator']['challengeIndicator']['thirdChallenge']['thirdChallengeIndicator'] }}
                            </div>
                            <div class="t m0 h14 y171 ff1 fsc fc2 sc0 ls0 ws0" style="bottom: 290px; left: 240px">
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
