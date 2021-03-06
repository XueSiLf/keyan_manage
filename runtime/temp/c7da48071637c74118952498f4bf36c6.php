<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:97:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\public/../application/index\view\jigou\edit.html";i:1556352184;s:88:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\meta.html";i:1554613566;}*/ ?>
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
<title>部门列表 - 管理部门</title>
<meta name="keywords" content="">
<meta name="description" content="">
<script src="/static/lib/jquery/1.9.1/jquery.js"></script>
<script src="/static/lib/layer/2.4/layer.js"></script>
</head>

<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add">
		<input type="hidden" value="<?php echo $jgres['id']; ?>" name="id">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>机构编号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" style="background:gray;" readonly class="input-text" value="<?php echo $jgres['jg_id']; ?>" id="jg_id" name="jg_id">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>机构名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $jgres['jg_name']; ?>" placeholder="请输入机构名称" id="jg_name" name="jg_name">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>机构负责人：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $jgres['jg_leader']; ?>" placeholder="请输入机构负责人姓名" id="jg_leader" name="jg_leader">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>机构级别：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $jgres['jg_jibie']; ?>" placeholder="请输入机构级别" id="jg_jibie" name="jg_jibie">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>机构人员：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $jgres['jg_people']; ?>" placeholder="请输入机构人员" id="jg_people" name="jg_people">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>机构科研项目数：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $jgres['jg_pro_count']; ?>" placeholder="请输入机构科研项目数" id="jg_pro_count" name="jg_pro_count">
			</div>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>机构科研成果数：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $jgres['jg_cg_count']; ?>" placeholder="请输入机构科研成果数" id="jg_cg_count" name="jg_cg_count">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>机构科研获奖数：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $jgres['jg_hj_count']; ?>" placeholder="请输入机构科研成果数" id="jg_hj_count" name="jg_hj_count">
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
				url: "<?php echo url('edit'); ?>",
				success: function(data){
				    if(data.code == 1) {
                        layer.msg('更新成功!',{icon:1,time:1000});
                    }else{
						layer.msg('更新失败!',{icon:2,time:1000});
					}

				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('更新失败!',{icon:2,time:1000});
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
        // $.ajax({
        //     type: 'GET',
        //     url: "checkJgName",
        //     data:{jg_name:$(this).val()},
        //     dataType: 'json',
        //     success: function(data){
        //         if (data.status == 1) {
        //             layer.alert(data.message);
        //         } else {
        //             layer.alert(data.message);
        //         }
        //     }
        // });
    });

</script>
</body>
</html>