<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:97:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\public/../application/index\view\count\zlst.html";i:1556367321;s:88:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\meta.html";i:1554613566;s:90:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\footer.html";i:1553402458;s:86:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\js.html";i:1554609812;}*/ ?>
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i>  系统<span class="c-gray en">&gt;</span> 项目经费 <span class="c-gray en">&gt;</span> 纵向经费 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<button onclick="removeIframe()" class="btn btn-primary radius">关闭选项卡</button>
		<span class="select-box inline">
			<select name="bmid" class="select" style="width:220px;">
				<option value="">所属单位：</option>
				<?php if(is_array($bmres) || $bmres instanceof \think\Collection || $bmres instanceof \think\Paginator): $i = 0; $__LIST__ = $bmres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<option value="<?php echo $vo['bm_id']; ?>"><?php if($vo['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat('-',$vo['level']*4); ?><?php echo $vo['bm_name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</span> 
		<span class="select-box inline">
			<select name="status" class="select" style="width:100px;">
				<option value="">审核状态：</option>
				<option value="0">待审核</option>
				<option value="1">学校通过</option>
				<option value="2">学校驳回</option>
			</select>
		</span> 
		<!-- 日期范围： -->
			
		<!-- <input type="text" onfocus="WdatePicker({ maxDate:'#F{ $dp.$D(\'logmax\')||\'%y-%M-%d\' }' })" id="logmin" class="input-text Wdate" style="width:120px;">
			-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{ $dp.$D(\'logmin\') }',maxDate:'%y-%M-%d' })" id="logmax" class="input-text Wdate" style="width:120px;"> -->
		<input type="text" name="" id="" placeholder=" 项目名称" style="width:250px" class="input-text">
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
	</div>

	<!-- 搜索的ajax提交 -->
	<script>

	</script>

	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<!--<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius">
				<i class="Hui-iconfont">&#xe6e2;</i> 批量删除
			</a>-->
			<a href="javascript:;" onclick="admin_add('登记项目纵向经费','<?php echo url('add'); ?>','900','500')" class="btn btn-primary radius">
				<i class="Hui-iconfont">&#xe600;</i> 登记项目纵向经费
			</a>
		</span>
		<span class="r">共有纵向经费数据：<strong><?php echo $count; ?></strong> 条</span>
	</div>

	<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
		<thead>
			<tr>
				<th scope="col" colspan="9">纵向经费登记项目列表</th>
			</tr>
			<tr class="text-c">
				<!--<th width="25"><input type="checkbox" name="" value=""></th>-->
				<th>项目名称</th>
				<th>所属单位</th>
				<th>负责人</th>
				<th>立项时间</th>
				<th>合同经费</th>
				<th>审核状态</th>
				<th>经费是否到账</th>
				<th width="200">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($zxjf) || $zxjf instanceof \think\Collection || $zxjf instanceof \think\Paginator): $i = 0; $__LIST__ = $zxjf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<tr class="text-c">
			<td><?php echo $vo['xm_name']; ?></td>
			<td><?php echo $vo['bmid']; ?></td>
			<td><?php echo $vo['leader']; ?></td>
			<td><?php echo $vo['lxdate']; ?></td>
			<td>
				<?php echo $vo['htcount']; ?>
			</td>
			<td><?php echo $vo['status']; ?></td>
			<td><?php echo $vo['is_dz']; ?></td>
			<td class="td-manage" width="200">
				<!-- <a title="编辑" href="javascript:;" onclick="admin_edit('纵向项目编辑','','1','800','500')" class="ml-5" style="text-decoration:none">
					<i class="Hui-iconfont">&#xe6df;</i>
				</a> -->

				<!-- <a title="删除" href="javascript:;" onclick="admin_del(this,'')" class="ml-5" style="text-decoration:none">
					<i class="Hui-iconfont">&#xe6e2;</i>
				</a> -->

				<input class="size-S btn btn-success radius" type="button" onclick="admin_edit('经费编辑','<?php echo url('edit',['id'=>$vo['id']]); ?>','1','800','500')" title="编辑" value="编辑" />

				<input class="size-S btn btn-danger radius" type="button" onclick="admin_del(this,'<?php echo $vo['id']; ?>')" title="删除" value="删除" />

				<?php if($vo['is_dz'] == '未到账'): ?>
				<input class="size-S btn btn-secondary radius" type="button" onclick="admin_dz(this,'<?php echo $vo['id']; ?>')" title="到账登记" value="到账登记" />
				<?php endif; if($vo['status'] == '待审核'): ?>
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
/*经费-新增*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*经费-删除*/
function admin_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
        //此处请求后台程序，下方是成功后的前台处理……
        $.get("<?php echo url('del'); ?>",{id:id})
        $(obj).parents("tr").remove();
        layer.msg('已删除!',{icon:1,time:1000});
	});
}
/*经费-审核*/
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
/*经费-到账登记*/
function admin_dz(obj,id){
	//询问框
	layer.confirm('经费到账了吗？', {
		    btn: ['已到账','未到账'] //按钮
		}, function(){
			$.get("<?php echo url('dz'); ?>",{id:id,is_dz:1});
		    layer.msg('到账登记成功', {icon: 1});
		});
}
/*经费-编辑*/
function admin_edit(title,url,id,w,h){
    $.get("<?php echo url('edit'); ?>",{id:id}); //执行控制器中的编辑操作
	layer_show(title,url,w,h);
}
</script>
</body>
</html>