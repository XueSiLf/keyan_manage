<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:100:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\public/../application/index\view\index\welcome.html";i:1556722184;s:88:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\meta.html";i:1554613566;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico" >
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/static/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/static/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/static/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/static/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/static/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/static/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
<title>我的桌面</title>

<style>
.main-content{
	font-size:16px;
	position:relative;
	top:10px;
	width:100%;
	height:300px;
	margin:0 auto;
	clear:both;
	/* background-color:blue; */
}


.content{
	border-radius:30px;
	border:1px solid #bdbebf;
	width:48%;
	height:246px;
}
.content-left{
	float:left;
	/* background-color:red; */
}
.content-right{
	float:right;
	/* background-color:red; */
}
.content-three{
	clear:both;
	position:relative;
	top:-30px;
	height:246px;
	width:100%;
	/* background-color:aqua; */
}
.inner-div{
	position: relative;
    width: 530px;
    margin: 0 auto;
    /* background-color: black; */
    top: -2px;
    left: -16px;
    height: 300px;
}
.inner-div h3{
	position: relative;
    left: 34px;
}


</style>

</head>
<body>
<div class="page-container" style="margin-top:-14px;">
	<p class="f-20 text-success" style="margin-bottom:0;">欢迎使用景德镇陶瓷大学科研管理系统！ 欢迎你，<?php echo \think\Session::get('user_info.nickname'); ?>！</p>
	<hr>
	<div class="main-content">
		<div class="content content-left">
			<div class="inner-div">
				<h3>我的事务</h3>
				<hr style="position:relative;left:35px;width:488px;">
				<ul>
					<li><span>> </span><a href="<?php echo url('zxxm/lst'); ?>">纵向项目663项待审核</a></li>
					<li><span>> </span><a href="<?php echo url('hxxm/lst'); ?>">横向项目663项待审核</a></li>
					<li><span>> </span><a href="<?php echo url('hxxm/lst'); ?>">科研论文663项待审核</a></li>
					<li><span>> </span><a href="<?php echo url('hxxm/lst'); ?>">获奖663篇待审核</a></li>
				</ul>
			</div>
		</div>
		<div class="content content-right">
			<div class="inner-div">
				<h3>我的科研</h3>
				<hr style="position:relative;left:35px;width:488px;">
				<ul>
					<li><span>> </span>纵向项目449项（482）</li>
					<li><span>> </span>科研项目663待审核</li>
					<li><span>> </span>科研项目663待审核</li>
					<li><span>> </span>科研项目663待审核</li>
					<li><span>> </span>科研项目663待审核</li>
					<li><span>> </span>科研项目663待审核</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="content-three">
		<div class="content content-left">
			<div class="inner-div">
				<h3>我的事务</h3>
				<hr style="position:relative;left:35px;width:488px;">
				<ul>
					<li><span>> </span>科研项目663待审核</li>
					<li><span>> </span>科研项目663待审核</li>
					<li><span>> </span>科研项目663待审核</li>
					<li><span>> </span>科研项目663待审核</li>
					<li><span>> </span>科研项目663待审核</li>
					<li><span>> </span>科研项目663待审核</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<footer class="footer mt-20">
	<div class="container">
		<p>Copyright &copy;2019 景德镇陶瓷大学科研管理系统 v1.0 All Rights Reserved.<br>
			本后台系统由景德镇陶瓷大学信息工程学院提供技术支持</p>
	</div>
</footer>

<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script>
</body>
</html>