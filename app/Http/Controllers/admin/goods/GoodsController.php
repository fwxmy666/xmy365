<?php

namespace App\Http\Controllers\admin\goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModel\Goods;
use App\AdminModel\Category;
use DB;
use Hash;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = Goods::select()->
        orderBy('id')->
        where('brand','like','%'.$request->input('search').'%')->
        paginate($request->input('num',5));

        $num = $request->input('num');
        
        $search = $request->input('search');

        return view('admin.goods.index',[
            'title'=>'查看商品',
            'num'=>$num,
            'search'=>$search,
            'request'=>$request,
            'res'=>$res,
            
           
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $res = Category::select(DB::raw('*,concat(path,tid) as paths'))->
        orderBy('paths')->
        get();

        //调用封装
        type($res);
        
        return view('admin.goods.add', ['title'=>'商品添加', 'res'=>$res]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'brand' => 'required',
            'price' => 'required|regex:/^\d{1,10}$/',
            'company' => 'required',
            'stock' => 'required',
            'content' => 'required'
           
        ],[
            'brand.required' => "商品名称不能为空",
            'price.required' => "定价不能为空",
            'price.regex' => "定价请使用数字格式不超过10位",
            'company.required' => "生产厂家不能为空",
            'stock.required' => "库存不能为空",
            'content.required' => "详情不能为空"


        ]);

        $res = $request->except('_token','gimg');

        $gid = Goods::insertGetId($res);

        //处理图片
        if ($request->hasFile('gimg')) {

            $gimg = $request->file('gimg');

            $imgs= [];
            //循环四次
            foreach($gimg as $k => $v){
                //一维数组
                $gm = [];
                //随机名
                $name = rand(1111,9999).time();
                //获取后缀
                $suffix = $v->getClientOriginalExtension();
                //移动
                $v->move('./AdminGoods',$name.'.'.$suffix);
                //放进一维数组
                $gm['gid'] = $gid;

                $gm['gimgs'] = '/AdminGoods/'.$name.'.'.$suffix;
                //二维数组
                $imgs[] = $gm;

            }

        }

        //插入二维数组
        $data = DB::table('gimgs')->insert($imgs);

        if ($data) {

            return redirect('/admin/goods')->with('msg', '操作成功');

        } else {

            return back()->with('warning', '操作失败');
        }

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Goods::where('id',$id)->first();

        return view('admin.goods.edit', ['title'=>'商品修改', 'info'=>$info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'content' => 'required'
           
        ],[

            'content.required' => "图片不能为空"

        ]);

      $res = Goods::where('id',$id)->first();

        if(!$res)
        {
            return back();
        }

        // //删除
        // $data = '@'.unlink('.'.$res->content);

        if($request->hasFile('content')) {

            //文件名
            $name = rand(1111,9999).'_'.time();

            //获取后缀
            $suffix = $request->file('content')->getClientOriginalExtension(); 

            //移动到哪去
            $path = $request->file('content')->move('./admin/goodcontent/images/', $name.'.'.$suffix);
           
        }
       
        $res = $request->except('_token','_method');

        
        $res['content'] = "<p><img src='/admin/goodcontent/images/$name.$suffix' title='$name.$suffix' alt='$name.$suffix'/></p>";


        $data = Goods::where('id',$id)->update($res);

        if ($data) {

            return redirect('/admin/goods')->with('msg', '操作成功');

        } else {

            return back()->with('warning', '操作失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $req = DB::table('gimgs')->where('gid',$id)->get();
       
        $res = DB::table('gimgs')->where('gid',$id)->delete();

        if ($res) {
            foreach($req as $k=>$v){

                unlink('.'.$v->gimgs);
            
            }

        }
        
        //查询要删除的id数据
        $req = DB::table('goods')->where('id',$id)->first();
        //删除商品图片路径
        $req = $req->content;

        //正则匹配
        $ptn = '/\/.*?\.(jpg|jpeg|png|gif)/';

          // 执行匹配
        preg_match($ptn, $req, $arr);

        $file = $arr[0];

        $req = Goods::where('id',$id)->delete();

        if ($req) {

            //删除本地商品图片
            unlink('.'.$file);

            return redirect('/admin/goods')->with('msg', '操作成功');

        } else {

            return back()->with('warning', '操作失败');
        }
         
    }
    
}
