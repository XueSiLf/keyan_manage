<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:95:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\public/../application/index\view\user\add.html";i:1556798430;s:88:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\meta.html";i:1554613566;}*/ ?>
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
<title>人员列表 - 管理新人员</title>
<meta name="keywords" content="">
<meta name="description" content="">
<script src="/static/lib/jquery/1.9.1/jquery.js"></script>
<script src="/static/lib/layer/2.4/layer.js"></script>
</head>

<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>教工号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入教工号" id="username" name="username">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>初始密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off" value="" placeholder="请输入新密码" id="password" name="password">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off"  placeholder="请确认新密码" id="password2" name="password2">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>姓名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入教工姓名" id="nickname" name="nickname">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="sex" type="radio" id="sex-1" checked value="1">
					<label for="sex-1">男</label>
				</div>
				<div class="radio-box">
					<input type="radio" value="2" id="sex-2" name="sex">
					<label for="sex-2">女</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="phone" name="phone">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="@" name="email" id="email">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>职称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" style="width:150px;">
					<select class="select" name="title" size="1">
						<option value="0">请选择</option>
						<option value="1">教授</option>
						<option value="2">副教授</option>
						<option value="3">讲师</option>
						<option value="4">助教</option>
					</select>
				</span>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>出生日期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<!-- <input type="text" class="input-text" id="birthday" name="birthday"> -->
				<input type="text" class="input-text" value="" autocomplete="off" id="datetimepicker" name="birthday">
			</div>
		</div>
		<!-- <div class="row cl">
			<label class="form-label col-xs-3">出生日期：</label>
			<div class="formControls col-xs-8">
				<input type="text" class="input-text" value="" autocomplete="off" id="datetimepicker" name="datetimepicker">
			</div>
		</div> -->

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>政治面貌：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入政治面貌" id="political_status" name="political_status">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>最后学位：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入最后学位" id="degree" name="degree">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>最后学历：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入最后学历" id="eduction" name="eduction">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>人员角色：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" style="width:150px;">
					<select class="select" name="role" size="1">
						<option value="0">请选择</option>
						<option value="1">校级管理员</option>
						<option value="2">院级管理员</option>
						<option value="3">院级科研秘书</option>
						<option value="4">普通教师</option>
					</select>
				</span>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>所属部门：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" style="width:300px;">
					<select class="select" name="bmid" size="1">
						<option value="0">请选择</option>
						<?php if(is_array($bmres) || $bmres instanceof \think\Collection || $bmres instanceof \think\Paginator): $i = 0; $__LIST__ = $bmres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $vo['bm_id']; ?>"><?php if($vo['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat('-',$vo['level']*4); ?><?php echo $vo['bm_name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</span>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>所属用户组：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" style="width:300px;">
					<select class="select" name="group_id" size="1">
						<option value="0">请选择</option>
						<?php if(is_array($authGroupRes) || $authGroupRes instanceof \think\Collection || $authGroupRes instanceof \think\Paginator): $i = 0; $__LIST__ = $authGroupRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</span>
			</div>
		</div>
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-4 col-sm-3">备注：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-9">-->
				<!--<textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)"></textarea>-->
				<!--<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>-->
		<!---->
			<!--</div>-->
		<!--</div>-->
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
<script type="text/javascript" src="/static/lib/laydate/laydate.js"></script>
<script type="text/javascript" src="/static/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/messages_zh.js"></script>

<script src="/static/lib/laydate/laydate.js"></script>
<script>
// //执行一个laydate实例
// laydate.render({
// 	elem: '#birthday' //指定元素
// });

</script>

<script type="text/javascript">
$(function(){
	//日期插件
	$("#datetimepicker").datetimepicker({
    	format: 'yyyy-mm-dd',
		minView: "month",
		todayBtn:  1,
		autoclose: 1,
		// endDate : new Date()
	}).on('hide',function(e) {
		//此处可以触发日期校验。
	});

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
    //失去焦点时,检查用户名是否重复
    $("#username").blur(function(){
		if($("#username").val())
		{
			$.ajax({
				type: 'GET',
				url: "checkUserName",
				data:{name:$("#username").val()},
				dataType: 'json',
				success: function(data){
					if (data.status == 1) {
						layer.alert(data.message);
					} else {
						layer.alert(data.message);
					}
				}
			});
		}
    });

    //失去焦点时,检查邮箱是否重复
    $("#email").blur(function(){
		if($("#email").val())
		{
			$.ajax({
				type: 'GET',
				url: "checkUserEmail",
				data:{email:$("#email").val()},
				dataType: 'json',
				success: function(data){
					if (data.status == 1) {
						layer.alert(data.message);
					} else {
						layer.alert(data.message);
					}
				}
			});
		}
    });

    //失去焦点时,检查手机号是否重复
    $("#phone").blur(function(){
		if($("#phone").val())
		{
			$.ajax({
				type: 'GET',
				url: "checkPhone",
				data:{phone:$("#phone").val()},
				dataType: 'json',
				success: function(data){
					if (data.status == 1) {
						layer.alert(data.message);
					} else {
						layer.alert(data.message);
					}
				}
			});
		}
    });
</script>
</body>
</html>