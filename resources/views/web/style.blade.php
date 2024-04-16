<style>

    span.indicator {
        left: 204px;
        margin-left: 134px;
    }
    span.indicator.indicator-11 {
        bottom: 334px;
    }
    span.indicator.indicator-10 {
        bottom: 388px;
    }
    span.indicator.indicator-9 {
        bottom: 566px;
    }
    span.indicator.indicator-8 {
        bottom: 761px;
    }
    span.indicator.indicator-7 {
        bottom: 764px;
    }
    span.indicator.indicator-6 {
        bottom: 433px;
    }
    span.indicator.indicator-5 {
        bottom: 219px;
    }
    span.indicator.indicator-4 {
        bottom: 274px;
    }
    span.indicator.indicator-3 {
        bottom: 217px;
    }
    span.indicator.indicator-2 {
        bottom: 132px;
    }
    span.indicator.indicator-1 {
        bottom: 203px;
    }

    @isset($data['data']['percentIndicator'][0])
        .bannga-1 {
            height: 79px;
            background-color: #DC3444;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: {{ $data['data']['percentIndicator'][0][1] == $max ? 1940 : ( 1940/100) * (($data['data']['percentIndicator'][0][1]/$max) * 100) }}px;
            top: 320px;
            left: 90px;
        }
    @endisset

    @isset($data['data']['percentIndicator'][1])
        .bannga-2 {
            height: 79px;
            background-color: #CA8A03;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: {{ $data['data']['percentIndicator'][1][1] == $max ? 1940 : ( 1940/100) * (($data['data']['percentIndicator'][1][1]/$max) * 100) }}px;
            top: 410px;
            left: 90px;
        }
    @endisset

    @isset($data['data']['percentIndicator'][2])
        .bannga-3 {
            height: 79px;
            background-color: #21C55D;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: {{ $data['data']['percentIndicator'][2][1] == $max ? 1940 : ( 1940/100) * (($data['data']['percentIndicator'][2][1]/$max) * 100) }}px;
            top: 500px;
            left: 90px;
        }
    @endisset

    @isset($data['data']['percentIndicator'][3])
        .bannga-4 {
            height: 79px;
            background-color: #166434;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: {{ $data['data']['percentIndicator'][3][1] == $max ? 1940 : ( 1940/100) * (($data['data']['percentIndicator'][3][1]/$max) * 100) }}px;
            top: 590px;
            left: 90px;
        }
    @endisset

    @isset($data['data']['percentIndicator'][4])
        .bannga-5 {
            height: 79px;
            background-color: #1C4ED8;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: {{ $data['data']['percentIndicator'][4][1] == $max ? 1940 : ( 1940/100) * (($data['data']['percentIndicator'][4][1]/$max) * 100) }}px;
            top: 680px;
            left: 90px;
        }
    @endisset
    @isset($data['data']['percentIndicator'][5])
    .bannga-6 {
        height: 79px;
        background-color: #2463EB;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: {{ $data['data']['percentIndicator'][5][1] == $max ? 1940 : ( 1940/100) * (($data['data']['percentIndicator'][5][1]/$max) * 100) }}px;
        top: 770px;
        left: 90px;
    }
    @endisset

    @isset($data['data']['percentIndicator'][6])
        .bannga-7 {
            height: 79px;
            background-color: #9333E9;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: {{ $data['data']['percentIndicator'][6][1] == $max ? 1940 : ( 1940/100) * (($data['data']['percentIndicator'][6][1]/$max) * 100) }}px;
            top: 860px;
            left: 90px;
        }
    @endisset

    @isset($data['data']['percentIndicator'][7])
        .bannga-8 {
            height: 79px;
            background-color: #EC4899;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: {{ $data['data']['percentIndicator'][7][1] == $max ? 1940 : ( 1940/100) * (($data['data']['percentIndicator'][7][1]/$max) * 100) }}px;
            top: 950px;
            left: 90px;
        }
    @endisset

    @isset($data['data']['percentIndicator'][8])
        .bannga-9 {
            height: 79px;
            background-color: #FACC14;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: {{ $data['data']['percentIndicator'][8][1] == $max ? 1940 : ( 1940/100) * (($data['data']['percentIndicator'][8][1]/$max) * 100) }}px;
            top: 1040px;
            left: 90px;
        }
    @endisset
</style>
