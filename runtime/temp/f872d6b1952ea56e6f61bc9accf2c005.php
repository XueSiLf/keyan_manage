<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:97:"D:\software\ITtools\myphp_www\PHPTutorial\WWW\ky\public/../application/index\view\user\login.html";i:1556177131;}*/ ?>
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
<h1 class="logo" style="height:96px;"></h1>
<div class="clearfix"></div>
<div class="login-box">
    <div class="login-bg">
        <form id="fm1" class="fm-v clearfix" action="" method="post" autocomplete="off">
            <div id="errorMessage" class="error" style="display:none;">
                <div class="error-massage"></div>
            </div>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="2"><input id="username" name="username" type="text" class="user" placeholder="请输入教师工号" value="" /><input type="text" class="user" style="display: none;" /></td>
                </tr>
                <tr>
                    <!--<td colspan="2"><input id="password" name="password" type="password" class="pw" placeholder="默认身份证后6位，字母大写" /><input type="text" class="pw" style="display: none;" /></td>-->
                    <td colspan="2"><input id="password" name="password" type="password" class="pw" placeholder="请输入教师密码" /><input type="text" class="pw" style="display: none;" /></td>
                </tr>
                <!--<tr id="imageCode" style="display:none;">-->
                <!--<td colspan="2" style="position:relative;">-->
                <!--<input id="errors" name="errors" type="hidden" value="0" />-->
                <!--<input id="imageCodeName" name="imageCodeName" type="text" size="4" class="yzm" placeholder="验证码" /><input type="text" class="yzm" style="display: none;" />-->
                <!--<div style="position:absolute; top:5px; right:0;">-->
                <!--<img width="100" height="40" src='/cas/codeimage' style="cursor: pointer;" onclick="this.src='/cas/codeimage?'+Math.floor(Math.random()*100)" />-->
                <!--</div>-->
                <!--</td>-->
                <!--</tr>-->
                <tr style="display:none;">
                    <td colspan="2" style="height: 15px;"><input id="ckbRememberPP" name="rememberMe" type="checkbox" value="true"/><input type="hidden" name="_rememberMe" value="on"/><label for="ckbRememberPP">记住密码，2周内自动登录</label></td>
                </tr>
                <tr>
                        <!-- <td colspan="2"><input type="button" id="login" value="登录" onclick="javascript:return checkInput();" /></td> -->
                    <td colspan="2"><input type="button" id="login" value="登录" onclick="dologin()" /></td>
                </tr>
                <tr>
                    <!--<td style="display:none"><a href='http://uis.jci.edu.cn/uid/activate' target="_blank">账号激活</a></td>-->
                    <td colspan="2" align="right"><a href='/index.php/index/user/forgetpassword' target="_blank">忘记密码？</a></td>
                </tr>
            </table>
            <input type="hidden" name="lt" value="_c4ABC69AD-68A2-3C8E-7105-032887E6262D_k023C6C50-C586-46CC-4471-D0B6D3EE14B7" />
            <input type="hidden" name="_eventId" value="submit" />
        </form>
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
    if( !('placeholder' in document.createElement('input')) ){
        // $('input[placeholder]').each(function(){
        //     var that = $(this), placeholder= that.attr('placeholder');
        //     if(that.val()===""){
        //         that.hide();
        //         that.next().show().val(placeholder).addClass('login-placeholder');
        //     }
        //     that.next().focus(function(){
        //         if(that.next().val()===placeholder){
        //             that.next().hide().val("").removeClass('login-placeholder');
        //             that.show().val("").focus();
        //         }
        //     });
        //     that.blur(function(){
        //         if(that.val()===""){
        //             that.hide();
        //             that.next().show().val(placeholder).addClass('login-placeholder');
        //         }
        //     });
        // });
    }
</script>
<script type="text/javascript">
//     var errors = 0;
//     var errorTimes = 0;

//     function checkInput() {
        

//         if (errorTimes == -1 || errors < errorTimes) { }
//         else {
//             imageCodeName = document.getElementById("imageCodeName");
//             if (imageCodeName.value=="") {
//                 layer.alert("请输入验证码！",{title:'错误'});
//                 return false;
//             }
//         }

// //	var encodedPassword = cas_md5(password.value);
// //	password.value = encodedPassword;

//         username.value = $.trim(username.value);

//         return true;
//     }

</script>

<script type="text/javascript">
    function checkImageCodeDisplay() {
        // if (errorTimes == -1 || errors < errorTimes) {
        //     document.getElementById("imageCode").style.display = "none";
        // } else {
        //     document.getElementById("imageCode").style.display = "";
        // }
    }

    // checkImageCodeDisplay();
</script>

<script type="text/javascript">
    // function checkErrorMessageDisplay() {
    //     var errorMessage = document.getElementById("errorMessage");
    //     if (errorMessage.children[0].innerHTML == "") {
    //         errorMessage.style.display = "none";
    //     } else {
    //         errorMessage.style.display = "";
    //     }
    // }
    // checkErrorMessageDisplay();
</script>
<script type="text/javascript">
    // function refreshImageCode() {
    //     $("#imageCode").find("img").click();

    //     window.setTimeout(refreshImageCode, 3 * 60 * 1000);
    // }

    // window.setTimeout(refreshImageCode, 3 * 60 * 1000);
</script>

<!--ajax提交-->
<script>
    //登录
    function dologin()
    {
        var $username = $("#username");
        var $password = $("#password");
        //教工号不能为空
        if ($username.val()=="") {
            layer.alert("请输入教工号！",{icon:2,title:'错误'});
            return false;
        }
        //密码不能为空
        if ($password.val()=="") {
            layer.alert("请输入密码！",{icon:2,title:'错误'});
            return false;
        }
        //ajax提交
        $.ajax({
            type: 'POST',
            url: "<?php echo url('checkLogin'); ?>",
            data: $('form').serialize(),
            dataType: 'json',
            success: function(data){
                if (data.status == 1) {
                    // layer.alert(data.message,{title:'正确'});
                    layer.msg('登录成功');
                    // window.location.href="<?php echo url('index/index'); ?>";
                    setTimeout(function(){
                        window.location.href="/index.php/index/index/index";
                    },1000);
                } else {
                    layer.alert(data.message,{icon:2,title:'错误'});
                }
            }
        });
    }
    //用户名控件获取焦点
    $('#username').focus();

    //回车登录
    $('input').keydown(function(e){

        if(e.keyCode == 13)
        {
            dologin();
        }
    })
</script>


</body>
</html>
