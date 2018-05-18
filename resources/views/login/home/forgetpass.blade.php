<!DOCTYPE html>
<html>
  <head>
  	<title>设置新密码 | 香满圆-西部农产品电商平台,重庆菜园坝水果市场荣誉出品</title>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" type="text/css" href="/homelogin/css/style_1.css">

<link rel="stylesheet" type="text/css" href="/homelogin/css/easydialog_1.css">
<link rel="stylesheet" type="text/css" href="/admin/bootstrap/css/bootstrap.min.css">


<link rel="stylesheet" href="/homelogin/css/drag_1.css">
<link rel="stylesheet" type="text/css" href="/homelogin/css/register_1.css">
<style type="text/css">
	.grey{color:#999;}
	.form-group{height:auto;}
	 label.error ,label.ext-error{color: red;text-align:left;width:100%;}
	 .easyDialog_wrapper .easyDialog_content{height:auto;}
</style>
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


  	<div class="ad-img"></div>
 	<div class="container"  style="background-color: #fff;">
	    <div class="register w-1250">
	        <div class="step clearfix  gutter-mar">
	            <div class="col-50 active"><span><i class="iconfont">&#xe62e;</i></span>设置新密码</div>
	            <div class="col-50"><span><i class="iconfont">&#xe62f;</i></span>完成</div>
	        </div>
	    </div>

		@if (count($errors) > 0)
		<center>
		    <div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li style="color:red;font-size:17px;list-style:none;">{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		</center>
		@endif

		@if(session('warning'))
		<center>
	        <div class="mws-form-message error">
	            <ol style="color:red;list-style:none;font-size:17px;">
	                <li>{{session('warning')}}</li>
	            </ol>
	        </div>
        </center>
        @endif


        
	    <form action="/home/updatepass/{{$users->uid}}" method="post" id="myform"  style="background-color: #EFEFEF;">
	    <div class="register clearfix w-1250"  style="background-color: #fff;">
	        <div class="form-group col-50 clearfix">
	            <label for="name">用户名</label><div class="wrap-input clearfix"><input type="text" name="username" id="ipt1" value="{{$users->username}}" disabled="disabled">
	            </div><span class="sp1" style="margin-left:35px;"></span>
	        </div>
	        <div class="form-group col-50 clearfix">
	            <label for="password">新密码</label><div class="wrap-input clearfix"><input type="password" placeholder="请输入新密码" name="password" id="ipt2"></div>
	            <span class="sp2" style="margin-left:35px;"></span>
	        </div>
	        <div class="form-group col-50 clearfix">
	            <label for="again_password">确认密码</label><div class="wrap-input clearfix"><input type="password" placeholder="请确认密码" name="repass" id="ipt3"></div>
	            <span class="sp3" style="margin-left:35px;"></span>
	        </div><br/>
	        
	        <div class="form-group col-50 clearfix">
	        		{{csrf_field()}}
	            <div class="wrap-input wp-add">
	            	<button type="submit" class="toregister" id="register">点击修改</button>
	            </div>
	        </div>
	    </div>
	    </form>
	</div>
	
<div class="base">
    <div class="virtue">
        <ul class="virtue-ul">
            <li class="virtue-li"><div class="xta"><p class="tit">香满圆</p><p class="details">100%保证商品新鲜度，及时送达顾客手中</p></div></li>
            <li class="virtue-li"><div class="xtb"><p class="tit">所有商家经官方认证</p><p class="details">官方认证，所有商家具有合法个体经营身份或企业资质</p></div></li>
            <li class="virtue-li remove"><div class="xtc"><p class="tit">网站担保交易</p><p class="details">网站官方担保交易，收到商品后再结算，有问题随时投诉</p></div></li>
            <div style="clear: both;"></div>
        </ul>
    </div>
</div>

<footer>
    <div class="footer-auto">
       	<p>香满圆旗下：重庆菜园坝农产品市场集群（线下） |  B2C电商平台 | 社区超市订购平台（线上）</p>
		 <p class="mt10">Copyright  2009-2013 网上购物 All Rights Reserved 重庆香满圆农产品有限公司</p>
		 <p class="mt10">增值电信业务经营许可证：渝B2-20120004</p>
		 <p class="mt10"><a href="http://www.miitbeian.gov.cn" style="color: white;text-decoration: underline">渝ICP14001106号-8</a></p>
    </div>
   <div class="beian">
        <ul class="beian-ul">
           <a href="http://www.cqgseb.cn/ztgsgl/WebSiteMonitoring/WebUI/XFWQ/Index.aspx?xh=17" target="_blank"> <li class="beian-li"><img src="/homelogin/picture/biean1_1.png"/></li></a>
           <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=50010302000205" target="_blank"><li class="beian-li"><img src="/homelogin/picture/biean2_1.png"/></li></a>
           <a href="http://113.207.120.45:7010/wljyzbs/index.html?sfdm=120150115151516296646#/index.html?sfdm=120150115151516296646" target="_blank"><li class="beian-li"><img src="/homelogin/picture/biean3_1.png"/></li></a>
           <a href="http://www.cqtransit.com/" target="_blank"><li class="beian-li"><img src="/homelogin/picture/biean4_1.png"/></li></a>
           <a href="http://www.cqgyjt.com/" target="_blank"><li class="beian-li"><img src="/homelogin/picture/biean5_1.png"/></li></a>
            <div style="clear: both;"></div>
        </ul>
    </div> 
</footer>


<script type="text/javascript" src="/homelogin/js/jquery-1.9.1.min_1.js"></script>
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>


<script>

	//表单提交信息错误时显示和消失
	$('.mws-form-message').delay(3000).slideUp(1000);



    var PV;
    var RV;
    
    //密码验证
    $('#ipt2').focus(function(){
        
        $('.sp2').text(' *请输入8~16位密码').css('color','black');
    })
    
    
    $('#ipt2').blur(function(){
    
        //获取输入的密码
        var pv = $(this).val();

        
        //正则
        var reg = /^\S{8,16}$/;
        
        //判断
        if(!reg.test(pv)){
        
            $('.sp2').text(' *密码格式不正确').css('color','red');
            
            PV = false;
        } else {
        
            $('.sp2').text(' √').css('color','green');
            
            PV = true;
        }
        
        
    })



    //确认密码
    $('#ipt3').focus(function(){
        
        $('.sp3').text(' *再次输入密码').css('color','black');
    })
    
    
    $('#ipt3').blur(function(){
    
        //获取值
        var rpv = $(this).val();
        
        //获取输入密码的值
        var pv = $('#ipt2').val();


         //正则
        var reg = /^\S{8,16}$/;

        //判断
        if(!reg.test(rpv)){
        
            $('.sp3').text(' *密码格式不正确').css('color','red');
            
            RV = false;

            return;
        }
        
    

        if(rpv != pv){
        
            $('.sp3').text(' *两次密码不一致').css('color','red');

            RV = false;
            
        } else {
        
            $('.sp3').text(' √').css('color','green');

            RV = true;
            
        }

    })



	
	
	//提交的验证
	$('#register').click(function(){
		
		if(PV && RV){

        	
        	return true;
        }

        return false;

	})

</script>
</body>
</html>
