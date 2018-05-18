<?php

namespace App\Http\Controllers\ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use App\HomeUsers;
use App\AdminModel\Goods;

class AjaxController extends Controller
{
    
    //后台用户
    public function hajax(Request $request)
    {
    	

        $name = $request->input('username');


        $res = Users::where('username',$name)->first();


        if($res){

            echo 1;
        } else {

            echo 0;
        }

    }


    //前台用户添加
    public function qajax(Request $request)
    {
        $name = $request->input('username');


        $res = HomeUsers::where('username',$name)->first();


        if($res){

            echo 1;
        } else {

            echo 0;
        }
        
    }



    //前台用户注册
    public function zajax(Request $request)
    {
        $name = $request->input('username');


        $res = HomeUsers::where('username',$name)->first();


        if($res){

            echo 1;
        } else {

            echo 0;
        }
        
    }


    //后台的商品上下架
    public function status(Request $request)
    {

        $status = $request->input('status');
        $id = $request->input('id');

        if($status == 1){

            $res['status'] = 0;
        } else {

            $res['status'] = 1;
        }

        
        // echo $res['status'];

        // echo $res,$id;

        $data = Goods::where('id',$id)->update($res);

        if($data){

            echo $res['status'];
        } else {

            echo 'lose';
        }

    }




    //前台用户忘记密码  手机验证
    public function wajax(Request $request)
    {
        
        $name = $request->input('username');
        $phone = $request->input('phone');


        $res = HomeUsers::where('username',$name)->first();


        if($res){

            if($res['phone'] == $phone){
                echo 1;
            } else {
                echo 0;
            }

        } else {

            echo 0;
        }
        
    }


}
