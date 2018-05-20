<?php

namespace App\Http\Controllers\home\goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GoodsListController extends Controller
{
    

    public function index($id)
    {

    	//查询顶级分类
    	$types = DB::table('category')->where('pid',0)->get();
    	
    	//查询当前分类
    	$type = DB::table('category')->where('tid',$id)->first();
    	
    	//处理数组
    	$res = explode(',', $type->path);
    	// dd($arr);
		
    	$arr[] = $id;
  	
    	$newarr = getzileisub($arr,$id);
    	
    	$goods = DB::table('goods')->whereIn('cid',$arr)->get();

    	//当 点击子类  时 触发， 当点击顶级分类选中
    	$ding = $res[1] ? $res[1] : $id;   	

    	$data = array(

    		'title'=>'商品分类列表',
    		'types'=>$types,
    		'type'=>$type,
    		'ding'=>$ding,
    		'goods'=>$goods
    		

    		);


    	return view('home.goods.list')->with($data);

    }









}
