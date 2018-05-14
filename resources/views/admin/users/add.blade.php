@extends('layout.admin')


@section('title',$title)


@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">

		@if (count($errors) > 0)
		    <div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li style="color:blue;font-size:17px;list-style:none;">{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif


    	<form class="mws-form" action="/admin/users" method="post" enctype="multipart/form-data">
    		<div class="mws-form-inline">

    			<div class="mws-form-row">
    				<label class="mws-form-label" style="font-size:17px;">用户名</label>
    				<div class="mws-form-item">
    					<input type="text" class="small ipt1" name="username">
    					<span style="margin-left:50px;font-size:17px;" class="sp1"></span>
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label" style="font-size:17px;">密码</label>
    				<div class="mws-form-item">
    					<input type="password" class="small ipt2" name="password">
    					<span style="margin-left:50px;font-size:17px;" class="sp2"></span>
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label" style="font-size:17px;">确认密码</label>
    				<div class="mws-form-item">
    					<input type="password" class="small ipt3" name="repass">
    					<span style="margin-left:50px;font-size:17px;" class="sp3"></span>
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label" style="font-size:17px;">权限</label>
    				<div class="mws-form-item clearfix">
    					<ul class="mws-form-list inline">
    						<li>
    							<input type="radio" name="auth" value="1" checked> 
    							<label>普通管理员</label>
    						</li>
    						<li>
    							<input type="radio" name="auth" value="0">
    							<label>超级管理员</label>
    						</li>
    					</ul>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">

    			{{csrf_field()}}
    			<input type="submit" value="提交" class="btn btn-danger">
    		</div>
    	</form>
    </div>    	
</div>

@endsection



@section('js')

<script>
    //表单提交信息错误时显示和消失
    $('.mws-form-message').delay(3000).slideUp(1000);


    //后台注册页面ajax
    

    var UV;
    var PV;
    var RV;

    
    //用户名验证
    $('.ipt1').focus(function(){

        $('.sp1').text(' *请输入8~16位用户名').css('color','black');

    });



    $('.ipt1').blur(function(){

        var tv = $(this).val();

    
        //正则
        var reg = /^\w{8,16}$/;

        //判断
        if(!reg.test(tv)){
        
            $('.sp1').text(' *用户名格式不正确').css('color','red');
            
            UV = false;

        } else {
        
            //发送ajax
            $.get('/admin/hajax',{username:tv},function(data){

                if(data == '1'){
                    $('.sp1').text(' *用户名已经存在').css('color','red');
                    
                    UV = false;
                } else {
                    $('.sp1').text(' √').css('color','green');
                    
                    UV = true;
                }
                
                
            })
            
        }



    });





    //密码验证
    $('.ipt2').focus(function(){
        
        $('.sp2').text(' *请输入8~16位密码').css('color','black');
    })
    
    
    $('.ipt2').blur(function(){
    
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
    $('.ipt3').focus(function(){
        
        $('.sp3').text(' *再次输入密码').css('color','black');
    })
    
    
    $('.ipt3').blur(function(){
    
        //获取值
        var rpv = $(this).val();
        
        //获取输入密码的值
        var pv = $('.ipt2').val();


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


    //提交事件
    $(':submit').eq(0).click(function(){

        if(UV && PV && RV){

            return true;
        }
        
        return false;
        
    })
</script>

@endsection