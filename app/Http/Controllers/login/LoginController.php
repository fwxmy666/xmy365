<?php

namespace App\Http\Controllers\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use Hash;

class LoginController extends Controller
{
    
    //后台登录
    public function login()
    {
    	return view('login.admin.login',['title'=>'后台登录页面']);
    }


    //后台登录验证
    public function dologin(Request $request)
    {
    	
    	$res = $request->input('username');

    	$data = Users::where('username',$res)->first();

    	if(!$data){

    		return back()->with('err','用户名或者密码错误!!!');

    	}

    	$pass = $request->input('password');

    	//哈希加密进行检测
    	if(!Hash::check($pass,$data->password)){

    		return back()->with('err','用户名或者密码错误!!!');
    	}

    
    	//存储session
    	session(['uid'=>$data->uid]);

    	return redirect('admin/index');

    }


    //后台退出
    public function signout(Request $request)
    {
    	//删除session
    	$request->session()->forget('uid');
    	// var_dump(session('uid'));die;

    	return redirect('admin/login');
    }



    //后台修改密码
    public function pass($id)
    {	
    	$res = Users::where('uid',$id)->first();

    	return view('login.admin.pass',['title'=>'修改密码','res'=>$res]);
    }


    //后台修改密码验证
    public function changePass(Request $request, $id)
    {
    	//表单验证
    	$this->validate($request, [
            "password" => 'required|regex:/^\S{8,16}$/',
            'repass'=>'same:password',
        ],[
            'password.required'=>'新密码不能为空',
            'password.regex'=>'新密码格式不正确',
            'repass.same'=>'两次新密码不一致',
        ]);


    	//获取旧密码
    	$pass = $request->input('oldpass');

    	$res = Users::where('uid',$id)->first();

    	//哈希
    	if(!Hash::check($pass,$res->password)){

    		return back()->with('warning','输入的旧密码错误');
    	}

    	$foo['password'] = Hash::make($request->input('password'));

    	$data = Users::where('uid',$id)->update($foo);

    	if($data){

    		return redirect('admin/login')->with('msg','修改成功!');
    	}

    }



}

