<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:98:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\public/../application/index\view\index\index.html";i:1554615536;s:88:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\meta.html";i:1554613566;s:90:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\header.html";i:1556979954;s:88:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\menu.html";i:1557069443;s:90:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\footer.html";i:1553402458;}*/ ?>
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

<title>景德镇陶瓷大学科研管理系统</title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>
<style>
.navbar-nav>ul>li, .navbar-nav>ul>li>a {
    line-height: 44px;
    font-size: 12px;
}
</style>
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="#">景德镇陶瓷大学科研管理系统</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="#">科研系统</a>
            <!-- <span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span> -->
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav class="nav navbar-nav">
                <ul class="cl">
                    
                    <li class="dropDown dropDown_hover">
                        <!-- <a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a> -->
                        <!-- <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
                            <li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
                            <li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
                            <li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
                        </ul> -->
                        <li class="navbar-levelone current"><a href="javascript:;">平台首页</a></li>
                        <!-- <li class="navbar-levelone"><a href="javascript:;">首页</a></li> -->
                        <li class="navbar-levelone"><a href="javascript:;">科研办公</a></li>
                        <li class="navbar-levelone"><a href="javascript:;">科研队伍</a></li>
                        <li class="navbar-levelone"><a href="javascript:;">科研平台</a></li>
                        <li class="navbar-levelone"><a href="javascript:;">纵向项目</a></li>
                        <li class="navbar-levelone"><a href="javascript:;">横向项目</a></li>
                        <li class="navbar-levelone"><a href="javascript:;">项目经费</a></li>
                        <li class="navbar-levelone"><a href="javascript:;">科研成果</a></li>
                        <li class="navbar-levelone"><a href="javascript:;">知识产权</a></li>
                        <li class="navbar-levelone"><a href="javascript:;">科研奖励</a></li>
                        <!-- <li class="navbar-levelone"><a href="javascript:;">学术交流</a></li> -->
                        <!-- <li class="navbar-levelone"><a href="javascript:;">系统维护</a></li> -->
                        <!-- <li class="navbar-levelone"><a href="javascript:;">在线帮助</a></li> -->
                    </li>
                </ul>
            </nav>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li><?php echo \think\Session::get('group_title'); ?></li>
                    <li class="dropDown dropDown_hover">
                        <a href="#" class="dropDown_A"><?php echo \think\Session::get('user_info.nickname'); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
                            <!--<li><a href="#">切换账户</a></li>-->
                            <li><a href="<?php echo url('user/logout'); ?>">退出</a></li>
                        </ul>
                    </li>
                    <!--<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>-->
                    <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" data-val="default" title="默认（绿色）">默认（绿色）</a></li>
                            <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                            <li><a href="javascript:;" data-val="black" title="黑色">黑色</a></li>
                            <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                            <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                            <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">
        <!-- <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">资讯管理</a></li>
                </ul>
            </dd>
        </dl> -->
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe625;</i> 首页<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('welcome'); ?>" data-title="我的桌面" href="javascript:void(0)">我的桌面</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe627;</i> 科研办公<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('gonggao/lst'); ?>" data-title="通知公告列表" href="javascript:void(0)">通知公告列表</a></li>
                    <li><a data-href="<?php echo url('downloadfile/lst'); ?>" data-title="下载文件专区" href="javascript:void(0)">下载文件专区</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe62c;</i> 科研队伍<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('user/lst'); ?>" data-title="科研人员列表" href="javascript:void(0)">科研人员列表</a></li>
                    <li><a data-href="<?php echo url('department/lst'); ?>" data-title="组织部门列表" href="javascript:void(0)">组织部门列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe63c;</i> 科研平台<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('jigou/lst'); ?>" data-title="研究机构列表" href="javascript:void(0)">研究机构列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe643;</i> 纵向项目<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('zxxm/lst'); ?>" data-title="纵向项目列表" href="javascript:void(0)">纵向项目列表</a></li>
                    <li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">项目申报</a></li>
                    <li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">项目评审</a></li>
                    <li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">项目立项</a></li>
                    <!-- <li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">项目变更</a></li> -->
                    <li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">项目中检</a></li>
                    <li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">项目结项</a></li>
                    <!-- <li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">项目分类</a></li> -->
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe636;</i> 横向项目<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('hxxmht/lst'); ?>" data-title="合同列表" href="javascript:void(0)">合同列表</a></li>
                    <li><a data-href="<?php echo url('hxxm/lst'); ?>" data-title="横向项目列表" href="javascript:void(0)">横向项目列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe6b7;</i> 项目经费<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('count/zlst'); ?>" data-title="纵向经费" href="javascript:void(0)">纵向经费</a></li>
                    <li><a data-href="<?php echo url('count/hlst'); ?>" data-title="横向经费" href="javascript:void(0)">横向经费</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe639;</i> 科研成果<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('paper/lst'); ?>" data-title="论文成果" href="javascript:void(0)">论文成果</a></li>
                    <li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">著作成果</a></li>
                    <li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">专利成果</a></li>
                    <li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">艺术作品</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe6cc;</i> 知识产权<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('zlcg/zlcglst'); ?>" data-title="专利成果管理" href="javascript:void(0)">专利成果</a></li>
                    <li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">著作权</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe727;</i> 科研奖励<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('cghj/lst'); ?>" data-title="成果获奖列表" href="javascript:void(0)">成果获奖列表</a></li>
                </ul>
            </dd>
        </dl>
        <!-- <dl id="menu-member">
            <dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="member-list.html" data-title="会员列表" href="javascript:;">会员列表</a></li>
                    <li><a data-href="member-del.html" data-title="删除的会员" href="javascript:;">删除的会员</a></li>
                    <li><a data-href="member-level.html" data-title="等级管理" href="javascript:;">等级管理</a></li>
                    <li><a data-href="member-scoreoperation.html" data-title="积分管理" href="javascript:;">积分管理</a></li>
                    <li><a data-href="member-record-browse.html" data-title="浏览记录" href="javascript:void(0)">浏览记录</a></li>
                    <li><a data-href="member-record-download.html" data-title="下载记录" href="javascript:void(0)">下载记录</a></li>
                    <li><a data-href="member-record-share.html" data-title="分享记录" href="javascript:void(0)">分享记录</a></li>
                </ul>
            </dd>
        </dl> -->
        <?php if(\think\Session::get('group_id') == 1): ?>
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('AuthGroup/lst'); ?>" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
                    <li><a data-href="<?php echo url('AuthRule/lst'); ?>" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
                    <li><a data-href="admin-list.html" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
                </ul>
            </dd>
        </dl>
        <?php endif; ?>
    </div>

    <div class="menu_dropdown bk_2" style="display:none">
        <dl id="menu-bbbb">
            <dt><i class="Hui-iconfont">&#xe616;</i> 通知公告<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('gonggao/lst'); ?>" data-title="公告列表" href="javascript:void(0)">公告列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-bbbb1">
            <dt><i class="Hui-iconfont">&#xe616;</i> 下载专区<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('downloadfile/lst'); ?>" data-title="文件列表" href="javascript:void(0)">文件列表</a></li>
                </ul>
            </dd>
        </dl>
    </div>

    <div class="menu_dropdown bk_2" style="display:none">
        <dl id="menu-bbbbb">
            <dt><i class="Hui-iconfont">&#xe616;</i> 科研人员<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('user/lst'); ?>" data-title="人员列表" href="javascript:void(0)">人员列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-bbbbb1">
            <dt><i class="Hui-iconfont">&#xe616;</i> 组织结构<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('department/lst'); ?>" data-title="组织部门管理" href="javascript:void(0)">部门列表</a></li>
                </ul>
            </dd>
        </dl>
    </div>

    <div class="menu_dropdown bk_2" style="display:none">
        <dl id="menu-ccccc">
            <dt><i class="Hui-iconfont">&#xe616;</i> 科研机构<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('jigou/lst'); ?>" data-title="机构列表" href="javascript:void(0)">机构列表</a></li>
                </ul>
            </dd>
        </dl>
        <!--<dl id="menu-ccccc1">-->
            <!--<dt><i class="Hui-iconfont">&#xe616;</i> 科研团队<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>-->
            <!--<dd>-->
                <!--<ul>-->
                    <!--<li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">团队列表</a></li>-->
                <!--</ul>-->
            <!--</dd>-->
        <!--</dl>-->
    </div>

    <div class="menu_dropdown bk_2" style="display:none">
        <dl id="menu-dddd">
            <dt><i class="Hui-iconfont">&#xe616;</i> 项目申报<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('zxxm/lst'); ?>" data-title="项目申报列表" href="javascript:void(0)">项目申报列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-dddd1">
            <dt><i class="Hui-iconfont">&#xe616;</i> 项目评审<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">项目评审列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-dddd2">
            <dt><i class="Hui-iconfont">&#xe616;</i> 项目立项<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">项目立项列表</a></li>
                </ul>
            </dd>
        </dl>
        <!-- <dl id="menu-dddd3">
            <dt><i class="Hui-iconfont">&#xe616;</i> 项目变更<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">项目变更列表</a></li>
                </ul>
            </dd>
        </dl> -->
        <dl id="menu-dddd4">
            <dt><i class="Hui-iconfont">&#xe616;</i> 项目中检<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">项目中检列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-dddd5">
            <dt><i class="Hui-iconfont">&#xe616;</i> 项目结项<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">项目结项列表</a></li>
                </ul>
            </dd>
        </dl>
        <!-- <dl id="menu-dddd5">
            <dt><i class="Hui-iconfont">&#xe616;</i> 项目分类<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">项目分类列表</a></li>
                </ul>
            </dd>
        </dl> -->
    </div>

    <div class="menu_dropdown bk_2" style="display:none">
        <dl id="menu-eeee">
            <dt><i class="Hui-iconfont">&#xe616;</i> 横向项目<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('hxxmht/lst'); ?>" data-title="合同列表" href="javascript:void(0)">合同列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-eeee1">
            <dt><i class="Hui-iconfont">&#xe616;</i> 项目列表<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('hxxm/lst'); ?>" data-title="横向项目列表" href="javascript:void(0)">横向项目列表</a></li>
                </ul>
            </dd>
        </dl>
    </div>

    <div class="menu_dropdown bk_2" style="display:none">
        <dl id="menu-ffff">
            <dt><i class="Hui-iconfont">&#xe616;</i> 纵向项目<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('count/zlst'); ?>" data-title="纵向项目经费列表" href="javascript:void(0)">纵向项目经费列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-ffff1">
            <dt><i class="Hui-iconfont">&#xe616;</i> 纵向项目<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('count/hlst'); ?>" data-title="横向项目经费列表" href="javascript:void(0)">横向项目经费列表</a></li>
                </ul>
            </dd>
        </dl>
    </div>

    <div class="menu_dropdown bk_2" style="display:none">
        <dl id="menu-gggg">
            <dt><i class="Hui-iconfont">&#xe616;</i> 论文成果<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="<?php echo url('paper/lst'); ?>" data-title="论文成果" href="javascript:void(0)">论文成果列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-gggg1">
            <dt><i class="Hui-iconfont">&#xe616;</i> 著作成果<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">著作成果列表</a></li>
                </ul>
            </dd>
        </dl>
    </div>

    <div class="menu_dropdown bk_2" style="display:none">
        <dl id="menu-hhhh">
            <dt><i class="Hui-iconfont">&#xe616;</i> 论文成果<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">论文列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-hhhh1">
            <dt><i class="Hui-iconfont">&#xe616;</i> 专利成果<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">专利成果列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-hhhh1">
            <dt><i class="Hui-iconfont">&#xe616;</i> 艺术作品<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">艺术作品列表</a></li>
                </ul>
            </dd>
        </dl>
    </div>

    <div class="menu_dropdown bk_2" style="display:none">
        <dl id="menu-iiii">
            <dt><i class="Hui-iconfont">&#xe616;</i> 成果获奖<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">获奖列表</a></li>
                </ul>
            </dd>
        </dl>
    </div>

    <!-- <div class="menu_dropdown bk_2" style="display:none">
        <dl id="menu-jjjj">
            <dt><i class="Hui-iconfont">&#xe616;</i> 主办会议<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">会议列表</a></li>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">会议类型</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-jjjj1">
            <dt><i class="Hui-iconfont">&#xe616;</i> 学术讲座<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">学术讲座列表</a></li>
                </ul>
            </dd>
        </dl>
    </div> -->

    <!-- <div class="menu_dropdown bk_2" style="display:none">
            <dl id="menu-kkkk">
                <dt><i class="Hui-iconfont">&#xe616;</i> 用户管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">用户列表</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-jjjj1">
                <dt><i class="Hui-iconfont">&#xe616;</i> 密码维护<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">个人密码维护</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-jjjj1">
                <dt><i class="Hui-iconfont">&#xe616;</i> 机构调整<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">机构列表</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-jjjj1">
                <dt><i class="Hui-iconfont">&#xe616;</i> 人员调整<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">人员列表</a></li>
                    </ul>
                </dd>
            </dl>
        </div> -->
</aside>

<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="我的桌面" data-href="/index.php<?php echo url('welcome');; ?>">我的桌面</span>
					<em></em></li>
		</ul>
	</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo url('welcome'); ?>"></iframe>
	</div>
</div>
</section>

<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
</ul>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
$(function(){
	/*$("#min_title_list li").contextMenu('Huiadminmenu', {
		bindings: {
			'closethis': function(t) {
				console.log(t);
				if(t.find("i")){
					t.find("i").trigger("click");
				}		
			},
			'closeall': function(t) {
				alert('Trigger was '+t.id+'\nAction was Email');
			},
		}
	});*/


	$("body").Huitab({
		tabBar:".navbar-wrapper .navbar-levelone",
		tabCon:".Hui-aside .menu_dropdown",
		className:"current",
		index:0,
	});
});
/*个人信息*/
function myselfinfo(){
	layer.open({
		type: 1,
		area: ['300px','200px'],
		fix: false, //不固定
		maxmin: true,
		shade:0.4,
		title: '查看信息',
		content: '<div>管理员信息</div>'
	});
}

/*资讯-添加*/
function article_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}


</script>
</body>
</html>