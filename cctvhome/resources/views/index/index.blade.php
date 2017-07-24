
<html><!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>cctv直播吧</title>
    <meta name="keywords" content="美女直播,视频聊天,视频交友,PPS秀场,美女主播,美女视频,视频直播,美女秀场,真人秀场,在线K歌,视频交友,真人视频">
    <meta name="description" content="国内最高清的真人视频直播平台。海量美女主播、明星歌手与你“零距离”互动，支持百万人同时在线。视频聊天、K歌比拼、歌舞表演，有趣有爱有美女。赶快加入，与美女主播免费聊天。">
    <link href="{{asset('common/css/blank.css-v=20170713184940.css')}}" tppabs="{{asset('common/css/ppsshow/2.0/style/blank.css?v=20170713184940')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('common/css/index.css-v=20170713184940.css')}}" tppabs="{{asset('common/css/ppsshow/2.0/style/index.css?v=20170713184940')}}" type="text/css" rel="stylesheet">
</head>
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
<div class="site-nav">
    <div class="site-nav-master" data-pb-block="15041001">
        <ul class="snm-l">
            <li class="sn-item"><a href="" tppabs="http://www.iqiyi.com/" data-pb-rseat="18" target="_blank" class="sn"><b class="xicon-qiyi xicon"></b>爱奇艺首页</a></li>
            <li class="sn-item"><a href="" tppabs="http://www.pps.tv/" data-pb-rseat="19" target="_blank" class="sn"><b class="xicon-pps xicon"></b>PPS首页</a></li>
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
            <li class="sn-item"><a class="sn" target="_Blank" href="index-1.htm" tppabs="http://x.pps.tv/enter/">申请入驻</a></li>
        </ul>
    </div>
</div>
<!-- 中部 -->
<div class="site-header index-page" data-pb-block="15041001">
    <div class="inner">
        <h1 class="logo" title="奇秀"><a href="index.htm" tppabs="http://x.pps.tv/" data-pb-rseat="1">cctv主播秀场</a></h1>
        <ul class="nav">
            <li>
                <a href="{{url('index/index')}}" tppabs="http://x.pps.tv/" data-pb-rseat="2" class="nav-item nav-index"><span>首页</span></a>
            </li>
            <li>
                <a href="{{url('square/index')}}" tppabs="http://x.pps.tv/cate/center" data-pb-rseat="3" class="nav-item nav-category"><span>广场</span></a>
            </li>
            <li>
                <a href="#" tppabs="http://x.pps.tv/activity" data-pb-rseat="22" class="nav-item nav-activitys"><span>活动</span></a>
            </li>
            <li>
                <a href="{{url('ranking/index')}}" tppabs="http://x.pps.tv/rank" data-pb-rseat="4" class="nav-item nav-ranks"><span>榜单</span></a>
            </li>
            <li>
                <a href="{{url('index/mall')}}" tppabs="http://x.pps.tv/mall" data-pb-rseat="5" class="nav-item nav-mall"><span>商城</span></a>
            </li>
            <li>
                <a href="download.htm" tppabs="http://x.pps.tv/download" data-pb-rseat="21" class="nav-item nav-download"><span>APP下载</span></a>
            </li>
        </ul>
        <div class="search-input">
            <form action="http://x.pps.tv/search/" target="_blank">
                <input type="text" name="wd" placeholder="搜索昵称/房间号">
                <input type="submit" style="display: none">
                <a href="javascript:void(0);" class="btn btn-search" data-pb-rseat="6"><span class="ico ico-search"></span></a>
            </form>
        </div>
        <div class="u-center" id="headerUserCenter">
            <div class="nav-login">
                <a href="{{url('login/login')}}" data-pb-rseat="14" node-type="loginLi" title="登录" class="login-enter">登录</a>
                <a href="{{url('login/register')}}" data-pb-rseat="15" node-type="loginLi" title="注册" class="reg-enter">注册</a>
            </div>
        </div>
    </div>
</div>
<div class="host-wall">
    <div class="photos">
        <?php foreach($user as $k=>$v){ ?>


        <a data-category-name="" data-pb-rseat="1" data-room-id="186964" class="photo " href="{{url('index/img')}}?id=<?php echo $v['user_id']?>" tppabs="http://x.pps.tv/room/186964" target="room">
            <img class="thumb" width="100%" src="http://www.cctv_img.com/<?php echo $v['user_img']?>" tppabs="http://u7.qiyipic.com/xiuchang/20170627/d6/97/xiuchang_59525526f6882e37fa08d697_180_180.jpg">
            <span class="changge-live-ico live-ico">唱歌中</span>
            <p class="mask">
                <em class="name"><?php echo $v['user_name']?></em>
            </p>
        </a>

        <?php }?>




    </div>
    <div style="left: 600px;" class="show-wrap"></div>
    <a href="javascript:void(0);" class="toggle-btn" id="_switcher">收起</a>
</div>
<div id="wrapper" class="clearfix">
    <div class="main clearfix">
        <div class="layout-main">
            <div class="bx recommend-wrap">
                <div class="hd">
                    <h3><font color='bule'>特别推荐</font></h3>
                </div>
                <div class="bd">
                    <ul data-pb-block="15041003">
                        <li class="hl">
                            <div class="live-panel">
                                <div class="host-pic" title="<?php echo $best_user['user_name']?>">
                                    <img class="thumb" width="370" height="283" alt="RD KK" src="http://www.cctv_img.com/<?php echo $best_user['user_img']?>" tppabs="http://u2.qiyipic.com/xiuchang/20170701/d8/93/xiuchang_59578d1fad8c1223bb4bd893_370_283.jpg">
                                    <a class="play-mask" target="room" href="186123.htm" tppabs="http://x.pps.tv/room/186123" style="display: none;" data-pb-rseat="1">
                                        <div class="back"></div>
                                        <span class="play-btn">播放</span>
                                    </a>
                                </div>
                                <div class="lv">
                                    <i class="ico-lv zb-lv lv11"></i>
                                </div>
                                <h4 class="name">
                                    <a target="room" href="{{url('index/img')}}" tppabs="http://x.pps.tv/room/186123" data-pb-rseat="1">
                                        <?php echo $best_user['user_name']?>											</a>
                                </h4>
                                <p class="status">
													<span class="live-time">
													  <span class="ico ico-clock"></span>
													  <span class="time"> 55分钟</span>
													</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>
														<span class="num">93</span>
													</span>
                                </p>
												<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>
												</span>
                            </div>
                        </li>


                        <?php foreach($specail_user as $k=>$v){ ?>
                        <li title="<?php echo $v['user_name']?>">
                            <div class="live-panel">
                                <div class="host-pic">
                                    <img class="thumb" width="180" height="101" src="http://www.cctv_img.com/<?php echo $v['user_img']?>" tppabs="http://u6.qiyipic.com/xiuchang/20170702/81/98/xiuchang_595885b0d2999d7a133c8198_180_101.jpg">
                                    <a class="play-mask" target="room" href="188320.htm" tppabs="http://x.pps.tv/room/188320" style="display: none;" data-pb-rseat="1">
                                        <div class="back"></div>
                                        <span class="play-btn">播放</span>
                                    </a>
                                </div>
                                <div class="lv">
                                    <i class="ico-lv zb-lv lv4"></i>
                                </div>
                                <h4 class="name">
                                    <a target="room" href="{{url('index/img')}}" tppabs="http://x.pps.tv/room/188320" data-pb-rseat="1">
                                        <?php echo $v['user_name']?>											</a>
                                </h4>
                                <p class="status">
												<span class="live-time">
													<span class="ico ico-clock"></span>
													<span class="time">26分钟</span>
												</span>
												<span class="viewer" title="观众数">
													<span class="ico ico-peo"></span>
													<span class="num"><?php echo $v['user_fans']?></span>
												</span>
                                </p>
											<span class="live-tip ">直播中												<span class="arrow"></span>
											</span>
                            </div>
                        </li>
                        <?php }?>

                    </ul>
                </div>
            </div>
        </div>
        <div class="layout-side">
            <div id="_loginInfoBox">
                <div class="login-wrap" data-pb-block="15041008">
                    <span class="top-bg"></span>
                    <ul class="pass-tab">
                        <li><a href="{{url('login/login')}}" class="active" data-target="login">登录</a></li>
                        <li class="separate"><a href="{{url('login/register')}}" data-target="reg">注册</a></li>
                    </ul>
                    <form class="pass-tab-content tab-cur login-form" data-content="login">
                        <div class="_homeLoginForm">
                            <p style="display:none;" class="t-warning">
                                <span class="ico ico-warning"></span>
                                <span class="_errorMsg"></span>
                            </p>

                            <p>
								<span class="input-syb">
									<span class="ico ico-user"></span><span class="split"></span>
									<input type="text" name="account" placeholder="请输入PPS或iQIYI帐号">
								</span>
                            </p>

                            <p>
								<span class="input-syb">
									<span class="ico ico-lock"></span><span class="split"></span>
									<input type="password" name="passwd" placeholder="请输入密码">
								</span>
                            </p>

                            <p class="tool">
                                <a click-type="autoLogin" href="javascript:void(0);" class="checkbox-sya checkbox-sya-checked"></a><label>记住我</label><a title="找回密码" target="_blank" href="" class="help em">找回密码</a>
                            </p>

                            <div class="act">
                                <a click-type="login" href="#" class="btn btn-sye">登&nbsp;&nbsp;&nbsp;&nbsp;录</a>
                            </div>
                        </div>
                        <div class="other-ways"><p><a node-type="loginLi" href="javascript:void(0)">使用合作帐号登录&gt;</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="focus-chart">
            <div class="focus-chart-panel">
                <ul class="focus-chart-list">
                    <li class="focus-chart-item">
                        <a class="fcf" data-pb-block="15041002" data-pb-rseat="2" href="106885.htm" tppabs="http://x.pps.tv/room/106885" title="中国新歌声" target="_blank">
                            <img src="http://www.cctv_img.com/luobo/xiuchang_58ca610f18aa707034687d82_banner.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170714/fa/bd/xiuchang_59684036ad8c1223bea1fabd_banner.jpg" width="1380" height="115" class="thumb" alt="中国新歌声" title="中国新歌声"/>
                        </a>
                    </li>
                    <li class="focus-chart-item">
                        <a class="fcf" data-pb-block="15041002" data-pb-rseat="2" href="185268.htm" tppabs="http://x.pps.tv/room/185268" title="中国有嘻哈" target="_blank">
                            <img src="http://www.cctv_img.com/luobo/xiuchang_5971a1ebad8c1223c0c4cd72_banner.jpg" tppabs="http://u9.qiyipic.com/xiuchang/20170713/5d/62/xiuchang_5967366d74d57906d0c65d62_banner.jpg" width="1380" height="115" class="thumb" alt="中国有嘻哈" title="中国有嘻哈"/>
                        </a>
                    </li>
                    <li class="focus-chart-item">
                        <a class="fcf" data-pb-block="15041002" data-pb-rseat="2" href="makeupIn.htm" tppabs="http://x.pps.tv/enter/makeupIn" title="信息补全" target="_blank">
                            <img src="http://www.cctv_img.com/luobo/xiuchang_5973397fd2999d7a15e8d5b4_banner.jpg" tppabs="http://u0.qiyipic.com/xiuchang/20170322/e1/96/xiuchang_58d22632ad8c1219f8fbe196_banner.jpg" width="1380" height="115" class="thumb" alt="信息补全" title="信息补全"/>
                        </a>
                    </li>

                </ul>
                <b class="lbg"></b>
            </div>

            <div class="focus-chart-nav">
                <ul class="fcn-list">
                </ul>
                <b class="lbg"></b>
            </div>
        </div>
        <div class="main clearfix">
            <div class="layout-main">

                <div class="bx hot-wrap nn-wrap" data-pb-block="15041032">


                    <div class="hd">
                        <h1><font color=red>奇秀新星</font></h1>
                        <h2>奇秀新星</h2>
                        <a href="{{url('square/index')}}" tppabs="http://x.pps.tv/cate/center/15" class="more em">更多&gt;</a>
                    </div>
                    <div class="bd">
                        <div class="tab-content tab-cur">
                            <ul>
                                <?php foreach($new_user as $k=>$v){ ?>
                                <li>
                                    <div class="live-panel">
                                        <div class="host-pic">
                                            <img class="thumb" src="http://www.cctv_img.com/<?php echo $v['user_img']?>" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u7.qiyipic.com/xiuchang/20170627/dc/30/xiuchang_5952552774d57906d373dc30_220_124.jpg" width="180" height="101">
                                            <a target="room" href="186964.htm" tppabs="http://x.pps.tv/room/186964" class="play-mask" style="display: none;" data-pb-rseat="2">
                                                <div class="back"></div>
                                                <span class="play-btn">播放</span>
                                            </a>
                                        </div>
                                        <div class="lv" title="主播等级 <?php echo $v['user_level']?>级">
                                            <i class="ico-lv zb-lv lv10"></i>
                                        </div>
                                        <h4 class="name">
                                            <a target="room" href="{{url('index/img')}}" tppabs="http://x.pps.tv/room/186964" data-pb-rseat="2"><?php echo $v['user_name']?></a>
                                        </h4>
                                        <p class="status">
                                            <span class="live-time">入驻 29天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span><?php echo $v['user_fans']?>												</span>
                                        </p>
												<span class="live-tip live-tip-syb">唱歌中													<span class="arrow"></span>
												</span>
                                    </div>
                                </li>
                                <?php }?>


                            </ul>
                        </div>
                    </div>
                </div>
                {{--<div class="bx hot-wrap hot-host-wrap" id="_hotAnchor" data-pb-block="15041004">--}}
                    {{--<div class="hd">--}}
                        {{--<h2>精选主播</h2>--}}

                        {{--<div class="tab-tit">--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);" data-target-id="hot" class="active" data-pb-rseat="1">--}}
                                        {{--精选主播--}}
                                        {{--<span class="arrow"></span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);" data-target-id="100001" data-pb-rseat="2">--}}
                                        {{--唱歌											<span class="arrow"></span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);" data-target-id="100002" data-pb-rseat="3">--}}
                                        {{--嗨聊											<span class="arrow"></span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);" data-target-id="100003" data-pb-rseat="4">--}}
                                        {{--热舞											<span class="arrow"></span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);" data-target-id="100004" data-pb-rseat="5">--}}
                                        {{--移动直播											<span class="arrow"></span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="all">--}}
                                    {{--<a href="{{url('index/img')}}}}" tppabs="http://x.pps.tv/cate/center" data-pb-rseat="6" class="_allAnchor">全部></a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<a href="javascript:void(0);" class="reload"><span class="ico ico-reload"></span>换一换</a>--}}
                    {{--</div>--}}
                    {{--<div class="bd">--}}
                        {{--<div class="tab-content tab-cur" data-content="hot">--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<div class="live-panel live-panel-tag">--}}
                                        {{--<div class="host-pic">--}}
                                            {{--<img class="thumb" width="180" height="101" alt="曼希☞厉害了word希" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u9.qiyipic.com/xiuchang/20170424/44/75/xiuchang_58fde5d314d4555f75974475_220_124.jpg">--}}
                                            {{--<a class="play-mask" target="room" href="108817.htm" tppabs="http://x.pps.tv/room/108817" style="display: none;" data-pb-rseat="7">--}}
                                                {{--<div class="back"></div>--}}
                                                {{--<span class="play-btn">播放</span>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                        {{--<h4 class="name">--}}
                                            {{--<a target="room" href="108817.htm" tppabs="http://x.pps.tv/room/108817" data-pb-rseat="7">曼希☞厉害了word希</a>--}}
                                        {{--</h4>--}}
                                        {{--<p class="status">--}}
												{{--<span class="" title="观众数">--}}
													{{--<span class="ico ico-peo"></span>2256												</span>--}}
												{{--<span class="viewer" title="粉丝数">--}}
													{{--<span class="ico ico-fans"></span>125171												</span>--}}
                                        {{--</p>--}}
												{{--<span class="live-tip live-tip-syc">嗨聊中													<span class="arrow"></span>--}}
												{{--</span>--}}
                                        {{--<div class="medal-wall">--}}
                                            {{--<img title="主播周星勋章" src="xz_zx_zb_xxz_24x24.png" tppabs="http://www.qiyipic.com/ppsxiu/fix/sc/xz_zx_zb_xxz_24x24.png" width="24" height="24">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}



                                {{--<li>--}}
                                    {{--<div class="live-panel live-panel-tag">--}}
                                        {{--<div class="host-pic">--}}
                                            {{--<img class="thumb" width="180" height="101" alt="兔宝宝 ..." src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u8.qiyipic.com/xiuchang/20170310/76/4b/xiuchang_58c2147218aa70665d55764b_220_124.jpg">--}}
                                            {{--<a class="play-mask" target="room" href="125940.htm" tppabs="http://x.pps.tv/room/125940" style="display: none;" data-pb-rseat="7">--}}
                                                {{--<div class="back"></div>--}}
                                                {{--<span class="play-btn">播放</span>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                        {{--<h4 class="name">--}}
                                            {{--<a target="room" href="125940.htm" tppabs="http://x.pps.tv/room/125940" data-pb-rseat="7">兔宝宝 ...</a>--}}
                                        {{--</h4>--}}
                                        {{--<p class="status">--}}
												{{--<span class="" title="观众数">--}}
													{{--<span class="ico ico-peo"></span>237												</span>--}}
												{{--<span class="viewer" title="粉丝数">--}}
													{{--<span class="ico ico-fans"></span>19925												</span>--}}
                                        {{--</p>--}}
												{{--<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>--}}
												{{--</span>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


            </div>
            <div class="layout-side">
                <div class="bx ranks-wrap ml-ranks-wrap freshman-rank">
                    <div class="hd">
                        <h2>最佳新人</h2>
                    </div>
                    <div class="bd">
                        <div class="tab-tit">
                            <ul data-pb-block="17061400">
                                <li class="selected">
                                    <a href="javascript:void(0);" data-pb-rseat="1">日榜</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-pb-rseat="1">周榜</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-pb-rseat="1">月榜</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <ol class="list-default" data-type="day"  data-pb-block="17061400">
                                <li>
                                    <a class="list-default-item rank-item top-item rank-item-active" title="名人丶九宣" href="189150.htm" tppabs="http://x.pps.tv/room/189150" target="room" data-pb-rseat="2">
                                        <span class="order">1</span>
                                        <img class="pic" src="xiuchang_595fc6e6ad8c1223be9da7d0_70_70.jpg.png" tppabs="http://u0.qiyipic.com/xiuchang/20170708/a7/d0/xiuchang_595fc6e6ad8c1223be9da7d0_70_70.jpg" width="50" height="50">
                                        <em class="name">名人丶九宣</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻5天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="list-default-item rank-item top-item" title="酷音媚訫—新货求支持" href="188169.htm" tppabs="http://x.pps.tv/room/188169" target="room" data-pb-rseat="2">
                                        <span class="order">2</span>
                                        <img class="pic" src="xiuchang_596283d574d57906d37f3db2_70_70.jpg" tppabs="http://u3.qiyipic.com/xiuchang/20170710/3d/b2/xiuchang_596283d574d57906d37f3db2_70_70.jpg" width="50" height="50">
                                        <em class="name">酷音媚訫—新货求支持</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻14天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="list-default-item rank-item top-item" title="名人、美女大战野兽" href="188016.htm" tppabs="http://x.pps.tv/room/188016" target="room" data-pb-rseat="2">
                                        <span class="order">3</span>
                                        <img class="pic" src="xiuchang_5956ee37f6882e3800de0709_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170701/07/09/xiuchang_5956ee37f6882e3800de0709_70_70.jpg" width="50" height="50">
                                        <em class="name">名人、美女大战野兽</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻14天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="list-default-item rank-item " title="啊細" href="187877.htm" tppabs="http://x.pps.tv/room/187877" target="room" data-pb-rseat="2">
                                        <span class="order">4</span>
                                        <img class="pic" src="xiuchang_59520f5474d57906cfe5f265_70_70.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20170627/f2/65/xiuchang_59520f5474d57906cfe5f265_70_70.jpg" width="50" height="50">
                                        <em class="name">啊細</em>
																											<span class="live-tip live-tip-sym">移动直播															<span class="arrow"></span>
														</span>
                                        <p class="viewer" title="入驻天数">
                                            入驻18天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="list-default-item rank-item " title="丶芳雅" href="189552.htm" tppabs="http://x.pps.tv/room/189552" target="room" data-pb-rseat="2">
                                        <span class="order">5</span>
                                        <img class="pic" src="xiuchang_596724f4ad8c1223bdf9297e_70_70.jpg" tppabs="http://u4.qiyipic.com/xiuchang/20170713/29/7e/xiuchang_596724f4ad8c1223bdf9297e_70_70.jpg" width="50" height="50">
                                        <em class="name">丶芳雅</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻2天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                            </ol>
                            <ol class="list-default" data-type="week"  style="display: none;"  data-pb-block="17061400">
                                <li>
                                    <a class="list-default-item rank-item top-item rank-item-active" title="小米胸平就要多努力" href="188832.htm" tppabs="http://x.pps.tv/room/188832" target="room" data-pb-rseat="2">
                                        <span class="order">1</span>
                                        <img class="pic" src="xiuchang_595f6a5174d57906d12797f7_70_70.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170707/97/f7/xiuchang_595f6a5174d57906d12797f7_70_70.jpg" width="50" height="50">
                                        <em class="name">小米胸平就要多努力</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻7天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="list-default-item rank-item top-item" title="名人丶九宣" href="189150.htm" tppabs="http://x.pps.tv/room/189150" target="room" data-pb-rseat="2">
                                        <span class="order">2</span>
                                        <img class="pic" src="xiuchang_595fc6e6ad8c1223be9da7d0_70_70.jpg.png" tppabs="http://u0.qiyipic.com/xiuchang/20170708/a7/d0/xiuchang_595fc6e6ad8c1223be9da7d0_70_70.jpg" width="50" height="50">
                                        <em class="name">名人丶九宣</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻5天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="list-default-item rank-item top-item" title="名人、美女大战野兽" href="188016.htm" tppabs="http://x.pps.tv/room/188016" target="room" data-pb-rseat="2">
                                        <span class="order">3</span>
                                        <img class="pic" src="xiuchang_5956ee37f6882e3800de0709_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170701/07/09/xiuchang_5956ee37f6882e3800de0709_70_70.jpg" width="50" height="50">
                                        <em class="name">名人、美女大战野兽</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻14天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-hold"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="list-default-item rank-item " title="童乳巨颜。热舞小草莓" href="187709.htm" tppabs="http://x.pps.tv/room/187709" target="room" data-pb-rseat="2">
                                        <span class="order">4</span>
                                        <img class="pic" src="xiuchang_595c0ae814d4555462e25715_70_70.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20170705/57/15/xiuchang_595c0ae814d4555462e25715_70_70.jpg" width="50" height="50">
                                        <em class="name">童乳巨颜。热舞小草莓</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻17天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="list-default-item rank-item " title="邓邓儿baby满月啦" href="187048.htm" tppabs="http://x.pps.tv/room/187048" target="room" data-pb-rseat="2">
                                        <span class="order">5</span>
                                        <img class="pic" src="xiuchang_5943499bad8c1223bb43327c_70_70.jpg" tppabs="http://u0.qiyipic.com/xiuchang/20170616/32/7c/xiuchang_5943499bad8c1223bb43327c_70_70.jpg" width="50" height="50">
                                        <em class="name">邓邓儿baby满月啦</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻29天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                            </ol>
                            <ol class="list-default" data-type="month"  style="display: none;"  data-pb-block="17061400">
                                <li>
                                    <a class="list-default-item rank-item top-item rank-item-active" title="Ty艺萌♥花仙子求守" href="186209.htm" tppabs="http://x.pps.tv/room/186209" target="room" data-pb-rseat="2">
                                        <span class="order">1</span>
                                        <img class="pic" src="xiuchang_5963481774d57906d128a1b5_70_70.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170710/a1/b5/xiuchang_5963481774d57906d128a1b5_70_70.jpg" width="50" height="50">
                                        <em class="name">Ty艺萌♥花仙子求守</em>
																											<span class="live-tip live-tip-sym">移动直播															<span class="arrow"></span>
														</span>
                                        <p class="viewer" title="入驻天数">
                                            入驻39天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-hold"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="list-default-item rank-item top-item" title="小小瑞西中午休大扫除" href="187401.htm" tppabs="http://x.pps.tv/room/187401" target="room" data-pb-rseat="2">
                                        <span class="order">2</span>
                                        <img class="pic" src="xiuchang_5964bf98d2999d7a13493fef_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170711/3f/ef/xiuchang_5964bf98d2999d7a13493fef_70_70.jpg" width="50" height="50">
                                        <em class="name">小小瑞西中午休大扫除</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻24天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="list-default-item rank-item top-item" title="名人、美女大战野兽" href="188016.htm" tppabs="http://x.pps.tv/room/188016" target="room" data-pb-rseat="2">
                                        <span class="order">3</span>
                                        <img class="pic" src="xiuchang_5956ee37f6882e3800de0709_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170701/07/09/xiuchang_5956ee37f6882e3800de0709_70_70.jpg" width="50" height="50">
                                        <em class="name">名人、美女大战野兽</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻14天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="list-default-item rank-item " title="童乳巨颜。热舞小草莓" href="187709.htm" tppabs="http://x.pps.tv/room/187709" target="room" data-pb-rseat="2">
                                        <span class="order">4</span>
                                        <img class="pic" src="xiuchang_595c0ae814d4555462e25715_70_70.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20170705/57/15/xiuchang_595c0ae814d4555462e25715_70_70.jpg" width="50" height="50">
                                        <em class="name">童乳巨颜。热舞小草莓</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻17天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="list-default-item rank-item " title="小米胸平就要多努力" href="188832.htm" tppabs="http://x.pps.tv/room/188832" target="room" data-pb-rseat="2">
                                        <span class="order">5</span>
                                        <img class="pic" src="xiuchang_595f6a5174d57906d12797f7_70_70.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170707/97/f7/xiuchang_595f6a5174d57906d12797f7_70_70.jpg" width="50" height="50">
                                        <em class="name">小米胸平就要多努力</em>
                                        <p class="viewer" title="入驻天数">
                                            入驻7天
                                        </p>

                                        <div class="trans">
                                            <span class="ico ico-up"></span>
                                        </div>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                {{--<div class="bx ranks-wrap ml-ranks-wrap" id="_charmingRank" click-type="popularity_rank">--}}
                    {{--<div class="hd">--}}
                        {{--<h2>魅力主播</h2>--}}
                    {{--</div>--}}
                    {{--<div class="bd">--}}
                        {{--<div class="tab-tit">--}}
                            {{--<ul data-pb-block="15041009">--}}
                                {{--<li class="selected">--}}
                                    {{--<a href="javascript:void(0);" data-pb-rseat="1">日榜</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);" data-pb-rseat="1">周榜</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);" data-pb-rseat="1">月榜</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);" data-pb-rseat="1">总榜</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="tab-content tab-cur">--}}
                            {{--<ol class="list-default" data-type="day"  data-pb-block="15041009">--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item top-item rank-item-active" title="曼希☞厉害了word希" href="108817.htm" tppabs="http://x.pps.tv/room/108817" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">1</span>--}}
                                        {{--<img class="pic" src="xiuchang_583da97c74d5797c0300cc7d_70_70.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20161130/cc/7d/xiuchang_583da97c74d5797c0300cc7d_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">曼希☞厉害了word希</em>--}}
																											{{--<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>--}}
														{{--</span>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--125171													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item top-item" title="道道..猥琐发育.别浪" href="106805.htm" tppabs="http://x.pps.tv/room/106805" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">2</span>--}}
                                        {{--<img class="pic" src="xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170407/54/e8/xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">道道..猥琐发育.别浪</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--85115													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item top-item" title="哈妹୭等风等雨亦等你" href="129498.htm" tppabs="http://x.pps.tv/room/129498" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">3</span>--}}
                                        {{--<img class="pic" src="xiuchang_5963d70514d4555460bb2a07_70_70.jpg.png" tppabs="http://u9.qiyipic.com/xiuchang/20170711/2a/07/xiuchang_5963d70514d4555460bb2a07_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">哈妹୭等风等雨亦等你</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--92021													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-down"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="热舞小甜甜收游轮" href="137943.htm" tppabs="http://x.pps.tv/room/137943" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">4</span>--}}
                                        {{--<img class="pic" src="xiuchang_58f93788ad8c12426df6cb03_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170421/cb/03/xiuchang_58f93788ad8c12426df6cb03_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">热舞小甜甜收游轮</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--57419													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="夏雨荷有点累晚上播" href="109146.htm" tppabs="http://x.pps.tv/room/109146" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">5</span>--}}
                                        {{--<img class="pic" src="xiuchang_5963cf7114d4555462e5df6c_70_70.jpg.png" tppabs="http://u0.qiyipic.com/xiuchang/20170711/df/6c/xiuchang_5963cf7114d4555462e5df6c_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">夏雨荷有点累晚上播</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--107952													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="梗王田心天天见！" href="112258.htm" tppabs="http://x.pps.tv/room/112258" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">6</span>--}}
                                        {{--<img class="pic" src="xiuchang_5960d90af6882e37fc791713_70_70.jpg" tppabs="http://u4.qiyipic.com/xiuchang/20170708/17/13/xiuchang_5960d90af6882e37fc791713_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">梗王田心天天见！</em>--}}
																											{{--<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>--}}
														{{--</span>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--291734													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="Ty艺萌♥花仙子求守" href="186209.htm" tppabs="http://x.pps.tv/room/186209" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">7</span>--}}
                                        {{--<img class="pic" src="xiuchang_5963481774d57906d128a1b5_70_70.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170710/a1/b5/xiuchang_5963481774d57906d128a1b5_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">Ty艺萌♥花仙子求守</em>--}}
																											{{--<span class="live-tip live-tip-sym">移动直播															<span class="arrow"></span>--}}
														{{--</span>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--10123													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-hold"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="宣小主， 尊师成成" href="147709.htm" tppabs="http://x.pps.tv/room/147709" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">8</span>--}}
                                        {{--<img class="pic" src="xiuchang_58f261d2d2999d4ec8159c08_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170416/9c/08/xiuchang_58f261d2d2999d4ec8159c08_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">宣小主， 尊师成成</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--31366													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-down"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="小䒕•收亲密恋人哟" href="163495.htm" tppabs="http://x.pps.tv/room/163495" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">9</span>--}}
                                        {{--<img class="pic" src="xiuchang_595b376d74d57906d5776350_70_70.jpg.png" tppabs="http://u8.qiyipic.com/xiuchang/20170704/63/50/xiuchang_595b376d74d57906d5776350_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">小䒕•收亲密恋人哟</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--117182													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-down"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="逗比组合之组合拳" href="184769.htm" tppabs="http://x.pps.tv/room/184769" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">10</span>--}}
                                        {{--<img class="pic" src="xiuchang_5930df31ad8c1223c092b675_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170602/b6/75/xiuchang_5930df31ad8c1223c092b675_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">逗比组合之组合拳</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--2239													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ol>--}}
                            {{--<ol class="list-default" data-type="week"  style="display: none;"  data-pb-block="15041009">--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item top-item rank-item-active" title="曼希☞厉害了word希" href="108817.htm" tppabs="http://x.pps.tv/room/108817" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">1</span>--}}
                                        {{--<img class="pic" src="xiuchang_583da97c74d5797c0300cc7d_70_70.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20161130/cc/7d/xiuchang_583da97c74d5797c0300cc7d_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">曼希☞厉害了word希</em>--}}
																											{{--<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>--}}
														{{--</span>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--125171													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item top-item" title="诗悦~外地吃喜酒待定" href="112279.htm" tppabs="http://x.pps.tv/room/112279" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">2</span>--}}
                                        {{--<img class="pic" src="xiuchang_588411b714d455172136325d_70_70.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170122/32/5d/xiuchang_588411b714d455172136325d_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">诗悦~外地吃喜酒待定</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--93384													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item top-item" title="道道..猥琐发育.别浪" href="106805.htm" tppabs="http://x.pps.tv/room/106805" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">3</span>--}}
                                        {{--<img class="pic" src="xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170407/54/e8/xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">道道..猥琐发育.别浪</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--85115													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="哈妹୭等风等雨亦等你" href="129498.htm" tppabs="http://x.pps.tv/room/129498" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">4</span>--}}
                                        {{--<img class="pic" src="xiuchang_5963d70514d4555460bb2a07_70_70.jpg.png" tppabs="http://u9.qiyipic.com/xiuchang/20170711/2a/07/xiuchang_5963d70514d4555460bb2a07_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">哈妹୭等风等雨亦等你</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--92021													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="热舞小甜甜收游轮" href="137943.htm" tppabs="http://x.pps.tv/room/137943" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">5</span>--}}
                                        {{--<img class="pic" src="xiuchang_58f93788ad8c12426df6cb03_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170421/cb/03/xiuchang_58f93788ad8c12426df6cb03_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">热舞小甜甜收游轮</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--57419													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="梗王田心天天见！" href="112258.htm" tppabs="http://x.pps.tv/room/112258" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">6</span>--}}
                                        {{--<img class="pic" src="xiuchang_5960d90af6882e37fc791713_70_70.jpg" tppabs="http://u4.qiyipic.com/xiuchang/20170708/17/13/xiuchang_5960d90af6882e37fc791713_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">梗王田心天天见！</em>--}}
																											{{--<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>--}}
														{{--</span>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--291734													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="宣小主， 尊师成成" href="147709.htm" tppabs="http://x.pps.tv/room/147709" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">7</span>--}}
                                        {{--<img class="pic" src="xiuchang_58f261d2d2999d4ec8159c08_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170416/9c/08/xiuchang_58f261d2d2999d4ec8159c08_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">宣小主， 尊师成成</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--31366													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="小䒕•收亲密恋人哟" href="163495.htm" tppabs="http://x.pps.tv/room/163495" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">8</span>--}}
                                        {{--<img class="pic" src="xiuchang_595b376d74d57906d5776350_70_70.jpg.png" tppabs="http://u8.qiyipic.com/xiuchang/20170704/63/50/xiuchang_595b376d74d57906d5776350_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">小䒕•收亲密恋人哟</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--117182													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="薇小薇弹吉他丶Nine" href="102351.htm" tppabs="http://x.pps.tv/room/102351" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">9</span>--}}
                                        {{--<img class="pic" src="xiuchang_58dcc0d874d5796eff62b32c_70_70.jpg" tppabs="http://u9.qiyipic.com/xiuchang/20170330/b3/2c/xiuchang_58dcc0d874d5796eff62b32c_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">薇小薇弹吉他丶Nine</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--94676													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="Angel洝奺亲密恋人" href="101229.htm" tppabs="http://x.pps.tv/room/101229" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">10</span>--}}
                                        {{--<img class="pic" src="xiuchang_595f40be14d45554654e56e9_70_70.jpg" tppabs="http://u4.qiyipic.com/xiuchang/20170707/56/e9/xiuchang_595f40be14d45554654e56e9_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">Angel洝奺亲密恋人</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--7301													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ol>--}}
                            {{--<ol class="list-default" data-type="month"  style="display: none;"  data-pb-block="15041009">--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item top-item rank-item-active" title="悠娱可晴❣️女神已上线" href="152464.htm" tppabs="http://x.pps.tv/room/152464" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">1</span>--}}
                                        {{--<img class="pic" src="xiuchang_595a785714d4555461be8624_70_70.jpg.png" tppabs="http://u0.qiyipic.com/xiuchang/20170704/86/24/xiuchang_595a785714d4555461be8624_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">悠娱可晴❣️女神已上线</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--43943													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item top-item" title="Ty艺萌♥花仙子求守" href="186209.htm" tppabs="http://x.pps.tv/room/186209" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">2</span>--}}
                                        {{--<img class="pic" src="xiuchang_5963481774d57906d128a1b5_70_70.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170710/a1/b5/xiuchang_5963481774d57906d128a1b5_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">Ty艺萌♥花仙子求守</em>--}}
																											{{--<span class="live-tip live-tip-sym">移动直播															<span class="arrow"></span>--}}
														{{--</span>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--10123													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item top-item" title="唯爱小叮猫 安静听歌" href="163241.htm" tppabs="http://x.pps.tv/room/163241" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">3</span>--}}
                                        {{--<img class="pic" src="xiuchang_595e0f5b74d57906ce968f37_70_70.jpg" tppabs="http://u6.qiyipic.com/xiuchang/20170706/8f/37/xiuchang_595e0f5b74d57906ce968f37_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">唯爱小叮猫 安静听歌</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--6854													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="鑫玲" href="138422.htm" tppabs="http://x.pps.tv/room/138422" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">4</span>--}}
                                        {{--<img class="pic" src="xiuchang_596658f8d2999d7a100994aa_70_70.jpg" tppabs="http://u6.qiyipic.com/xiuchang/20170713/94/aa/xiuchang_596658f8d2999d7a100994aa_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">鑫玲</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--91714													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="道道..猥琐发育.别浪" href="106805.htm" tppabs="http://x.pps.tv/room/106805" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">5</span>--}}
                                        {{--<img class="pic" src="xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170407/54/e8/xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">道道..猥琐发育.别浪</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--85115													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="尘埃丶女神经" href="129844.htm" tppabs="http://x.pps.tv/room/129844" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">6</span>--}}
                                        {{--<img class="pic" src="xiuchang_5960754fad8c1223ba06b8b5_70_70.jpg" tppabs="http://u8.qiyipic.com/xiuchang/20170708/b8/b5/xiuchang_5960754fad8c1223ba06b8b5_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">尘埃丶女神经</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--17924													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="星耀丶张艾希" href="183260.htm" tppabs="http://x.pps.tv/room/183260" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">7</span>--}}
                                        {{--<img class="pic" src="xiuchang_593be73914d4555461a96939_70_70.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170610/69/39/xiuchang_593be73914d4555461a96939_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">星耀丶张艾希</em>--}}
																											{{--<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>--}}
														{{--</span>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--9172													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="学儿求守护" href="111884.htm" tppabs="http://x.pps.tv/room/111884" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">8</span>--}}
                                        {{--<img class="pic" src="xiuchang_5756c25418aa706d71e20581_70_70.jpg.png" tppabs="http://u0.qiyipic.com/xiuchang/20160607/05/81/xiuchang_5756c25418aa706d71e20581_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">学儿求守护</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--98522													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="梗王田心天天见！" href="112258.htm" tppabs="http://x.pps.tv/room/112258" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">9</span>--}}
                                        {{--<img class="pic" src="xiuchang_5960d90af6882e37fc791713_70_70.jpg" tppabs="http://u4.qiyipic.com/xiuchang/20170708/17/13/xiuchang_5960d90af6882e37fc791713_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">梗王田心天天见！</em>--}}
																											{{--<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>--}}
														{{--</span>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--291734													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-down"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="悠娛蘋果哥說我唱歌好" href="182184.htm" tppabs="http://x.pps.tv/room/182184" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">10</span>--}}
                                        {{--<img class="pic" src="xiuchang_596286eaf6882e37fdb42d50_70_70.jpg.png" tppabs="http://u7.qiyipic.com/xiuchang/20170710/2d/50/xiuchang_596286eaf6882e37fdb42d50_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">悠娛蘋果哥說我唱歌好</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--17749													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ol>--}}
                            {{--<ol class="list-default" data-type="all"  style="display: none;"  data-pb-block="15041009">--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item top-item rank-item-active" title="迷兔☀周一见要音符" href="103225.htm" tppabs="http://x.pps.tv/room/103225" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">1</span>--}}
                                        {{--<img class="pic" src="xiuchang_594b4f6e74d57906d36f89da_70_70.jpg" tppabs="http://u9.qiyipic.com/xiuchang/20170622/89/da/xiuchang_594b4f6e74d57906d36f89da_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">迷兔☀周一见要音符</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--306107													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-hold"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item top-item" title="梗王田心天天见！" href="112258.htm" tppabs="http://x.pps.tv/room/112258" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">2</span>--}}
                                        {{--<img class="pic" src="xiuchang_5960d90af6882e37fc791713_70_70.jpg" tppabs="http://u4.qiyipic.com/xiuchang/20170708/17/13/xiuchang_5960d90af6882e37fc791713_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">梗王田心天天见！</em>--}}
																											{{--<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>--}}
														{{--</span>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--291734													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-hold"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item top-item" title="lovely♥巴掌" href="111853.htm" tppabs="http://x.pps.tv/room/111853" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">3</span>--}}
                                        {{--<img class="pic" src="a426ace74f265_70_70.jpg" tppabs="http://u4.qiyipic.com/show/20151027/a4/a426ace74f265_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">lovely♥巴掌</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--57017													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-hold"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="道道..猥琐发育.别浪" href="106805.htm" tppabs="http://x.pps.tv/room/106805" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">4</span>--}}
                                        {{--<img class="pic" src="xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170407/54/e8/xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">道道..猥琐发育.别浪</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--85115													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="学儿求守护" href="111884.htm" tppabs="http://x.pps.tv/room/111884" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">5</span>--}}
                                        {{--<img class="pic" src="xiuchang_5756c25418aa706d71e20581_70_70.jpg.png" tppabs="http://u0.qiyipic.com/xiuchang/20160607/05/81/xiuchang_5756c25418aa706d71e20581_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">学儿求守护</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--98522													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="曼希☞厉害了word希" href="108817.htm" tppabs="http://x.pps.tv/room/108817" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">6</span>--}}
                                        {{--<img class="pic" src="xiuchang_583da97c74d5797c0300cc7d_70_70.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20161130/cc/7d/xiuchang_583da97c74d5797c0300cc7d_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">曼希☞厉害了word希</em>--}}
																											{{--<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>--}}
														{{--</span>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--125171													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="二狗@" href="152560.htm" tppabs="http://x.pps.tv/room/152560" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">7</span>--}}
                                        {{--<img class="pic" src="xiuchang_59583d2774d57906d0b95947_70_70.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20170702/59/47/xiuchang_59583d2774d57906d0b95947_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">二狗@</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--71135													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="初晴゛回来啦晚8点播" href="100372.htm" tppabs="http://x.pps.tv/room/100372" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">8</span>--}}
                                        {{--<img class="pic" src="xiuchang_5921dc9bad8c1223bb343c03_70_70.jpg.png" tppabs="http://u4.qiyipic.com/xiuchang/20170522/3c/03/xiuchang_5921dc9bad8c1223bb343c03_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">初晴゛回来啦晚8点播</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--155252													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="张冰冰.大发-(上海)" href="135648.htm" tppabs="http://x.pps.tv/room/135648" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">9</span>--}}
                                        {{--<img class="pic" src="xiuchang_58d0eb3d14d4553964bb585e_70_70.jpg.png" tppabs="http://u9.qiyipic.com/xiuchang/20170321/58/5e/xiuchang_58d0eb3d14d4553964bb585e_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">张冰冰.大发-(上海)</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--27583													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="list-default-item rank-item " title="雪糕新主播" href="110929.htm" tppabs="http://x.pps.tv/room/110929" target="room" data-pb-rseat="2">--}}
                                        {{--<span class="order">10</span>--}}
                                        {{--<img class="pic" src="xiuchang_582a702cf6882e026b473893_70_70.jpg.png" tppabs="http://u2.qiyipic.com/xiuchang/20161115/38/93/xiuchang_582a702cf6882e026b473893_70_70.jpg" width="50" height="50">--}}
                                        {{--<em class="name">雪糕新主播</em>--}}
                                        {{--<p class="viewer" title="粉丝数">--}}
                                            {{--<span class="ico ico-fans"></span>--}}
                                            {{--152802													</p>--}}

                                        {{--<div class="trans">--}}
                                            {{--<span class="ico ico-up"></span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ol>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


            </div>
        </div>

    </div>
    <script type="text/javascript"> var xiu_pv_stat_ut =
                1500024754.7076 </script>
    <div id="footer">
        <div class="footmenu">
            <ul>
                <li><a href="" tppabs="http://cserver.iqiyi.com/index?e=25" target="_blank" rel="nofollow">在线客服</a></li>
                <li>
                    <span class="split">|</span><a target="_blank" href="" tppabs="http://www.iqiyi.com/common/contactus.html" rel="nofollow">联系合作</a>
                </li>
                <li>
                    <span class="split">|</span><a target="_blank" href="" tppabs="http://v.pps.tv/topic_161444.html" rel="nofollow">原创推荐</a>
                </li>
                <li>
                    <span class="split">|</span><a target="_blank" href="" tppabs="http://zhaopin.iqiyi.com/" rel="nofollow">招聘信息</a>
                </li>
                <li>
                    <span class="split">|</span><a target="_blank" href="" tppabs="http://www.pps.tv/about/" rel="nofollow">关于我们</a>
                </li>
                <li>
                    <span class="split">|</span><a target="_blank" href="help.htm" tppabs="http://x.pps.tv/about/help" rel="nofollow">帮助中心</a>
                </li>
            </ul>
        </div>
        <div class="copyright">
            <p>
                <span class="inform">违法和不良信息举报电话：400-923-7171</span>
                <span class="inform">举报邮箱：<a rel="nofollow" target="_blank" href="mailto:jubao365@qiyi.com" style="color:#666;">jubao365@qiyi.com</a></span>
            </p>

            <p>
                <a target="_blank" href="" tppabs="http://www.pps.tv/pps_licence.html" target="_blank" rel="nofollow">信息网络传播视听许可证 0908288号</a>
                <a target="_blank" href="" tppabs="http://www.pps.tv/pps_licence2.html" target="_blank" rel="nofollow">广播电视节目制作经营许可证 沪字第339号</a>
                <a target="_blank" href="" tppabs="http://www.pps.tv/pps_licence3.html" target="_blank" rel="nofollow">网络文化经营许可证 沪网文[2012]0187-026号</a>
                <a target="_blank" href="" tppabs="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">增值电信业务经营许可证 沪B2-20060072</a>
            </p>

            <p>
                <a data-paizhao-elem="btn" data-paizhao-type="net" href="javascript:void(0);" rel="nofollow" title="互联网出版许可证 新出网证（沪）字47号">互联网出版许可证 新出网证（沪）字47号</a>
                <a data-paizhao-elem="btn" data-paizhao-type="yaopin" href="javascript:void(0);" rel="nofollow" title="(沪)-非经营性-2011-0052">互联网药品信息服务许可证 (沪)-非经营性-2011-0052</a>
                <a data-paizhao-elem="btn" data-paizhao-type="baojian" href="javascript:void(0);" rel="nofollow" title="沪卫(中医)网复审[2013]第10018号">互联网医疗保健信息服务许可证 沪卫(中医)网复审[2013]第10018号</a>
            </p>

            <p>
                <a target="_blank" href="" tppabs="http://net.china.com.cn/" rel="nofollow">中国互联网违法和不良信息举报中心</a>
                <a target="_blank" href="" tppabs="http://www.shjbzx.cn/" rel="nofollow">上海市举报中心</a>
                <a target="_blank" href="" tppabs="http://www.shdf.gov.cn/" rel="nofollow">“扫黄打非”办公室举报电话：12390</a>
                <a target="_blank" href="" tppabs="http://www.cyberpolice.cn/" rel="nofollow">网络违法犯罪举报网站</a>
                <a target="_blank" href="" tppabs="http://news.cctv.com/special/C20456/01/index.shtml" rel="nofollow">中国互联网视听节目服务自律公约</a>
            </p>

            <p>
                Copyright © 2017 PPS All Rights Reserved
            </p>
        </div>
    </div>
    <div id="paizhao-wrap">
        <div id="data-paizhao-content" class="xkPopbox">
            <div class="dialog-close">
                <a rel="nofollow" href="#" title="关闭">关闭</a>
            </div>
            <img data-type="net" alt="互联网出版许可证 新出网证（沪）字47号" src="xuke.jpg" tppabs="http://www.qiyipic.com/common/fix/site-pps/xuke.jpg" style="display: block; width: 700px; height: 495px;" data-private-display="block">
            <img data-type="yaopin" alt="(沪)-非经营性-2011-0052" src="yaopinfuwu.jpg" tppabs="http://www.qiyipic.com/common/fix/site-pps/yaopinfuwu.jpg" style="display: none; width: 800px; height: 569px;" data-private-display="block">
            <img data-type="baojian" alt="沪卫(中医)网复审[2013]第10018号" src="yiliaofuwu.jpg" tppabs="http://www.qiyipic.com/common/fix/site-pps/yiliaofuwu.jpg" style="display: none; width: 567px; height: 743px;" data-private-display="block">
        </div>
    </div>
    <script type="text/javascript" src="{{asset('common/js/jquery-1.7.2.min.js-v=1.0.0')}}" tppabs="{{asset('common/js/ppsshow/js-libs/jquery-1.7.2.min.js?v=1.0.0')}}"></script>


    <script data-js-version="20170713184940" data-flash-version="20170713181027" type="text/javascript" charset="utf-8" src="{{asset('common/js/require-min.js-v=1.0.0')}}" tppabs="{{asset('common/js/ppsshow/js-libs/require-min.js?v=1.0.0')}}" data-main="http://static.iqiyi.com/js/ppsshow/common/header.js?v=20170713184940"></script>
    <script>
        var _hmt = _hmt || [];
        require(['http://static.iqiyi.com/js/ppsshow/web_v2/index.js?v=20170713184940'], function () {
            require(['comscore.js'/*tpa=http://static.iqiyi.com/js/ppsshow/tools/comscore.js*/], function (comscore) {
                var hm = document.createElement("script");
                hm.src = "hm.js-0f5556da646371aeac76715b71f140dd"/*tpa=http://hm.baidu.com/hm.js?0f5556da646371aeac76715b71f140dd*/;
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            });
        });
    </script>


    <noscript>
        <img src="p2-c1=2&c2=7290408&cv=2.0&cj=1.gif" tppabs="http://b.scorecardresearch.com/p?c1=2&c2=7290408&cv=2.0&cj=1"/>
    </noscript>

    <!--Exec Time:0.0506 -->
    <script>
        window.addEventListener||window.jQuery||window.Backbone||!window._qosPush||window._qosPush({msg:"静态资源加载失败"});
        var _native_version = {
            list: [] || [],
            pic: [
                // >= 某个版本
                {
                    start: 0,
                    end: Infinity
                }
            ]
        }
    </script>
</body>
</html>
