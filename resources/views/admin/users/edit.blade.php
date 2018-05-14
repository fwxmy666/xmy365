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


    	<form class="mws-form" action="/admin/users/{{$res->uid}}" method="post" enctype="multipart/form-data">
    		<div class="mws-form-inline">

    			<div class="mws-form-row">
    				<label class="mws-form-label">用户名</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name="username" value="{{$res->username}}">
    				</div>
    			</div>
    			
    			<div class="mws-form-row">
    				<label class="mws-form-label">权限</label>
    				<div class="mws-form-item clearfix">
    					<ul class="mws-form-list inline">
    						<li>
                                <input type="radio" name="auth" value="1"
                                 @if($res->auth == 1) checked 
                                 @endif
                                 > <label>普通管理员</label>
                            </li>
    						<li>
                                <input type="radio" name="auth" value="0" 
                                 @if($res->auth == 0) checked 
                                 @endif
                                > <label>超级管理员</label>
                            </li>
    					</ul>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
                {{method_field('PUT')}}
    			{{csrf_field()}}
    			<input type="submit" value="修改" class="btn btn-danger">
    		</div>
    	</form>
    </div>    	
</div>



@endsection



@section('js')

<script>

	$('.mws-form-message').delay(3000).slideUp(1000);

</script>

@endsection