<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:95:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\public/../application/index\view\cghj\lst.html";i:1557070574;s:88:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\meta.html";i:1554613566;s:90:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\footer.html";i:1553402458;s:86:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\js.html";i:1554609812;}*/ ?>
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
<title></title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i>  系统<span class="c-gray en">&gt;</span> 科研奖励 <span class="c-gray en">&gt;</span> 成果获奖列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<!--<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius">
				<i class="Hui-iconfont">&#xe6e2;</i> 批量删除
			</a>-->
			<a href="javascript:;" onclick="admin_add('新增成果获奖','<?php echo url('add'); ?>','900','500')" class="btn btn-primary radius">
				<i class="Hui-iconfont">&#xe600;</i> 新增新增成果获奖
			</a>
		</span>
		<span class="r">共有获奖成果：<strong><?php echo $count; ?></strong> 项</span>
	</div>

	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">获奖成果列表</th>
			</tr>
			<tr class="text-c">
				<!--<th width="25"><input type="checkbox" name="" value=""></th>-->
				<th>奖励名称</th>
				<th>所属单位</th>
				<th>获奖作者</th>
				<th>获奖日期</th>
				<th>获奖级别</th>
				<th>获奖等级</th>
				<th>审核状态</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($cghj) || $cghj instanceof \think\Collection || $cghj instanceof \think\Paginator): $i = 0; $__LIST__ = $cghj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<tr class="text-c">
			<td><?php echo $vo['rewardname']; ?></td>
			<td><?php echo $vo['bmid']; ?></td>
			<td><?php echo $vo['reward_winner']; ?></td>
			<td><?php echo date('Y-m-d',$vo['reward_time']); ?></td>
			<td>
				<?php echo $vo['reward_grade']; ?>
			</td>
			<td><?php echo $vo['reward_rank']; ?></td>
			<td><?php echo $vo['status']; ?></td>
			<td class="td-manage">
				<!-- <a title="编辑" href="javascript:;" onclick="admin_edit('纵向项目编辑','','1','800','500')" class="ml-5" style="text-decoration:none">
					<i class="Hui-iconfont">&#xe6df;</i>
				</a> -->

				<!-- <a title="删除" href="javascript:;" onclick="admin_del(this,'')" class="ml-5" style="text-decoration:none">
					<i class="Hui-iconfont">&#xe6e2;</i>
				</a> -->

				<input class="size-S btn btn-success radius" type="button" onclick="admin_edit('合同编辑','<?php echo url('edit',['id'=>$vo['id']]); ?>','1','800','500')" title="编辑" value="编辑" />

				<input class="size-S btn btn-danger radius" type="button" onclick="admin_del(this,'<?php echo $vo['id']; ?>')" title="删除" value="删除" />
				<?php if($vo['status'] == ('待学院审核' or '待学校审核')): ?>
				<input class="size-S btn btn-primary radius" type="button" onclick="admin_check(this,'<?php echo $vo['id']; ?>')" title="审核" value="审核" />
				<?php endif; ?>
			</td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>

		</tbody>
	</table>
	<style>
		/*分页*/
		.pagination {}
		.pagination li {display: inline-block;margin-right: -1px;padding: 5px;border: 1px solid #e2e2e2;min-width: 20px;text-align: center;}
		.pagination li.active {background: #009688;color: #fff;border: 1px solid #009688;}
		.pagination li a {display: block;text-align: center;}
	</style>
	<div style="text-align:center;margin-top:18px;"><?php echo $page; ?></div>
</div>
<!--_footer 作为公共模版分离出去-->
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*合同-新增*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*合同-删除*/
function admin_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
        //此处请求后台程序，下方是成功后的前台处理……
        $.get("<?php echo url('del'); ?>",{id:id})
        $(obj).parents("tr").remove();
        layer.msg('已删除!',{icon:1,time:1000});
	});
}
/*合同-审核*/
function admin_check(obj,id){
	//询问框
	layer.confirm('审核通过吗？', {
		    btn: ['通过','驳回'] //按钮
		}, function(){
			$.get("<?php echo url('check'); ?>",{id:id,status:1});
		    layer.msg('审核成功', {icon: 1});
		}, function(){
			$.get("<?php echo url('check'); ?>",{id:id,status:2});
		    layer.msg('驳回成功', {icon: 1});
	});
}
/*合同-编辑*/
function admin_edit(title,url,id,w,h){
    $.get("<?php echo url('edit'); ?>",{id:id}); //执行控制器中的编辑操作
	layer_show(title,url,w,h);
}
</script>
</body>
</html>