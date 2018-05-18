<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="/login/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/login/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="/login/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/login/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/login/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="/login/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="/login/js/jquery.js"></script>
	<script type="text/javascript" src="/login/js/plugins.js"></script>

    <!-- Document Title
    ============================================= -->
	<title>{{$title}}</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Content
        ============================================= -->
        <section id="content">
			
            <div class="content-wrap nopadding" align="center">

                <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: #444;"></div>

                <div class="section nobg full-screen nopadding nomargin">
                    <div class="container vertical-middle divcenter clearfix">

                        

                        <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px;">
                            <div class="panel-body" style="padding: 40px;">

								@if(session('err'))
				                    <li class="error" style='color:red;font-size:17px;list-style:none'>{{session('err')}}</li>
				                @endif

                                @if(session('msg'))
                                    <li class="error" style='color:green;font-size:17px;list-style:none'>{{session('msg')}}</li>
                                @endif

                                <form id="login-form" name="login-form" class="nobottommargin" action="/admin/dologin" method="post">
                                    <h3>登录你的账号</h3>

                                    <div class="col_full">
                                        <label for="login-form-username">用户名:</label>
                                        <input type="text" id="login-form-username" name="username" value="" class="form-control not-dark" />
                                    </div>
                                    <br/>

                                    <div class="col_full">
                                        <label for="login-form-password">密码:</label>
                                        <input type="password" id="login-form-password" name="password" value="" class="form-control not-dark" />
                                    </div>
                                    <br/>

                                    <div class="col_full nobottommargin">
                                    	{{csrf_field()}}
                                        <button class="button button-3d button-black nomargin" id="login-form-submit">登录</button>
                                    	
                                    </div>
                                </form>

                                <div class="line line-sm"></div>

                                
                            </div>
                        </div>

                        <div class="row center dark">
                        	<small>重庆香满圆农产品有限公司</small>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- #content end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="/login/js/functions.js"></script>

    <script>
    //表单提交信息错误时显示和消失
    $('.error').delay(3000).slideUp(1000);
	</script>
</body>
</html>