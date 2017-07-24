<html><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset=utf-8"UTF-8"/>
	<title>榜单-周星榜-cctv</title>
	<meta name="keywords" content="美女直播,视频聊天,视频交友奇秀,秀场,爱奇艺秀场,PPS秀场,美女主播,视频聊天,美女视频,视频直播,美女秀场,真人秀场,在线K歌,视频交友,真人视频">
	<meta name="description" content="奇秀的人气主播和富豪粉丝的日榜，周榜和月榜。榜单排名依据是主播获得的礼物价值以及粉丝送出礼物的价值。">
	<link href="{{asset('common/css/blank.css-v=20170713184940.css')}}" tppabs="{{asset('common/css/blank.css?v=20170713184940')}}" type="text/css" rel="stylesheet">
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
			<li><a href="{{url('ranking/rank')}}" data-pb-rseat="1">风云榜<span class="arrow"></span></a></li>
			<li class="selected sep"><a href="{{url('ranking/week')}}" data-pb-rseat="2">周星榜<span class="arrow"></span></a></li>
			<li class="sep"><a href="{{url('ranking/index')}}" data-pb-rseat="3">对战榜<span class="arrow"></span></a></li>
		</ul>
		<span class="bl"></span>
		<span class="br"></span>
	</div>
	<!--周星榜单start-->
	<div class="clearfix">
		<!--周星霸主start-->
		<div class="ranks-wrap host-ranks rank-syb">
			<h2 class="page-title">
				周星霸主 <span class="ico ico-logo-m"></span>
				<a class="ico ico-help-small">
					<p class="tip" style="width:205px">根据主播获得礼物之星冠军次数排名<span class="arrow"><span class="inner"></span></span>
					</p>
				</a>
			</h2>
			<div class="tab-content tab-cur">
				<ol class="ranks-list">
												<li>
								<a href="111853.htm" tppabs="http://x.pps.tv/room/111853" target="room" class="top-item top-item-1">
									<span class="order">1</span>
									<img class="photo" src="a426ace74f265_1x1.jpg" tppabs="http://u4.qiyipic.com/show/20151027/a4/a426ace74f265_1x1.jpg" width="130" height="130">

									<p class="lv-wall">
										<i title="主播等级 39级" class="ico-lv zb-lv lv39"></i>
									</p>

									<p class="name">lovely♥巴掌</p>

									<div class="rk-tp">得冠<em class="n">41</em>次</div>
																	</a>
							</li>
													<li>
								<a href="112258.htm" tppabs="http://x.pps.tv/room/112258" target="room" class="top-item top-item-2">
									<span class="order">2</span>
									<img class="photo" src="xiuchang_5960d90af6882e37fc791713_1x1.jpg" tppabs="http://u4.qiyipic.com/xiuchang/20170708/17/13/xiuchang_5960d90af6882e37fc791713_1x1.jpg" width="130" height="130">

									<p class="lv-wall">
										<i title="主播等级 39级" class="ico-lv zb-lv lv39"></i>
									</p>

									<p class="name">梗王田心天天见！</p>

									<div class="rk-tp">得冠<em class="n">36</em>次</div>
																					<span class="live-tip">直播中</span>
																			</a>
							</li>
													<li>
								<a href="103225.htm" tppabs="http://x.pps.tv/room/103225" target="room" class="top-item top-item-3">
									<span class="order">3</span>
									<img class="photo" src="xiuchang_594b4f6e74d57906d36f89da_1x1.jpg" tppabs="http://u9.qiyipic.com/xiuchang/20170622/89/da/xiuchang_594b4f6e74d57906d36f89da_1x1.jpg" width="130" height="130">

									<p class="lv-wall">
										<i title="主播等级 40级" class="ico-lv zb-lv lv40"></i>
									</p>

									<p class="name">迷兔☀周一见要音符</p>

									<div class="rk-tp">得冠<em class="n">32</em>次</div>
																	</a>
							</li>
										</ol>
			</div>
		</div>
		<!--周星霸主end-->
		<!--周星之王start-->
		<div class="ranks-wrap user-ranks rank-syb">
			<h2 class="page-title">
				周星之王 <span class="ico ico-logo-m"></span>
				<a class="ico ico-help-small">
					<p class="tip" style="width:205px">根据用户获得礼物之星冠军次数排名<span class="arrow"><span class="inner"></span></span>
					</p>
				</a>
			</h2>
			<div class="tab-content tab-cur">
				<ol class="ranks-list">
				<li>
								<div class="top-item top-item-1">
									<span class="order">1</span>
									<img class="photo" src="xiuchang_5741942d74d5792e9ab4f3cb_1x1.jpg.png" tppabs="http://u7.qiyipic.com/xiuchang/20160522/f3/cb/xiuchang_5741942d74d5792e9ab4f3cb_1x1.jpg" width="130" height="130">

									<p class="lv-wall">
										<i title="魅力等级 42级" class="ico-lv ml-lv lv42"></i>
									</p>

									<p class="name">Hitler</p>

									<div class="rk-tp">得冠<em class="n">35</em>次</div>
																	</div>
							</li>
													<li>
								<div class="top-item top-item-2">
									<span class="order">2</span>
									<img class="photo" src="xiuchang_56b04b5be138236e743b1f22_1x1.jpg" tppabs="http://u6.qiyipic.com/xiuchang/20160202/1f/22/xiuchang_56b04b5be138236e743b1f22_1x1.jpg" width="130" height="130">

									<p class="lv-wall">
										<i title="魅力等级 40级" class="ico-lv ml-lv lv40"></i>
									</p>

									<p class="name">╭田心盟╯♬ 将军令</p>

									<div class="rk-tp">得冠<em class="n">34</em>次</div>
																	</div>
							</li>
													<li>
								<div class="top-item top-item-3">
									<span class="order">3</span>
									<img class="photo" src="xiuchang_571db4de14d455392fabd2db_1x1.jpg" tppabs="http://u2.qiyipic.com/xiuchang/20160425/d2/db/xiuchang_571db4de14d455392fabd2db_1x1.jpg" width="130" height="130">

									<p class="lv-wall">
										<i title="魅力等级 40级" class="ico-lv ml-lv lv40"></i>
									</p>

									<p class="name">孤岛最爱你.大发</p>

									<div class="rk-tp">得冠<em class="n">22</em>次</div>
																	</div>
							</li>
										</ol>
			</div>
		</div>
	</div>
	<!--周星之王end-->
		<!---礼物之星start--->
	<div class="star-wrap">
	<div class="star-gift integral" data-pb-block="16041100">
		<div class="title">
			<h2>周星积分榜</h2>
			<!-- <p class="time">2015.01.01-2015.01.07</p> -->
		</div>
		<a class="ico ico-help-small">
			<p class="tip">根据每周主播在单项周星中的名次所获得的积分排名<span class="arrow"><span class="inner"></span></span></p>
		</a>

	</div>
	</div>
	</div>
	<!---礼物之星end--->
	<!--周星榜单end-->
	<script type="text/javascript"> var xiu_pv_stat_ut =
	1500024826.1709 </script>
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
<script type="text/javascript" src="{{asset('common/js/jquery-1.7.2.min.js-v=1.0.0')}}" tppabs="{{asset('common/js/jquery-1.7.2.min.js?v=1.0.0')}}"></script>


	<script data-js-version="20170713184940" data-flash-version="20170713181027" type="text/javascript" charset="utf-8" src="{{asset('common/js/require-min.js-v=1.0.0')}}" tppabs="{{asset('common/js/require-min.js?v=1.0.0')}}" data-main="{{asset('common/js/header.js?v=20170713184940')}}"></script>
	<script>
		var _hmt = _hmt || [];
				require(['http://static.iqiyi.com/js/ppsshow/web_v2/rank.js?v=20170713184940'], function () {
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

<!--Exec Time:0.0536 -->
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

