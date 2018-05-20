<?php

namespace App\Http\Controllers\home\goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class GoodsController extends Controller
{
    

    public function index($id)
    {
    	$types = DB::table('category')->get();

    	//递归调用
    	$types = $this->checkTypeDate($types);

        $data = DB::table('goods')->where('id',$id)->value('img');
        $res = DB::table('goods')->where('id',$id)->first();
        $gimgs = DB::table('gimgs')->where('gid',$id)->get();
        $gimg = DB::table('gimg')->where('gid',$id)->get();
        $goods = DB::table('goods')->limit(12)->orderBy('id','asc')->get();
        $good = DB::table('goods')->limit(3)->orderBy('id','desc')->get();
        return view('home.goods.xiangqing', [
                'title'=>'商品详情',
                'data'=>$data,
                'gimgs'=>$gimgs,
                'gimg'=>$gimg,
                'res'=>$res,
                'goods'=>$goods,
                'good'=>$good,
                'types'=>$types   

                ]);
    }

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






















}
