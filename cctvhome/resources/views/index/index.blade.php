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
					<a href="javascript:void(0);" data-pb-rseat="14" node-type="loginLi" title="登录" class="login-enter">登录</a>
					<a href="javascript:void(0);" data-pb-rseat="15" node-type="loginLi" title="注册" class="reg-enter">注册</a>
				</div>
			</div>
		</div>
	</div>
<div class="host-wall">
		<div class="photos">
            <?php foreach($user as $k=>$v){ ?>

                {{--{{asset('common/img/2.png')}}--}}
                {{--http://127.0.0.1/Index/July/aaa/cctvhome/public/common/img/1.png--}}

							<a data-category-name="" data-pb-rseat="1" data-room-id="186964" class="photo " href="186964.htm" tppabs="http://x.pps.tv/room/186964" target="room">
					<img class="thumb" width="100%" src="{{asset('common/img/1.png')}}" tppabs="http://u7.qiyipic.com/xiuchang/20170627/d6/97/xiuchang_59525526f6882e37fa08d697_180_180.jpg">
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
											<div class="host-pic" title="RD KK">
												<img class="thumb" width="370" height="283" alt="RD KK" src="xiuchang_59578d1fad8c1223bb4bd893_370_283.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170701/d8/93/xiuchang_59578d1fad8c1223bb4bd893_370_283.jpg">
												<a class="play-mask" target="room" href="186123.htm" tppabs="http://x.pps.tv/room/186123" style="display: none;" data-pb-rseat="1">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv">
												<i class="ico-lv zb-lv lv11"></i>
											</div>
											<h4 class="name">
												<a target="room" href="186123.htm" tppabs="http://x.pps.tv/room/186123" data-pb-rseat="1">
													RD KK												</a>
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




															<li title="展梦-小灵儿">
									<div class="live-panel">
										<div class="host-pic">
											<img class="thumb" width="180" height="101" src="xiuchang_595885b0d2999d7a133c8198_180_101.jpg" tppabs="http://u6.qiyipic.com/xiuchang/20170702/81/98/xiuchang_595885b0d2999d7a133c8198_180_101.jpg">
											<a class="play-mask" target="room" href="188320.htm" tppabs="http://x.pps.tv/room/188320" style="display: none;" data-pb-rseat="1">
												<div class="back"></div>
												<span class="play-btn">播放</span>
											</a>
										</div>
										<div class="lv">
											<i class="ico-lv zb-lv lv4"></i>
										</div>
										<h4 class="name">
											<a target="room" href="188320.htm" tppabs="http://x.pps.tv/room/188320" data-pb-rseat="1">
												爱吃香蕉の仲孙宏扬											</a>
										</h4>
																					<p class="status">
												<span class="live-time">
													<span class="ico ico-clock"></span>
													<span class="time">26分钟</span>
												</span>
												<span class="viewer" title="观众数">
													<span class="ico ico-peo"></span>
													<span class="num">27</span>
												</span>
											</p>
											<span class="live-tip ">直播中												<span class="arrow"></span>
											</span>
																													</div>
								</li>
												</ul>
				</div>
			</div>
		</div>
		<div class="layout-side">
			<div id="_loginInfoBox">
				<div class="login-wrap" data-pb-block="15041008">
					<span class="top-bg"></span>
					<ul class="pass-tab">
						<li><a href="#" class="active" data-target="login">登录</a></li>
						<li class="separate"><a href="#" data-target="reg">注册</a></li>
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
								<img src="xiuchang_59684036ad8c1223bea1fabd_banner.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170714/fa/bd/xiuchang_59684036ad8c1223bea1fabd_banner.jpg" width="1380" height="115" class="thumb" alt="中国新歌声" title="中国新歌声"/>
															</a>
						</li>
											<li class="focus-chart-item">
							<a class="fcf" data-pb-block="15041002" data-pb-rseat="2" href="185268.htm" tppabs="http://x.pps.tv/room/185268" title="中国有嘻哈" target="_blank">
								<img src="xiuchang_5967366d74d57906d0c65d62_banner.jpg" tppabs="http://u9.qiyipic.com/xiuchang/20170713/5d/62/xiuchang_5967366d74d57906d0c65d62_banner.jpg" width="1380" height="115" class="thumb" alt="中国有嘻哈" title="中国有嘻哈"/>
															</a>
						</li>
											<li class="focus-chart-item">
							<a class="fcf" data-pb-block="15041002" data-pb-rseat="2" href="makeupIn.htm" tppabs="http://x.pps.tv/enter/makeupIn" title="信息补全" target="_blank">
								<img src="xiuchang_58d22632ad8c1219f8fbe196_banner.jpg" tppabs="http://u0.qiyipic.com/xiuchang/20170322/e1/96/xiuchang_58d22632ad8c1219f8fbe196_banner.jpg" width="1380" height="115" class="thumb" alt="信息补全" title="信息补全"/>
															</a>
						</li>
											<li class="focus-chart-item">
							<a class="fcf" data-pb-block="15041002" data-pb-rseat="2" href="musicianP2.html" tppabs="http://x.pps.tv/html/zt/musicianP2.html" title="音乐人" target="_blank">
								<img src="xiuchang_58f84e0cad8c12426e54529e_banner.jpg" tppabs="http://u0.qiyipic.com/xiuchang/20170420/52/9e/xiuchang_58f84e0cad8c12426e54529e_banner.jpg" width="1380" height="115" class="thumb" alt="音乐人" title="音乐人"/>
															</a>
						</li>
											<li class="focus-chart-item">
							<a class="fcf" data-pb-block="15041002" data-pb-rseat="2" href="
							<ul class="fcn-list">
					</ul>
					<b class="lbg"></b>
				</div>
					</div>

								<img src="xiuchang_5948d0c7ad8c1223c1611591_banner.jpg" tppabs="http://u9.qiyipic.com/xiuchang/20170620/15/91/xiuchang_5948d0c7ad8c1223c1611591_banner.jpg" width="1380" height="115" class="thumb" alt="娱乐直播投票" title="娱乐直播投票"/>
															</a>
						</li>
									</ul>
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
					<h2>奇秀新星</h2>
					<a href="s0-a0-b1-p1.htm" tppabs="http://x.pps.tv/cate/center/15" class="more em">更多&gt;</a>
				</div>
				<div class="bd">
					<div class="tab-content tab-cur">
						<ul>
																<li>
										<div class="live-panel">
											<div class="host-pic">
												<img class="thumb" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u7.qiyipic.com/xiuchang/20170627/dc/30/xiuchang_5952552774d57906d373dc30_220_124.jpg" width="180" height="101">
												<a target="room" href="186964.htm" tppabs="http://x.pps.tv/room/186964" class="play-mask" style="display: none;" data-pb-rseat="2">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv" title="主播等级 10级">
												<i class="ico-lv zb-lv lv10"></i>
											</div>
											<h4 class="name">
												<a target="room" href="186964.htm" tppabs="http://x.pps.tv/room/186964" data-pb-rseat="2">温柔表妹 0.0</a>
											</h4>
																							<p class="status">
													<span class="live-time">入驻 29天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>628													</span>
												</p>
												<span class="live-tip live-tip-syb">唱歌中													<span class="arrow"></span>
												</span>
																																</div>

									</li>
																	<li>
										<div class="live-panel">
											<div class="host-pic">
												<img class="thumb" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u7.qiyipic.com/xiuchang/20170617/95/03/xiuchang_5944aca3d2999d7a132c9503_220_124.jpg" width="180" height="101">
												<a target="room" href="177888.htm" tppabs="http://x.pps.tv/room/177888" class="play-mask" style="display: none;" data-pb-rseat="2">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv" title="主播等级 7级">
												<i class="ico-lv zb-lv lv7"></i>
											</div>
											<h4 class="name">
												<a target="room" href="177888.htm" tppabs="http://x.pps.tv/room/177888" data-pb-rseat="2">绿箩✔️酷音新主播</a>
											</h4>
																							<p class="status">
													<span class="live-time">入驻 27天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>964													</span>
												</p>
												<span class="live-tip live-tip-syb">唱歌中													<span class="arrow"></span>
												</span>
																																</div>

									</li>
																	<li>
										<div class="live-panel">
											<div class="host-pic">
												<img class="thumb" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u6.qiyipic.com/xiuchang/20170712/8e/7b/xiuchang_5965cbfed2999d7a134a8e7b_220_124.jpg" width="180" height="101">
												<a target="room" href="184205.htm" tppabs="http://x.pps.tv/room/184205" class="play-mask" style="display: none;" data-pb-rseat="2">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv" title="主播等级 3级">
												<i class="ico-lv zb-lv lv3"></i>
											</div>
											<h4 class="name">
												<a target="room" href="184205.htm" tppabs="http://x.pps.tv/room/184205" data-pb-rseat="2">荣耀娱乐-格格</a>
											</h4>
																							<p class="status">
													<span class="live-time">入驻 5天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>970													</span>
												</p>
												<span class="live-tip live-tip-syc">嗨聊中													<span class="arrow"></span>
												</span>
																																</div>

									</li>
																	<li>
										<div class="live-panel">
											<div class="host-pic">
												<img class="thumb" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u0.qiyipic.com/xiuchang/20170710/46/a7/xiuchang_5963304d74d57906d38046a7_220_124.jpg" width="180" height="101">
												<a target="room" href="188162.htm" tppabs="http://x.pps.tv/room/188162" class="play-mask" style="display: none;" data-pb-rseat="2">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv" title="主播等级 7级">
												<i class="ico-lv zb-lv lv7"></i>
											</div>
											<h4 class="name">
												<a target="room" href="188162.htm" tppabs="http://x.pps.tv/room/188162" data-pb-rseat="2">沐涵❥没有人会疼我的</a>
											</h4>
																							<p class="status">
													<span class="live-time">入驻 14天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>501													</span>
												</p>
												<span class="live-tip ">直播中													<span class="arrow"></span>
												</span>
																																</div>

									</li>
																	<li>
										<div class="live-panel">
											<div class="host-pic">
												<img class="thumb" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u8.qiyipic.com/xiuchang/20170706/74/ce/xiuchang_595dff7cd2999d7a162b74ce_220_124.jpg" width="180" height="101">
												<a target="room" href="188192.htm" tppabs="http://x.pps.tv/room/188192" class="play-mask" style="display: none;" data-pb-rseat="2">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv" title="主播等级 10级">
												<i class="ico-lv zb-lv lv10"></i>
											</div>
											<h4 class="name">
												<a target="room" href="188192.htm" tppabs="http://x.pps.tv/room/188192" data-pb-rseat="2">荣耀-东方</a>
											</h4>
																							<p class="status">
													<span class="live-time">入驻 14天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>318													</span>
												</p>
												<span class="live-tip ">直播中													<span class="arrow"></span>
												</span>
																																</div>

									</li>
																	<li>
										<div class="live-panel">
											<div class="host-pic">
												<img class="thumb" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u5.qiyipic.com/xiuchang/20170624/d5/ee/xiuchang_594e3d4e14d4555461b6d5ee_220_124.jpg" width="180" height="101">
												<a target="room" href="185374.htm" tppabs="http://x.pps.tv/room/185374" class="play-mask" style="display: none;" data-pb-rseat="2">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv" title="主播等级 8级">
												<i class="ico-lv zb-lv lv8"></i>
											</div>
											<h4 class="name">
												<a target="room" href="185374.htm" tppabs="http://x.pps.tv/room/185374" data-pb-rseat="2">悠娱~默夕</a>
											</h4>
																							<p class="status">
													<span class="live-time">入驻 22天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>115													</span>
												</p>
												<span class="live-tip live-tip-syc">嗨聊中													<span class="arrow"></span>
												</span>
																																</div>

									</li>
																	<li>
										<div class="live-panel">
											<div class="host-pic">
												<img class="thumb" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u2.qiyipic.com/xiuchang/20170701/7a/dd/xiuchang_59579f12f6882e3800de7add_220_124.jpg" width="180" height="101">
												<a target="room" href="188229.htm" tppabs="http://x.pps.tv/room/188229" class="play-mask" style="display: none;" data-pb-rseat="2">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv" title="主播等级 8级">
												<i class="ico-lv zb-lv lv8"></i>
											</div>
											<h4 class="name">
												<a target="room" href="188229.htm" tppabs="http://x.pps.tv/room/188229" data-pb-rseat="2">七月.'</a>
											</h4>
																							<p class="status">
													<span class="live-time">入驻 13天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>509													</span>
												</p>
												<span class="live-tip ">直播中													<span class="arrow"></span>
												</span>
																																</div>

									</li>
																	<li>
										<div class="live-panel">
											<div class="host-pic">
												<img class="thumb" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u4.qiyipic.com/xiuchang/20170711/ef/3a/xiuchang_59647cd8f6882e37ff73ef3a_220_124.jpg" width="180" height="101">
												<a target="room" href="189236.htm" tppabs="http://x.pps.tv/room/189236" class="play-mask" style="display: none;" data-pb-rseat="2">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv" title="主播等级 4级">
												<i class="ico-lv zb-lv lv4"></i>
											</div>
											<h4 class="name">
												<a target="room" href="189236.htm" tppabs="http://x.pps.tv/room/189236" data-pb-rseat="2">仙女轩</a>
											</h4>
																							<p class="status">
													<span class="live-time">入驻 4天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>208													</span>
												</p>
												<span class="live-tip live-tip-syb">唱歌中													<span class="arrow"></span>
												</span>
																																</div>

									</li>
																	<li>
										<div class="live-panel">
											<div class="host-pic">
												<img class="thumb" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u2.qiyipic.com/xiuchang/20170625/ef/55/xiuchang_594f823574d57906ce93ef55_220_124.jpg" width="180" height="101">
												<a target="room" href="187720.htm" tppabs="http://x.pps.tv/room/187720" class="play-mask" style="display: none;" data-pb-rseat="2">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv" title="主播等级 6级">
												<i class="ico-lv zb-lv lv6"></i>
											</div>
											<h4 class="name">
												<a target="room" href="187720.htm" tppabs="http://x.pps.tv/room/187720" data-pb-rseat="2">名人丶淳儿</a>
											</h4>
																							<p class="status">
													<span class="live-time">入驻 20天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>497													</span>
												</p>
												<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>
												</span>
																																</div>

									</li>
																	<li>
										<div class="live-panel">
											<div class="host-pic">
												<img class="thumb" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u2.qiyipic.com/xiuchang/20170626/1d/7d/xiuchang_59507cdfd2999d7a17601d7d_220_124.jpg" width="180" height="101">
												<a target="room" href="187773.htm" tppabs="http://x.pps.tv/room/187773" class="play-mask" style="display: none;" data-pb-rseat="2">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv" title="主播等级 12级">
												<i class="ico-lv zb-lv lv12"></i>
											</div>
											<h4 class="name">
												<a target="room" href="187773.htm" tppabs="http://x.pps.tv/room/187773" data-pb-rseat="2">西儿下午三点等我</a>
											</h4>
																							<p class="status">
													<span class="live-time">入驻 18天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>619													</span>
												</p>
												<span class="live-tip ">直播中													<span class="arrow"></span>
												</span>
																																</div>

									</li>
																	<li>
										<div class="live-panel">
											<div class="host-pic">
												<img class="thumb" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u0.qiyipic.com/xiuchang/20170624/c5/70/xiuchang_594e3d93f6882e37fdacc570_220_124.jpg" width="180" height="101">
												<a target="room" href="187471.htm" tppabs="http://x.pps.tv/room/187471" class="play-mask" style="display: none;" data-pb-rseat="2">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv" title="主播等级 6级">
												<i class="ico-lv zb-lv lv6"></i>
											</div>
											<h4 class="name">
												<a target="room" href="187471.htm" tppabs="http://x.pps.tv/room/187471" data-pb-rseat="2">悠娱ღ小静ღ求家人守护</a>
											</h4>
																							<p class="status">
													<span class="live-time">入驻 16天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>190													</span>
												</p>
												<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>
												</span>
																																</div>

									</li>
																	<li>
										<div class="live-panel">
											<div class="host-pic">
												<img class="thumb" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u3.qiyipic.com/xiuchang/20170703/dc/ae/xiuchang_5959e35c74d57906d576dcae_220_124.jpg" width="180" height="101">
												<a target="room" href="188317.htm" tppabs="http://x.pps.tv/room/188317" class="play-mask" style="display: none;" data-pb-rseat="2">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<div class="lv" title="主播等级 5级">
												<i class="ico-lv zb-lv lv5"></i>
											</div>
											<h4 class="name">
												<a target="room" href="188317.htm" tppabs="http://x.pps.tv/room/188317" data-pb-rseat="2">四川新人轩魁请多关照</a>
											</h4>
																							<p class="status">
													<span class="live-time">入驻 12天</span>
													<span class="viewer" title="观众数">
														<span class="ico ico-peo"></span>324													</span>
												</p>
												<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>
												</span>
																																</div>

									</li>
														</ul>
					</div>
				</div>
			</div>
<div class="bx hot-wrap hot-host-wrap" id="_hotAnchor" data-pb-block="15041004">
				<div class="hd">
					<h2>精选主播</h2>

					<div class="tab-tit">
						<ul>
							<li>
								<a href="javascript:void(0);" data-target-id="hot" class="active" data-pb-rseat="1">
									精选主播
									<span class="arrow"></span>
								</a>
							</li>
																<li>
										<a href="javascript:void(0);" data-target-id="100001" data-pb-rseat="2">
											唱歌											<span class="arrow"></span>
										</a>
									</li>
																		<li>
										<a href="javascript:void(0);" data-target-id="100002" data-pb-rseat="3">
											嗨聊											<span class="arrow"></span>
										</a>
									</li>
																		<li>
										<a href="javascript:void(0);" data-target-id="100003" data-pb-rseat="4">
											热舞											<span class="arrow"></span>
										</a>
									</li>
																		<li>
										<a href="javascript:void(0);" data-target-id="100004" data-pb-rseat="5">
											移动直播											<span class="arrow"></span>
										</a>
									</li>
																<li class="all">
								<a href="s0-a0-f0-b1-p1.htm" tppabs="http://x.pps.tv/cate/center" data-pb-rseat="6" class="_allAnchor">全部></a>
							</li>
						</ul>
					</div>
					<a href="javascript:void(0);" class="reload"><span class="ico ico-reload"></span>换一换</a>
				</div>
<div class="bd">
					<div class="tab-content tab-cur" data-content="hot">
						<ul>
																<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="曼希☞厉害了word希" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u9.qiyipic.com/xiuchang/20170424/44/75/xiuchang_58fde5d314d4555f75974475_220_124.jpg">
												<a class="play-mask" target="room" href="108817.htm" tppabs="http://x.pps.tv/room/108817" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="108817.htm" tppabs="http://x.pps.tv/room/108817" data-pb-rseat="7">曼希☞厉害了word希</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>2256												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>125171												</span>
												</p>
												<span class="live-tip live-tip-syc">嗨聊中													<span class="arrow"></span>
												</span>
																																		<div class="medal-wall">
													<img title="主播周星勋章" src="xz_zx_zb_xxz_24x24.png" tppabs="http://www.qiyipic.com/ppsxiu/fix/sc/xz_zx_zb_xxz_24x24.png" width="24" height="24">
												</div>
																					</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="梗王田心天天见！" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u6.qiyipic.com/xiuchang/20170616/e2/5f/xiuchang_59438d9dad8c1223be94e25f_220_124.jpg">
												<a class="play-mask" target="room" href="112258.htm" tppabs="http://x.pps.tv/room/112258" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="112258.htm" tppabs="http://x.pps.tv/room/112258" data-pb-rseat="7">梗王田心天天见！</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>1271												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>291733												</span>
												</p>
												<span class="live-tip live-tip-syc">嗨聊中													<span class="arrow"></span>
												</span>
																																		<div class="medal-wall">
													<img title="金质年度十佳主播" src="Shijiazhubo_jin24.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/actions2016/medal/Shijiazhubo_jin24.png" width="24" height="24">
												</div>
																					</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="曦宝-还能坚持多久？" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u0.qiyipic.com/xiuchang/20170616/07/21/xiuchang_5943bac1d2999d7a11950721_220_124.jpg">
												<a class="play-mask" target="room" href="178512.htm" tppabs="http://x.pps.tv/room/178512" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="178512.htm" tppabs="http://x.pps.tv/room/178512" data-pb-rseat="7">曦宝-还能坚持多久？</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>228												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>1475												</span>
												</p>
												<span class="live-tip live-tip-syb">唱歌中													<span class="arrow"></span>
												</span>
																																		<div class="medal-wall">
													<img title="认证音乐人" src="wp_xz_yinyueren_24x24.png" tppabs="http://www.qiyipic.com/ppsxiu/fix/sc/wp_xz_yinyueren_24x24.png" width="24" height="24">
												</div>
																					</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="小爱玲，捡瓶子过档" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u1.qiyipic.com/xiuchang/20170529/30/90/xiuchang_592c1896d2999d7a14a73090_220_124.jpg">
												<a class="play-mask" target="room" href="123456.htm" tppabs="http://x.pps.tv/room/123456" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="123456.htm" tppabs="http://x.pps.tv/room/123456" data-pb-rseat="7">小爱玲，捡瓶子过档</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>1078												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>848												</span>
												</p>
												<span class="live-tip live-tip-syb">唱歌中													<span class="arrow"></span>
												</span>
																																</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="小茉莉♥迟到大王" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u8.qiyipic.com/xiuchang/20170619/a4/96/xiuchang_5947a12374d57906cfe0a496_220_124.jpg">
												<a class="play-mask" target="room" href="159919.htm" tppabs="http://x.pps.tv/room/159919" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="159919.htm" tppabs="http://x.pps.tv/room/159919" data-pb-rseat="7">小茉莉♥迟到大王</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>154												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>5288												</span>
												</p>
												<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>
												</span>
																																</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="小苹果，透心凉心飞扬" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u8.qiyipic.com/xiuchang/20170618/04/b9/xiuchang_59468c92f6882e37ff6904b9_220_124.jpg">
												<a class="play-mask" target="room" href="108074.htm" tppabs="http://x.pps.tv/room/108074" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="108074.htm" tppabs="http://x.pps.tv/room/108074" data-pb-rseat="7">小苹果，透心凉心飞扬</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>289												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>23829												</span>
												</p>
												<span class="live-tip live-tip-syc">嗨聊中													<span class="arrow"></span>
												</span>
																																</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="旗袍妹妹ღ热舞ing" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u3.qiyipic.com/xiuchang/20170415/2f/d0/xiuchang_58f1120ef6882e6b465a2fd0_220_124.jpg">
												<a class="play-mask" target="room" href="177204.htm" tppabs="http://x.pps.tv/room/177204" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="177204.htm" tppabs="http://x.pps.tv/room/177204" data-pb-rseat="7">旗袍妹妹ღ热舞ing</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>1077												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>9453												</span>
												</p>
												<span class="live-tip live-tip-syd">热舞中													<span class="arrow"></span>
												</span>
																																</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="Rain小雨儿－舞媚娘" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u8.qiyipic.com/xiuchang/20170623/80/10/xiuchang_594cf03274d57906cfe38010_220_124.jpg">
												<a class="play-mask" target="room" href="143932.htm" tppabs="http://x.pps.tv/room/143932" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="143932.htm" tppabs="http://x.pps.tv/room/143932" data-pb-rseat="7">Rain小雨儿－舞媚娘</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>576												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>43571												</span>
												</p>
												<span class="live-tip live-tip-syd">热舞中													<span class="arrow"></span>
												</span>
																																		<div class="medal-wall">
													<img title="铜质年度十佳家族" src="Shijiajiazu_tong24.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/actions2016/medal/Shijiajiazu_tong24.png" width="24" height="24">
												</div>
																					</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="小桥_刚好遇见你" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u1.qiyipic.com/xiuchang/20170605/d4/bd/xiuchang_59352fdc14d4555460b0d4bd_220_124.jpg">
												<a class="play-mask" target="room" href="186173.htm" tppabs="http://x.pps.tv/room/186173" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="186173.htm" tppabs="http://x.pps.tv/room/186173" data-pb-rseat="7">小桥_刚好遇见你</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>1009												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>1219												</span>
												</p>
												<span class="live-tip live-tip-syc">嗨聊中													<span class="arrow"></span>
												</span>
																																</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="贝壳*骨骼精奇的主播" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u4.qiyipic.com/xiuchang/20170404/7c/42/xiuchang_58e35a99f6882e5279e37c42_220_124.jpg">
												<a class="play-mask" target="room" href="182250.htm" tppabs="http://x.pps.tv/room/182250" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="182250.htm" tppabs="http://x.pps.tv/room/182250" data-pb-rseat="7">贝壳*骨骼精奇的主播</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>347												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>4173												</span>
												</p>
												<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>
												</span>
																																		<div class="medal-wall">
													<img title="认证舞者" src="wp_xz_dancer_24x24.png" tppabs="http://www.qiyipic.com/ppsxiu/fix/sc/wp_xz_dancer_24x24.png" width="24" height="24">
												</div>
																					</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="芷萱～求家人关爱" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u5.qiyipic.com/xiuchang/20170703/17/a8/xiuchang_5959c02ead8c1223bfa117a8_220_124.jpg">
												<a class="play-mask" target="room" href="186404.htm" tppabs="http://x.pps.tv/room/186404" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="186404.htm" tppabs="http://x.pps.tv/room/186404" data-pb-rseat="7">芷萱～求家人关爱</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>144												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>387												</span>
												</p>
												<span class="live-tip live-tip-syc">嗨聊中													<span class="arrow"></span>
												</span>
																																</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="全民女神、麦芽糖" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u6.qiyipic.com/xiuchang/20170712/4b/6a/xiuchang_5965dcf2ad8c1223c0bb4b6a_220_124.jpg">
												<a class="play-mask" target="room" href="179073.htm" tppabs="http://x.pps.tv/room/179073" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="179073.htm" tppabs="http://x.pps.tv/room/179073" data-pb-rseat="7">全民女神、麦芽糖</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>520												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>2328												</span>
												</p>
												<span class="live-tip live-tip-syb">唱歌中													<span class="arrow"></span>
												</span>
																																</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="茜茜回归了丶" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u2.qiyipic.com/xiuchang/20161024/75/a3/xiuchang_580dc58314d45535dadf75a3_220_124.jpg">
												<a class="play-mask" target="room" href="102626.htm" tppabs="http://x.pps.tv/room/102626" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="102626.htm" tppabs="http://x.pps.tv/room/102626" data-pb-rseat="7">茜茜回归了丶</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>815												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>5525												</span>
												</p>
												<span class="live-tip live-tip-syc">嗨聊中													<span class="arrow"></span>
												</span>
																																</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="甜豆儿♡新人求关注" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u2.qiyipic.com/xiuchang/20170601/11/a1/xiuchang_592f8afe14d45554637611a1_220_124.jpg">
												<a class="play-mask" target="room" href="185840.htm" tppabs="http://x.pps.tv/room/185840" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="185840.htm" tppabs="http://x.pps.tv/room/185840" data-pb-rseat="7">甜豆儿♡新人求关注</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>104												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>523												</span>
												</p>
												<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>
												</span>
																																</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="艺米♥旺旺碎冰冰" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u2.qiyipic.com/xiuchang/20170707/7d/9e/xiuchang_595f5c81d2999d7a17697d9e_220_124.jpg">
												<a class="play-mask" target="room" href="148327.htm" tppabs="http://x.pps.tv/room/148327" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="148327.htm" tppabs="http://x.pps.tv/room/148327" data-pb-rseat="7">艺米♥旺旺碎冰冰</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>996												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>49964												</span>
												</p>
												<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>
												</span>
																																</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="6外公生日，晚归连播" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u8.qiyipic.com/xiuchang/20170601/b7/e2/xiuchang_592f75abd2999d7a1319b7e2_220_124.jpg">
												<a class="play-mask" target="room" href="103958.htm" tppabs="http://x.pps.tv/room/103958" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="103958.htm" tppabs="http://x.pps.tv/room/103958" data-pb-rseat="7">6外公生日，晚归连播</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>312												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>58715												</span>
												</p>
												<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>
												</span>
																																		<div class="medal-wall">
													<img title="主播周星勋章" src="xz_zx_zb_xxz_24x24.png" tppabs="http://www.qiyipic.com/ppsxiu/fix/sc/xz_zx_zb_xxz_24x24.png" width="24" height="24">
												</div>
																					</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="小璐璐等你…" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u5.qiyipic.com/xiuchang/20170306/d5/b0/xiuchang_58bd1520ad8c1249e677d5b0_220_124.jpg">
												<a class="play-mask" target="room" href="179768.htm" tppabs="http://x.pps.tv/room/179768" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="179768.htm" tppabs="http://x.pps.tv/room/179768" data-pb-rseat="7">小璐璐等你…</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>234												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>25141												</span>
												</p>
												<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>
												</span>
																																</div>
									</li>
																	<li>
										<div class="live-panel live-panel-tag">
											<div class="host-pic">
												<img class="thumb" width="180" height="101" alt="兔宝宝 ..." src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u8.qiyipic.com/xiuchang/20170310/76/4b/xiuchang_58c2147218aa70665d55764b_220_124.jpg">
												<a class="play-mask" target="room" href="125940.htm" tppabs="http://x.pps.tv/room/125940" style="display: none;" data-pb-rseat="7">
													<div class="back"></div>
													<span class="play-btn">播放</span>
												</a>
											</div>
											<h4 class="name">
												<a target="room" href="125940.htm" tppabs="http://x.pps.tv/room/125940" data-pb-rseat="7">兔宝宝 ...</a>
																							</h4>
																							<p class="status">
												<span class="" title="观众数">
													<span class="ico ico-peo"></span>237												</span>
												<span class="viewer" title="粉丝数">
													<span class="ico ico-fans"></span>19925												</span>
												</p>
												<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>
												</span>
																																</div>
									</li>
														</ul>
					</div>
				</div>
			</div>
<div class="bx week-star-wrap">
					<div class="hd">
						<h2>
							<span class="sr-only">周星冲刺王</span>
							<a class="ico ico-help-small">
								<p class="tip">1小时内收取周星礼物最多的主播<span class="arrow"><span class="inner"></span></span></p>
							</a>
						</h2>
					</div>
					<div class="bd">
						<ul data-pb-block="15041012">
																<li>
										<a href="108817.htm" tppabs="http://x.pps.tv/room/108817" target="room" class="week-item" data-pb-rseat="1">
											<div class="gift">
												<!-- ie11下元素带边框时设置圆角有锯齿 -->
												<div class="inner">
													<img src="wp_lw_n_gongzika_50x50.png" tppabs="http://www.qiyipic.com/ppsxiu/fix/sc/wp_lw_n_gongzika_50x50.png" width="50" height="50">
												</div>
											</div>
											<p class="num">收到<em class="em">362</em>个
											</p>

											<div class="pic">
												<img src="xiuchang_583da97c74d5797c0300cc7d_1x1.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20161130/cc/7d/xiuchang_583da97c74d5797c0300cc7d_1x1.jpg" width="130" height="130">

												<div class="back"></div>
												<span class="play-btn">播放</span>
											</div>
											<p class="name">曼希☞厉害了word希</p>
																							<span class="live-tip live-tip-syc">嗨聊中													<span class="arrow"></span>
												</span>
																					</a>
									</li>
																	<li>
										<a href="171325.htm" tppabs="http://x.pps.tv/room/171325" target="room" class="week-item" data-pb-rseat="1">
											<div class="gift">
												<!-- ie11下元素带边框时设置圆角有锯齿 -->
												<div class="inner">
													<img src="wp_lw_n_dabaibai_50x50.png" tppabs="http://www.qiyipic.com/ppsxiu/fix/sc/wp_lw_n_dabaibai_50x50.png" width="50" height="50">
												</div>
											</div>
											<p class="num">收到<em class="em">11635</em>个
											</p>

											<div class="pic">
												<img src="xiuchang_59156595d2999d2a47e03031_1x1.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170512/30/31/xiuchang_59156595d2999d2a47e03031_1x1.jpg" width="130" height="130">

												<div class="back"></div>
												<span class="play-btn">播放</span>
											</div>
											<p class="name">th童颜巨乳_张、琳娅</p>
																							<span class="live-tip live-tip-syd">热舞中													<span class="arrow"></span>
												</span>
																					</a>
									</li>
																	<li>
										<a href="186404.htm" tppabs="http://x.pps.tv/room/186404" target="room" class="week-item" data-pb-rseat="1">
											<div class="gift">
												<!-- ie11下元素带边框时设置圆角有锯齿 -->
												<div class="inner">
													<img src="wp_lw_kiss_50x50.png" tppabs="http://www.qiyipic.com/ppsxiu/fix/sc/wp_lw_kiss_50x50.png" width="50" height="50">
												</div>
											</div>
											<p class="num">收到<em class="em">100</em>个
											</p>

											<div class="pic">
												<img src="xiuchang_5960d6dd74d57906d57af755_1x1.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170708/f7/55/xiuchang_5960d6dd74d57906d57af755_1x1.jpg" width="130" height="130">

												<div class="back"></div>
												<span class="play-btn">播放</span>
											</div>
											<p class="name">芷萱～求家人关爱</p>
																							<span class="live-tip live-tip-syc">嗨聊中													<span class="arrow"></span>
												</span>
																					</a>
									</li>
																	<li>
										<a href="108074.htm" tppabs="http://x.pps.tv/room/108074" target="room" class="week-item" data-pb-rseat="1">
											<div class="gift">
												<!-- ie11下元素带边框时设置圆角有锯齿 -->
												<div class="inner">
													<img src="wp_lw_taimeili_50x50.png" tppabs="http://www.qiyipic.com/ppsxiu/fix/sc/wp_lw_taimeili_50x50.png" width="50" height="50">
												</div>
											</div>
											<p class="num">收到<em class="em">1199</em>个
											</p>

											<div class="pic">
												<img src="xiuchang_59635f9074d57906d0c21f9c_1x1.jpg" tppabs="http://u0.qiyipic.com/xiuchang/20170710/1f/9c/xiuchang_59635f9074d57906d0c21f9c_1x1.jpg" width="130" height="130">

												<div class="back"></div>
												<span class="play-btn">播放</span>
											</div>
											<p class="name">小苹果，透心凉心飞扬</p>
																							<span class="live-tip live-tip-syc">嗨聊中													<span class="arrow"></span>
												</span>
																					</a>
									</li>
																	<li>
										<a href="182120.htm" tppabs="http://x.pps.tv/room/182120" target="room" class="week-item" data-pb-rseat="1">
											<div class="gift">
												<!-- ie11下元素带边框时设置圆角有锯齿 -->
												<div class="inner">
													<img src="wp_lw_n_haohuayoulun_50x50.png" tppabs="http://www.qiyipic.com/ppsxiu/fix/sc/wp_lw_n_haohuayoulun_50x50.png" width="50" height="50">
												</div>
											</div>
											<p class="num">收到<em class="em">1</em>个
											</p>

											<div class="pic">
												<img src="xiuchang_59486b30ad8c1223bb454cfa_1x1.jpg" tppabs="http://u3.qiyipic.com/xiuchang/20170620/4c/fa/xiuchang_59486b30ad8c1223bb454cfa_1x1.jpg" width="130" height="130">

												<div class="back"></div>
												<span class="play-btn">播放</span>
											</div>
											<p class="name">睡不醒的小姗羊(￣∇￣</p>
																							<span class="live-tip live-tip-sym">移动直播													<span class="arrow"></span>
												</span>
																					</a>
									</li>
														</ul>
					</div>
				</div>
<div class="bx family-wrap">
				<div class="hd">
					<h2>明星家族房</h2>
				</div>
				<div class="bd">
					<ul data-pb-block="15041006">
															<li class="family-h1">
										<div class="host-pic">
											<img class="thumb" alt="酷音传媒火星频道" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u5.qiyipic.com/xiuchang/20170712/4a/e8/xiuchang_5965dc96ad8c1223c0bb4ae8_370_283.jpg" height="283" width="370">
											<a target="room" style="display: none;" href="123456.htm" tppabs="http://x.pps.tv/room/123456" class="play-mask" data-pb-rseat="1">
												<div class="back"></div>
												<span class="play-btn">播放</span>
											</a>
										</div>

										<p class="name">
											<a target="room" href="123456.htm" tppabs="http://x.pps.tv/room/123456" data-pb-rseat="1">酷音传媒</a>
										</p>
																					<p class="viewer">
												<span class="ico ico-peo"></span><span class="num">1078</span>
											</p>
											<span class="live-tip live-tip-syb">唱歌中												<span class="arrow"></span>
											</span>
																			</li>
																	<li>
										<div class="host-pic">
											<img class="thumb" alt="主播招募群227754" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u6.qiyipic.com/xiuchang/20170712/98/36/xiuchang_5965dd30f6882e37fe379836_220_124.jpg" height="101" width="180">
											<a target="room" style="display: none;" href="111111.htm" tppabs="http://x.pps.tv/room/111111" class="play-mask" data-pb-rseat="1">
												<div class="back"></div>
												<span class="play-btn">播放</span>
											</a>
										</div>

										<p class="name">
											<a target="room" href="111111.htm" tppabs="http://x.pps.tv/room/111111" data-pb-rseat="1">泊瀚娱乐</a>
										</p>
																					<p class="viewer">
												<span class="ico ico-peo"></span><span class="num">626</span>
											</p>
											<span class="live-tip live-tip-syc">嗨聊中												<span class="arrow"></span>
											</span>
																			</li>
																		<li>
										<div class="host-pic">
											<img class="thumb" alt="奇迹传媒 一房" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u4.qiyipic.com/xiuchang/20170705/7f/6e/xiuchang_595c97f9f6882e3800e17f6e_220_124.jpg" height="101" width="180">
											<a target="room" style="display: none;" href="176884.htm" tppabs="http://x.pps.tv/room/176884" class="play-mask" data-pb-rseat="1">
												<div class="back"></div>
												<span class="play-btn">播放</span>
											</a>
										</div>

										<p class="name">
											<a target="room" href="176884.htm" tppabs="http://x.pps.tv/room/176884" data-pb-rseat="1">奇迹传媒</a>
										</p>
																					<p class="viewer">
												<span class="ico ico-peo"></span><span class="num">393</span>
											</p>
											<span class="live-tip live-tip-syc">嗨聊中												<span class="arrow"></span>
											</span>
																			</li>
																		<li>
										<div class="host-pic">
											<img class="thumb" alt="走进时代 成就梦想" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u9.qiyipic.com/xiuchang/20170426/a4/f0/xiuchang_59007284ad8c125e48c3a4f0_220_124.jpg" height="101" width="180">
											<a target="room" style="display: none;" href="169485.htm" tppabs="http://x.pps.tv/room/169485" class="play-mask" data-pb-rseat="1">
												<div class="back"></div>
												<span class="play-btn">播放</span>
											</a>
										</div>

										<p class="name">
											<a target="room" href="169485.htm" tppabs="http://x.pps.tv/room/169485" data-pb-rseat="1">时代娱乐传媒</a>
										</p>
																					<p class="viewer">
												<span class="ico ico-peo"></span><span class="num">970</span>
											</p>
											<span class="live-tip live-tip-syc">嗨聊中												<span class="arrow"></span>
											</span>
																			</li>
																		<li>
										<div class="host-pic">
											<img class="thumb" alt="荣耀娱乐家族房的房间" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u5.qiyipic.com/xiuchang/20170508/97/49/xiuchang_59101573ad8c125e44439749_220_124.jpg" height="101" width="180">
											<a target="room" style="display: none;" href="184205.htm" tppabs="http://x.pps.tv/room/184205" class="play-mask" data-pb-rseat="1">
												<div class="back"></div>
												<span class="play-btn">播放</span>
											</a>
										</div>

										<p class="name">
											<a target="room" href="184205.htm" tppabs="http://x.pps.tv/room/184205" data-pb-rseat="1">荣耀娱乐</a>
										</p>
																					<p class="viewer">
												<span class="ico ico-peo"></span><span class="num">970</span>
											</p>
											<span class="live-tip live-tip-syc">嗨聊中												<span class="arrow"></span>
											</span>
																			</li>
																		<li>
										<div class="host-pic">
											<img class="thumb" alt="千浔娱乐家族房" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u5.qiyipic.com/xiuchang/20170517/57/0d/xiuchang_591be715ad8c125e42c5570d_220_124.jpg" height="101" width="180">
											<a target="room" style="display: none;" href="176449.htm" tppabs="http://x.pps.tv/room/176449" class="play-mask" data-pb-rseat="1">
												<div class="back"></div>
												<span class="play-btn">播放</span>
											</a>
										</div>

										<p class="name">
											<a target="room" href="176449.htm" tppabs="http://x.pps.tv/room/176449" data-pb-rseat="1">千浔娱乐</a>
										</p>
																					<p class="viewer">
												<span class="ico ico-peo"></span><span class="num">968</span>
											</p>
											<span class="live-tip ">直播中												<span class="arrow"></span>
											</span>
																			</li>
																		<li>
										<div class="host-pic">
											<img class="thumb" alt="千浔舞艺的房间" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u7.qiyipic.com/xiuchang/20170710/14/6a/xiuchang_5962ebf1d2999d7a1008146a_220_124.jpg" height="101" width="180">
											<a target="room" style="display: none;" href="182567.htm" tppabs="http://x.pps.tv/room/182567" class="play-mask" data-pb-rseat="1">
												<div class="back"></div>
												<span class="play-btn">播放</span>
											</a>
										</div>

										<p class="name">
											<a target="room" href="182567.htm" tppabs="http://x.pps.tv/room/182567" data-pb-rseat="1">千浔舞艺</a>
										</p>
																					<p class="viewer">
												<span class="ico ico-peo"></span><span class="num">927</span>
											</p>
											<span class="live-tip live-tip-syb">唱歌中												<span class="arrow"></span>
											</span>
																			</li>
																		<li>
										<div class="host-pic">
											<img class="thumb" alt="应聘加2805962698" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u0.qiyipic.com/xiuchang/20170220/ff/ce/xiuchang_58aa898174d579537717ffce_220_124.jpg" height="101" width="180">
											<a target="room" style="display: none;" href="102626.htm" tppabs="http://x.pps.tv/room/102626" class="play-mask" data-pb-rseat="1">
												<div class="back"></div>
												<span class="play-btn">播放</span>
											</a>
										</div>

										<p class="name">
											<a target="room" href="102626.htm" tppabs="http://x.pps.tv/room/102626" data-pb-rseat="1">天籁星娱</a>
										</p>
																					<p class="viewer">
												<span class="ico ico-peo"></span><span class="num">815</span>
											</p>
											<span class="live-tip live-tip-syc">嗨聊中												<span class="arrow"></span>
											</span>
																			</li>
																		<li>
										<div class="host-pic">
											<img class="thumb" alt="A＋传媒家族房" src="placeholder.png" tppabs="http://www.qiyipic.com/ppsshow/fix/2.0/img/placeholder.png" rsrc="http://u7.qiyipic.com/xiuchang/20170110/9e/9c/xiuchang_5874ada0d2999d6b8abf9e9c_220_124.jpg" height="101" width="180">
											<a target="room" style="display: none;" href="110623.htm" tppabs="http://x.pps.tv/room/110623" class="play-mask" data-pb-rseat="1">
												<div class="back"></div>
												<span class="play-btn">播放</span>
											</a>
										</div>

										<p class="name">
											<a target="room" href="110623.htm" tppabs="http://x.pps.tv/room/110623" data-pb-rseat="1">A十传媒</a>
										</p>
																					<p class="viewer">
												<span class="ico ico-peo"></span><span class="num">672</span>
											</p>
											<span class="live-tip live-tip-syb">唱歌中												<span class="arrow"></span>
											</span>
																			</li>
														</ul>
				</div>
			</div>
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
<div class="bx ranks-wrap ml-ranks-wrap" id="_charmingRank" click-type="popularity_rank">
				<div class="hd">
					<h2>魅力主播</h2>
				</div>
				<div class="bd">
					<div class="tab-tit">
						<ul data-pb-block="15041009">
							<li class="selected">
								<a href="javascript:void(0);" data-pb-rseat="1">日榜</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-pb-rseat="1">周榜</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-pb-rseat="1">月榜</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-pb-rseat="1">总榜</a>
							</li>
						</ul>
					</div>
					<div class="tab-content tab-cur">
														<ol class="list-default" data-type="day"  data-pb-block="15041009">
																				<li>
												<a class="list-default-item rank-item top-item rank-item-active" title="曼希☞厉害了word希" href="108817.htm" tppabs="http://x.pps.tv/room/108817" target="room" data-pb-rseat="2">
													<span class="order">1</span>
													<img class="pic" src="xiuchang_583da97c74d5797c0300cc7d_70_70.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20161130/cc/7d/xiuchang_583da97c74d5797c0300cc7d_70_70.jpg" width="50" height="50">
													<em class="name">曼希☞厉害了word希</em>
																											<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>
														</span>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														125171													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item top-item" title="道道..猥琐发育.别浪" href="106805.htm" tppabs="http://x.pps.tv/room/106805" target="room" data-pb-rseat="2">
													<span class="order">2</span>
													<img class="pic" src="xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170407/54/e8/xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" width="50" height="50">
													<em class="name">道道..猥琐发育.别浪</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														85115													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item top-item" title="哈妹୭等风等雨亦等你" href="129498.htm" tppabs="http://x.pps.tv/room/129498" target="room" data-pb-rseat="2">
													<span class="order">3</span>
													<img class="pic" src="xiuchang_5963d70514d4555460bb2a07_70_70.jpg.png" tppabs="http://u9.qiyipic.com/xiuchang/20170711/2a/07/xiuchang_5963d70514d4555460bb2a07_70_70.jpg" width="50" height="50">
													<em class="name">哈妹୭等风等雨亦等你</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														92021													</p>

													<div class="trans">
																													<span class="ico ico-down"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="热舞小甜甜收游轮" href="137943.htm" tppabs="http://x.pps.tv/room/137943" target="room" data-pb-rseat="2">
													<span class="order">4</span>
													<img class="pic" src="xiuchang_58f93788ad8c12426df6cb03_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170421/cb/03/xiuchang_58f93788ad8c12426df6cb03_70_70.jpg" width="50" height="50">
													<em class="name">热舞小甜甜收游轮</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														57419													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="夏雨荷有点累晚上播" href="109146.htm" tppabs="http://x.pps.tv/room/109146" target="room" data-pb-rseat="2">
													<span class="order">5</span>
													<img class="pic" src="xiuchang_5963cf7114d4555462e5df6c_70_70.jpg.png" tppabs="http://u0.qiyipic.com/xiuchang/20170711/df/6c/xiuchang_5963cf7114d4555462e5df6c_70_70.jpg" width="50" height="50">
													<em class="name">夏雨荷有点累晚上播</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														107952													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="梗王田心天天见！" href="112258.htm" tppabs="http://x.pps.tv/room/112258" target="room" data-pb-rseat="2">
													<span class="order">6</span>
													<img class="pic" src="xiuchang_5960d90af6882e37fc791713_70_70.jpg" tppabs="http://u4.qiyipic.com/xiuchang/20170708/17/13/xiuchang_5960d90af6882e37fc791713_70_70.jpg" width="50" height="50">
													<em class="name">梗王田心天天见！</em>
																											<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>
														</span>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														291734													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="Ty艺萌♥花仙子求守" href="186209.htm" tppabs="http://x.pps.tv/room/186209" target="room" data-pb-rseat="2">
													<span class="order">7</span>
													<img class="pic" src="xiuchang_5963481774d57906d128a1b5_70_70.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170710/a1/b5/xiuchang_5963481774d57906d128a1b5_70_70.jpg" width="50" height="50">
													<em class="name">Ty艺萌♥花仙子求守</em>
																											<span class="live-tip live-tip-sym">移动直播															<span class="arrow"></span>
														</span>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														10123													</p>

													<div class="trans">
																													<span class="ico ico-hold"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="宣小主， 尊师成成" href="147709.htm" tppabs="http://x.pps.tv/room/147709" target="room" data-pb-rseat="2">
													<span class="order">8</span>
													<img class="pic" src="xiuchang_58f261d2d2999d4ec8159c08_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170416/9c/08/xiuchang_58f261d2d2999d4ec8159c08_70_70.jpg" width="50" height="50">
													<em class="name">宣小主， 尊师成成</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														31366													</p>

													<div class="trans">
																													<span class="ico ico-down"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="小䒕•收亲密恋人哟" href="163495.htm" tppabs="http://x.pps.tv/room/163495" target="room" data-pb-rseat="2">
													<span class="order">9</span>
													<img class="pic" src="xiuchang_595b376d74d57906d5776350_70_70.jpg.png" tppabs="http://u8.qiyipic.com/xiuchang/20170704/63/50/xiuchang_595b376d74d57906d5776350_70_70.jpg" width="50" height="50">
													<em class="name">小䒕•收亲密恋人哟</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														117182													</p>

													<div class="trans">
																													<span class="ico ico-down"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="逗比组合之组合拳" href="184769.htm" tppabs="http://x.pps.tv/room/184769" target="room" data-pb-rseat="2">
													<span class="order">10</span>
													<img class="pic" src="xiuchang_5930df31ad8c1223c092b675_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170602/b6/75/xiuchang_5930df31ad8c1223c092b675_70_70.jpg" width="50" height="50">
													<em class="name">逗比组合之组合拳</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														2239													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																		</ol>
															<ol class="list-default" data-type="week"  style="display: none;"  data-pb-block="15041009">
																				<li>
												<a class="list-default-item rank-item top-item rank-item-active" title="曼希☞厉害了word希" href="108817.htm" tppabs="http://x.pps.tv/room/108817" target="room" data-pb-rseat="2">
													<span class="order">1</span>
													<img class="pic" src="xiuchang_583da97c74d5797c0300cc7d_70_70.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20161130/cc/7d/xiuchang_583da97c74d5797c0300cc7d_70_70.jpg" width="50" height="50">
													<em class="name">曼希☞厉害了word希</em>
																											<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>
														</span>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														125171													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item top-item" title="诗悦~外地吃喜酒待定" href="112279.htm" tppabs="http://x.pps.tv/room/112279" target="room" data-pb-rseat="2">
													<span class="order">2</span>
													<img class="pic" src="xiuchang_588411b714d455172136325d_70_70.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170122/32/5d/xiuchang_588411b714d455172136325d_70_70.jpg" width="50" height="50">
													<em class="name">诗悦~外地吃喜酒待定</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														93384													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item top-item" title="道道..猥琐发育.别浪" href="106805.htm" tppabs="http://x.pps.tv/room/106805" target="room" data-pb-rseat="2">
													<span class="order">3</span>
													<img class="pic" src="xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170407/54/e8/xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" width="50" height="50">
													<em class="name">道道..猥琐发育.别浪</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														85115													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="哈妹୭等风等雨亦等你" href="129498.htm" tppabs="http://x.pps.tv/room/129498" target="room" data-pb-rseat="2">
													<span class="order">4</span>
													<img class="pic" src="xiuchang_5963d70514d4555460bb2a07_70_70.jpg.png" tppabs="http://u9.qiyipic.com/xiuchang/20170711/2a/07/xiuchang_5963d70514d4555460bb2a07_70_70.jpg" width="50" height="50">
													<em class="name">哈妹୭等风等雨亦等你</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														92021													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="热舞小甜甜收游轮" href="137943.htm" tppabs="http://x.pps.tv/room/137943" target="room" data-pb-rseat="2">
													<span class="order">5</span>
													<img class="pic" src="xiuchang_58f93788ad8c12426df6cb03_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170421/cb/03/xiuchang_58f93788ad8c12426df6cb03_70_70.jpg" width="50" height="50">
													<em class="name">热舞小甜甜收游轮</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														57419													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="梗王田心天天见！" href="112258.htm" tppabs="http://x.pps.tv/room/112258" target="room" data-pb-rseat="2">
													<span class="order">6</span>
													<img class="pic" src="xiuchang_5960d90af6882e37fc791713_70_70.jpg" tppabs="http://u4.qiyipic.com/xiuchang/20170708/17/13/xiuchang_5960d90af6882e37fc791713_70_70.jpg" width="50" height="50">
													<em class="name">梗王田心天天见！</em>
																											<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>
														</span>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														291734													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="宣小主， 尊师成成" href="147709.htm" tppabs="http://x.pps.tv/room/147709" target="room" data-pb-rseat="2">
													<span class="order">7</span>
													<img class="pic" src="xiuchang_58f261d2d2999d4ec8159c08_70_70.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170416/9c/08/xiuchang_58f261d2d2999d4ec8159c08_70_70.jpg" width="50" height="50">
													<em class="name">宣小主， 尊师成成</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														31366													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="小䒕•收亲密恋人哟" href="163495.htm" tppabs="http://x.pps.tv/room/163495" target="room" data-pb-rseat="2">
													<span class="order">8</span>
													<img class="pic" src="xiuchang_595b376d74d57906d5776350_70_70.jpg.png" tppabs="http://u8.qiyipic.com/xiuchang/20170704/63/50/xiuchang_595b376d74d57906d5776350_70_70.jpg" width="50" height="50">
													<em class="name">小䒕•收亲密恋人哟</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														117182													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="薇小薇弹吉他丶Nine" href="102351.htm" tppabs="http://x.pps.tv/room/102351" target="room" data-pb-rseat="2">
													<span class="order">9</span>
													<img class="pic" src="xiuchang_58dcc0d874d5796eff62b32c_70_70.jpg" tppabs="http://u9.qiyipic.com/xiuchang/20170330/b3/2c/xiuchang_58dcc0d874d5796eff62b32c_70_70.jpg" width="50" height="50">
													<em class="name">薇小薇弹吉他丶Nine</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														94676													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="Angel洝奺亲密恋人" href="101229.htm" tppabs="http://x.pps.tv/room/101229" target="room" data-pb-rseat="2">
													<span class="order">10</span>
													<img class="pic" src="xiuchang_595f40be14d45554654e56e9_70_70.jpg" tppabs="http://u4.qiyipic.com/xiuchang/20170707/56/e9/xiuchang_595f40be14d45554654e56e9_70_70.jpg" width="50" height="50">
													<em class="name">Angel洝奺亲密恋人</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														7301													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																		</ol>
															<ol class="list-default" data-type="month"  style="display: none;"  data-pb-block="15041009">
																				<li>
												<a class="list-default-item rank-item top-item rank-item-active" title="悠娱可晴❣️女神已上线" href="152464.htm" tppabs="http://x.pps.tv/room/152464" target="room" data-pb-rseat="2">
													<span class="order">1</span>
													<img class="pic" src="xiuchang_595a785714d4555461be8624_70_70.jpg.png" tppabs="http://u0.qiyipic.com/xiuchang/20170704/86/24/xiuchang_595a785714d4555461be8624_70_70.jpg" width="50" height="50">
													<em class="name">悠娱可晴❣️女神已上线</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														43943													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item top-item" title="Ty艺萌♥花仙子求守" href="186209.htm" tppabs="http://x.pps.tv/room/186209" target="room" data-pb-rseat="2">
													<span class="order">2</span>
													<img class="pic" src="xiuchang_5963481774d57906d128a1b5_70_70.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170710/a1/b5/xiuchang_5963481774d57906d128a1b5_70_70.jpg" width="50" height="50">
													<em class="name">Ty艺萌♥花仙子求守</em>
																											<span class="live-tip live-tip-sym">移动直播															<span class="arrow"></span>
														</span>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														10123													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item top-item" title="唯爱小叮猫 安静听歌" href="163241.htm" tppabs="http://x.pps.tv/room/163241" target="room" data-pb-rseat="2">
													<span class="order">3</span>
													<img class="pic" src="xiuchang_595e0f5b74d57906ce968f37_70_70.jpg" tppabs="http://u6.qiyipic.com/xiuchang/20170706/8f/37/xiuchang_595e0f5b74d57906ce968f37_70_70.jpg" width="50" height="50">
													<em class="name">唯爱小叮猫 安静听歌</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														6854													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="鑫玲" href="138422.htm" tppabs="http://x.pps.tv/room/138422" target="room" data-pb-rseat="2">
													<span class="order">4</span>
													<img class="pic" src="xiuchang_596658f8d2999d7a100994aa_70_70.jpg" tppabs="http://u6.qiyipic.com/xiuchang/20170713/94/aa/xiuchang_596658f8d2999d7a100994aa_70_70.jpg" width="50" height="50">
													<em class="name">鑫玲</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														91714													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="道道..猥琐发育.别浪" href="106805.htm" tppabs="http://x.pps.tv/room/106805" target="room" data-pb-rseat="2">
													<span class="order">5</span>
													<img class="pic" src="xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170407/54/e8/xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" width="50" height="50">
													<em class="name">道道..猥琐发育.别浪</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														85115													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="尘埃丶女神经" href="129844.htm" tppabs="http://x.pps.tv/room/129844" target="room" data-pb-rseat="2">
													<span class="order">6</span>
													<img class="pic" src="xiuchang_5960754fad8c1223ba06b8b5_70_70.jpg" tppabs="http://u8.qiyipic.com/xiuchang/20170708/b8/b5/xiuchang_5960754fad8c1223ba06b8b5_70_70.jpg" width="50" height="50">
													<em class="name">尘埃丶女神经</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														17924													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="星耀丶张艾希" href="183260.htm" tppabs="http://x.pps.tv/room/183260" target="room" data-pb-rseat="2">
													<span class="order">7</span>
													<img class="pic" src="xiuchang_593be73914d4555461a96939_70_70.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170610/69/39/xiuchang_593be73914d4555461a96939_70_70.jpg" width="50" height="50">
													<em class="name">星耀丶张艾希</em>
																											<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>
														</span>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														9172													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="学儿求守护" href="111884.htm" tppabs="http://x.pps.tv/room/111884" target="room" data-pb-rseat="2">
													<span class="order">8</span>
													<img class="pic" src="xiuchang_5756c25418aa706d71e20581_70_70.jpg.png" tppabs="http://u0.qiyipic.com/xiuchang/20160607/05/81/xiuchang_5756c25418aa706d71e20581_70_70.jpg" width="50" height="50">
													<em class="name">学儿求守护</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														98522													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="梗王田心天天见！" href="112258.htm" tppabs="http://x.pps.tv/room/112258" target="room" data-pb-rseat="2">
													<span class="order">9</span>
													<img class="pic" src="xiuchang_5960d90af6882e37fc791713_70_70.jpg" tppabs="http://u4.qiyipic.com/xiuchang/20170708/17/13/xiuchang_5960d90af6882e37fc791713_70_70.jpg" width="50" height="50">
													<em class="name">梗王田心天天见！</em>
																											<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>
														</span>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														291734													</p>

													<div class="trans">
																													<span class="ico ico-down"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="悠娛蘋果哥說我唱歌好" href="182184.htm" tppabs="http://x.pps.tv/room/182184" target="room" data-pb-rseat="2">
													<span class="order">10</span>
													<img class="pic" src="xiuchang_596286eaf6882e37fdb42d50_70_70.jpg.png" tppabs="http://u7.qiyipic.com/xiuchang/20170710/2d/50/xiuchang_596286eaf6882e37fdb42d50_70_70.jpg" width="50" height="50">
													<em class="name">悠娛蘋果哥說我唱歌好</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														17749													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																		</ol>
															<ol class="list-default" data-type="all"  style="display: none;"  data-pb-block="15041009">
																				<li>
												<a class="list-default-item rank-item top-item rank-item-active" title="迷兔☀周一见要音符" href="103225.htm" tppabs="http://x.pps.tv/room/103225" target="room" data-pb-rseat="2">
													<span class="order">1</span>
													<img class="pic" src="xiuchang_594b4f6e74d57906d36f89da_70_70.jpg" tppabs="http://u9.qiyipic.com/xiuchang/20170622/89/da/xiuchang_594b4f6e74d57906d36f89da_70_70.jpg" width="50" height="50">
													<em class="name">迷兔☀周一见要音符</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														306107													</p>

													<div class="trans">
																													<span class="ico ico-hold"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item top-item" title="梗王田心天天见！" href="112258.htm" tppabs="http://x.pps.tv/room/112258" target="room" data-pb-rseat="2">
													<span class="order">2</span>
													<img class="pic" src="xiuchang_5960d90af6882e37fc791713_70_70.jpg" tppabs="http://u4.qiyipic.com/xiuchang/20170708/17/13/xiuchang_5960d90af6882e37fc791713_70_70.jpg" width="50" height="50">
													<em class="name">梗王田心天天见！</em>
																											<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>
														</span>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														291734													</p>

													<div class="trans">
																													<span class="ico ico-hold"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item top-item" title="lovely♥巴掌" href="111853.htm" tppabs="http://x.pps.tv/room/111853" target="room" data-pb-rseat="2">
													<span class="order">3</span>
													<img class="pic" src="a426ace74f265_70_70.jpg" tppabs="http://u4.qiyipic.com/show/20151027/a4/a426ace74f265_70_70.jpg" width="50" height="50">
													<em class="name">lovely♥巴掌</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														57017													</p>

													<div class="trans">
																													<span class="ico ico-hold"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="道道..猥琐发育.别浪" href="106805.htm" tppabs="http://x.pps.tv/room/106805" target="room" data-pb-rseat="2">
													<span class="order">4</span>
													<img class="pic" src="xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20170407/54/e8/xiuchang_58e75a7cad8c125e84ee54e8_70_70.jpg" width="50" height="50">
													<em class="name">道道..猥琐发育.别浪</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														85115													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="学儿求守护" href="111884.htm" tppabs="http://x.pps.tv/room/111884" target="room" data-pb-rseat="2">
													<span class="order">5</span>
													<img class="pic" src="xiuchang_5756c25418aa706d71e20581_70_70.jpg.png" tppabs="http://u0.qiyipic.com/xiuchang/20160607/05/81/xiuchang_5756c25418aa706d71e20581_70_70.jpg" width="50" height="50">
													<em class="name">学儿求守护</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														98522													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="曼希☞厉害了word希" href="108817.htm" tppabs="http://x.pps.tv/room/108817" target="room" data-pb-rseat="2">
													<span class="order">6</span>
													<img class="pic" src="xiuchang_583da97c74d5797c0300cc7d_70_70.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20161130/cc/7d/xiuchang_583da97c74d5797c0300cc7d_70_70.jpg" width="50" height="50">
													<em class="name">曼希☞厉害了word希</em>
																											<span class="live-tip live-tip-syc">嗨聊中															<span class="arrow"></span>
														</span>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														125171													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="二狗@" href="152560.htm" tppabs="http://x.pps.tv/room/152560" target="room" data-pb-rseat="2">
													<span class="order">7</span>
													<img class="pic" src="xiuchang_59583d2774d57906d0b95947_70_70.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20170702/59/47/xiuchang_59583d2774d57906d0b95947_70_70.jpg" width="50" height="50">
													<em class="name">二狗@</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														71135													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="初晴゛回来啦晚8点播" href="100372.htm" tppabs="http://x.pps.tv/room/100372" target="room" data-pb-rseat="2">
													<span class="order">8</span>
													<img class="pic" src="xiuchang_5921dc9bad8c1223bb343c03_70_70.jpg.png" tppabs="http://u4.qiyipic.com/xiuchang/20170522/3c/03/xiuchang_5921dc9bad8c1223bb343c03_70_70.jpg" width="50" height="50">
													<em class="name">初晴゛回来啦晚8点播</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														155252													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="张冰冰.大发-(上海)" href="135648.htm" tppabs="http://x.pps.tv/room/135648" target="room" data-pb-rseat="2">
													<span class="order">9</span>
													<img class="pic" src="xiuchang_58d0eb3d14d4553964bb585e_70_70.jpg.png" tppabs="http://u9.qiyipic.com/xiuchang/20170321/58/5e/xiuchang_58d0eb3d14d4553964bb585e_70_70.jpg" width="50" height="50">
													<em class="name">张冰冰.大发-(上海)</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														27583													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																					<li>
												<a class="list-default-item rank-item " title="雪糕新主播" href="110929.htm" tppabs="http://x.pps.tv/room/110929" target="room" data-pb-rseat="2">
													<span class="order">10</span>
													<img class="pic" src="xiuchang_582a702cf6882e026b473893_70_70.jpg.png" tppabs="http://u2.qiyipic.com/xiuchang/20161115/38/93/xiuchang_582a702cf6882e026b473893_70_70.jpg" width="50" height="50">
													<em class="name">雪糕新主播</em>
																										<p class="viewer" title="粉丝数">
														<span class="ico ico-fans"></span>
														152802													</p>

													<div class="trans">
																													<span class="ico ico-up"></span>
																											</div>
												</a>
											</li>
																		</ol>
												</div>
				</div>
			</div>
<div class="bx aw-wrap">
				<div class="hd">
					<h2>活动达人</h2>
				</div>
				<div class="bd">
					<div class="content">
													<ul class="list-default aw-list" data-pb-block="15041005">
																	<li>
										<a href="103853.htm" tppabs="http://x.pps.tv/room/103853" target="room" class="aw-item list-default-item" data-pb-rseat="4">
											<img class="pic" src="xiuchang_58b6b23874d5793a2c4b4382_70_70.jpg" tppabs="http://u6.qiyipic.com/xiuchang/20170301/43/82/xiuchang_58b6b23874d5793a2c4b4382_70_70.jpg" width="50" height="50">
																						<p class="name">小米渣^ق16号见省院</p>

											<p class="media-wall">
																										<img title="认证音乐人" src="wp_xz_yinyueren_24x24.png" tppabs="http://www.qiyipic.com/ppsxiu/fix/sc/wp_xz_yinyueren_24x24.png" width="24" height="24">
																								</p>
										</a>
									</li>
																	<li>
										<a href="103276.htm" tppabs="http://x.pps.tv/room/103276" target="room" class="aw-item list-default-item" data-pb-rseat="4">
											<img class="pic" src="xiuchang_594a776914d455546495630c_70_70.jpg.png" tppabs="http://u5.qiyipic.com/xiuchang/20170621/63/0c/xiuchang_594a776914d455546495630c_70_70.jpg" width="50" height="50">
																						<p class="name">蘇墨、MC拧抹布</p>

											<p class="media-wall">
																										<img title="认证音乐人" src="wp_xz_yinyueren_24x24.png" tppabs="http://www.qiyipic.com/ppsxiu/fix/sc/wp_xz_yinyueren_24x24.png" width="24" height="24">
																								</p>
										</a>
									</li>
																	<li>
										<a href="100415.htm" tppabs="http://x.pps.tv/room/100415" target="room" class="aw-item list-default-item" data-pb-rseat="4">
											<img class="pic" src="xiuchang_58331f8ead8c1261e6d87a2e_70_70.jpg.png" tppabs="http://u3.qiyipic.com/xiuchang/20161122/7a/2e/xiuchang_58331f8ead8c1261e6d87a2e_70_70.jpg" width="50" height="50">
																						<p class="name">豆沙包 我又来啦哈哈</p>

											<p class="media-wall">
																							</p>
										</a>
									</li>
																	<li>
										<a href="103788.htm" tppabs="http://x.pps.tv/room/103788" target="room" class="aw-item list-default-item" data-pb-rseat="4">
											<img class="pic" src="xiuchang_5932df02ad8c1223bdd50919_70_70.jpg" tppabs="http://u6.qiyipic.com/xiuchang/20170604/09/19/xiuchang_5932df02ad8c1223bdd50919_70_70.jpg" width="50" height="50">
																						<p class="name">小小倪*放飞自我</p>

											<p class="media-wall">
																							</p>
										</a>
									</li>
															</ul>
											</div>
				</div>
			</div>
			<div class="bx notice-wrap">
				<div class="hd">
					<h2>公告</h2>
				</div>
				<div class="bd">
					<div class="content" data-pb-block="15041011">
						<ul></ul>
						<a href="" tppabs="http://store.iqiyi.com/web/iqiyi/detail/mobile.action" target="_blank" class="dl-client dl-mobile" data-pb-rseat="1">爱奇艺APP</a>
						<a href="" target="_blank" class="dl-client dl-pc" data-pb-rseat="2">爱奇艺客户端</a>
						<a href="" target="_blank" class="dl-client dl-mate" data-pb-rseat="3">直播伴侣</a>
					</div>
				</div>
			</div>
		</div>
	</div>
			<div class="ad-wrap">
			<div class="slider-wrap">
				<ul class="slider" data-pb-block="15041007">
											<li>
							<a title="艺萌" href="186209.htm" tppabs="http://x.pps.tv/room/186209" target="room" data-pb-rseat="1">
								<img class="thumb" alt="艺萌" src="xiuchang_5965ea9ead8c1223bea0bd9a_banner.jpg" tppabs="http://u0.qiyipic.com/xiuchang/20170712/bd/9a/xiuchang_5965ea9ead8c1223bea0bd9a_banner.jpg" width="220" height="100">
							</a>

						</li>
											<li>
							<a title="可晴" href="152464.htm" tppabs="http://x.pps.tv/room/152464" target="room" data-pb-rseat="1">
								<img class="thumb" alt="可晴" src="xiuchang_5965ea82d2999d7a176ffd05_banner.jpg" tppabs="http://u5.qiyipic.com/xiuchang/20170712/fd/05/xiuchang_5965ea82d2999d7a176ffd05_banner.jpg" width="220" height="100">
							</a>

						</li>
											<li>
							<a title="张艾希" href="183260.htm" tppabs="http://x.pps.tv/room/183260" target="room" data-pb-rseat="1">
								<img class="thumb" alt="张艾希" src="xiuchang_5965eac1d2999d7a134abb2f_banner.jpg" tppabs="http://u0.qiyipic.com/xiuchang/20170712/bb/2f/xiuchang_5965eac1d2999d7a134abb2f_banner.jpg" width="220" height="100">
							</a>

						</li>
											<li>
							<a title="小叮猫" href="163241.htm" tppabs="http://x.pps.tv/room/163241" target="room" data-pb-rseat="1">
								<img class="thumb" alt="小叮猫" src="xiuchang_5965eb28d2999d7a129c9d07_banner.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170712/9d/07/xiuchang_5965eb28d2999d7a129c9d07_banner.jpg" width="220" height="100">
							</a>

						</li>
											<li>
							<a title="鑫玲" href="138422.htm" tppabs="http://x.pps.tv/room/138422" target="room" data-pb-rseat="1">
								<img class="thumb" alt="鑫玲" src="xiuchang_58f488a4d2999d4ec1e6c9ad_banner.jpg" tppabs="http://u0.qiyipic.com/xiuchang/20170417/c9/ad/xiuchang_58f488a4d2999d4ec1e6c9ad_banner.jpg" width="220" height="100">
							</a>

						</li>
											<li>
							<a title="学儿" href="111884.htm" tppabs="http://x.pps.tv/room/111884" target="room" data-pb-rseat="1">
								<img class="thumb" alt="学儿" src="xiuchang_58f4881874d5793dd14d0084_banner.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170417/00/84/xiuchang_58f4881874d5793dd14d0084_banner.jpg" width="220" height="100">
							</a>

						</li>
									</ul>
			</div>
			<a href="javascript:void(0);" class="btn-prev">上一页</a>
			<a href="javascript:void(0);" class="btn-next">下一页</a>
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
