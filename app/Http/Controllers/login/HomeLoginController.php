<?php

namespace App\Http\Controllers\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use App\HomeUsers;
use Ucpaas;
use Gregwar\Captcha\CaptchaBuilder;  
use Session;
use Mail;

class HomeLoginController extends Controller
{
    
	//前台注册页面
    public function register()
    {
    	return view('login.home.register');
    }


    //前台注册验证
    public function check(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|unique:homeusers|regex:/^\w{8,16}$/',
            "password" => 'required|regex:/^\S{8,16}$/',
            'repass'=>'same:password',
            'phone'=>'required|regex:/^1[345678]\d{9}$/',
            'code'=>"required",
        ],[
            'username.required'=>"用户名不能为空",
            'username.regex'=>'用户名格式不正确',
            'username.unique'=>'用户名已存在',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码格式不正确',
            'repass.same'=>'两次密码不一致',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号格式不正确',
            'code.required'=>'手机验证码不能为空',
        ]);

        if($request->input('code') != session('code')){

            return back()->with('warning','手机验证码不正确');
        }

        $res = $request->except('_token','repass','code');

        $res['addtime'] = time();

        // echo session('code');
        // dd($res);

        //对密码进行哈希加密
        $res['password'] = Hash::make($request->input('password'));
       
        $data = HomeUsers::insert($res);

        if($data){

            return redirect('/home/success');
        } else {

            return back()->with('warning','注册失败');
        }
    }



    //注册时手机发送的验证码
    public function yzm()
    {

        require_once('./homelogin/lib/Ucpaas.php');


        //初始化必填
        // $options['accountsid']='863b17f6a3846c92edd0a837088db3b5';
        $options['accountsid']='41e2b652d9c2e6109b3490a38c9ca424';
        // $options['token']='2eb1f6c22332de9eb5ccaf64f157baa8';
        $options['token']='f2aca7dd874c734fc4e9270c5a22d35a';

        //初始化 $options必填
        $ucpass = new Ucpaas($options);

        //开发者账号信息查询默认为json或xml

        $ucpass->getDevinfo('xml');

        $code = rand(111111,999999);

        $toNumber = $_POST['number'];


        // $_SESSION['code'] = $code;
        session(['code'=>$code]);

        // $appId = '985fddd141454a978d48cf9dd4cccfd5';
        $appId = '410a713c09ed4122bee61523bd33e9cc';

        // $to = "13911373063";
        // $templateId = "30047";
        $templateId = "320677";
        
        $param=$code;

        $ucpass->templateSMS($appId,$toNumber,$templateId,$param);

        echo $code;


    }




    //前台注册成功的页面
    public function success()
    {
        return view('login.home.success');
    }


    
    //前台登录页面
    public function login()
    {
    	return view('login.home.login');
    }



    //前台登录的图片验证码
    public function captcha()
    {
        //生成验证码图片的Builder对象，配置相应属性  
        $builder = new CaptchaBuilder;  
        //可以设置图片宽高及字体  
        $builder->build($width = 100, $height = 36, $font = null);
        //获取验证码的内容  
        $phrase = $builder->getPhrase();  
        //把内容存入session  
        // Session::flash('captcha', $phrase);

        // Session::put('captcha',$phrase);


        session(['captcha'=>$phrase]);


        // $request->session()->put('code',$pharse);


        //生成图片  
        header("Cache-Control: no-cache, must-revalidate");  
        header('Content-Type: image/jpeg');  
        $builder->output();
    }



    //前台登录验证过程
    public function dologin(Request $request)
    {
        
        $captcha = $request->input('captcha');

        if($captcha != session('captcha')){

            return back()->with('err','验证码不正确');
        }

        $res = $request->input('username');

        $data = HomeUsers::where('username',$res)->first();

        if(!$data){

            return back()->with('err','用户名或者密码错误!!!');

        }

        $pass = $request->input('password');

        //哈希加密进行检测
        if(!Hash::check($pass,$data->password)){

            return back()->with('err','用户名或者密码错误!!!');
        }

    
        //存储session
        session(['homeuid'=>$data->uid]);

        return redirect('/');
    }



    //前台退出
    public function signout(Request $request)
    {
        //删除session
        $request->session()->forget('homeuid');
        // var_dump(session('uid'));die;

        return redirect('/');
    }




    //前台忘记密码页面
    public function forget()
    {
        return view('login.home.forget');
    }


    //前台忘记密码提交验证过程  发送邮件
    public function doforget(Request $request)
    {

        $data = $request->except('_token');

        if($data['code'] != session('code')){

            return back()->with('warning','手机验证码不正确');
        }


        $res = HomeUsers::where('username',$data['username'])->first();


        if($res){

            if($res['phone'] == $data['phone']){

                //存储session
                session(['xxoo'=>$res->uid]);

                // dd(session('xxoo'));

                //发送邮件
                Mail::send('login.home.email', $data, function($message) use($data)
                {
                    $message->from(env('MAIL_USERNAME'), '香满圆服务中心');

                    $message->to($data['email'], $data['username'])->subject('尊敬的用户，请重置您的密码！');
                });

                

                return redirect('/home/appealpass');

            }

            return back()->with('warning','用户名或手机号码不正确');
           
        } else {

            return back()->with('warning','用户名或手机号码不正确');
        }
        
    }



    //前台申请密码等待验证页面
    public function appealpass()
    {
        return view('login.home.appealpass');
    }




    //前台设置新密码页面
    public function forgetpass(Request $request)
    {
        // dd($request->session()->all());
        $value = $request->session()->get('xxoo');
        // dd($value);

        $users = [];

        if($value){
            $users = HomeUsers::where('uid',$value)->first();
        }
        return view('login.home.forgetpass',['users'=>$users]);
    }




    //前台设置新密码申请验证
    public function updatepass(Request $request, $id)
    {
        $this->validate($request, [
            "password" => 'required|regex:/^\S{8,16}$/',
            'repass'=>'same:password',
        ],[
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码格式不正确',
            'repass.same'=>'两次密码不一致',
        ]);



        $res['password'] = Hash::make($request->input('password'));
       
        $data = HomeUsers::where('uid',$id)->update($res);

        if($data){

            return redirect('/home/successpass');
        } else {

            return back()->with('warning','修改失败');
        }

    }



    //前台设置新密码成功页面
    public function successpass(Request $request)
    {
        //删除session
        $request->session()->forget('xxoo');

        return view('login.home.successpass');
    }

}
