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
    @include('pages.first')
    @include('pages.chiso')
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
            <div class="t m0 x55 h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0">{{ $strength->{3} ?? null }}</div>
            <div class="t m0 h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 450px">{{ $strength->{6} ?? null }}</div>
            <div class="t m0 h14 y1c7 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px">{{ $strength->{9} ?? null }}</div>
            <div class="t m0 x55 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0">{{ $strength->{2} ?? null }}</div>
            <div class="t m0 x55 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 450px">{{ $strength->{5} ?? null }}
            </div>
            <div class="t m0 x55 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px">{{ $strength->{8} ?? null }}
            </div>
            <div class="t m0 x2 h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0">{{ $strength->{1} ?? null }}</div>
            <div class="t m0 x2 h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="left: 450px">{{ $strength->{4} ?? null }}
            </div>
            <div class="t m0 x2 h14 y1c9 ff1 fsc fc7 sc0 ls0 ws0" style="left: 530px">{{ $strength->{7} ?? null }}
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
            @endphp
            <div class="t m0 x5 hf yd6 ff4 fs9 fc2 sc0 ls0 ws0" style="white-space: normal; width: 2000px">
                @foreach ($return as $item)
                    {!! $item['title'] !!}
                    <p>{!! $item['content'] !!}</p>
                @endforeach
            </div>

            <div class="t m2 xe h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x5 h5 y61 ff4 fs2 fc0 sc0 ls0 ws0">51</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>
    <div id="pf7" class="pf w0 h0" data-page-no="53">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                 src="{{ asset('/' . $path . '/ngay-sinh.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0"></div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">BIỂU ĐỒ TỔNG HỢP NGÀY SINH, HỌ TÊN VÀ NGHỆ DANH</div>
            <style>
                .test {
                    justify-content: center;
                    align-items: center;
                    color: rgb(38, 91, 166);
                    font-size: 56px;
                }

                @media only screen and (max-width: 992px) {
                    .bieudo {
                        width: 188vw !important;
                    }
                }
                @media only screen and (min-width: 992px) {
                    .bieudo {
                        width: 96vw !important;
                    }
                }
                .bieudo {
                    width: 96vw !important;
                }
            </style>
            <div class="t m0 x3 hc y97 ff1 fs6 fc0 sc0 ls0 ws0 bieudo" style="display: flex;justify-content: space-between;align-items: center;left: 104px;bottom: 969px;gap: 110px;height: 700px;">
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $name->{3} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $name->{6} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $name->{9} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p></p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p></p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $summary->{3} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $summary->{6} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $summary->{9} ?? null }}</p>
                </div>
            </div>

            <div class="t m0 x3 hc y97 ff1 fs6 fc0 sc0 ls0 ws0 bieudo" style="display: flex;justify-content: space-between;align-items: center;left: 104px;bottom: 969px;gap: 110px;height: 400px;">
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $name->{2} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $name->{5} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $name->{8} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p></p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p></p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $summary->{2} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $summary->{5} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $summary->{8} ?? null }}</p>
                </div>
            </div>

            <div class="t m0 x3 hc y97 ff1 fs6 fc0 sc0 ls0 ws0 bieudo" style="display: flex;justify-content: space-between;align-items: center;left: 104px;bottom: 969px;gap: 110px;height: 100px;">
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $name->{1} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $name->{4} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $name->{7} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p></p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p></p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $summary->{1} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $summary->{4} ?? null }}</p>
                </div>
                <div class="test" style="display: flex; flex: 1; text-align: center; margin: 0; padding: 0;">
                    <p>{{ $summary->{7} ?? null }}</p>
                </div>
            </div>

            @php
                $return = [];
                if (isset($summary->{1}) && isset($summary->{2}) && isset($summary->{3})) {
                    array_push($return, [
                        'title' => '- 1 TRỤC LẬP KẾ HOẠCH (1-2-3)',
                        'content' => 'Trục này cho thấy bạn là người có khả năng lập kế hoạch tốt và thường làm theo kế hoạch vạch ra. Bạn làm việc gì thường cũng có những bước định sẵn trong đầu rõ ràng.',
                    ]);
                } elseif (empty($summary->{1}) && empty($summary->{2}) && empty($summary->{3})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC LẬP KẾ HOẠCH (1-2-3) MÀ BẠN THIẾU',
                        'content' => 'Người thiếu cả ba số 1-2-3 trong biểu đồ ngày sinh có thể mang những đặc điểm tiêu cực như lộn xộn, rối loạn, thiếu tính tổ chức, thiếu tính kỉ luật. Công việc và cuộc sống dễ bị đảo lộn, bừa bãi hoặc bê bối. Điều này sẽ khiến họ có đạt được thành công trong cuộc sống.',
                    ]);
                }
                if (isset($summary->{4}) && isset($summary->{5}) && isset($summary->{6})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC Ý CHÍ (4-5-6)',
                        'content' => 'Đây là trục có rất ít người sở hữu, người sở hữu nó thường rất năng động, luôn thể hiện nguồn lực sống mạnh mẽ. Tuy nhiên những người này thường có xu hướng muốn áp chế người khác để khẳng định cái tôi và sức mạnh bản thân. Họ rất có bản lĩnh, có tinh thần vươn lên tự kỉ luật mình. Đây cũng là những người có tố chất của nhà lãnh đạo, thường gặp may mắn trong cuộc sống.',
                    ]);
                } elseif (empty($summary->{4}) && empty($summary->{5}) && empty($summary->{6})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC Ý CHÍ (4-5-6) MÀ BẠN THIẾU',
                        'content' => 'Thường bạn sẽ có cảm giác bực bội, thất vọng kéo dài khi bạn không làm được điều mà mình muốn hoặc người khác làm việc không đúng như ý của bạn. Lời khuyên là bạn hãy luyện tập để tăng thêm các số 4, 5 hoặc 6. Nếu tên của bạn cũng chứa những số này thì bạn dễ dàng đạt được hơn. Số 4 bạn luyện tập bằng cách làm việc thực tế hơn và cẩn thận hơn.Số 5 bạn đạt được bằng cách để mở rộng kết giao những người bạn mới, du lịch khám phá những điều mới mẻ.Số 6 bạn đạt được bằng cách yêu thương và chăm sóc đến người khác nhiều hơn.',
                    ]);
                }
                if (isset($summary->{7}) && isset($summary->{8}) && isset($summary->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC HÀNH ĐỘNG (7-8-9)',
                        'content' => 'Bạn thường thụ động. Khi làm việc bạn thường dựa dẫm vào người khác nhiều hơn là tự mình làm. Lời khuyên cho bạn là hãy luyện tập để tăng các số 7, 8 hoặc 9 lên.Số 7 bạn có thể tăng bằng cách dám dấn thân hơn, thực hiện nhiều các hoạt động mới trong ngày hoặc trong tuần, làm những việc bạn chưa bao giờ làm. Số 8 bạn có thể tăng bằng cách học kinh doanh, học bán hàng, từ đó có khả năng nhạy cảm với lợi ích, tiền bạcSố 9 bạn có thể tăng bằng cách cho đi, giúp đỡ người khác nhiều hơn và đặt những mục tiêu lớn hơn cho bản thân.',
                    ]);
                } elseif (empty($summary->{7}) && empty($summary->{8}) && empty($summary->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC HÀNH ĐỘNG (7-8-9) MÀ BẠN THIẾU',
                        'content' => 'Trục này cho thấy bạn có tính hành động và chủ động cao, ít dựa dẫm vào người khác. Trong khi người khác còn đang nói hoặc nghĩ thì bạn lại muốn hành động luôn.',
                    ]);
                }
                if (isset($summary->{1}) && isset($summary->{4}) && isset($summary->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC THỂ CHẤT (1-4-7)',
                        'content' => 'Trục này đại diện cho hoạt động của con người. Trục này quản lý lời nói, ngôn ngữ hình thể, động lực, óc tổ chức, tính kiên nhẫn, tính vật chất và sự lĩnh hội thông qua mất mát (học hỏi qua những lần vấp ngã).',
                    ]);
                } elseif (empty($summary->{1}) && empty($summary->{4}) && empty($summary->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC THỂ CHẤT (1-4-7) MÀ BẠN THIẾU',
                        'content' => 'Bạn thường thiếu tính thực tế trong công việc và thường thiếu ngăn nắp, hay mơ mộng. Lời khuyên cho bạn là hãy luyện tập để tăng các số 1, 4 hoặc 7 lên. Số 1 bạn có thể tăng bằng cách tập viết nhật ký, học cách bộc lộ quan điểm, chính kiến, đặt mục tiêu rõ ràng. Số 4 bạn luyện tập bằng cách làm việc thực tế hơn và cẩn thận hơn. Số 7 bạn có thể tăng bằng cách dám dấn thân hơn, thực hiện nhiều các hoạt động mới trong ngày hoặc trong tuần, làm những việc bạn chưa bao giờ làm.',
                    ]);
                }
                if (isset($summary->{2}) && isset($summary->{5}) && isset($summary->{8})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC TINH THẦN (2-5-8)',
                        'content' => 'Trục này đại diện cho những gì liên quan đến trái tim của con người. Trục này phụ trách toàn bộ cảm giác, bao gồm trực giác, tình yêu thương, sự tự do, các cảm xúc tích cực, các biểu đạt nghệ thuật, sự độc lập về tinh thần, và trí tuệ/sự thông thái.',
                    ]);
                } elseif (empty($summary->{2}) && empty($summary->{5}) && empty($summary->{8})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC THỂ CHẤT (1-4-7) MÀ BẠN THIẾU',
                        'content' => 'Bạn thường nhạy cảm quá mức nên dễ bị tổn thương về mặt tâm lý. Lời khuyên cho bạn là hãy luyện tập để tăng các số 2, 5 hoặc 8 lên. Số 2 bạn có thể tăng bằng cách lắng nghe, cảm nhận suy nghĩ của người khác. Tập thiền hoặc tập yoga. Số 5 bạn đạt được bằng cách để mở rộng kết giao những người bạn mới, du lịch khám phá những điều mới mẻ. Số 8 bạn có thể tăng bằng cách học kinh doanh, học bán hàng, từ đó có khả năng nhạy cảm với lợi ích, tiền bạc.',
                    ]);
                }
                if (isset($summary->{3}) && isset($summary->{6}) && isset($summary->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC TRÍ TUỆ (3-6-9)',
                        'content' => 'Trục này đại diện cho những gì liên quan đến đầu óc của con người. Trục này phụ trách trí nhớ, suy nghĩ, tư duy phân tích, lý trí, trí tưởng tượng, óc sáng tạo, tinh thần trách nhiệm, hoài bão/tham vọng và lý tưởng sống.',
                    ]);
                } elseif (empty($summary->{3}) && empty($summary->{6}) && empty($summary->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC TRÍ TUỆ (3-6-9) MÀ BẠN THIẾU',
                        'content' => 'Bạn thường mau quên và gặp khó khăn trong việc học các kiến thức mới. Lời khuyên cho bạn là hãy luyện tập để tăng các số 3, 6 hoặc 9 lên. Số 3 bạn có thể tăng bằng cách tập kể chuyện cười và tham gia vào các hoạt động vui vẻ sôi nổi nhiều hơn. Số 6 bạn đạt được bằng cách yêu thương và chăm sóc đến người khác nhiều hơn. Số 9 bạn có thể tăng bằng cách cho đi, giúp đỡ người khác nhiều hơn và đặt những mục tiêu lớn hơn cho bản thân.',
                    ]);
                }
                if (isset($summary->{1}) && isset($summary->{5}) && isset($summary->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC QUYẾT TÂM (1-5-9)',
                        'content' => 'Trục này cho thấy bạn có sự quyết tâm cao và hành động ngay khi muốn thực hiện một việc hoặc kế hoạch nào đó mà không trì hoãn. Bạn thường muốn làm đến cùng những công việc mà bạn tin tưởng và những điều mà bạn cho là đúng.',
                    ]);
                } elseif (empty($summary->{1}) && empty($summary->{5}) && empty($summary->{9})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC QUYẾT TÂM (1-5-9) MÀ BẠN THIẾU',
                        'content' => 'Người không có cả ba số 1-5-9 trong biểu đồ ngày sinh thường thiếu quết tâm, hay trì hoãn thậm chí không làm gì cả. Điều này ảnh hưởng tiêu cực đến sự phát triển hay thành công của họ, khiến bản thân họ lẫn mọi người xung quanh đều khó chịu. Điều này cần phải được phát hiện sớm để điều chỉnh kịp thời.',
                    ]);
                }
                if (isset($summary->{3}) && isset($summary->{5}) && isset($summary->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC NHẠY BÉN (3-5-7)',
                        'content' => 'Trục này cho thấy bạn có sự quyết tâm cao và hành động ngay khi muốn thực hiện một việc hoặc kế hoạch nào đó mà không trì hoãn. Bạn thường muốn làm đến cùng những công việc mà bạn tin tưởng và những điều mà bạn cho là đúng.',
                    ]);
                } elseif (empty($summary->{3}) && empty($summary->{5}) && empty($summary->{7})) {
                    array_push($return, [
                        'title' => '-  1 TRỤC NHẠY BÉN (3-5-7) MÀ BẠN THIẾU',
                        'content' => 'Người không có cả ba số 1-5-9 trong biểu đồ ngày sinh thường thiếu quyết tâm, hay trì hoãn thậm chí không làm gì cả. Điều này ảnh hưởng tiêu cực đến sự phát triển hay thành công của họ, khiến bản thân họ lẫn mọi người xung quanh đều khó chịu. Điều này cần phải được phát hiện sớm để điều chỉnh kịp thời.',
                    ]);
                }
            @endphp


            <div class="t m0 x5 hf yd7 ff4 fs9 fc2 sc0 ls0 ws0"
                 style="white-space: normal; width: 2000px; bottom: 820px">
                @foreach ($return as $item)
                    {!! $item['title'] !!}
                    <p>{!! $item['content'] !!}</p>
                @endforeach
            </div>

            <div class="t m2 xa h6 y5f ff3 fs2 fc0 sc0 ls0 ws0">Numerology Report</div>
            @include('footer')
            <div class="t m0 x3a h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">52</div>
            <div class="pi" data-data="{&quot;ctm&quot;:[1.500000,0.000000,0.000000,1.500000,0.000000,0.000000]}">
            </div>
        </div>
    </div>

    <div id="pf7" class="pf w0 h0" data-page-no="54">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $path . '/vochong.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0"></div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TỔNG QUAN DỮ LIỆU BÁO CÁO</div>
            <div class="t m0 x5 hf ff2 fs9 fc2 sc0 ls0 ws0" style="left: 0; top: 70px">
                <img src="{{ asset('/' . $path . '/report.png') }}" alt="" width="2000px">
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 1070px; height: 77px">
                {{ $name->{3} ?? null }}<span style="width: 142px" class="_ _21"></span>{{ $name->{6} ?? null }}<span class="_ _21" style="width: 142px"> </span>{{ $name->{9} ?? null }}<span class="_ _27" style="width: 1226px;"> </span>{{ $data['data']['dobIndicator']['dobIndicator'] }}
            </div>
             <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 45px;bottom: 1000px">
                {{ $name->{2} ?? null }}<span class="_ _21"></span>{{ $name->{5} ?? null }}<span class="_ _24"> </span>{{ $name->{8} ?? null }}<span class="_ _27" style="width: 1310px;"> </span><span style="bottom: 75px;right: 90px;">{{ $data['data']['personalIndicator']['personalIndicator'] }}</span>
            </div>
            <div class="t m0 x51 h14 y1c8 ff1 fsc fc7 sc0 ls0 ws0" style="left: 60px;bottom: 930px;height: 85px;">
                {{ $name->{1} ?? null }}<span class="_ _21"></span>{{ $name->{4} ?? null }}<span class="_ _24" style="width: 201px"> </span>{{ $name->{7} ?? null }}<span class="_ _27" style="width: 1340px;"> </span><span style="top: -135px">{{ $data['data']['attitudeIndicator']['attitudeIndicator'] }}</span>
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
<script>
    document.querySelectorAll('.toc div').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
</body>

</html>
