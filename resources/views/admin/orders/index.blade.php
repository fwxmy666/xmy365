@extends('layout.admin')

<meta name="csrf-token" content="{{ csrf_token() }}">
@section('title',$title)



@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>{{$title}}</span>
    </div>


    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">

        <form action="/admin/orders" method="get">
            <div id="DataTables_Table_1_length" class="dataTables_length">
            	<label>显示 
            		<select size="1" name="num" aria-controls="DataTables_Table_1">

            			
    	        		<option value="5" 
                        @if($num == 5) selected="selected"
                        @endif
                        >5</option>
    	        		<option value="10"
                        @if($num == 10) selected="selected"
                        @endif
                        >10</option>
    	        		<option value="20"
                        @if($num == 20) selected="selected"
                        @endif
                        >20</option>
            		</select> 条数据
            	</label>
            </div>
            <div class="dataTables_filter" id="DataTables_Table_1_filter">
            	<label>关键字: 
            		<input type="text" name="search" aria-controls="DataTables_Table_1" value="{{$search}}">
            	</label>

                <button class="btn btn-info">搜索</button>
            </div>    
        </form>

        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
            <thead>
                <tr role="row">
                	<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 150px;">订单号</th>

                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">收货人</th>


					<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 250px;">收货地址</th>
            
                	

                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 50px;">数量</th>
            
                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 102px;">总金额</th>

                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 102px;">下单时间</th>

                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 102px;">状态</th>

                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 102px;">操作</th>
                </tr>
            </thead>
            
        	<tbody role="alert" aria-live="polite" aria-relevant="all">
        	
			@foreach($res as $k=>$v)
			
        		<tr class="
        			@if($k % 2 == 1)
        				odd
        			@else
        			    even
        			@endif
        		">
                    <td class=" " align="center">{{$v->oid}}</td>
                    <td class="uname" align="center">{{$v->oname}}</td>
                    <td class="uname" align="center">{{$v->address}}</td>
                    <td class="uname" align="center">{{$v->cnt}}</td>
                    <td class="uname" align="center">{{$v->price}}</td>
                    <td class="uname" align="center">{{date('Y-m-d H:i:s',$v->addtime)}}</td>
                    <td class=" " align="center">
                    	@if($v->status == 0)
                    	未发货
                    	@elseif($v->status == 1)
                    	等待收货
						@else($v->status == 2)
                    	@endif
                    </td>
                    
                    <td class=" " align="center">
						<a href="/admin/orders/{{$v->oid}}/edit" class="btn btn-primary">修改</a>
						<a href="" class="btn btn-primary">订单详情</a>
						<a href="" class="btn btn-primary">发货</a>
						
                        <form action="/admin/orders/{{$v->oid}}" method="post" style="display:inline;">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                            <button class="btn btn-danger">删除</button>
                        </form>

                    </td>

                </tr>
            
			@endforeach
                
            </tbody>
        </table>
        <div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div>

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
			{{$res->appends(['num' => $num,'search'=>$search])->links()}}
           
        </div>
    </div>
    </div>
</div>




@endsection


@section('js')

<script>

	//表单提交信息的显示和消失
	$('.mws-form-message').delay(3000).slideUp(1000);

</script>

@endsection