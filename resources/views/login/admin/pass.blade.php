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

        
    	<form class="mws-form" action="/admin/changePass/{{$res->uid}}" method="post" enctype="multipart/form-data">
    		<div class="mws-form-inline">

    			<div class="mws-form-row">
    				<label class="mws-form-label">旧密码</label>
    				<div class="mws-form-item">
    					<input type="password" class="small" name="oldpass" value="">
                        <img src="/admin/images/close.png" alt="" class="yan">
    				</div>
    			</div>

                <div class="mws-form-row">
                    <label class="mws-form-label">新密码</label>
                    <div class="mws-form-item">
                        <input type="password" class="small" name="password" value="">
                        <img src="/admin/images/close.png" alt="" class="yan">
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">确认密码</label>
                    <div class="mws-form-item">
                        <input type="password" class="small" name="repass" value="">
                        <img src="/admin/images/close.png" alt="" class="yan">
                    </div>
                </div>
    			
    			
    		</div>
    		<div class="mws-button-row">
    			{{csrf_field()}}
    			<input type="submit" value="修改" class="btn btn-danger">
    		</div>
    	</form>
    </div>    	
</div>



@endsection



@section('js')

<script src="/admin/js/libs/jquery-3.2.1.min.js"></script>

<script>

	$('.mws-form-message').delay(3000).slideUp(1000);



    //眼睛的显示和不显示
    $('.yan').click(function(){
        
        if($(this).prev().attr('type') == 'password'){

            $(this).prev().attr('type','text');
            $(this).attr('src','/admin/images/open.png');
        } else {

            $(this).prev().attr('type','password');
            $(this).attr('src','/admin/images/close.png');
        }
    
    })

</script>

@endsection