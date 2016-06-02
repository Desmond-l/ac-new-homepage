<!doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="极致医疗">
	<meta name="keywords" content="极致医疗, 极致, 医疗, 心电, acmedcare, 分析, 心电采集, 采集, 医咻">
	<meta name="author" content="Acmedcare FE Team">
	<!-- Favicons -->
	<link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
	<link rel="icon" href="/img/favicon.ico">
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<!--<link rel="stylesheet" href="/css/bootstrap-theme.min.css">
-->
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="/js/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="iconfont/iconfont.css">
	<link rel="stylesheet" href="css/all.css">
	<!--背景-->
	<script src="/js/vector.js"></script>
	<script>
	$(function(){
		// 初始化 传入dom id
		var victor = new Victor("container", "output");
		var theme = [
				["#35bcdc", "#fff"]
			]
		$(".color li").each(function(index, val) {
			var color = theme[index];
			 $(this).mouseover(function(){
			 	victor(color).set();
			 })
		});
	});
	</script>
	<title>医咻™cutedox</title>
	</head>

	<body>
<nav class="navbar navbar-default">
      <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="#">
        <svg width="226" height="50">
              <image xlink:href="img/logo.svg" src="img/logo.png" width="226" height="40"  />
            </svg>
      </a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
        <li> <a href="/index.php"> 首页<span class="sr-only">(current)</span> </a> </li>
        <li> <a href="/iarkpad.php">方舟™</a> </li>
        <li class="active"> <a href="#">医咻™</a> </li>
        <li> <a href="#">心电云诊</a></li>
        <li> <a href="#">解决方案</a></li>
      </ul>
          <!--  <ul class="nav navbar-nav navbar-right">
        <li> <a href="#"> 中英切换 </a> </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="内容搜索">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
      </form>--> 
        </div>
    <!-- /.navbar-collapse --> 
  </div>
      <!-- /.container-fluid --> 
    </nav>

<!--二级菜单在这里！！！-->
<div class="main">
      <ul class="nav nav-tabs" role="tablist">
    <li class="name">医咻™ cutedox</li>
  </ul>
    </div>
<div style=" width:100%;height:550px; overflow:hidden;">
      <div id="container" style="position:absolute;">
    <div id="output"></div>
  </div>
      <div class="row row-cutedox">
    <div class="col-xs-12 col-md-5 row" style="
    position: absolute;
    top: 50%;
    margin-top: -180px;
">
          <div class="col-xs-12 col-md-10"><img src="img/cutedox/logo-a.png" width="320px" alt="" style="margin: 0 auto;
    display: block;"></div>
          <div class="col-xs-12 col-md-10">
        <ul>
              <a href="#im">
            <li class="cutedox-li-1"><span>IM</span></li>
          </a> <a href="#xiumi">
            <li class="cutedox-li-2"><span>咻秘</span></li>
          </a> <a href="#work">
            <li class="cutedox-li-3"><span>工作</span></li>
          </a> <a href="#xiuxi">
            <li class="cutedox-li-4"><span>咻息</span></li>
          </a>
            </ul>
      </div>
        </div>
    <div class="col-xs-12 col-md-7" style="
    height: 100%;
    float: right;
"><img src="img/cutedox/iphoneandhand.png" width="" alt="" style="    margin: 0 auto;
    display: block;
    bottom: 0;
    margin-left: 120px;
    position: absolute;
    width: 450px;"></div>
  </div>
    </div>

<!--f2-->

<div id="work" class="row vcenter-md" style="background-color:#efefef; color:#000; height:780px;position: relative;">
      <div class="col-xs-12 col-md-6 col-md-push-3">
    <p style="font-size:40px; margin:0">工作
        <p style="font-size:30px">跨平台医疗业务移动处理</p>
    </p>
    <br>
    <p style="font-size:30px;margin:0"">心电采集</p>
    <p><small>12/18导联同步常规心电图采集<br>
      PC端24小时动态心电采集 </small></p>
    <p> </p>
    <p style="font-size:30px;margin:0"">心电分析</p>
    <p><small>PC端/Pad端/手机端常规心电图审核分析<br>
      PC端24小时动态心电图分析<br>
      Pad端/手机端34小时动态心电图审核 </small> </p>
    <p> </p>
    <p style="font-size:30px;margin:0"">报告管理</p>
    <small>心电报告查询，下载，打印管理</small>
    <p> </p>
    <p style="font-size:30px;margin:0"">工作统计</p>
    <small>个人/科室/医院工作量统计 </small> </div>
      <div class="col-xs-12 col-md-6" style="overflow: hidden;"><img src="img/cutedox/work-bg.png" width="120%" alt="" style="
"></div>
    </div>

<!--f3-->

<div id="im" class="row vcenter-md" style="background-color:#ffffff; color:#000; height:650px;position: relative;">
      <div class="col-xs-12 col-md-3 col-md-push-3" style="height: 100%;"><img src="img/cutedox/im-bg.png" width="100%" alt="" style=" position:absolute; bottom:0; width:400px;"></div>
      <div class="col-xs-12 col-md-4  col-md-push-2"> <p style="font-size:40px; margin:0; text-align:right">IM,
        <span style="font-size:30px"> 医护版微信<br>随时随地畅享沟通</span>
    </p>  
     <ul style="
    width: 300px;
    float: right;
">
            <li class="cutedox-li-5"><span>文字图片</span></li>
            <li class="cutedox-li-6"><span>语音通话</span></li>
            <li class="cutedox-li-7"><span>视频通话</span></li>
            <li class="cutedox-li-8"><span>阅后即焚</span></li>
            </ul>
 </div>
    </div>

<!--f4-->

<div id="xiumi" class="row vcenter-md" style="background-color:#f8b700;color:#fff; height:720px;position: relative;">
  <div class="col-xs-12 col-md-6 col-md-push-2" style="z-index: 5;">
    <p style="font-size:40px; margin:0">咻秘

        <p style="font-size:30px">有事儿你就咻一下!</p>
    </p>
     <p style="font-size:20px">心电数据、会诊信息等即时传递，轻松工作</p>
    </div>
      <div class="col-xs-12 col-md-6" style="
    padding: 0;height: 100%; z-index:0
"><img src="img/cutedox/xiumi-bg.png" width="100%" alt="" style=" position:absolute; bottom:0;"></div>
    </div>

<!--f5-->

<div id="xiuxi" class="row vcenter-md" style="background-color:#efefef; height:650px;position: relative; background-image:url(img/cutedox/xiuxi-bg.png); background-size:cover;">
      <div class="col-xs-12 col-md-3 col-md-push-7 text-right"  style="color:#000;">
    <p style="font-size:40px">咻息</p>
    <p style="font-size:30px">晒工作，品生活<br>
          找老师，交朋友</p>
    <p style="font-size:20px">在700万医疗通道面前，秀出你自己</p>
  </div>
    </div>

<!--f6-->

<div class="row row-download" style="background-color:#ffffff;border-bottom: 1px #ddd solid;position: relative;text-align:center">
      <div class="col-xs-12 col-md-12" style=" padding-top: 168px;">  <p style="font-size:40px; margin:0; color:#000; ">下载医咻，让医疗进入移动办公时代

        <p style="font-size:20px; color:#919191;">现在你可以在任何地方办公，随时随地，省时省心。</p>
    </p> </div>
      <div class="col-xs-12 col-md-12">
    <ul>
          <li><img src='img/cutedox/download-ios.png' alt=""></li>
          <li><img src='img/cutedox/download-and.png' alt=""></li>
          <li class="nohover"><img src='img/cutedox/download-er.png' alt=""></li>
          <li><img src='img/cutedox/download-hd.png' alt=""></li>
          <li><img src='img/cutedox/download-win.png' alt=""></li>
        </ul>
  </div>
    </div>

<!--footer-->
<div class="footer">
      <div class="section">
    <div class="">
          <dl>
        <dt> 服务支持 </dt>
        <dd> <a href=""> 售后服务 </a> </dd>
        <dd> <a href=""> 相关下载 </a> </dd>
      </dl>
          <dl>
        <dt> 关于极致 </dt>
        <dd> <a href=""> 了解极致 </a> </dd>
        <dd> <a href=""> 加入我们 </a> </dd>
        <dd> <a href=""> 联系我们 </a> </dd>
      </dl>
          <dl>
        <dt> 媒体中心 </dt>
        <dd> <a href=""> 新闻动态 </a> </dd>
        <dd> <a href=""> 官方视频 </a> </dd>
      </dl>
          <dl>
        <dt> 关注极致 </dt>
        <dd> <a href=""> 官方微信 </a> </dd>
        <dd> <a href=""> 官方微博 </a> </dd>
      </dl>
        </div>
    <ul class="service">
          <li class="online"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=3161376335&amp;site=qq&amp;menu=yes"> <i class="iconfont" style="
    font-size: 24px;
">&#xe600;</i>24小时在线客服</a></li>
          <li class="tel"><a href="tel:4001867768" style="color:#32bbdc;    font-weight: lighter;">400-186-7768</a></li>
          <li class="time" style="color:rgba(120, 120, 120, 0.67); text-align:center">周一至周日 9:00-18:00<br>
        （仅收市话费）</li>
        </ul>
  </div>
      <div class="section copyright">
    <label> ©2016&nbsp;Acmedcare&nbsp;&nbsp;&nbsp;&nbsp;苏ICP证88888888号</label>
  </div>
    </div>
</body>
</html>
