<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:106:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\public/../application/index\view\user\forgetpassword.html";i:1556353248;}*/ ?>
<!doctype html>
<html>
<head>
    <meta http-equiv="x-ua-compatible" content="IE=edge"/>
    <meta name="renderer" content="webkit"/>
    <meta charset="utf-8">
    <title>景德镇陶瓷大学科研管理系统 - 用户登录</title>
    <meta name="description" content="cas" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="/static/login.css" rel="stylesheet" type="text/css">
    <script src="/static/lib/jquery/1.9.1/jquery.js"></script>
    <script src="/static/lib/layer/2.4/layer.js"></script>
</head>
<body>
<!--<div class="top-line"></div>-->
<a href="/index.php/index/index/index"><h1 class="logo" style="height:96px;"></h1></a> 
<div class="clearfix"></div>
<div class="login-box1">
    <div class="login-bg1" style="width:500px;height:400px;border:1px solid #000;margin:0 auto;">
        <div style="width:470px;margin:0 auto;position:relative;top:20px;">
            <h3 style="font-size: 20px;
            text-align: center;
            margin-bottom: 20px;
        ">重置密码</h3>
            <style>
                form{
                    text-align:center;
                }
            </style>
            <form id="fm1" class="fm-v clearfix" action="" method="post" autocomplete="off">
                <p style="padding: 0px 0 4px 26px;
                text-align: left;
                padding: 0 46px 0 -55px;
                font-size: 16px;
                /* text-align: left; */">邮箱</p>
                <p><input style="display: inline-block;
                    width: 420px;
                    height: 40px;
                    padding-left: 10px;
                    font-size: 16px;
                    border-radius: 4px;
                    border: 1px solid #495057;
                    outline: none;" type="text" value="" id="email" name="email" placeholder="请输入您在系统中绑定的邮箱"></p>
                <p style="padding: 15px 0 4px 26px;
                text-align: left;
                font-size: 16px;">新的密码</p>
                <p><input style="display: inline-block;
                    width: 420px;
                    height: 40px;
                    padding-left: 10px;
                    font-size: 16px;
                    border-radius: 4px;
                    border: 1px solid #495057;
                    outline: none;" type="password" value="" id="password" name="password" placeholder="密码必须为6~30个字符"></p>
                <p style="padding: 10px 0 4px 26px;
                text-align: left;
                font-size: 16px;">邮箱验证码</p>
                <p><input style="margin-left: 1px;
                    display: inline-block;
                    width: 317px;
                    height: 40px;
                    padding-left: 10px;
                    font-size: 16px;
                    border-radius: 4px;
                    border: 1px solid #495057;
                    outline: none;" type="text" value="" id="email_yzm" name="email_yzm" placeholder="请输入邮箱验证码">
                    <input type="button" style="margin-left: -4px;
                    display: inline-block;
                    width: 105px;
                    height: 40px;
                    padding-left: 10px;
                    padding-right: 33px;
                    font-size: 16px;
                    border-radius: 4px;
                    border: 1px solid #495057;
                    outline: none;
                    background: #6c757d;color:#fff;cursor: pointer;" value="发送验证码">
                </p>
                <p style="text-align: left;
                margin-top: 20px;
                padding: 0 0 0 -114px;
                padding-left: -32px;
                padding-left: 77px;">
                    <input type="button" style="margin-left: -4px;
                    display: inline-block;
                    width: 105px;
                    height: 40px;
                    padding-left: 10px;
                    padding-right: 10px;
                    font-size: 16px;
                    border-radius: 4px;
                    border: 1px solid #28a745;
                    outline: none;
                    background: #28a745;color:#fff;cursor: pointer;" value="提交" onclick="dologin()">
                    <input type="reset" style="margin-left: 100px;
                    display: inline-block;
                    width: 105px;
                    height: 40px;
                    padding-left: 10px;
                    padding-right: 10px;
                    font-size: 16px;
                    border-radius: 4px;
                    border: 1px solid #db1212;
                    outline: none;
                    background: #db1212;color:#fff;cursor: pointer;" value="重置">
                </p>
            </form>
        </div>
    </div>
</div>
<div id="footer">版权所有：copyright © 2019 景德镇陶瓷大学信息工程学院</div>

<!--<script type="text/javascript" src='./static/jquery/jquery-3.3.1.min.js'></script>-->

<script type="text/javascript">
    $(document).ready(function(){
        $('#username').focus();
        if ($('#username').val() != "") {
            $('#password').focus();
        }
    });
</script>

<!--ajax提交-->
<script>
    //登录
    function dologin()
    {
        var $email = $("#email");
        var $password = $("#password");
        var $email_yzm = $("#email_yzm");
        //邮箱不能为空
        if (!$email.val()) {
            layer.alert("请您输入邮箱！",{icon:2,title:'错误'});
            return false;
        }
        //密码不能为空
        if (!$password.val()) {
            layer.alert("请您输入新的密码！",{icon:2,title:'错误'});
            return false;
        }
        //邮箱验证码不能为空
        if (!$email_yzm.val()) {
            layer.alert("请您输入邮箱验证码！",{icon:2,title:'错误'});
            return false;
        }
        //ajax提交
        $.ajax({
            type: 'POST',
            url: "<?php echo url('forgetpassword'); ?>",
            data: $('form').serialize(),
            dataType: 'json',
            success: function(data){
                if (data.status == 1) {
                    // layer.alert(data.message,{title:'正确'});
                    layer.msg('重置密码成功，即将自动登录');
                    // window.location.href="<?php echo url('index/index'); ?>";
                    setTimeout(function(){
                        window.location.href="/index.php/index/index/index";
                    },1000);
                } else {
                    alert('fsf');
                    layer.alert(data.message,{icon:2,title:'错误'});
                }
            }
        });
    }
    //用户名控件获取焦点
    $('#username').focus();

    //回车注册
    $('input').keydown(function(e)
    {
        if(e.keyCode == 13)
        {
            dologin();
        }
    })
</script>


</body>
</html>
