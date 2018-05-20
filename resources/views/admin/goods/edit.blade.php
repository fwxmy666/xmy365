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
		                <li style='color:blue;font-size:17px;list-style:none'>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

    	<form action="/admin/goods/{{$info->id}}" method='post' class="mws-form" enctype="multipart/form-data">
    		<div class="mws-form-inline">


    		 

    			<div class="mws-form-row">
    				<label class="mws-form-label">商品名称</label>
    				<div class="mws-form-item">
    					<input type="text" name='gname' class="small" value='{{$info->gname}}'>
    				</div>
    			</div>
                <div class="mws-form-row">
                    <label class="mws-form-label">商品简介</label>
                    <div class="mws-form-item">
                        <textarea name="info" id="" cols="30" value="" rows="10">{{$info->info}}</textarea>
                    </div>
                </div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">商品定价</label>
    				<div class="mws-form-item">
    					<input type="text" name='price' class="small" value='{{$info->price}}'>
    				</div>
    			</div>
    			 <div class="mws-form-row">
                    <label class="mws-form-label">商品封面图片</label>
                    <div class="mws-form-item">
                        <img style="width: 100px; height: 50px;" src="{{$info->img}}">
                        <input type="file" name='img' multiple readonly="readonly" style="width: 100%; padding-right: 85px;" class="fileinput-preview" placeholder="No file selected...">
                        
                    </div>
                </div>
              
                

    			<div class="mws-form-row">
    				<label class="mws-form-label">商品库存</label>
    				<div class="mws-form-item">
    					<input type="text" name='stock' class="small" value='{{$info->stock}}'>
    				</div>
    			</div>
    			
    			


               

    			
    		</div>
    		<div class="mws-button-row">

    			{{csrf_field()}}

                {{method_field("PUT")}}
    			<input type="submit" class="btn btn-danger" value="修改">
    			
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
