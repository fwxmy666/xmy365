<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>{{$title}}</title>
    <link rel="icon" href="/login/loginSpecial/images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/login/loginSpecial/images/favicon.ico" type="image/x-icon"/>
    <link href="/login/loginSpecial/css/default.css" rel="stylesheet" type="text/css" />
    <!--必要样式-->
    <link href="/login/loginSpecial/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="/login/loginSpecial/css/demo.css" rel="stylesheet" type="text/css" />
    <link href="/login/loginSpecial/css/loaders.css" rel="stylesheet" type="text/css" />
    <script src="/login/loginSpecial/js/jquery-2.1.1.min.js"></script>

</head>
<body style="background:url('/login/loginSpecial/img/ssss.jpg')">
<div class='login'>

    
    <div class='login_title'>
        <span>管理员登录</span>
    </div>
    
    @if(session('err'))
        <li class="error" style='color:red;font-size:17px;list-style:none'>{{session('err')}}</li>
    @endif

    @if(session('msg'))
        <li class="error" style='color:green;font-size:17px;list-style:none'>{{session('msg')}}</li>
    @endif

    <form action="/admin/dologin" method="post">
        <div class='login_fields'>
            <div class='login_fields__user'>
                <div class='icon'>
                    <img alt="" src='/login/loginSpecial/img/user_icon_copy.png'>
                </div>
                <input name="username" placeholder='用户名' maxlength="16" class="username" type='text' autocomplete="off" value=""/>
            </div>
            <div class='login_fields__password'>
                <div class='icon'>
                    <img alt="" src='/login/loginSpecial/img/lock_icon_copy.png'>
                </div>
                <input name="password" class="passwordNumder" placeholder='密码' maxlength="16" type='password' autocomplete="off">
            </div>
            
            <div class='login_fields__submit'>
                {{csrf_field()}}
                <input type='submit' value='登录'>
            </div>
        </div>
    </form>
    
    
</div>

<div class="OverWindows"></div>
<link href="/login/loginSpecial/layui/css/layui.css" rel="stylesheet" type="text/css" />
<!--<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>-->
<script type="text/javascript" src="/login/loginSpecial/js/jquery-ui.min.js"></script>
<script type="text/javascript" src='/login/loginSpecial/js/stopExecutionOnTimeout.js?t=1'></script>
<script src="/login/loginSpecial/layui/layui.js" type="text/javascript"></script>
<script src="/login/loginSpecial/js/Particleground.js" type="text/javascript"></script>
<!-- <script src="loginSpecial/js/Treatment.js" type="text/javascript"></script> -->
<script src="/login/loginSpecial/js/jquery.mockjax.js" type="text/javascript"></script>
<script src="/login/loginSpecial/js/controlLogin.js" type="text/javascript"></script>

<script>
    // alert($);
    //表单提交信息错误时显示和消失
    $('.error').delay(3000).slideUp(1000);
</script>
</body>
</html>
