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
        orderBy('id','desc')->
        where('gname','like','%'.$request->input('search').'%')->
        paginate($request->input('num',5));

       
        $num = $request->input('num');
        
        $search = $request->input('search');

        //显示小图
        foreach ($res as $k => $v) {

            $v->gimgs = DB::table('gimgs')->where('gid',$v->id)->get();

        }

      
        return view('admin.goods.index',[
            'title'=>'查看商品',
            'num'=>$num,
            'search'=>$search,
            'request'=>$request,
            'res'=>$res
           
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //查询分类
        // $data = \DB::select("select category.*,concat(path,tid) p from category order by p");

        $data = Category::select(DB::raw('*,concat(path,tid) as paths'))->
        orderBy('paths')->
        get();

        //调用树形结构封装
        type($data);


        
        return view('admin.goods.add', ['title'=>'商品添加', 'data'=>$data]);
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

            'gname' => 'required',
            'info' => 'required',
            'stock' => 'required|regex:/^\d+$/',
            'price' => 'required|regex:/^\d+$/',
            'img' => 'required',
            'gimg' => 'required',
            'gimgs' => 'required',

           
        ],[
            'gname.required' => "商品名称不能为空",         
            'stock.required' => "商品库存不能为空",
            'stock.regex' => "商品库存只能是纯数字",
            'img.required' => "商品封面图片不能为空",
            'price.required' => "商品价格不能为空",
            'price.regex' => "商品价格只能是纯数字",
            'gimg.required' => "商品详情图片不能为空",
            'gimgs.required' => "商品多图片不能为空",
            'info.required' => "商品简介不能为空",


        ]);


        $res = $request->except('_token','gimg','img','gimgs');

        //处理封面图片
        if ($request->hasFile('img')) {

            $gimg = $request->file('img');

            foreach($gimg as $k => $v) {
              
                //随机名
                $name = rand(1111,9999).time();
                //获取后缀
                $suffix = $v->getClientOriginalExtension();
                //移动
                $v->move('./AdminGoods/img/',$name.'.'.$suffix);
               

                $res['img'] = '/AdminGoods/img/'.$name.'.'.$suffix;
             
             
            }

        }
        //获取插入后的值
        $gid = Goods::insertGetId($res);

      //处理详情图片
        if ($request->hasFile('gimg')) {

            $gimg = $request->file('gimg');

            $imgs= [];
            //循环四次
            foreach($gimg as $k => $v) {
                //一维数组
                $gm = [];
                //随机名
                $name = rand(1111,9999).time();
                //获取后缀
                $suffix = $v->getClientOriginalExtension();
                //移动
                $v->move('./AdminGoods/gimg/',$name.'.'.$suffix);
                //放进一维数组
                $gm['gid'] = $gid;

                $gm['gimg'] = '/AdminGoods/gimg/'.$name.'.'.$suffix;
                //二维数组
                $imgs[] = $gm;

            }

        }



        //插入二维数组 图片
        $data = DB::table('gimg')->insert($imgs);

        //处理多图片
        if ($request->hasFile('gimgs')) {

            $gimg = $request->file('gimgs');

            $imgs= [];
            //循环四次
            foreach($gimg as $k => $v) {
                //一维数组
                $gm = [];
                //随机名
                $name = rand(1111,9999).time();
                //获取后缀
                $suffix = $v->getClientOriginalExtension();
                //移动
                $v->move('./AdminGoods/gimgs/',$name.'.'.$suffix);
                //放进一维数组
                $gm['gid'] = $gid;

                $gm['gimgs'] = '/AdminGoods/gimgs/'.$name.'.'.$suffix;
                //二维数组
                $imgs[] = $gm;

            }

        }

        //插入二维数组 多图片
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

      $res = DB::table('goods')->where('id',$id)->first();
      

        if(!$res)
        {
            return back();
        }

        if($request->hasFile('img')){

            //文件名
            $name = rand(1111,9999).'_'.time();

            //获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension(); 

            //移动到哪去
            $path = $request->file('img')->move('./AdminGoods/img/', $name.'.'.$suffix);


        }

        $res = $request->except('_token','_method');

        // dd($res);
        //存到数据表中
        $res['img'] = '/AdminGoods/img/'.$name.'.'.$suffix;

         $data = DB::table('goods')->where('id',$id)->update($res);

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

            foreach ($req as $k=>$v) {

                unlink('.'.$v->gimgs);
            
            }

        }

        $req1 = DB::table('gimg')->where('gid',$id)->get();
       
        $res1 = DB::table('gimg')->where('gid',$id)->delete();

        if ($res1) {
            
            foreach ($req1 as $k=>$v) {

                unlink('.'.$v->gimg);
            
            }

        }

 
        //查询要删除的id数据
        $req = DB::table('goods')->where('id',$id)->first();
     
        $file = $req->img;
              
        $res = DB::table('goods')->where('id',$id)->delete();

        if ($res) {

            //删除本地商品图片
            unlink('.'.$file);

            return redirect('/admin/goods')->with('msg', '操作成功');

        } else {

            return back()->with('warning', '操作失败');
        }
          


    
    }
}
