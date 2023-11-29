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


    <div id="pf7" class="pf w0 h0" data-page-no="51">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                 src="{{ asset('/' . $path . '/suc-manh.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0"></div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">BIỂU ĐỒ SỨC MẠNH(rất quan trọng)</div>
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
                        'content' => 'Trục này cho thấy bạn là người có khả năng lập kế hoạch tốt và thường làm theo kế hoạch vạch ra. Bạn làm việc gì thường cũng có những bước định sẵn trong đầu rõ ràng.',
                    ]);
                } elseif (empty($strength->{1}) && empty($strength->{2}) && empty($strength->{3})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC LẬP KẾ HOẠCH (1-2-3) MÀ BẠN THIẾU',
                        'content' => 'Người thiếu cả ba số 1-2-3 trong biểu đồ ngày sinh có thể mang những đặc điểm tiêu cực như lộn xộn, rối loạn, thiếu tính tổ chức, thiếu tính kỉ luật. Công việc và cuộc sống dễ bị đảo lộn, bừa bãi hoặc bê bối. Điều này sẽ khiến họ có đạt được thành công trong cuộc sống.',
                    ]);
                }
                if (isset($strength->{4}) && isset($strength->{5}) && isset($strength->{6})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC Ý CHÍ (4-5-6)',
                        'content' => 'Đây là trục có rất ít người sở hữu, người sở hữu nó thường rất năng động, luôn thể hiện nguồn lực sống mạnh mẽ. Tuy nhiên những người này thường có xu hướng muốn áp chế người khác để khẳng định cái tôi và sức mạnh bản thân. Họ rất có bản lĩnh, có tinh thần vươn lên tự kỉ luật mình. Đây cũng là những người có tố chất của nhà lãnh đạo, thường gặp may mắn trong cuộc sống.',
                    ]);
                } elseif (empty($strength->{4}) && empty($strength->{5}) && empty($strength->{6})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC Ý CHÍ (4-5-6) MÀ BẠN THIẾU',
                        'content' => 'Thường bạn sẽ có cảm giác bực bội, thất vọng kéo dài khi bạn không làm được điều mà mình muốn hoặc người khác làm việc không đúng như ý của bạn. Lời khuyên là bạn hãy luyện tập để tăng thêm các số 4, 5 hoặc 6. Nếu tên của bạn cũng chứa những số này thì bạn dễ dàng đạt được hơn. Số 4 bạn luyện tập bằng cách làm việc thực tế hơn và cẩn thận hơn.Số 5 bạn đạt được bằng cách để mở rộng kết giao những người bạn mới, du lịch khám phá những điều mới mẻ.Số 6 bạn đạt được bằng cách yêu thương và chăm sóc đến người khác nhiều hơn.',
                    ]);
                }
                if (isset($strength->{7}) && isset($strength->{8}) && isset($strength->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC HÀNH ĐỘNG (7-8-9)',
                        'content' => 'Bạn thường thụ động. Khi làm việc bạn thường dựa dẫm vào người khác nhiều hơn là tự mình làm. Lời khuyên cho bạn là hãy luyện tập để tăng các số 7, 8 hoặc 9 lên.Số 7 bạn có thể tăng bằng cách dám dấn thân hơn, thực hiện nhiều các hoạt động mới trong ngày hoặc trong tuần, làm những việc bạn chưa bao giờ làm. Số 8 bạn có thể tăng bằng cách học kinh doanh, học bán hàng, từ đó có khả năng nhạy cảm với lợi ích, tiền bạcSố 9 bạn có thể tăng bằng cách cho đi, giúp đỡ người khác nhiều hơn và đặt những mục tiêu lớn hơn cho bản thân.',
                    ]);
                } elseif (empty($strength->{7}) && empty($strength->{8}) && empty($strength->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC HÀNH ĐỘNG (7-8-9) MÀ BẠN THIẾU',
                        'content' => 'Trục này cho thấy bạn có tính hành động và chủ động cao, ít dựa dẫm vào người khác. Trong khi người khác còn đang nói hoặc nghĩ thì bạn lại muốn hành động luôn.',
                    ]);
                }
                if (isset($strength->{1}) && isset($strength->{4}) && isset($strength->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC THỂ CHẤT (1-4-7)',
                        'content' => 'Trục này đại diện cho hoạt động của con người. Trục này quản lý lời nói, ngôn ngữ hình thể, động lực, óc tổ chức, tính kiên nhẫn, tính vật chất và sự lĩnh hội thông qua mất mát (học hỏi qua những lần vấp ngã).',
                    ]);
                } elseif (empty($strength->{1}) && empty($strength->{4}) && empty($strength->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC THỂ CHẤT (1-4-7) MÀ BẠN THIẾU',
                        'content' => 'Bạn thường thiếu tính thực tế trong công việc và thường thiếu ngăn nắp, hay mơ mộng. Lời khuyên cho bạn là hãy luyện tập để tăng các số 1, 4 hoặc 7 lên. Số 1 bạn có thể tăng bằng cách tập viết nhật ký, học cách bộc lộ quan điểm, chính kiến, đặt mục tiêu rõ ràng. Số 4 bạn luyện tập bằng cách làm việc thực tế hơn và cẩn thận hơn. Số 7 bạn có thể tăng bằng cách dám dấn thân hơn, thực hiện nhiều các hoạt động mới trong ngày hoặc trong tuần, làm những việc bạn chưa bao giờ làm.',
                    ]);
                }
                if (isset($strength->{2}) && isset($strength->{5}) && isset($strength->{8})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC TINH THẦN (2-5-8)',
                        'content' => 'Trục này đại diện cho những gì liên quan đến trái tim của con người. Trục này phụ trách toàn bộ cảm giác, bao gồm trực giác, tình yêu thương, sự tự do, các cảm xúc tích cực, các biểu đạt nghệ thuật, sự độc lập về tinh thần, và trí tuệ/sự thông thái.',
                    ]);
                } elseif (empty($strength->{2}) && empty($strength->{5}) && empty($strength->{8})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC THỂ CHẤT (1-4-7) MÀ BẠN THIẾU',
                        'content' => 'Bạn thường nhạy cảm quá mức nên dễ bị tổn thương về mặt tâm lý. Lời khuyên cho bạn là hãy luyện tập để tăng các số 2, 5 hoặc 8 lên. Số 2 bạn có thể tăng bằng cách lắng nghe, cảm nhận suy nghĩ của người khác. Tập thiền hoặc tập yoga. Số 5 bạn đạt được bằng cách để mở rộng kết giao những người bạn mới, du lịch khám phá những điều mới mẻ. Số 8 bạn có thể tăng bằng cách học kinh doanh, học bán hàng, từ đó có khả năng nhạy cảm với lợi ích, tiền bạc.',
                    ]);
                }
                if (isset($strength->{3}) && isset($strength->{6}) && isset($strength->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC TRÍ TUỆ (3-6-9)',
                        'content' => 'Trục này đại diện cho những gì liên quan đến đầu óc của con người. Trục này phụ trách trí nhớ, suy nghĩ, tư duy phân tích, lý trí, trí tưởng tượng, óc sáng tạo, tinh thần trách nhiệm, hoài bão/tham vọng và lý tưởng sống.',
                    ]);
                } elseif (empty($strength->{3}) && empty($strength->{6}) && empty($strength->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC TRÍ TUỆ (3-6-9) MÀ BẠN THIẾU',
                        'content' => 'Bạn thường mau quên và gặp khó khăn trong việc học các kiến thức mới. Lời khuyên cho bạn là hãy luyện tập để tăng các số 3, 6 hoặc 9 lên. Số 3 bạn có thể tăng bằng cách tập kể chuyện cười và tham gia vào các hoạt động vui vẻ sôi nổi nhiều hơn. Số 6 bạn đạt được bằng cách yêu thương và chăm sóc đến người khác nhiều hơn. Số 9 bạn có thể tăng bằng cách cho đi, giúp đỡ người khác nhiều hơn và đặt những mục tiêu lớn hơn cho bản thân.',
                    ]);
                }
                if (isset($strength->{1}) && isset($strength->{5}) && isset($strength->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC QUYẾT TÂM (1-5-9)',
                        'content' => 'Trục này cho thấy bạn có sự quyết tâm cao và hành động ngay khi muốn thực hiện một việc hoặc kế hoạch nào đó mà không trì hoãn. Bạn thường muốn làm đến cùng những công việc mà bạn tin tưởng và những điều mà bạn cho là đúng.',
                    ]);
                } elseif (empty($strength->{1}) && empty($strength->{5}) && empty($strength->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC QUYẾT TÂM (1-5-9) MÀ BẠN THIẾU',
                        'content' => 'Người không có cả ba số 1-5-9 trong biểu đồ ngày sinh thường thiếu quết tâm, hay trì hoãn thậm chí không làm gì cả. Điều này ảnh hưởng tiêu cực đến sự phát triển hay thành công của họ, khiến bản thân họ lẫn mọi người xung quanh đều khó chịu. Điều này cần phải được phát hiện sớm để điều chỉnh kịp thời.',
                    ]);
                }
                if (isset($strength->{3}) && isset($strength->{5}) && isset($strength->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC NHẠY BÉN (3-5-7)',
                        'content' => 'Trục này cho thấy bạn có sự quyết tâm cao và hành động ngay khi muốn thực hiện một việc hoặc kế hoạch nào đó mà không trì hoãn. Bạn thường muốn làm đến cùng những công việc mà bạn tin tưởng và những điều mà bạn cho là đúng.',
                    ]);
                } elseif (empty($strength->{3}) && empty($strength->{5}) && empty($strength->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC NHẠY BÉN (3-5-7) MÀ BẠN THIẾU',
                        'content' => 'Người không có cả ba số 1-5-9 trong biểu đồ ngày sinh thường thiếu quyết tâm, hay trì hoãn thậm chí không làm gì cả. Điều này ảnh hưởng tiêu cực đến sự phát triển hay thành công của họ, khiến bản thân họ lẫn mọi người xung quanh đều khó chịu. Điều này cần phải được phát hiện sớm để điều chỉnh kịp thời.',
                    ]);
                }
                if (count($return) > 4) {
                    $data1 = array_slice($return, 0, 5);
                    $data2 = array_slice($return, 5);
                } else {
                    $data1 = $return;
                }

            @endphp
            <div class="t m0 x5 hf yd6 ff4 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2360px; text-align: justify">
                @foreach ($data1 as $item)
                    {!! $item['title'] !!}
                    <p>{!! $item['content'] !!}</p>
                @endforeach
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <?php $page = $page + 1; ?>
            <div class="t m0 x5 h5 y61 ff4 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    @if (isset($data2))
        <div id="pfd" class="pf w0 h0" data-page-no="52">
            <div class="pc pcb w0 h0 opened">
                <img class="bi x0 y0 w1 h1" alt=""
                     src="{{ asset('/' . $path . '/page-trang-trai.png') }}">

                <div class="t m0 x5 hf yd7 ff2 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2360px; top: 0px; text-align: justify">
                    @foreach ($data2 as $item)
                        {!! $item['title'] !!}
                        <p>{!! $item['content'] !!}</p>
                    @endforeach
                </div>

                <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
                @include('footer', ['name' => $data['fullName'], 'date' => $data['dateOfBirth']])
                    <?php $page = $page + 1; ?>
                <div class="t m0 x3b h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$page}}</div>
            </div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    @endif





</div>
</body>

</html>
