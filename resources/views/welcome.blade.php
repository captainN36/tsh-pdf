<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="generator" content="pdf2htmlEX" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <base href="{{ asset('') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pdf.css') }}">
    <title>test</title>
</head>
<div id="sidebar">
    <div id="outline">
    </div>
</div>
<div id="page-container">
    @include('pages.first')
    @include('pages.chiso')
    @include('pages.vanso')
    @include('pages.duongdoi')


    <div id="pf7" class="pf w0 h0" data-page-no="54">
        <div class="pc pc6 w0 h0 opened">
            <img class="bi x0 y0 w1 h1" alt=""
                src="{{ asset('/' . $data['data']['lifePathIndicator']['lifePathIndicator'] . '/vochong.png') }}">
            <div class="t m0 x13 hd y93 ff1 fs7 fc0 sc0 ls0 ws0"></div>
            <div class="t m0 x14 he y94 ff1 fs8 fc0 sc0 ls0 ws0">TỔNG QUAN DỮ LIỆU BÁO CÁO</div>
            <div class="t m0 x5 hf ff2 fs9 fc2 sc0 ls0 ws0" style="left: 0px; top: 100px">
                <img src="{{ asset('/' . $data['data']['lifePathIndicator']['lifePathIndicator'] . '/report.png') }}"
                    alt="" width="2000px">
            </div>


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
