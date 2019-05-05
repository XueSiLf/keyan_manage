<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:95:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\public/../application/index\view\zxxm\lst.html";i:1556352927;s:88:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\meta.html";i:1554613566;s:90:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\footer.html";i:1553402458;s:86:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\js.html";i:1554609812;}*/ ?>
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
<title>项目列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i>  系统<span class="c-gray en">&gt;</span> 纵向项目 <span class="c-gray en">&gt;</span> 纵向项目列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<!--<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius">
				<i class="Hui-iconfont">&#xe6e2;</i> 批量删除
			</a>-->
			<a href="javascript:;" onclick="admin_add('纵向项目申报','<?php echo url('add'); ?>','900','500')" class="btn btn-primary radius">
				<i class="Hui-iconfont">&#xe600;</i> 纵向项目申报
			</a>
			<a href="javascript:;" onclick="admin_add('纵向项目申报','<?php echo url('add'); ?>','900','500')" class="btn btn-success radius">
				<i class="Hui-iconfont">&#xe600;</i> 纵向项目立项
			</a>
		</span>

		<span class="r">共有纵向项目：<strong><?php echo $count; ?></strong> 项</span>
	</div>

	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="15">纵向项目列表</th>
			</tr>
			<tr class="text-c">
				<!--<th width="25"><input type="checkbox" name="" value=""></th>-->
				<th>纵向项目编号</th>
				<th>纵向项目名称</th>
				<th>项目负责人</th>
				<th>项目成员</th>
				<th>项目所属部门id</th>
				<th>项目分类</th>
				<th>项目级别</th>
				<th>状态</th>
				<th>项目来源</th>
				<th>项目立项时间</th>
				<th>项目计划完成时间</th>
				<th>项目结项时间</th>
				<th>项目成果形式</th>
				<th>项目经费</th>
				<!--<th width="100">是否已启用</th>-->
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($zxxm) || $zxxm instanceof \think\Collection || $zxxm instanceof \think\Paginator): $i = 0; $__LIST__ = $zxxm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<tr class="text-c">
			<td><?php echo $vo['zxxm_id']; ?></td>
			<td><?php echo $vo['zxxm_name']; ?></td>
			<td><?php echo $vo['zxxm_leader']; ?></td>
			<td><?php echo $vo['zxxm_member']; ?></td>
			<td>
				<?php echo $vo['zxxm_bmid']; ?>
			</td>
			<td><?php echo $vo['zxxm_type']; ?></td>
			<td><?php echo $vo['zxxm_jibie']; ?></td>
			<td><?php echo $vo['zxxm_status']; ?></td>
			<td><?php echo $vo['zxxm_source']; ?></td>
			<td><?php echo $vo['zxxm_lx_time']; ?></td>
			<td><?php echo $vo['zxxm_plan_finishtime']; ?></td>
			<td><?php echo $vo['zxxm_jx_time']; ?></td>
			<td><?php echo $vo['zxxm_cgxs']; ?></td>
			<td><?php echo $vo['zxxm_counts']; ?></td>
			<td class="td-manage" width="200">
				<!-- <a title="编辑" href="javascript:;" onclick="admin_edit('纵向项目编辑','','1','800','500')" class="ml-5" style="text-decoration:none">
					<i class="Hui-iconfont">&#xe6df;</i>
				</a> -->

				<!-- <a title="删除" href="javascript:;" onclick="admin_del(this,'')" class="ml-5" style="text-decoration:none">
					<i class="Hui-iconfont">&#xe6e2;</i>
				</a> -->

				<input class="size-S btn btn-success radius" type="button" onclick="admin_edit('纵向项目编辑','<?php echo url('edit',['id'=>$vo['zxxm_id']]); ?>','1','800','500')" title="编辑" value="编辑" />

				<input class="size-S btn btn-danger radius" type="button" onclick="admin_del(this,'<?php echo $vo['zxxm_id']; ?>')" title="删除" value="删除" />
				<input class="size-S btn btn-primary radius" type="button" onclick="admin_edit('纵向项目评审','<?php echo url('edit',['id'=>$vo['zxxm_id']]); ?>','1','800','500')" title="评审" value="评审" />

				<input class="size-S btn btn-secondary radius" type="button" onclick="admin_del(this,'<?php echo $vo['zxxm_id']; ?>')" title="结项" value="结项" />
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
/*纵向项目-申报*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*纵向项目-删除*/
function admin_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
        //此处请求后台程序，下方是成功后的前台处理……
        $.get("<?php echo url('del'); ?>",{id:id})
        $(obj).parents("tr").remove();
        layer.msg('已删除!',{icon:1,time:1000});
	});
}

/*纵向项目-编辑*/
function admin_edit(title,url,id,w,h){
    $.get("<?php echo url('edit'); ?>",{id:id}); //执行控制器中的编辑操作
	layer_show(title,url,w,h);
}
/*纵向项目-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
        $.get("<?php echo url('setStatus'); ?>",{id:id});
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已停用</span>');
		$(obj).remove();
		layer.msg('已停用!',{icon: 5,time:1000});
	});
}


/*纵向项目-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
        $.get("<?php echo url('setStatus'); ?>",{id:id});
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!', {icon: 6,time:1000});
	});
}
</script>
</body>
</html>