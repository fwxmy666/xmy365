<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
    	return view('home.index',['title'=>'香满园农产品商城']);
    }

    public function list()
    {
    	return view('home.goods.list',['title'=>'商品列表页']);
    }
}
