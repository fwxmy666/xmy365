<!DOCTYPE html>
<html>
  <head>
  	<title>重置密码 | 香满圆-西部农产品电商平台,重庆菜园坝水果市场荣誉出品</title>
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
	            <div class="col-50 active"><span><i class="iconfont">&#xe62e;</i></span>填写信息</div>
	            <div class="col-50"><span><i class="iconfont">&#xe62f;</i></span>完成</div>
	        </div>
	    </div>

		
		@if(session('warning'))
		<center>
	        <div class="mws-form-message error">
	            <ol style="color:red;list-style:none;font-size:17px;">
	                <li>{{session('warning')}}</li>
	            </ol>
	        </div>
        </center>
        @endif

	    <form action="/home/doforget" method="post" id="myform"  style="background-color: #EFEFEF;">
	    <div class="register clearfix w-1250"  style="background-color: #fff;">
	        <div class="form-group col-50 clearfix">
	            <label for="name">用户名</label><div class="wrap-input clearfix"><input type="text" placeholder="请输入用户名" name="username" id="ipt1">
	            </div><span class="sp1" style="margin-left:35px;"></span>
	        </div>
	        <div class="form-group col-50 clearfix">
	            <label for="mobile_email">邮箱</label><div class="wrap-input clearfix"><input type="text" placeholder="请输入邮箱" name="email" id="ipt2"></div>
	            <span class="sp2" style="margin-left:35px;"></span>
	        </div>
	        <div class="form-group col-50 clearfix">
	            <label for="mobile_phone">手机号码</label><div class="wrap-input clearfix"><input type="text" placeholder="请输入手机号码" name="phone" id="ipt4"></div>
	            <span class="sp4" style="margin-left:35px;"></span>
	        </div>
	        <div class="form-group col-50 clearfix">
	            <label for="mobile_code" style="line-height:40px;">手机验证码</label>
	            <div class="wrap-input clearfix">
	            	<input type="text" placeholder="请输入验证码" name="code" id="ipt5">
	            	<button type="button" class="btn-get" style="font-size:12px;">获取验证码</button>
	            </div>
	            <span class="sp5" style="margin-left:220px;"></span>
	        </div><br/>
	       
	        
	        <div class="form-group col-50 clearfix">
	        		{{csrf_field()}}
	            <div class="wrap-input wp-add">
	            	<button type="submit" class="toregister" id="register">点击申请</button>
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


	var UV;
    var PV;
    var NV;

    
    //用户名验证
    $('#ipt1').focus(function(){

        $('.sp1').text(' *请输入您注册的用户名').css('color','black');

    });


 
    $('#ipt1').blur(function(){

        var tv = $(this).val();

        //发送ajax
        $.get('/home/zajax',{username:tv},function(data){

            if(data == '0'){
                
                $('.sp1').text(' *用户名不正确').css('color','red');
                
                UV = false;
            } else {
				
				$('.sp1').text(' √').css('color','green');
                
                UV = true;
  
            }
            
            
        })
            
    
    });




    //邮箱验证
    $('#ipt2').focus(function(){
        
        $('.sp2').text(' *请输入正确的邮箱').css('color','black');
    })
    
    
    $('#ipt2').blur(function(){
    
        //获取输入的邮箱
        var email = $(this).val();

        
        //正则
        var reg = /^\w+@[0-9a-z]{2,6}\.(com|cn|com.cn)$/;
        
        //判断
        if(!reg.test(email)){
        
            $('.sp2').text(' *邮箱格式不正确').css('color','red');
            
            PV = false;
        } else {
        
            $('.sp2').text(' √').css('color','green');
            
            PV = true;
        }
        
        
    })



    //手机验证
    $('#ipt4').focus(function(){
        
        $('.sp4').text(' *请输入已注册的手机号码').css('color','black');
    })
    
    
    $('#ipt4').blur(function(){
    
        //获取输入的手机号
        var nv = $(this).val();

        var name = $('#ipt1').val();
        //发送ajax
        $.get('/home/wajax',{username:name,phone:nv},function(data){

            if(data == '0'){
                
                $('.sp4').text(' *手机号码不正确').css('color','red');
                
                NV = false;
            } else {
				
				$('.sp4').text(' √').css('color','green');
                
                NV = true;
  
            }

        })

        
    })


    

	//手机验证码发送
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});


	var phoneCode;
	$('.btn-get').click(function(){

		$(this).attr('disabled','disabled');

		var djs = 30;

		var info = setInterval(function(){

			$('.btn-get').text(djs-- + '秒后重新获取');

			if(djs < 0){

				clearInterval(info);
				$('.btn-get').removeAttr('disabled');
				$('.btn-get').text('获取验证码');
			}
			
		},1000)


		//获取手机号码
		var phone = $('#ipt4').val();

		//发送ajax
		$.post('/home/yzm',{number:phone},function(data){

			phoneCode = data;
		})

	})



	//手机验证码
	var CV;

    $('#ipt5').focus(function(){
        
        $('.sp5').text(' *请输入手机验证码').css('color','black');
    })


    $('#ipt5').blur(function(){
    
        //获取输入的验证码
        // console.log($(this).val());
        console.log(phoneCode);
        
        //判断
        if($(this).val() != phoneCode){
        
            $('.sp5').text(' *手机验证码不正确').css('color','red');
            
            CV = false;
        } else {
        
            $('.sp5').text(' √').css('color','green');
            
            CV = true;
        }
        
        
    })





	//提交的验证
	$('#register').click(function(){
		
		if(UV && PV && NV && CV){

        	return true;
        }
        
        return false;

	})

</script>
</body>
</html>
