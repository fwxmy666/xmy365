<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    //分类处理1
    public function checkTypeDate($data, $pid=0)
    {
    	$newArr = array();
    	//获取数据
    	foreach ($data as $k => $v) {
    		# code...
    		
    		if ($v->pid == $pid) {
    			# code...
    			$newArr[$v->tid] = $v;

    			$newArr[$v->tid]->zi = $this->checkTypeDate($data, $v->tid);	
    			
    		}
    		
    	}

    	return $newArr;
    }

    //分类处理2 
    public static function getTypeMessage($pid)
    {
        $res = DB::table('category')->where('pid',$pid)->get();

        $sub_type = [];
        foreach($res as $k => $v){

            $v->type = self::getTypeMessage($v->tid);

            $sub_type[] = $v;
        }

        return $sub_type;

    }

    public function index()
    {


    	$types = DB::table('category')->get();

    	//递归调用
    	$types = $this->checkTypeDate($types);
    
    	// 进口水果
        $goods = DB::table('goods')->limit(10)->orderBy('id','desc')->get();


    	//甄选商品
        $good = DB::table('goods')->limit(5)->orderBy('id','asc')->get();


    	return view('home.index',[
    		'title'=>'香满园农产品商城', 
    		'types'=>$types,
            'goods'=>$goods,
            'good'=>$good
    		]);
	}
}
