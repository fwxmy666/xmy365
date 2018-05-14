<?php

namespace App\Http\Controllers\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeLoginController extends Controller
{
    
	//前台注册
    public function register()
    {
    	return view('login.home.register');
    }


    //前台登录
    public function login()
    {
    	return view('login.home.login');
    }

}
