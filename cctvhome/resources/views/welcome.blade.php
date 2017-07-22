@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="美女直播,视频聊天,视频交友,PPS秀场,美女主播,美女视频,视频直播,美女秀场,真人秀场,在线K歌,视频交友,真人视频">
    <meta name="description" content="国内最高清的真人视频直播平台。海量美女主播、明星歌手与你“零距离”互动，支持百万人同时在线。视频聊天、K歌比拼、歌舞表演，有趣有爱有美女。赶快加入，与美女主播免费聊天。">
    <link href="{{asset('common/css/blank.css-v=20170713184940.css')}}" tppabs="{{asset('common/css/ppsshow/2.0/style/blank.css?v=20170713184940')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('common/css/index.css-v=20170713184940.css')}}" tppabs="{{asset('common/css/ppsshow/2.0/style/index.css?v=20170713184940')}}" type="text/css" rel="stylesheet">
        <title>cctv</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!--页面大小屏触发优化-->
    <script type="text/javascript">
        function _pre_setPageWidth(config) {
    
            var w = getDocWidth(),
                bd = document.getElementsByTagName('body')[0],
                dfCss = bd.className;
            function getDocWidth() {
        if(window.innerWidth)
            return window.innerWidth
        else if(document.documentElement.clientWidth + 4 < document.documentElement.offsetWidth)
            return document.documentElement.clientWidth + 17
        else
            return document.documentElement.clientWidth
        }

            function filter(cf, dc) {
                for(var i=0, arr=[]; i<cf.length; i++) {
                    cf[i].cls && arr.push(cf[i].cls)
                }
                return dc.replace(new RegExp(arr.join('|'), 'g'), '')
            }
    
            function need(cf, dc, cls) {
                if(!cls && dc == filter(cf, dc)) {
                    return false
                } else if(cls && new RegExp(cls).test(dc)) {
                    return false
                }
                return true
            }
    
            for(var i = 0; i < config.length; i++) {
                if(w <= config[i].max) {
                    if(need(config, dfCss, config[i].cls)) {
                        bd.className = (filter(config, dfCss) + ' ' + config[i].cls).replace(/\s{2,}/g, ' ')
                    }
                    break;
                }
            }
        }var _pre_configList = [ {max: 1180, cls: 'min-wide'}, {max: 1380, cls: ''}, {max: Infinity , cls: 'max-wide'}];/*非直播间*/
           _pre_setPageWidth(_pre_configList);
</script>
        <div class="flex-center position-ref full-height"></div>



            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                    <!-- 注意下 -->
                        <a href="{{ url('/home') }}"></a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

<!--             <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div> -->

@endsection