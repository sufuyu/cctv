<link href="{{asset('common/css/blank.css-v=20170713184940.css')}}" tppabs="{{asset('common/css/ppsshow/2.0/style/blank.css?v=20170713184940')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('common/css/index.css-v=20170713184940.css')}}" tppabs="{{asset('common/css/ppsshow/2.0/style/index.css?v=20170713184940')}}" type="text/css" rel="stylesheet">

<body>
<!--浏览器自适应-->
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
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CCTV') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" style="width:100%">
        <nav class="navbar navbar-default navbar-static-top" style="background:#000; color:#FFF">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'CCTV') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
             <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url('/home')}}"><span>首页</span></a>
                </li>
                <li>
                    <a href="{{url('ranking/index')}}"><span>榜单</span></a>
                </li>
                <li>
                    <a href="{{url('square/index')}}"><span>广场</span></a>
                </li>
                <li>
                    <a href="{{url('index/index')}}"><span>活动</span></a>
                </li>
                <li>
                    <a href="{{url('index/mall')}}"><span>商城</span></a>
                </li>
                <li>
                    <a href="download.htm"><span>APP下载</span></a>
                </li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())

                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

<div class="site-nav">
        <div class="site-nav-master" data-pb-block="15041001">
            <ul class="snm-l">
                <li class="sn-item"><a href="{{url('index/index')}}" tppabs="http://www.iqiyi.com/" data-pb-rseat="18" target="_blank" class="sn"><b class="xicon-qiyi xicon"></b>cctv首页</a></li>
                <li class="sn-item"><a href="{{url('index/index')}}" tppabs="http://www.pps.tv/" data-pb-rseat="19" target="_blank" class="sn"><b class="xicon-pps xicon"></b>PPS首页</a></li>
            </ul>
            <ul class="snm-r">
                <li class="download sn-item">
                    <a href="javascript:void(0);" class="sn">下载<b class="xicon xicon-chevron-vertical"></b></a>
                    <div class="eyes-tip site-nav-app-download" style="display: none;" data-clickbodyhide="1">
                        <ul class="app-download-list">
                            <li class="download-item dl-mobile">
                                <a href="" tppabs="http://store.iqiyi.com/web/iqiyi/detail/mobile.action" data-pb-rseat="16" target="_blank" class="dl">爱奇艺APP</a>
                            </li>
                            <li class="download-item dl-pc">
                                <a href="" tppabs="http://dl.static.iqiyi.com/IQIYIsetup.exe" data-pb-rseat="17" target="_blank" class="dl">爱奇艺客户端</a>
                            </li>
                            <li class="download-item dl-xiu">
                                <a href="" tppabs="http://mbdapp.iqiyi.com/j/ot/iQiyiCamera_Setup.exe" data-pb-rseat="20" class="dl">爱奇艺直播伴侣</a>
                            </li>
                        </ul>
                        <div class="eyes-arrow"><b class="arrow-white"></b><b class="arrow-syb"></b></div>
                    </div>
                </li>
                <li class="sn-item"><a class="sn" target="_Blank" href="{{url('index/apply')}}" tppabs="http://x.pps.tv/enter/">申请入驻</a></li>
            </ul>
            <div class="site-header index-page" data-pb-block="15041001">
             <div class="inner" style="position: relative;left:-60px;top:2px;">
            <img src="{{asset('common/image/cctva.jpg')}}" style="width:106%;color:#121212;">
        </div>
    </div>
        </div>
    </div>
@yield('content')