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

        <form action="/admin/goods" method='post' class="mws-form" enctype='multipart/form-data'>
            <div class="mws-form-inline">



            <div class="mws-form-row">
                    <label class="mws-form-label">商品分类</label>
                    <div class="mws-form-item">

                        <select name='cate_id' class="small">
                            <option value='0'>请选择</option>
                    
                            @foreach($res as $k => $v)
                            <option value='{{$v->tid}}'>{{$v->tname}}</option>
                           
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="mws-form-row">




                    <label class="mws-form-label">商品名</label>
                    <div class="mws-form-item">
                        <input type="text" name='brand' class="small">
                    </div>
                </div>


                

                <div class="mws-form-row">
                    <label class="mws-form-label">商家</label>
                    <div class="mws-form-item">
                        <input type="text" name='company' class="small">
                    </div>
                </div>

               

                <div class="mws-form-row">
                    <label class="mws-form-label">定价</label>
                    <div class="mws-form-item">
                        <input type="text" name='price' class="small">
                    </div>
                </div>


                <div class="mws-form-row">
                    <label class="mws-form-label">商品详情</label>
                    <div class="mws-form-item">
                        <input type="file" name='gimg[]' multiple readonly="readonly" style="width: 100%; padding-right: 85px;" class="fileinput-preview" placeholder="No file selected...">
                        <textarea name="text" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">库存</label>
                    <div class="mws-form-item">
                        <input type="text" name='stock' class="small">
                    </div>
                </div>
               
                <div class="mws-form-row">
                    <label class="mws-form-label">商品图片</label>
                    <div class="mws-form-item">
                        

                        <script id="editor" name='content' type="text/plain" style="width:900px;height:400px;"></script>
                    </div>
                </div>

            
                <div class="mws-form-row">
                    <label class="mws-form-label">状态</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input type="radio" name='status' value='1' checked> <label>上架</label></li>
                            <li><input type="radio" name='status' value='0'> <label>下架</label></li>
                            
                        </ul>
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


    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');

    /*setTimeout(function(){

        $('.mws-form-message').slideUp(1000);

    },3000)
*/
    $('.mws-form-message').delay(3000).slideUp(1000);

</script>

@endsection