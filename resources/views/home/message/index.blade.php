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

        <form action="/home/message" method="get">
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
                	<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 30px;">ID</th>

                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">用户名</th>

                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 103px;">昵称</th>

                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 33px;">性别</th>

                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 105px;">地址</th>

                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 105px;">邮箱</th>

                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 105px;">头像</th>
            
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
                    <td class=" " align="center">{{$v->mid}}</td>
                    <td class="uname" align="center">{{$v->username}}</td>
                    <td class="" align="center">{{$v->mname}}</td>
                    <td class="" align="center">
                        @if($v->sex == 0)
                        女
                        @elseif($v->sex == 1)
                        男
                        @else
                        保密
                        @endif
                    </td>
                    <td class="" align="center">{{$v->address}}</td>
                    <td class="" align="center">{{$v->email}}</td>
                    <td class="" align="center">
                        <img src="{{$v->header}}" alt="" width="80">
                    </td>
                    <td class=" ">
						<a href="" class="btn btn-primary">修改</a>
						
                        <form action="" method="post" style="display:inline;">
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