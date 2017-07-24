<html><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset=utf-8"UTF-8"/>
	<title>榜单-对战榜-cctv</title>
	<meta name="keywords" content="美女直播,视频聊天,视频交友奇秀,秀场,爱奇艺秀场,PPS秀场,美女主播,视频聊天,美女视频,视频直播,美女秀场,真人秀场,在线K歌,视频交友,真人视频">
	<meta name="description" content="奇秀的人气主播和富豪粉丝的日榜，周榜和月榜。榜单排名依据是主播获得的礼物价值以及粉丝送出礼物的价值。">
	<link href="{{asset('common/css/blank.css-v=20170713184940.css')}}" tppabs="{{asset('common/css/ppsshow/2.0/style/blank.css?v=20170713184940')}}" type="text/css" rel="stylesheet">
	<link href="{{asset('common/css/ranks.css-v=20170713184940.css')}}" tppabs="{{asset('common/css/ranks.css?v=20170713184940')}}" type="text/css"
		  rel="stylesheet">
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
				<li class="sn-item"><a href="" tppabs="http://www.iqiyi.com/" data-pb-rseat="18" target="_blank" class="sn"><b class="xicon-qiyi xicon"></b>cctv首页</a></li>
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
	<div class="site-header ranks-page" data-pb-block="15041001">
		<div class="inner">
			<h1 class="logo" title="奇秀"><a href="index.htm" tppabs="http://x.pps.tv/" data-pb-rseat="1">cctv主播秀场</a></h1>
			<ul class="nav">
				<li>
					<a href="{{url('idnex/index')}}" tppabs="http://x.pps.tv/" data-pb-rseat="2" class="nav-item nav-index"><span>首页</span></a>
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
	
	<div id="wrapper">
	<div class="ranks-nav">
		<ul class="tab-tit" data-pb-block="15041060">
			<li><a href="{{url('ranking/rank')}}" tppabs="http://x.pps.tv/rank" data-pb-rseat="1">风云榜<span class="arrow"></span></a></li>
			<li class="selected sep"><a href="{{url('ranking/week')}}" tppabs="http://x.pps.tv/rank/week" data-pb-rseat="2">周星榜<span class="arrow"></span></a></li>
			<li class="sep"><a href="{{url('ranking/index')}}" tppabs="http://x.pps.tv/rank/pk" data-pb-rseat="3">对战榜<span class="arrow"></span></a></li>
		</ul>
		<span class="bl"></span>
		<span class="br"></span>
	</div>
<!--module/ranks/_ranks.html begin-->
			<div class="ranks-wrap host-ranks" >
				<h2 class="page-title">
					对战群英榜		<span class="ico ico-logo-m"></span>
					<a class="ico ico-help-small">
						<p class="tip">根据主播在对战中获得对应的礼物价值排名<span class="arrow"><span class="inner"></span></span></p>
					</a>
				</h2>

				<ul class="tab-title">
					<li class="selected"><a href="{{url('ranking/index')}}">日榜<span class="arrow"></span></a></li>
					<li><a href="{{url('ranking/index')}}">周榜<span class="arrow"></span></a></li>
					<li><a href="{{url('ranking/index')}}">月榜<span class="arrow"></span></a></li>
					<li class="last"><a href="{{url('ranking/index')}}">总榜<span class="arrow"></span></a></li>
				</ul>

				<div class="tab-content tab-cur">
										<ol class="ranks-list" 1 data-type="day" data-tab-panel="1">
													<li>
							<a href="108817.htm" tppabs="http://x.pps.tv/room/108817" target="room" class="top-item top-item-1">
							<span class="order">1</span>
															<img class="photo" src="xiuchang_583da97c74d5797c0300cc7d_1x1.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20161130/cc/7d/xiuchang_583da97c74d5797c0300cc7d_1x1.jpg" width="130" height="130">
															<p class="lv-wall">
								<i class="ico-lv zb-lv lv37"></i></p>
							<p class="name">曼希☞杭城小霸王</p>
															<p class="rk-rm">日榜冠军</p>
																	<p class="trans"><span class="ico ico-up"></span>99+</p>
																			<span class="live-tip">直播中<span class="arrow"></span></span>
																		</a>
							</li>
													<li>
							<a href="186209.htm" tppabs="http://x.pps.tv/room/186209" target="room" class="top-item top-item-2">
							<span class="order">2</span>
															<img class="photo" src="xiuchang_5963481774d57906d128a1b5_1x1.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170710/a1/b5/xiuchang_5963481774d57906d128a1b5_1x1.jpg" width="130" height="130">
															<p class="lv-wall">
								<i class="ico-lv zb-lv lv23"></i></p>
							<p class="name">Ty艺萌♥花仙子求守</p>
															<p class="rk-rm">距前一名:92.4万</p>
																<p class="trans"><span class="ico ico-up"></span>1</p>
																			<span class="live-tip">直播中<span class="arrow"></span></span>
																		</a>
							</li>
													<li>
							<a href="137943.htm" tppabs="http://x.pps.tv/room/137943" target="room" class="top-item top-item-3">
							<span class="order">3</span>
															<img class="photo" src="xiuchang_58f93788ad8c12426df6cb03_1x1.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170421/cb/03/xiuchang_58f93788ad8c12426df6cb03_1x1.jpg" width="130" height="130">
															<p class="lv-wall">
								<i class="ico-lv zb-lv lv27"></i></p>
							<p class="name">热舞小甜甜收游轮</p>
															<p class="rk-rm">距前一名:43.7万</p>
																<p class="trans"><span class="ico ico-up"></span>99+</p>
																</a>
							</li>
													<li>
							<a href="109146.htm" tppabs="http://x.pps.tv/room/109146" target="room" class="ranks-item ">
							<span class="order">4</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv34"></i></p>
							<p class="name">夏雨荷有点累晚上播</p>
															<p class="rk-rm">距前一名:1.4万</p>
																<p class="trans"><span class="ico ico-up"></span>21</p>
																</a>
							</li>
													<li>
							<a href="189150.htm" tppabs="http://x.pps.tv/room/189150" target="room" class="ranks-item ">
							<span class="order">5</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv10"></i></p>
							<p class="name">名人丶九宣</p>
															<p class="rk-rm">距前一名:10.5万</p>
																<p class="trans"><span class="ico ico-up"></span>99+</p>
																</a>
							</li>
													<li>
							<a href="153479.htm" tppabs="http://x.pps.tv/room/153479" target="room" class="ranks-item ">
							<span class="order">6</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv18"></i></p>
							<p class="name">芈月~为你而歌唱</p>
															<p class="rk-rm">距前一名:6460</p>
																<p class="trans"><span class="ico ico-down"></span>1</p>
																</a>
							</li>
													<li>
							<a href="155424.htm" tppabs="http://x.pps.tv/room/155424" target="room" class="ranks-item ">
							<span class="order">7</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv23"></i></p>
							<p class="name">乔妹儿晚8点见</p>
															<p class="rk-rm">距前一名:1.8万</p>
																<p class="trans"><span class="ico ico-down"></span>6</p>
																</a>
							</li>
													<li>
							<a href="106805.htm" tppabs="http://x.pps.tv/room/106805" target="room" class="ranks-item ">
							<span class="order">8</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv37"></i></p>
							<p class="name">道道..猥琐发育.别浪</p>
															<p class="rk-rm">距前一名:12.9万</p>
																<p class="trans"><span class="ico ico-up"></span>53</p>
																</a>
							</li>
													<li>
							<a href="182184.htm" tppabs="http://x.pps.tv/room/182184" target="room" class="ranks-item ">
							<span class="order">9</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv23"></i></p>
							<p class="name">悠娛蘋果哥說我唱歌好</p>
															<p class="rk-rm">距前一名:1.4万</p>
																<p class="trans"><span class="ico ico-up"></span>99+</p>
																</a>
							</li>
													<li>
							<a href="157640.htm" tppabs="http://x.pps.tv/room/157640" target="room" class="ranks-item  last-item">
							<span class="order">10</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv17"></i></p>
							<p class="name">梦、重新开始</p>
															<p class="rk-rm">距前一名:3.3万</p>
																<p class="trans"><span class="ico ico-up"></span>82</p>
																			<span class="live-tip">直播中<span class="arrow"></span></span>
																		</a>
							</li>
											</ol>
											<ol class="ranks-list" style="display:none;" data-type="week" data-tab-panel="2">
													<li>
							<a href="155424.htm" tppabs="http://x.pps.tv/room/155424" target="room" class="top-item top-item-1">
							<span class="order">1</span>
															<img class="photo" src="xiuchang_5966c9edad8c1223bea12772_1x1.jpg" tppabs="http://u5.qiyipic.com/xiuchang/20170713/27/72/xiuchang_5966c9edad8c1223bea12772_1x1.jpg" width="130" height="130">
															<p class="lv-wall">
								<i class="ico-lv zb-lv lv23"></i></p>
							<p class="name">乔妹儿晚8点见</p>
															<p class="rk-rm">周榜冠军</p>
																	<p class="trans"><span class="ico ico-up"></span>27</p>
																</a>
							</li>
													<li>
							<a href="137943.htm" tppabs="http://x.pps.tv/room/137943" target="room" class="top-item top-item-2">
							<span class="order">2</span>
															<img class="photo" src="xiuchang_58f93788ad8c12426df6cb03_1x1.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170421/cb/03/xiuchang_58f93788ad8c12426df6cb03_1x1.jpg" width="130" height="130">
															<p class="lv-wall">
								<i class="ico-lv zb-lv lv27"></i></p>
							<p class="name">热舞小甜甜收游轮</p>
															<p class="rk-rm">距前一名:31.2万</p>
																<p class="trans"><span class="ico ico-up"></span>12</p>
																</a>
							</li>
													<li>
							<a href="108817.htm" tppabs="http://x.pps.tv/room/108817" target="room" class="top-item top-item-3">
							<span class="order">3</span>
															<img class="photo" src="xiuchang_583da97c74d5797c0300cc7d_1x1.jpg.png" tppabs="http://u1.qiyipic.com/xiuchang/20161130/cc/7d/xiuchang_583da97c74d5797c0300cc7d_1x1.jpg" width="130" height="130">
															<p class="lv-wall">
								<i class="ico-lv zb-lv lv37"></i></p>
							<p class="name">曼希☞杭城小霸王</p>
															<p class="rk-rm">距前一名:53.3万</p>
																<p class="trans"><span class="ico ico-up"></span>18</p>
																			<span class="live-tip">直播中<span class="arrow"></span></span>
																		</a>
							</li>
													<li>
							<a href="106805.htm" tppabs="http://x.pps.tv/room/106805" target="room" class="ranks-item ">
							<span class="order">4</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv37"></i></p>
							<p class="name">道道..猥琐发育.别浪</p>
															<p class="rk-rm">距前一名:45.5万</p>
																<p class="trans"><span class="ico ico-up"></span>6</p>
																</a>
							</li>
													<li>
							<a href="125546.htm" tppabs="http://x.pps.tv/room/125546" target="room" class="ranks-item ">
							<span class="order">5</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv24"></i></p>
							<p class="name">热舞嘉嘉.真心换真情</p>
															<p class="rk-rm">距前一名:32.2万</p>
																<p class="trans"><span class="ico ico-up"></span>55</p>
																</a>
							</li>
													<li>
							<a href="186209.htm" tppabs="http://x.pps.tv/room/186209" target="room" class="ranks-item ">
							<span class="order">6</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv23"></i></p>
							<p class="name">Ty艺萌♥花仙子求守</p>
															<p class="rk-rm">距前一名:8.1万</p>
																<p class="trans"><span class="ico ico-down"></span>1</p>
																			<span class="live-tip">直播中<span class="arrow"></span></span>
																		</a>
							</li>
													<li>
							<a href="132190.htm" tppabs="http://x.pps.tv/room/132190" target="room" class="ranks-item ">
							<span class="order">7</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv27"></i></p>
							<p class="name">花小骨花小睿早晚都播</p>
															<p class="rk-rm">距前一名:28.3万</p>
																<p class="trans"><span class="ico ico-up"></span>91</p>
																</a>
							</li>
													<li>
							<a href="153479.htm" tppabs="http://x.pps.tv/room/153479" target="room" class="ranks-item ">
							<span class="order">8</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv18"></i></p>
							<p class="name">芈月~为你而歌唱</p>
															<p class="rk-rm">距前一名:37.1万</p>
																<p class="trans"><span class="ico ico-up"></span>99+</p>
																</a>
							</li>
													<li>
							<a href="123539.htm" tppabs="http://x.pps.tv/room/123539" target="room" class="ranks-item ">
							<span class="order">9</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv24"></i></p>
							<p class="name">燕子你说我就信</p>
															<p class="rk-rm">距前一名:7870</p>
																<p class="trans"><span class="ico ico-up"></span>13</p>
																</a>
							</li>
													<li>
							<a href="100415.htm" tppabs="http://x.pps.tv/room/100415" target="room" class="ranks-item  last-item">
							<span class="order">10</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv29"></i></p>
							<p class="name">豆沙包 我又来啦哈哈</p>
															<p class="rk-rm">距前一名:3620</p>
																<p class="trans"><span class="ico ico-up"></span>99+</p>
																</a>
							</li>
											</ol>
											<ol class="ranks-list" style="display:none;" data-type="month" data-tab-panel="3">
													<li>
							<a href="152560.htm" tppabs="http://x.pps.tv/room/152560" target="room" class="top-item top-item-1">
							<span class="order">1</span>
															<img class="photo" src="xiuchang_59583d2774d57906d0b95947_1x1.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170702/59/47/xiuchang_59583d2774d57906d0b95947_1x1.jpg" width="130" height="130">
															<p class="lv-wall">
								<i class="ico-lv zb-lv lv35"></i></p>
							<p class="name">二狗@</p>
															<p class="rk-rm">月榜冠军</p>
																	<p class="trans"><span class="ico ico-up"></span>38</p>
																</a>
							</li>
													<li>
							<a href="184664.htm" tppabs="http://x.pps.tv/room/184664" target="room" class="top-item top-item-2">
							<span class="order">2</span>
															<img class="photo" src="xiuchang_59194ae374d579597eec3255_1x1.jpg" tppabs="http://u6.qiyipic.com/xiuchang/20170515/32/55/xiuchang_59194ae374d579597eec3255_1x1.jpg" width="130" height="130">
															<p class="lv-wall">
								<i class="ico-lv zb-lv lv22"></i></p>
							<p class="name">毒刺♔中音巨肺</p>
															<p class="rk-rm">距前一名:1.7万</p>
																<p class="trans"><span class="ico ico-up"></span>87</p>
																</a>
							</li>
													<li>
							<a href="186209.htm" tppabs="http://x.pps.tv/room/186209" target="room" class="top-item top-item-3">
							<span class="order">3</span>
															<img class="photo" src="xiuchang_5963481774d57906d128a1b5_1x1.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170710/a1/b5/xiuchang_5963481774d57906d128a1b5_1x1.jpg" width="130" height="130">
															<p class="lv-wall">
								<i class="ico-lv zb-lv lv23"></i></p>
							<p class="name">Ty艺萌♥花仙子求守</p>
															<p class="rk-rm">距前一名:1.8万</p>
																<p class="trans"><span class="ico ico-up"></span>43</p>
																			<span class="live-tip">直播中<span class="arrow"></span></span>
																		</a>
							</li>
													<li>
							<a href="106805.htm" tppabs="http://x.pps.tv/room/106805" target="room" class="ranks-item ">
							<span class="order">4</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv37"></i></p>
							<p class="name">道道..猥琐发育.别浪</p>
															<p class="rk-rm">距前一名:20.9万</p>
																<p class="trans"><span class="ico ico-up"></span>52</p>
																</a>
							</li>
													<li>
							<a href="137943.htm" tppabs="http://x.pps.tv/room/137943" target="room" class="ranks-item ">
							<span class="order">5</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv27"></i></p>
							<p class="name">热舞小甜甜收游轮</p>
															<p class="rk-rm">距前一名:137.3万</p>
																<p class="trans"><span class="ico ico-up"></span>2</p>
																</a>
							</li>
													<li>
							<a href="152464.htm" tppabs="http://x.pps.tv/room/152464" target="room" class="ranks-item ">
							<span class="order">6</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv26"></i></p>
							<p class="name">悠娱可晴❣️女神已上线</p>
															<p class="rk-rm">距前一名:24.9万</p>
																<p class="trans"><span class="ico ico-up"></span>25</p>
																</a>
							</li>
													<li>
							<a href="114084.htm" tppabs="http://x.pps.tv/room/114084" target="room" class="ranks-item ">
							<span class="order">7</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv32"></i></p>
							<p class="name">成成-讲事我是最帅的</p>
															<p class="rk-rm">距前一名:97.4万</p>
																<p class="trans"><span class="ico ico-up"></span>9</p>
																</a>
							</li>
													<li>
							<a href="129498.htm" tppabs="http://x.pps.tv/room/129498" target="room" class="ranks-item ">
							<span class="order">8</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv33"></i></p>
							<p class="name">哈妹୭等风等雨亦等你</p>
															<p class="rk-rm">距前一名:3.5万</p>
																<p class="trans"><span class="ico ico-down"></span>4</p>
																</a>
							</li>
													<li>
							<a href="112258.htm" tppabs="http://x.pps.tv/room/112258" target="room" class="ranks-item ">
							<span class="order">9</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv39"></i></p>
							<p class="name">梗王田心天天见！</p>
															<p class="rk-rm">距前一名:103.4万</p>
																<p class="trans"><span class="ico ico-down"></span>8</p>
																			<span class="live-tip">直播中<span class="arrow"></span></span>
																		</a>
							</li>
													<li>
							<a href="151664.htm" tppabs="http://x.pps.tv/room/151664" target="room" class="ranks-item  last-item">
							<span class="order">10</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv28"></i></p>
							<p class="name">吴所谓 看球 开始啦</p>
															<p class="rk-rm">距前一名:9.6万</p>
																<p class="trans"><span class="ico ico-up"></span>28</p>
																</a>
							</li>
											</ol>
											<ol class="ranks-list" style="display:none;" data-type="total" data-tab-panel="4">
													<li>
							<a href="136383.htm" tppabs="http://x.pps.tv/room/136383" target="room" class="top-item top-item-1">
							<span class="order">1</span>
															<img class="photo" src="xiuchang_59634b72ad8c1223c0b80725_1x1.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170710/07/25/xiuchang_59634b72ad8c1223c0b80725_1x1.jpg" width="130" height="130">
															<p class="lv-wall">
								<i class="ico-lv zb-lv lv34"></i></p>
							<p class="name">点老师@感恩有你</p>
															<p class="rk-rm">总榜冠军</p>
																	<p class="trans"><span class="ico ico-hold"></span></p>
																</a>
							</li>
													<li>
							<a href="133591.htm" tppabs="http://x.pps.tv/room/133591" target="room" class="top-item top-item-2">
							<span class="order">2</span>
															<img class="photo" src="xiuchang_593a66ea14d455546379889c_1x1.jpg" tppabs="http://u8.qiyipic.com/xiuchang/20170609/88/9c/xiuchang_593a66ea14d455546379889c_1x1.jpg" width="130" height="130">
															<p class="lv-wall">
								<i class="ico-lv zb-lv lv31"></i></p>
							<p class="name">安静黛一╮3点开播</p>
															<p class="rk-rm">距前一名:4596.1万</p>
																<p class="trans"><span class="ico ico-hold"></span></p>
																</a>
							</li>
													<li>
							<a href="111837.htm" tppabs="http://x.pps.tv/room/111837" target="room" class="top-item top-item-3">
							<span class="order">3</span>
															<img class="photo" src="xiuchang_593ef77d14d4555461ab6840_1x1.jpg" tppabs="http://u9.qiyipic.com/xiuchang/20170613/68/40/xiuchang_593ef77d14d4555461ab6840_1x1.jpg" width="130" height="130">
															<p class="lv-wall">
								<i class="ico-lv zb-lv lv33"></i></p>
							<p class="name">小蓉蓉.</p>
															<p class="rk-rm">距前一名:1173.6万</p>
																<p class="trans"><span class="ico ico-hold"></span></p>
																</a>
							</li>
													<li>
							<a href="111884.htm" tppabs="http://x.pps.tv/room/111884" target="room" class="ranks-item ">
							<span class="order">4</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv37"></i></p>
							<p class="name">学儿求守护</p>
															<p class="rk-rm">距前一名:3167.5万</p>
																<p class="trans"><span class="ico ico-hold"></span></p>
																</a>
							</li>
													<li>
							<a href="142321.htm" tppabs="http://x.pps.tv/room/142321" target="room" class="ranks-item ">
							<span class="order">5</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv31"></i></p>
							<p class="name">骨头 ❣  爱是一道光</p>
															<p class="rk-rm">距前一名:37.6万</p>
																<p class="trans"><span class="ico ico-hold"></span></p>
																</a>
							</li>
													<li>
							<a href="108817.htm" tppabs="http://x.pps.tv/room/108817" target="room" class="ranks-item ">
							<span class="order">6</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv37"></i></p>
							<p class="name">曼希☞杭城小霸王</p>
															<p class="rk-rm">距前一名:849.6万</p>
																<p class="trans"><span class="ico ico-up"></span>1</p>
																			<span class="live-tip">直播中<span class="arrow"></span></span>
																		</a>
							</li>
													<li>
							<a href="132190.htm" tppabs="http://x.pps.tv/room/132190" target="room" class="ranks-item ">
							<span class="order">7</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv27"></i></p>
							<p class="name">花小骨花小睿早晚都播</p>
															<p class="rk-rm">距前一名:190.5万</p>
																<p class="trans"><span class="ico ico-down"></span>1</p>
																</a>
							</li>
													<li>
							<a href="112258.htm" tppabs="http://x.pps.tv/room/112258" target="room" class="ranks-item ">
							<span class="order">8</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv39"></i></p>
							<p class="name">梗王田心天天见！</p>
															<p class="rk-rm">距前一名:962.5万</p>
																<p class="trans"><span class="ico ico-hold"></span></p>
																			<span class="live-tip">直播中<span class="arrow"></span></span>
																		</a>
							</li>
													<li>
							<a href="103746.htm" tppabs="http://x.pps.tv/room/103746" target="room" class="ranks-item ">
							<span class="order">9</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv27"></i></p>
							<p class="name">宝宝酱✿〃萨瓦迪卡</p>
															<p class="rk-rm">距前一名:220.8万</p>
																<p class="trans"><span class="ico ico-hold"></span></p>
																</a>
							</li>
													<li>
							<a href="106805.htm" tppabs="http://x.pps.tv/room/106805" target="room" class="ranks-item  last-item">
							<span class="order">10</span>
														<p class="lv-wall">
								<i class="ico-lv zb-lv lv37"></i></p>
							<p class="name">道道..猥琐发育.别浪</p>
															<p class="rk-rm">距前一名:177.4万</p>
																<p class="trans"><span class="ico ico-up"></span>1</p>
																</a>
							</li>
											</ol>
										</div>

			</div>


			<!--module/ranks/_ranks.html end-->

			<!--module/ranks/_ranks.html begin-->
			<div class="ranks-wrap user-ranks" >
				<h2 class="page-title">
					对战贡献榜		<span class="ico ico-logo-m"></span>
					<a class="ico ico-help-small">
						<p class="tip">根据用户在对战中送出对应的礼物价值排名<span class="arrow"><span class="inner"></span></span></p>
					</a>
				</h2>

				<ul class="tab-title">
					<li class="selected"><a href="javascript:void(0);">日榜<span class="arrow"></span></a></li>
					<li><a href="javascript:void(0);">周榜<span class="arrow"></span></a></li>
					<li><a href="javascript:void(0);">月榜<span class="arrow"></span></a></li>
					<li class="last"><a href="javascript:void(0);">总榜<span class="arrow"></span></a></li>
				</ul>

				<div class="tab-content tab-cur">
												<ol class="ranks-list" 1 data-type="day" data-tab-panel="1">
																	<li>
										<div class="top-item top-item-1">
											<span class="order">1</span>
																							<img class="photo" src="xiuchang_595ea246ad8c1223bdf178c7_1x1.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170707/78/c7/xiuchang_595ea246ad8c1223bdf178c7_1x1.jpg" width="130" height="130">
												<p class="lv-wall">
													<i title="魅力等级 34级"
													   class="ico-lv ml-lv lv34"></i>
																											<i title="国王"
														   class="ico-lv gz-lv-large lv7"></i>
																									</p>
												<p class="name">老章✨杭城老流氓</p>
																						<p class="rk-rm">今日贡献:215.8万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="top-item top-item-2">
											<span class="order">2</span>
																							<img class="photo" src="xiuchang_5947699e74d57906cfe070e4_1x1.jpg" tppabs="http://u5.qiyipic.com/xiuchang/20170619/70/e4/xiuchang_5947699e74d57906cfe070e4_1x1.jpg" width="130" height="130">
												<p class="lv-wall">
													<i title="魅力等级 26级"
													   class="ico-lv ml-lv lv26"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
												<p class="name">甜甜兄弟❤重来青春</p>
																						<p class="rk-rm">今日贡献:66万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="top-item top-item-3">
											<span class="order">3</span>
																							<img class="photo" src="xiuchang_595dee95d2999d7a15d69d84_1x1.jpg" tppabs="http://u0.qiyipic.com/xiuchang/20170706/9d/84/xiuchang_595dee95d2999d7a15d69d84_1x1.jpg" width="130" height="130">
												<p class="lv-wall">
													<i title="魅力等级 26级"
													   class="ico-lv ml-lv lv26"></i>
																											<i title="爵士"
														   class="ico-lv gz-lv-large lv1"></i>
																									</p>
												<p class="name">艺萌家、皇太极</p>
																						<p class="rk-rm">今日贡献:54万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">4</span>
																							<p class="name">艺萌家^_^有所不为</p>
												<p class="lv-wall">
													<i title="魅力等级 22级"
													   class="ico-lv ml-lv lv22"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
																						<p class="rk-rm">今日贡献:52.5万</p>
											<p class="trans"><span class="ico ico-hold"></span></p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">5</span>
																							<p class="name">唯爱九萱、（⚽球探）</p>
												<p class="lv-wall">
													<i title="魅力等级 15级"
													   class="ico-lv ml-lv lv15"></i>
																											<i title="爵士"
														   class="ico-lv gz-lv-large lv1"></i>
																									</p>
																						<p class="rk-rm">今日贡献:49.4万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">6</span>
																							<p class="name">伊人何方</p>
												<p class="lv-wall">
													<i title="魅力等级 29级"
													   class="ico-lv ml-lv lv29"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
																						<p class="rk-rm">今日贡献:38.5万</p>
											<p class="trans"><span class="ico ico-down"></span>1</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">7</span>
																							<p class="name">随处做主立处皆真</p>
												<p class="lv-wall">
													<i title="魅力等级 29级"
													   class="ico-lv ml-lv lv29"></i>
																									</p>
																						<p class="rk-rm">今日贡献:35万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">8</span>
																							<p class="name">LOVE梦er、 吻157640</p>
												<p class="lv-wall">
													<i title="魅力等级 21级"
													   class="ico-lv ml-lv lv21"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
																						<p class="rk-rm">今日贡献:33.6万</p>
											<p class="trans"><span class="ico ico-up"></span>86</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">9</span>
																							<p class="name">我的蘋果</p>
												<p class="lv-wall">
													<i title="魅力等级 28级"
													   class="ico-lv ml-lv lv28"></i>
																											<i title="伯爵"
														   class="ico-lv gz-lv-large lv4"></i>
																									</p>
																						<p class="rk-rm">今日贡献:24.9万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item  last-item">
											<span class="order">10</span>
																							<p class="name">《桐羽家》飘叔_封豆</p>
												<p class="lv-wall">
													<i title="魅力等级 21级"
													   class="ico-lv ml-lv lv21"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
																						<p class="rk-rm">今日贡献:21.5万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																</ol>
														<ol class="ranks-list" style="display:none;" data-type="week" data-tab-panel="2">
																	<li>
										<div class="top-item top-item-1">
											<span class="order">1</span>
																							<img class="photo" src="xiuchang_5947699e74d57906cfe070e4_1x1.jpg" tppabs="http://u5.qiyipic.com/xiuchang/20170619/70/e4/xiuchang_5947699e74d57906cfe070e4_1x1.jpg" width="130" height="130">
												<p class="lv-wall">
													<i title="魅力等级 26级"
													   class="ico-lv ml-lv lv26"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
												<p class="name">甜甜兄弟❤重来青春</p>
																						<p class="rk-rm">本周贡献:348.7万</p>
											<p class="trans"><span class="ico ico-up"></span>29</p>
										</div>
									</li>
																		<li>
										<div class="top-item top-item-2">
											<span class="order">2</span>
																							<img class="photo" src="xiuchang_595ea246ad8c1223bdf178c7_1x1.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170707/78/c7/xiuchang_595ea246ad8c1223bdf178c7_1x1.jpg" width="130" height="130">
												<p class="lv-wall">
													<i title="魅力等级 34级"
													   class="ico-lv ml-lv lv34"></i>
																											<i title="国王"
														   class="ico-lv gz-lv-large lv7"></i>
																									</p>
												<p class="name">老章✨杭城老流氓</p>
																						<p class="rk-rm">本周贡献:278.4万</p>
											<p class="trans"><span class="ico ico-up"></span>6</p>
										</div>
									</li>
																		<li>
										<div class="top-item top-item-3">
											<span class="order">3</span>
																							<img class="photo" src="xiuchang_58cfec66d2999d57c97285d3_1x1.jpg" tppabs="http://u5.qiyipic.com/xiuchang/20170320/85/d3/xiuchang_58cfec66d2999d57c97285d3_1x1.jpg" width="130" height="130">
												<p class="lv-wall">
													<i title="魅力等级 28级"
													   class="ico-lv ml-lv lv28"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
												<p class="name">神皇（花小骨）黄金卫</p>
																						<p class="rk-rm">本周贡献:142.2万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">4</span>
																							<p class="name">飛   哥</p>
												<p class="lv-wall">
													<i title="魅力等级 28级"
													   class="ico-lv ml-lv lv28"></i>
																											<i title="国王"
														   class="ico-lv gz-lv-large lv7"></i>
																									</p>
																						<p class="rk-rm">本周贡献:132.9万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">5</span>
																							<p class="name">Precious 17</p>
												<p class="lv-wall">
													<i title="魅力等级 29级"
													   class="ico-lv ml-lv lv29"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
																						<p class="rk-rm">本周贡献:113万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">6</span>
																							<p class="name">艺萌家^_^有所不为</p>
												<p class="lv-wall">
													<i title="魅力等级 22级"
													   class="ico-lv ml-lv lv22"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
																						<p class="rk-rm">本周贡献:111.8万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">7</span>
																							<p class="name">伊人何方</p>
												<p class="lv-wall">
													<i title="魅力等级 29级"
													   class="ico-lv ml-lv lv29"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
																						<p class="rk-rm">本周贡献:95.3万</p>
											<p class="trans"><span class="ico ico-up"></span>53</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">8</span>
																							<p class="name">肖@我的怂七宝</p>
												<p class="lv-wall">
													<i title="魅力等级 23级"
													   class="ico-lv ml-lv lv23"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
																						<p class="rk-rm">本周贡献:90.1万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">9</span>
																							<p class="name">唯爱九萱、（⚽球探）</p>
												<p class="lv-wall">
													<i title="魅力等级 15级"
													   class="ico-lv ml-lv lv15"></i>
																											<i title="爵士"
														   class="ico-lv gz-lv-large lv1"></i>
																									</p>
																						<p class="rk-rm">本周贡献:87.8万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item  last-item">
											<span class="order">10</span>
																							<p class="name">爱吃面条de司马夜雪</p>
												<p class="lv-wall">
													<i title="魅力等级 22级"
													   class="ico-lv ml-lv lv22"></i>
																									</p>
																						<p class="rk-rm">本周贡献:77.3万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																</ol>
														<ol class="ranks-list" style="display:none;" data-type="month" data-tab-panel="3">
																	<li>
										<div class="top-item top-item-1">
											<span class="order">1</span>
																							<img class="photo" src="xiuchang_595e2aac74d57906d2ef3602_1x1.jpg" tppabs="http://u6.qiyipic.com/xiuchang/20170706/36/02/xiuchang_595e2aac74d57906d2ef3602_1x1.jpg" width="130" height="130">
												<p class="lv-wall">
													<i title="魅力等级 26级"
													   class="ico-lv ml-lv lv26"></i>
																									</p>
												<p class="name">转站只为☞刺☞独行</p>
																						<p class="rk-rm">本月贡献:840.2万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="top-item top-item-2">
											<span class="order">2</span>
																							<img class="photo" src="xiuchang_58f45a20ad8c12426ca1a93e_1x1.jpg" tppabs="http://u7.qiyipic.com/xiuchang/20170417/a9/3e/xiuchang_58f45a20ad8c12426ca1a93e_1x1.jpg" width="130" height="130">
												<p class="lv-wall">
													<i title="魅力等级 33级"
													   class="ico-lv ml-lv lv33"></i>
																											<i title="公爵"
														   class="ico-lv gz-lv-large lv6"></i>
																									</p>
												<p class="name">皇家一号✔战神</p>
																						<p class="rk-rm">本月贡献:766.6万</p>
											<p class="trans"><span class="ico ico-up"></span>31</p>
										</div>
									</li>
																		<li>
										<div class="top-item top-item-3">
											<span class="order">3</span>
																							<img class="photo" src="xiuchang_595ea246ad8c1223bdf178c7_1x1.jpg" tppabs="http://u1.qiyipic.com/xiuchang/20170707/78/c7/xiuchang_595ea246ad8c1223bdf178c7_1x1.jpg" width="130" height="130">
												<p class="lv-wall">
													<i title="魅力等级 34级"
													   class="ico-lv ml-lv lv34"></i>
																											<i title="国王"
														   class="ico-lv gz-lv-large lv7"></i>
																									</p>
												<p class="name">老章✨杭城老流氓</p>
																						<p class="rk-rm">本月贡献:672.8万</p>
											<p class="trans"><span class="ico ico-up"></span>3</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">4</span>
																							<p class="name">飘君%七熙 量大福大</p>
												<p class="lv-wall">
													<i title="魅力等级 34级"
													   class="ico-lv ml-lv lv34"></i>
																											<i title="国王"
														   class="ico-lv gz-lv-large lv7"></i>
																									</p>
																						<p class="rk-rm">本月贡献:511.4万</p>
											<p class="trans"><span class="ico ico-up"></span>8</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">5</span>
																							<p class="name">我的蘋果</p>
												<p class="lv-wall">
													<i title="魅力等级 28级"
													   class="ico-lv ml-lv lv28"></i>
																											<i title="伯爵"
														   class="ico-lv gz-lv-large lv4"></i>
																									</p>
																						<p class="rk-rm">本月贡献:509.8万</p>
											<p class="trans"><span class="ico ico-up"></span>15</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">6</span>
																							<p class="name">甜甜兄弟❤重来青春</p>
												<p class="lv-wall">
													<i title="魅力等级 26级"
													   class="ico-lv ml-lv lv26"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
																						<p class="rk-rm">本月贡献:496.6万</p>
											<p class="trans"><span class="ico ico-up"></span>10</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">7</span>
																							<p class="name">我是协议号·</p>
												<p class="lv-wall">
													<i title="魅力等级 40级"
													   class="ico-lv ml-lv lv40"></i>
																											<i title="国王"
														   class="ico-lv gz-lv-large lv7"></i>
																									</p>
																						<p class="rk-rm">本月贡献:455万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">8</span>
																							<p class="name">二叔@睡觉吗小骚派</p>
												<p class="lv-wall">
													<i title="魅力等级 33级"
													   class="ico-lv ml-lv lv33"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
																						<p class="rk-rm">本月贡献:437.9万</p>
											<p class="trans"><span class="ico ico-up"></span>99+</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">9</span>
																							<p class="name">未来【吴家穷横团】</p>
												<p class="lv-wall">
													<i title="魅力等级 27级"
													   class="ico-lv ml-lv lv27"></i>
																											<i title="侯爵"
														   class="ico-lv gz-lv-large lv5"></i>
																									</p>
																						<p class="rk-rm">本月贡献:404.3万</p>
											<p class="trans"><span class="ico ico-up"></span>17</p>
										</div>
									</li>
																		<li>
										<div class="ranks-item  last-item">
											<span class="order">10</span>
																							<p class="name">九画℃</p>
												<p class="lv-wall">
													<i title="魅力等级 25级"
													   class="ico-lv ml-lv lv25"></i>
																									</p>
																						<p class="rk-rm">本月贡献:401.9万</p>
											<p class="trans"><span class="ico ico-up"></span>47</p>
										</div>
									</li>
																</ol>
														<ol class="ranks-list" style="display:none;" data-type="total" data-tab-panel="4">
																	<li>
										<div class="top-item top-item-1">
											<span class="order">1</span>
																							<img class="photo" src="xiuchang_59364c17d2999d7a131e9d5f_1x1.jpg" tppabs="http://u9.qiyipic.com/xiuchang/20170606/9d/5f/xiuchang_59364c17d2999d7a131e9d5f_1x1.jpg" width="130" height="130">
												<p class="lv-wall">
													<i title="魅力等级 35级"
													   class="ico-lv ml-lv lv35"></i>
																											<i title="国王"
														   class="ico-lv gz-lv-large lv7"></i>
																									</p>
												<p class="name">从此再无重金属%</p>
																						<p class="rk-rm">总计贡献:7138.7万</p>
											<p class="trans"><span class="ico ico-hold"></span></p>
										</div>
									</li>
																		<li>
										<div class="top-item top-item-2">
											<span class="order">2</span>
																							<img class="photo" src="xiuchang_5932f79e14d4555462cdcf10_1x1.jpg" tppabs="http://u9.qiyipic.com/xiuchang/20170604/cf/10/xiuchang_5932f79e14d4555462cdcf10_1x1.jpg" width="130" height="130">
												<p class="lv-wall">
													<i title="魅力等级 39级"
													   class="ico-lv ml-lv lv39"></i>
																											<i title="国王"
														   class="ico-lv gz-lv-large lv7"></i>
																									</p>
												<p class="name">五哥☞厉害了word希</p>
																						<p class="rk-rm">总计贡献:6019.1万</p>
											<p class="trans"><span class="ico ico-hold"></span></p>
										</div>
									</li>
																		<li>
										<div class="top-item top-item-3">
											<span class="order">3</span>
																							<img class="photo" src="xiuchang_57f3a29fad8c1224bef50bc7_1x1.jpg" tppabs="http://u8.qiyipic.com/xiuchang/20161004/0b/c7/xiuchang_57f3a29fad8c1224bef50bc7_1x1.jpg" width="130" height="130">
												<p class="lv-wall">
													<i title="魅力等级 41级"
													   class="ico-lv ml-lv lv41"></i>
																											<i title="国王"
														   class="ico-lv gz-lv-large lv7"></i>
																									</p>
												<p class="name">V博：猪头哥哥</p>
																						<p class="rk-rm">总计贡献:3810.5万</p>
											<p class="trans"><span class="ico ico-hold"></span></p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">4</span>
																							<p class="name">筱小笑丶祝嘟嘟转会OK</p>
												<p class="lv-wall">
													<i title="魅力等级 33级"
													   class="ico-lv ml-lv lv33"></i>
																											<i title="国王"
														   class="ico-lv gz-lv-large lv7"></i>
																									</p>
																						<p class="rk-rm">总计贡献:3013.3万</p>
											<p class="trans"><span class="ico ico-hold"></span></p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">5</span>
																							<p class="name">学儿♬幸福</p>
												<p class="lv-wall">
													<i title="魅力等级 31级"
													   class="ico-lv ml-lv lv31"></i>
																									</p>
																						<p class="rk-rm">总计贡献:2902.9万</p>
											<p class="trans"><span class="ico ico-hold"></span></p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">6</span>
																							<p class="name">诱惑贺黛一周年已退网</p>
												<p class="lv-wall">
													<i title="魅力等级 32级"
													   class="ico-lv ml-lv lv32"></i>
																									</p>
																						<p class="rk-rm">总计贡献:2519.3万</p>
											<p class="trans"><span class="ico ico-hold"></span></p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">7</span>
																							<p class="name">痴迷小猴子♥️水手封豆</p>
												<p class="lv-wall">
													<i title="魅力等级 32级"
													   class="ico-lv ml-lv lv32"></i>
																											<i title="国王"
														   class="ico-lv gz-lv-large lv7"></i>
																									</p>
																						<p class="rk-rm">总计贡献:2464.9万</p>
											<p class="trans"><span class="ico ico-hold"></span></p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">8</span>
																							<p class="name">牌咖♥️順順</p>
												<p class="lv-wall">
													<i title="魅力等级 32级"
													   class="ico-lv ml-lv lv32"></i>
																											<i title="国王"
														   class="ico-lv gz-lv-large lv7"></i>
																									</p>
																						<p class="rk-rm">总计贡献:2405.6万</p>
											<p class="trans"><span class="ico ico-hold"></span></p>
										</div>
									</li>
																		<li>
										<div class="ranks-item ">
											<span class="order">9</span>
																							<p class="name">小蓉蓉♥老司机</p>
												<p class="lv-wall">
													<i title="魅力等级 32级"
													   class="ico-lv ml-lv lv32"></i>
																									</p>
																						<p class="rk-rm">总计贡献:2317.1万</p>
											<p class="trans"><span class="ico ico-hold"></span></p>
										</div>
									</li>
																		<li>
										<div class="ranks-item  last-item">
											<span class="order">10</span>
																							<p class="name">安西教練(封号)</p>
												<p class="lv-wall">
													<i title="魅力等级 32级"
													   class="ico-lv ml-lv lv32"></i>
																									</p>
																						<p class="rk-rm">总计贡献:2254.6万</p>
											<p class="trans"><span class="ico ico-hold"></span></p>
										</div>
									</li>
																</ol>
							
				</div>

			</div>


			<!--module/ranks/_ranks.html end-->

		</div>

	</div>

</body>
</html>

