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


    	<form class="mws-form" action="/admin/orders/{{$res->oid}}" method="post" enctype="multipart/form-data">
    		<div class="mws-form-inline">

    			<div class="mws-form-row">
    				<label class="mws-form-label">订单号</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name="oid" readonly value="{{$res->oid}}">
    				</div>
    			</div>

                <div class="mws-form-row">
                    <label class="mws-form-label">下单时间</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="addtime" readonly value="{{$res->addtime}}">
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">收货人</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="oname" value="{{$res->oname}}">
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">收货地址</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="address" value="{{$res->address}}">
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">总金额</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="price" value="{{$res->price}}">
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">联系电话</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="phone" value="{{$res->phone}}">
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">留言</label>
                    <div class="mws-form-item">
                        <textarea name="msg" class="common-textarea" cols="30" style="width: 98%;" rows="10">{{$res->msg}}</textarea>
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