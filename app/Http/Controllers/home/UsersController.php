<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use App\HomeUsers;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $arr = $request->all();
        $num = $request->input('num');
        $search = $request->input('search');

        $res = HomeUsers::where('username','like','%'.$request->input('search').'%')->
        paginate($request->input('num',10));

        return view('home.users.index',
            ['title'=>'前台用户列表页面','res'=>$res,
              'arr'=>$arr,'num'=>$num,'search'=>$search
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.users.add',['title'=>'前台用户添加页面']);
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
        $this->validate($request, [
            'username' => 'required|unique:homeusers|regex:/^\w{8,16}$/',
            "password" => 'required|regex:/^\S{8,16}$/',
            'repass'=>'same:password',
            'phone'=>'required|regex:/^1[345678]\d{9}$/',
        ],[
            'username.required'=>"用户名不能为空",
            'username.regex'=>'用户名格式不正确',
            'username.unique'=>'用户名已存在',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码格式不正确',
            'repass.same'=>'两次密码不一致',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号格式不正确',
        ]);

        
        $res = $request->except('_token','repass');

        $res['addtime'] = time();

        // dd($res);

        //对密码进行哈希加密
        $res['password'] = Hash::make($request->input('password'));
       
        $data = HomeUsers::insert($res);

        if($data){

            return redirect('/home/users')->with('msg','添加成功');
        } else {

            return back()->with('warning','添加失败');
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
        //
        $res = HomeUsers::where('uid',$id)->first();

        return view('home.users.edit',
            ['title'=>'前台用户的修改页面','res'=>$res]
        );
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
            'username' => 'required|unique:homeusers|regex:/^\w{8,16}$/',
            'phone' => 'required|regex:/^1[345678]\d{9}$/'
        ],[
            'username.required'=>"用户名不能为空",
            'username.regex'=>'用户名格式不正确',
            'username.unique'=>'用户名已存在',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号格式不正确',
        ]);


        $res = $request->except('_token','_method');

        // dd($res);
        // echo $id;die;


        $data = HomeUsers::where('uid',$id)->update($res);

        if($data){

            return redirect('/home/users')->with('msg','修改成功');

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
        $info = HomeUsers::where('uid',$id)->delete();

        if($info){
            return redirect('/home/users')->with('msg','删除成功');
        } else {
            return back()->with('warning','删除失败');
        }
    }

}
