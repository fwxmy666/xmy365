@extends('layout.admin')

<meta name="csrf-token" content="{{ csrf_token() }}">


@section('title',$title)


@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>{{$title}}</span>
    </div>
	
    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">

        	<form action="/admin/goods" method='get'>
        	<div id="DataTables_Table_1_length" class="dataTables_length">
        		<label>
        			显示
        			
	        		<select name="num" size="1" aria-controls="DataTables_Table_1">

	        			<option value="5" 
	        			@if($num == 5) 
	        			selected="selected"
						@endif
	        			>5</option>
	        			<option value="10"
						@if($num == 10) 
	        			selected="selected"
						@endif
	        			>10</option>

	        			<option value="20"
						@if($num == 20) 
	        			selected="selected"
						@endif

	        			>20</option>
	        			
	        		</select> 条数据
	        		<a href="/admin/goods/create" class="btn">

			        		<i class="icol-add">

			        		</i>
		        		<font style="vertical-align: inherit;">
		        			<font style="vertical-align: inherit;">添加商品</font>
		        		</font>
	        		</a>

        		</label>
        	</div>

        	<div class="dataTables_filter" id="DataTables_Table_1_filter">
    			<label>关键字: 
    				<input type="text" name='search' aria-controls="DataTables_Table_1" value="{{$search}}">
    			</label>

    			<button class='btn btn-info'>搜索</button>
    		</div>

    		</form>

        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
            <thead>
                <tr>
                                	
                                    <th>
	                                    <font style="vertical-align: inherit;">
	                                    		<font style="vertical-align: inherit;">ID</font>
	                                    </font>
                                    </th>
                                     <th>
	                                    <font style="vertical-align: inherit;">
	                                    		<font style="vertical-align: inherit;">名称</font>
	                                    </font>
                                    </th>
                                     <th>
	                                    <font style="vertical-align: inherit;">
	                                    		<font style="vertical-align: inherit;">简介</font>
	                                    </font>
                                    </th>
                                     <th>
	                                    <font style="vertical-align: inherit;">
	                                    		<font style="vertical-align: inherit;">价格</font>
	                                    </font>
                                    </th>
                                    <th>
	                                    <font style="vertical-align: inherit;">
	                                    		<font >图片</font>
	                                    </font>
                                    </th>
                                     
                                     <th>
	                                    <font style="vertical-align: inherit;">
	                                    		<font style="vertical-align: inherit;">库存</font>
	                                    </font>
                                    </th>
                                     <th>
	                                    <font style="vertical-align: inherit;">

	                                    		<font style="vertical-align: inherit;">状态</font>
	                                    </font>
                                    </th>
                                    <th>
	                                    <font style="vertical-align: inherit;">
	                                    		<font style="vertical-align: inherit;">操作</font>
	                                    </font>
                                    </th>                    
                                </tr>
            </thead>
            
        <tbody role="alert" aria-live="polite" aria-relevant="all">
				
				@foreach($res as $k => $v)

        		<tr class="
					@if($k % 2 == 1) 
						odd 
					@else
						even
					@endif 

        		" >
                   
                   			<td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{$v->id}}</font>
                                </font>
                            </td>


                        	<td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{$v->gname}}</font>
                                </font>
                            </td>


                        	<td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{$v->info}}</font>
                                </font>
                            </td>


                        	<td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{$v->price}}</font>
                                </font>
                            </td>


                        	<td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
									<div>
										 
	                                    <img  style="width: 130px; height:97px;" src="{{$v->img}}">


											<div>
												@foreach($v->gimgs as $val)
	                                   			<img style="width: 20px; height: 18px" src="{{$val->gimgs}}">
	                                    		@endforeach
											</div>

									</div>
                                   
                                   
                                   

                                    </font>
                                </font>
                            </td>


                        	<td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{$v->stock}}</font>
                                </font>
                            </td>
                            <td>

                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
		                                @if ($v->status == 1)
					                    上架
					                    @else
					                    下架
					                    @endif
			                    	</font>
                                </font>
                            </td>

                   <td class="status" style="width: 260px; height: 100px;" align="center">
	 					@if ($v->status != 1)
	 					<button class='btn btn-primary ajax' value="0" name="status">上架</button>
	 					@else
	 					<button class='btn btn-danger ajax' value="1" name="status">下架</button>
	 					@endif
                    	<a href="/admin/goods/{{$v->id}}/edit">
                    		<button class='btn btn-primary'>修改</button>
                    	</a>
						<form action="/admin/goods/{{$v->id}}" method='post' style='display:inline'>
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<button class='btn btn-danger'>删除</button>
						</form>
		 					

                    </td>
                   

                </tr>
             
                @endforeach

               </tbody></table><div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div>
				
				<style>
					.pagination li{
						float: left;
					    height: 20px;
					    padding: 0 10px;
					    display: block;
					    font-size: 12px;
					    line-height: 20px;
					    text-align: center;
					    cursor: pointer;
					    outline: none;
					    background-color: #444444;
					   
					    text-decoration: none;
					    border-right: 1px solid #232323;
					    border-left: 1px solid #666666;
					    border-right: 1px solid rgba(0, 0, 0, 0.5);
					    border-left: 1px solid rgba(255, 255, 255, 0.15);
					    -webkit-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
					    -moz-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
					    box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);

					}

					.pagination li a{
 					color: #fff;
					}

					.pagination .active{
					background-color: #88a9eb;
					color: #323232;
				    border: none;
				    background-image: none;
				    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
					}

					.pagination .disabled{

						color: #666666;
    					cursor: default;
					}

					

					.pagination{
						margin:0px;
					}
				
				</style>

<div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">

				{{ $res->appends(['num' => $num,'search'=>$search])->links() }} 
               </div>
    </div>
</div>

@endsection
@section('js')
<script>

	$('.mws-form-message').delay(3000).slideUp(1000);



	
	$('.ajax').each(function(){

		$(this).click(function(){

			var tv = $(this).val();

			// console.log(tv);
			
			var id = $(this).parents('tr').find('td').eq(0).text();

			// console.log(id);
			
			var btn = $(this);

			//发送ajax
			$.get('/home/status',{status:tv,id:id},function(data){

		       if(data == 0){

		    	   btn.attr('class','btn btn-primary ajax');
		    	   btn.text('上架');
		    	   btn.val(data);
		    	   btn.parent().prev().text('下架');
		       } else if(data == 1){

		       	   btn.attr('class','btn btn-danger ajax');
		    	   btn.text('下架');
		    	   btn.val(data);
		    	   btn.parent().prev().text('上架');
		       } else{

		       		alert('修改失败!');
		       }
		        
		    })

		})

	})

</script>

@endsection