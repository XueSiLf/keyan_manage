<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:97:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\public/../application/index\view\zxxm\apply.html";i:1556353774;s:88:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\meta.html";i:1554613566;}*/ ?>
<!DOCTYPE HTML>
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
<title>纵向项目列表 - 纵向项目</title>
<meta name="keywords" content="">
<meta name="description" content="">
<script src="/static/lib/jquery/1.9.1/jquery.js"></script>
<script src="/static/lib/layer/2.4/layer.js"></script>
</head>

<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add">

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目编号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入纵向项目编号" id="zxxm_id" name="zxxm_id">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入纵向项目名称" id="zxxm_name" name="zxxm_name">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目负责人：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入纵向项目负责人姓名" id="zxxm_leader" name="zxxm_leader">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目成员：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入纵向项目成员" id="zxxm_member" name="zxxm_member">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目所属部门：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" style="width:300px;">
					<select id="zxxm_bmid" class="select" name="zxxm_bmid" size="1">
						<option value="0">请选择</option>
						<?php if(is_array($bmres) || $bmres instanceof \think\Collection || $bmres instanceof \think\Paginator): $i = 0; $__LIST__ = $bmres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $vo['bm_id']; ?>"><?php if($vo['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat('-',$vo['level']*4); ?><?php echo $vo['bm_name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</span>
			</div>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目分类：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" style="width:150px;">
					<select id="zxxm_type" class="select" name="zxxm_type" size="1">
						<option value="0">请选择</option>
						<option value="1">国家科技重大专项</option>
						<option value="2">省级</option>
						<option value="3">校级</option>
						<option value="4">院级</option>
					</select>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目级别：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" style="width:150px;">
					<select id="zxxm_jibie" class="select" name="zxxm_jibie" size="1">
						<option value="0">请选择</option>
						<option value="1">国家级</option>
						<option value="2">省级</option>
						<option value="3">校级</option>
						<option value="4">院级</option>
					</select>
				</span>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目来源：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入纵向项目来源" id="zxxm_source" name="zxxm_source">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目立项时间：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="date" class="input-text" value="" placeholder="请输入纵向项目立项时间" id="zxxm_lx_time" name="zxxm_lx_time">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目计划完成时间：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="date" class="input-text" value="" placeholder="请输入纵向项目计划完成时间" id="zxxm_plan_finishtime" name="zxxm_plan_finishtime">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目结项时间：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="date" class="input-text" value="" placeholder="请输入纵向项目结项时间" id="zxxm_jx_time" name="zxxm_jx_time">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目成果形式：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入纵向项目成果形式" id="zxxm_cgxs" name="zxxm_cgxs">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>纵向项目经费：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入纵向项目经费" id="zxxm_counts" name="zxxm_counts">
			</div>
		</div>

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->

<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->


<script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/messages_zh.js"></script>

<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").validate({
		rules:{
            username:{
                required:true,
                minlength:4,
                maxlength:16
            },
			nickname:{
				required:true,
				minlength:2,
				maxlength:16
			},
			password:{
				required:true,
			},
			password2:{
				required:true,
				equalTo: "#password"
			},
			sex:{
				required:true,
			},
			phone:{
				required:true,
				isPhone:true,
			},
			email:{
				required:true,
				email:true,
			},
			role:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({
				type: 'post',
				url: "<?php echo url('add'); ?>",
				success: function(data){
				    if(data.code == 1) {
                        layer.msg('添加成功!',{icon:1,time:1000});
                    }

				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('error!',{icon:1,time:1000});
				}
			});
			// var index = parent.layer.getFrameIndex(window.name);
			// parent.$('.btn-refresh').click();
			// parent.layer.close(index);
		}
	});
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->

<script>
    //失去焦点时,检查部门名称是否重复
    $("#jg_name").blur(function(){
        $.ajax({
            type: 'GET',
            url: "checkJgName",
            data:{name:$(this).val()},
            dataType: 'json',
            success: function(data){
                if (data.status == 1) {
                    layer.alert(data.message);
                } else {
                    layer.alert(data.message);
                }
            }
        });
    });

</script>
</body>
</html>