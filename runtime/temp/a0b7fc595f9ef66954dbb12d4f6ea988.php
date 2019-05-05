<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:98:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\public/../application/index\view\gonggao\add.html";i:1556723735;s:88:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\meta.html";i:1554613566;}*/ ?>
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
<title></title>
<meta name="keywords" content="">
<meta name="description" content="">
<script src="/static/lib/jquery/1.9.1/jquery.js"></script>
<script src="/static/lib/layer/2.4/layer.js"></script>
</head>

<body>
<article class="page-container">
	<form class="form form-horizontal" action="" id="form-admin-add" method="post" enctype="multipart/form-data">

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>公告标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入公告标题" id="gg_title" name="gg_title">
			</div>
		</div>

		<!-- <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">附件：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="file" class="input-text" placeholder="" id="filepath" name="filepath">
			</div>
		</div> -->

		<div class="row cl">
			<label class="form-label col-xs-3">附件：</label>
			<div class="formControls col-xs-8">
				<span class="btn-upload form-group">
				<input class="input-text upload-url" type="text" name="uploadfile-2" id="uploadfile-2" readonly style="width:360px">
				<a href="javascript:void();" class="btn btn-primary upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
				<input type="file" multiple name="filepath" class="input-file">
				</span>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>公告内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea class="textarea" id="gg_content" name="gg_content" placeholder="在这里输入你的公告内容">在这里输入你的公告内容</textarea>
			</div>
		</div>

		<div class="row cl" style="margin-top:274px">
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

<style>
	.edui-default .edui-editor{
		position:relative;
		top:-5px;
		left:-5px;
	}
	.edui-default .edui-editor-iframeholder{
		height:200px!important;
	}
</style>
<script src="/ueditor/ueditor.config.js"></script>
<script src="/ueditor/ueditor.all.js"></script>
<script src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<script>
	var ue = UE.getEditor('gg_content',{
		autoHeightEnabled: false,
	});
</script>



<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").validate({
		rules:{
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			if(!$('#gg_title').val())
			{
				layer.msg('公告标题不能为空!',{icon:2,time:1000});
				return;
			}

			// if(!$(".textarea").val())
			// {
			// 	alert($("#gg_content").val());
			// 	layer.msg('公告内容不能为空!',{icon:2,time:1000});
			// 	return;
			// }
			
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