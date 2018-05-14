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

    	<form action="/admin/category" method='post' class="mws-form">
    		<div class="mws-form-inline">

    			


                <div class="mws-form-row">
                    <label class="mws-form-label">父级分类</label>
                    <div class="mws-form-item">

                        <select name='pid' class="small">
                            <option value='0'>请选择</option>

                            
                         	@foreach($res as $k=>$v)
                            <option value='{{$v->tid}}'>{{$v->tname}}</option>
                            @endforeach
                          

                        </select>

                    </div>
                </div>

                <div class="mws-form-row">
    				<label class="mws-form-label">分类名</label>
    				<div class="mws-form-item">
    					<input type="text" name='tname' class="small">
    				</div>
    			</div>

    			
    		</div>
    		<div class="mws-button-row">

    			{{csrf_field()}}
    			<input type="submit" class="btn btn-danger" value="提交">
    			
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
