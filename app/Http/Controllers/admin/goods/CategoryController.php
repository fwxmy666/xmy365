<?php

namespace App\Http\Controllers\admin\goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\AdminModel\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = Category::select(DB::raw('*,concat(path,tid) as paths'))->
        orderBy('paths')->
        where('tname','like','%'.$request->input('search').'%')->

        paginate($request->input('num',10));
             
        //调用封装
        type($res);
  
        $num = $request->input('num');
        
        $search = $request->input('search');


        return view('admin.category.index',[
            'title'=>'分类列表',
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

        //查找父类下的子类
        $res = Category::select(DB::raw('*,concat(path,tid) as paths'))->
        orderBy('paths')->
        get();

        // dd($res);

        //调用封装
        type($res);

        $data = Category::where('pid',0)->get();

        //显示表单
        return view('admin.category.add', ['title'=>'添加分类', 'res'=>$res]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        //表单验证 ，表单不能为空
         $this->validate($req, [

            'tname' => 'required',
           
        ],[

            'tname.required'=>"分类名不能为空"
           
        ]);
        
        $res = $req->except('_token');

        //添加顶级分类
        if($res['pid'] == '0') {

            $res['path'] = '0,';

        } else {

            $data = Category::where('tid',$res['pid'])->first();


            $res['path'] = $data->path.$data->tid.',';

        }

        $data = Category::insert($res);

        if ($data) {

            return redirect('/admin/category')->with('msg', '操作成功');

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
        $info = Category::where('tid',$id)->first();

        $res = Category::select(DB::raw('*,concat(path,tid) as paths'))->
        orderBy('paths')->
        get();

        //调用封装
        type($res);

        return view('admin.category.edit', ['title'=>'修改分类', 'info'=>$info, 'res'=>$res]);

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
        $res = $request->except('_token','_method');

        $data = Category::where('tid',$id)->update($res);

        if ($data) {

            return redirect('/admin/category')->with('msg', '操作成功');

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
        
        $res = Category::where('tid',$id)->first();

        $path = $res->path.$res->tid;  //0,2,7

        Category::where('path','like',$path.',%')->delete();

        //删除本身
        $data = Category::where('tid',$id)->delete();

        if ($data) {

            return redirect('/admin/category')->with('msg', '操作成功');

        } else {

            return back()->with('warning', '操作失败');
        }

    }
}
