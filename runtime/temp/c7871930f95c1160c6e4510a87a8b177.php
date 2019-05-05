<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:95:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\public/../application/index\view\zlcg\add.html";i:1556983459;s:88:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\application\index\view\public\meta.html";i:1554613566;}*/ ?>
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
	<form class="form form-horizontal" id="form-admin-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>专利申请号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入专利申请号" id="zl_apply_num" name="zl_apply_num">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>专利权名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入专利权名称" id="zl_name" name="zl_name">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>专利权类型：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入专利权类型" id="zl_type" name="zl_type">
			</div>
		</div>

		<!-- <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>所属单位:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="所属单位" id="ht_leader" name="zl_">
			</div>
		</div> -->

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>专利权所有人:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入专利权所有人" id="zl_owner" name="zl_owner">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>专利发明人:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入专利发明人" id="zl_inventor" name="zl_inventor">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>专利申请时间：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" id="datetimepicker" name="zl_apply_time" placeholder="请选择专利申请时间">
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
	$("#form-admin-add").validate({
		rules:{
            ht_id:{
                required:true,
            },
			ht_name:{
				required:true,
			},
			ht_leader:{
				required:true,
			}
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
                    }else{
						if(data.msg)
						{
							layer.msg(data.msg,{icon:2,time:1000});
						}else{
							layer.msg('添加失败!',{icon:2,time:1000});
						}
					}
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('添加失败!',{icon:2,time:1000});
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
    //失去焦点时,检查合同名称是否重复
    $("#ht_name").blur(function(){
        // $.ajax({
        //     type: 'GET',
        //     url: "checkJgName",
        //     data:{name:$(this).val()},
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