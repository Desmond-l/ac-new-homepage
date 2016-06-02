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
 <link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/all.css">

<script>
$(function() {

  var $window           = $(window),
      win_height_padded = $window.height() * 1.1,
      isTouch           = Modernizr.touch;

  if (isTouch) { $('.revealOnScroll').addClass('animated'); }

  $window.on('scroll', revealOnScroll);

  function revealOnScroll() {
    var scrolled = $window.scrollTop(),
        win_height_padded = $window.height() * 1.1;

    // Showed...
    $(".revealOnScroll:not(.animated)").each(function () {
      var $this     = $(this),
          offsetTop = $this.offset().top;

      if (scrolled + win_height_padded > offsetTop) {
        if ($this.data('timeout')) {
          window.setTimeout(function(){
            $this.addClass('animated ' + $this.data('animation'));
          }, parseInt($this.data('timeout'),10));
        } else {
          $this.addClass('animated ' + $this.data('animation'));
        }
      }
    });
    // Hidden...
   $(".revealOnScroll.animated").each(function (index) {
      var $this     = $(this),
          offsetTop = $this.offset().top;
      if (scrolled + win_height_padded < offsetTop) {
        $(this).removeClass('animated fadeInUp flipInX lightSpeedIn')
      }
    });
  }

  revealOnScroll();
});
</script>
<title>方舟™iarkpad</title>
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
        <li class="active"> <a href="#">方舟™</a> </li>
        <li> <a href="#">医咻™</a> </li>
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
   <li class="name">方舟™ iarkpad</li>
    
    <li role="presentation" style="border-left: 1px solid #e0e0e0;"><a href="#pj" aria-controls="pg" role="tab" data-toggle="tab">配件</a></li>
    
    <li role="presentation" style="border-left: 1px solid #e0e0e0;"><a href="#cs" aria-controls="cs" role="tab" data-toggle="tab">参数</a></li>
    <li role="presentation"  class="active"><a href="#gs" aria-controls="gs" role="tab" data-toggle="tab">概述</a></li>
   </ul>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="gs">
   
    <!--f1-->

<div id="banner1" class="row vcenter-md" style=" background-image:url(img/irakpad/banner1.png); background-repeat:no-repeat;     background-size: cover;background-color:#efefef; color:#000; height:680px;position: relative;">
      <div class="col-xs-12 col-md-6 col-md-push-2" style="margin-top: -257px;"><img src="img/irakpad/5.png" width="100%" alt="">
   </div>
    </div>
    
        <!--f2-->

<div id="banner2" class="row vcenter-md" style=" background-color:#fff;position: relative;">
<div  class="col-xs-12 col-md-8 col-md-push-2"><img src="img/irakpad/icons.jpg" width="100%" alt=""></div>
    </div>
        <!--f3-->

<div id="banner1" class="row vcenter-md" style=" background-image:url(img/irakpad/banner2.jpg); background-repeat:no-repeat;background-size: cover;background-color:#efefef; color:#000; height:780px;position: relative;">
      <div class="col-xs-12 col-md-6 col-md-push-2" style=""><img src="img/irakpad/3.png" width="100%" alt="">
   </div>
     <div class="col-xs-12 col-md-4 row" style=""><div class="col-xs-12 col-md-12 revealOnScroll" style="" data-animation="fadeInUp" data-timeout="400"><img src="img/irakpad/linkpad.png" width="400px" alt="">
   </div><div class="col-xs-12 col-md-12 revealOnScroll" style=""><img src="img/irakpad/shadow.png" width="600px" alt="">
   </div>
   </div>
     
    </div>
        <!--f4-->

<div id="banner1" class="row vcenter-md" style=" background-image:url(img/irakpad/banner1.png); background-repeat:no-repeat;     background-size: contain;background-color:#efefef; color:#000; height:780px;position: relative;">
      <div class="col-xs-12 col-md-6 col-md-push-2" style="margin-top: -257px;"><img src="img/irakpad/5.png" width="100%" alt="">
   </div>
    </div>
    
    
    
    
    </div>
     <div role="tabpanel" class="tab-pane" id="cs">..3333.</div>
      <div role="tabpanel" class="tab-pane" id="pj">..3pgpgpgpg.</div>
  </div>
  </div>





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
