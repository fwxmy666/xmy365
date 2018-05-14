<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orders;
use App\Users;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $num = $request->input('num');
        $search = $request->input('search');

        $res = Orders::where('oid','like','%'.$request->input('search').'%')->
        paginate($request->input('num',5));
        return view('admin.orders.index',['title'=>'后台订单管理',
            'res'=>$res,
            'num'=>$num,
            'search'=>$search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
        $res = Orders::where('oid',$id)->first();
        return view('admin.orders.edit',['title'=>'订单修改页面','res'=>$res]);
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
        //
        $this->validate($request, [
            'oname' => 'required|regex:/^\S{1,24}$/'
        ],[
            'oname.required'=>"收货人不能为空",
            'oname.regex'=>'收货人格式不正确',
            
        ]);


        $res = $request->except('_token','_method');

        // dd($res);
        // echo $id;die;


        $data = Orders::where('oid',$id)->update($res);

        if($data){

            return redirect('/admin/orders')->with('msg','修改成功');

        } else {

            return back()->with('warning','修改失败');

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
        //
        $info = Orders::where('oid',$id)->delete();

        if($info){
            return redirect('/admin/orders')->with('msg','删除成功');
        } else {
            return back()->with('warning','删除失败');
        }
    }
}
