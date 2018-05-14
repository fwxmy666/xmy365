<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/admin/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admin/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admin/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admin/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admin/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admin/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/themer.css" media="screen">

<title>@yield('title')</title>

</head>

<body>

	<!-- Themer (Remove if not needed) -->  
	
    <!-- Themer End -->

	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/admin/images/xmy-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            <?php

                $res = DB::table('users')->where('uid',session('uid'))->first();

            ?>


            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/admin/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username" style="color:yellow;font-size:16px;">
                        @if($res)
                        {{$res->username}}
                        @else
                        香满圆管理
                        @endif
                    </div>
                    <ul>
                        <li><a href="/admin/pass/{{session('uid')}}">修改密码</a></li>
                        <li><a href="/admin/signout">退出</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="/">
                            <i class="icon-users" ></i>前台首页
                        </a>
                    </li>
                    
                    <li>
                        <a href="#">
                            <i class="icon-users" ></i>用户管理
                        </a>
                        <ul class="closed">
                            <li><a href="/admin/users/create">添加后台用户</a></li>
                            <li><a href="/admin/users">后台用户管理</a></li>
                            <li><a href="/home/users/create">添加前台用户</a></li>
                            <li><a href="/home/users">前台用户管理</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-users" ></i>个人信息管理
                        </a>
                        <ul class="closed">
                            <li><a href="/home/message">浏览前台用户信息</a></li>
                            <li><a href="">积分管理</a></li>
                        </ul>
                    </li>

                     <li>
                        <a href="#">
                            <i class="icon-users" ></i>商品管理
                        </a>
                        <ul class="closed">
                            <li><a href="/admin/goods/create">添加商品</a></li>
                             <li><a href="/admin/goods">浏览商品</a></li>
                            
                        </ul>
                    </li>
                    
                     <li>
                        <a href="#">
                            <i class="icon-users" ></i>订单管理
                        </a>
                        <ul class="closed">
                            
                            <li><a href="/admin/orders">浏览订单</a></li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-users" ></i>分类管理
                        </a>
                        <ul class="closed">
                            <li><a href="/admin/category/create">添加分类</a></li>
                            <li><a href="/admin/category">浏览分类</a></li>
                            
                        </ul>
                    </li>
                        
                     <li>
                        <a href="#">
                            <i class="icon-users" ></i>广告管理
                        </a>
                        <ul class="closed">
                            <li><a href="/admin/user/create">添加广告</a></li>
                            <li><a href="/admin/user">浏览广告</a></li>
                            
                        </ul>
                    </li>
    
                     

                    <li>
                        <a href="#">
                            <i class="icon-users" ></i>友情链接管理
                        </a>
                        <ul class="closed">
                            <li><a href="/admin/user/create">添加链接</a></li>
                            <li><a href="/admin/user">链接管理</a></li>
                            
                        </ul>
                    </li>
                    
                     <li>
                        <a href="#">
                            <i class="icon-users" ></i>品牌管理
                        </a>
                        <ul class="closed">
                            <li><a href="/admin/user/create">添加用户</a></li>
                            <li><a href="/admin/user">用户管理</a></li>
                            
                        </ul>
                    </li>


                    <li>
                        <a href="#">
                            <i class="icon-users" ></i>用户反馈管理
                        </a>
                        <ul class="closed">
                            <li><a href="/admin/users/create">添加用户</a></li>
                            <li><a href="/admin/users">用户管理</a></li>
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#">
                            <i class="icon-users" ></i>商铺管理暂不做
                        </a>
                        <ul class="closed">
                            <li><a href="/admin/user/create">添加用户</a></li>
                            <li><a href="/admin/user">用户管理</a></li>
                            
                        </ul>
                    </li>


                   
                    
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">

            @if(session('msg'))
            <div class="mws-form-message success">
                <ol style="list-style:none;font-size:20px;">
                    <li>{{session('msg')}}</li>
                </ol>
            </div>
            @endif


            @if(session('warning'))
            <div class="mws-form-message error">
                <ol style="list-style:none;font-size:20px;">
                    <li>{{session('warning')}}</li>
                </ol>
            </div>
            @endif


        
        	<!-- Inner Container Start -->
            <div class="container">
                @section('content')

                @show

            </div>
    

            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright 2009-2013 网上购物 All Rights Reserved 重庆香满圆农产品有限公司
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/admin/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admin/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/admin/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admin/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admin/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/admin/jui/jquery-ui.custom.min.js"></script>
    <script src="/admin/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/admin/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/admin/plugins/flot/jquery.flot.min.js"></script>
    <script src="/admin/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/admin/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/admin/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/admin/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/admin/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/admin/plugins/validate/jquery.validate-min.js"></script>
    <script src="/admin/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/admin/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/admin/js/demo/demo.dashboard.js"></script>

    <script type="text/javascript" charset="utf-8" src="/admin/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/admin/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/admin/ueditor/lang/zh-cn/zh-cn.js"></script>

    
    @section('js')

    @show


</body>
</html>