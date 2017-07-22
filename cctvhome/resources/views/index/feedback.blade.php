<html><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>cctv直播吧</title>
	<meta name="keywords" content="美女直播,视频聊天,视频交友,PPS秀场,美女主播,美女视频,视频直播,美女秀场,真人秀场,在线K歌,视频交友,真人视频">
	<meta name="description" content="国内最高清的真人视频直播平台。海量美女主播、明星歌手与你“零距离”互动，支持百万人同时在线。视频聊天、K歌比拼、歌舞表演，有趣有爱有美女。赶快加入，与美女主播免费聊天。">
	<link href="{{asset('common/css/feedback.css-v=20170713184940.css')}}" tppabs="{{asset('common/css/ppsshow/1.0/style/feedback.css?v=20170713184940')}}" type="text/css"
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
				<li class="sn-item"><a class="sn" target="_Blank" href="{{url('index/apply')}}" tppabs="http://x.pps.tv/enter/">申请入驻</a></li>
			</ul>
		</div>
	</div>
<!-- 中部 -->
@extends('layout')

@section('content')
	<!--module/focus/_focus.html begin-->
<div class="hp-banner"><span class="br-img"></span></div>
<div id="bd">
	<div class="fb-tit">Step1. 选择反馈类型</div>
	<div class="fb-bx">
		<label><code class="ico ico-radio select"></code>故障投诉</label>
		<label><code class="ico ico-radio"></code>改善建议</label>
		<label><code class="ico ico-radio"></code>内容需求</label>
		<label><code class="ico ico-radio"></code>新手咨询</label>
		<label><code class="ico ico-radio"></code>搜索</label>
		<label><code class="ico ico-radio"></code>其他</label>
	</div>

	<div class="fb-tit">Step2. 填写反馈内容</div>
	<div class="fb-bx">
		<textarea class="textarea" id="rep-textarea-1">请详细填写您的建议、意见、问题等...</textarea>
		<div class="fb-tips"></div>
	</div>

	<div class="fb-tit">Step3. 填写您的联系方式</div>
	<div class="fb-bx">
		<ul class="fb-list">
			<li class="fb-item">
				<em class="t">手机</em><input type="text" class="input-t" value="">
			</li>
			<li class="fb-item">
				<em class="t">邮箱</em><input type="text" class="input-t"  value="" >
			</li>
			<li class="fb-item">
				<em class="t">QQ</em><input type="text" class="input-t"  value="">
			</li>
		</ul>

	</div>

	<div class="fb-btn"><a href="#" class="tj-btn">提交</a></div>
</div>
<script type="text/javascript"> var xiu_pv_stat_ut =
	1500024876.7807 </script>
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
				require(['http://static.iqiyi.com/js/ppsshow/web/feedback.js?v=20170713184940'], function () {
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

<!--Exec Time:0.0016 -->
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
@stop