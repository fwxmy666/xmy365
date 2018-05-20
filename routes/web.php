<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//后台控制
Route::group(['middleware'=>'adminlogin'],function(){
	//后台首页
	Route::get('admin/index','admin\IndexController@index');
	//后台用户增删改查
	Route::resource('admin/users','admin\UsersController');
	//后台用户ajax验证
	Route::get('admin/hajax','ajax\AjaxController@hajax');
	//后台用户修改密码
	Route::get('admin/pass/{id}','login\LoginController@pass');
	//后台用户修改密码验证
	Route::post('admin/changePass/{id}','login\LoginController@changePass');


	//前台用户增删改查
	Route::resource('home/users','home\UsersController');
	//前台用户ajax验证
	Route::get('home/qajax','ajax\AjaxController@qajax');

	//前台用户个人信息的增删改查
	Route::resource('home/message','home\MessageController');

	//后台订单详情
	Route::resource('admin/orders','admin\OrdersController');






















//*****ZhuZhaoChuan******

	// 后台分类管理
	Route::resource('admin/category', 'Admin\goods\CategoryController');

	//后台商品管理
	Route::resource('admin/goods', 'Admin\goods\GoodsController');

	//后台商品上下架ajax验证
	Route::get('home/status','ajax\AjaxController@status');
	
});
//*****ZhuZhaoChuan******
//
//
	//前台首页
	Route::get('/','home\IndexController@index');

	//前台商品详情
	Route::get('home/goods/{id}', 'home\goods\GoodsController@index');

	//前台列表页
	Route::get('home/list/{id}', 'home\goods\GoodsListController@index');

















//后台登录
Route::get('admin/login','login\LoginController@login');
//后台登录的验证过程
Route::post('admin/dologin','login\LoginController@dologin');
//后台退出
Route::get('admin/signout','login\LoginController@signout');






//前台注册
Route::get('home/register','login\HomeLoginController@register');
//前台注册验证
Route::post('home/check','login\HomeLoginController@check');           // 111
//前台注册ajax
Route::get('home/zajax','ajax\AjaxController@zajax');                  // 222
//前台手机验证码发送
Route::post('home/yzm','login\HomeLoginController@yzm');               // 333
//前台注册完成页面
Route::get('home/success','login\HomeLoginController@success');        // 444
//前台登录的图片验证码
Route::get('home/captcha','login\HomeLoginController@captcha');        // 555



//前台登录
Route::get('home/login','login\HomeLoginController@login');

//前台登录验证
Route::post('home/dologin','login\HomeLoginController@dologin');       // 666

//前台退出
Route::get('home/signout','login\HomeLoginController@signout');        // 777

//前台忘记密码
Route::get('home/forget','login\HomeLoginController@forget');          // 888

//前台忘记密码提交申请
Route::post('home/doforget','login\HomeLoginController@doforget');      // ccc

//前台用户重置密码页面
Route::get('home/forgetpass','login\HomeLoginController@forgetpass');  // 999

//前台忘记密码ajax
Route::get('home/wajax','ajax\AjaxController@wajax');                  // aaa
//前台申请密码页面
Route::get('home/appealpass','login\HomeLoginController@appealpass');  // bbb
//前台设置新密码提交申请
Route::post('home/updatepass/{id}','login\HomeLoginController@updatepass');  // ddd
//前台设置新密码成功页面
Route::get('home/successpass','login\HomeLoginController@successpass');  // eee













//前台控制
Route::group([],function(){

	// Route::get('message/add','');

});

