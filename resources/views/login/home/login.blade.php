<!DOCTYPE html>
<html style="width:100%;height:100%;background:#FFF;">
  <head>
  	<title>登录香满圆 | 香满圆-西部农产品电商平台,重庆菜园坝水果市场荣誉出品</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/homelogin/css/style_1.css">

<link rel="stylesheet" type="text/css" href="/homelogin/css/easydialog_1.css">

<link rel="stylesheet" type="text/css" href="/homelogin/css/login_1.css">
  </head>
  
  <body>
  	

<nav>
    <div class="outer">
        <div class="header">
        	<a href="/">
            	<div class="logo gutter"><img src="/homelogin/picture/logo_1.png"/></div>
            </a>
        </div>
    </div>
</nav>


 	<div class="bg-container">
		<div class="container add-bg w-1250">
		    <div class="login-wrap clearfix">
		        <!-- <div class="code-wrapp">
		            <div class="item-wrap"> <img src="/homelogin/picture/b2cwx_1.jpg" alt=""><p>扫码关注微信端</p></div>
		            <div class="item-wrap"> <img src="/homelogin/picture/b2cpc_1.png" alt=""><p>扫码进入移动端</p></div>
		        </div> -->
		        <div class="login clearfix">
		        	<div class="word-login">
			        	<div class="img-code"><i class="iconfont">&#xe681;</i></div>
					    <div class="tips"><span class="inner-tips"><i class="iconfont">&#xe6e7;</i>扫码登录更安全</span>
					    </div>

						@if(session('err'))
			            <div class="mws-form-message error">
			                <ol style="list-style:none;font-size:17px;color:red;">
			                    <li>{{session('err')}}</li>
			                </ol>
			            </div>
			            @endif

					    <form action="/home/dologin" method="post" id="myform">
						    <div class="login-group">
						        <p>用户名</p>
						        <p><span class="i-control"><i class="iconfont">&#xe66f;</i></span><input type="text" name="username" value=""></p>
						    </div>
						    <div class="login-group">
						        <p>密码</p>
						        <p><span class="i-control"><i class="iconfont psword">&#xe601;</i></span><input type="password" name="password" value=""></p>
						    </div>
						    <div class="login-group">
						        <p>验证码</p>
						        <p>
						        	<span class="i-control">
						        	<i class="iconfont psword">&#xe601;</i>
							        </span>
							        <input type="password" name="captcha" value="" style="width:60%;">
							        <img src="/home/captcha" style="position:absolute;right:0px;" alt="验证码" title='验证码' onclick='this.src=this.src+="?1"'>
						    	</p>

						    </div>
						    
						    <div class="login-des clearfix">
						        <div class="col-50"><a href="/home/register">免费注册</a></div>
						        <div class="col-50"><a href="/home/forget">忘记密码?</a></div>
						    </div>
						    <div class="login-des">
						    	{{csrf_field()}}
						    	<button type="submit" class="login-btn">登 录</button>
						    </div>
					    </form>

		        	</div>
		        	
				</div>
		    </div>
		</div>
	</div>
 <footer>
    <div class="footer-auto L-foot">
       	<p>香满圆旗下：重庆菜园坝农产品市场集群（线下） |  B2C电商平台 | 社区超市订购平台（线上）</p>
		 <p class="mt10">Copyright  2009-2013 网上购物 All Rights Reserved 重庆香满圆农产品有限公司</p>
		 <p class="mt10">增值电信业务经营许可证：渝B2-20120004</p>
		 <p class="mt10"><a href="http://www.miitbeian.gov.cn" style="color: white;text-decoration: underline">渝ICP14001106号-8</a></p>
    </div>
</footer>

<script type="text/javascript" src="/homelogin/js/jquery-1.9.1.min_1.js"></script>
<!-- <script type="text/javascript" src="/homelogin/js/public_1.js"></script> -->

<script type="text/javascript" src="/homelogin/js/easydialog.min_1.js"></script>

<script type="text/javascript" src="/homelogin/js/laypage_1.js"></script>
<![if lt IE 9]>
  <script src="/homelogin/js/json_1.js" charset="utf-8"></script>
<![endif]>

<script src="/homelogin/js/json_1.js" charset="utf-8"></script>
<script src="/homelogin/js/5b0b424a2c984f5abcf1f3caed48eef9.js" charset="utf-8"></script>
<!-- 搜索js -->
<script type="text/javascript" src="/homelogin/js/goods_search_1.js"></script>

<script type="text/javascript" src="/homelogin/js/jquery.qrcode.min_1.js"></script>

<script type="text/javascript">
  	
  	//表单提交信息错误时显示和消失
    $('.mws-form-message').delay(3000).slideUp(1000);
 
</script>
</body>
</html>
