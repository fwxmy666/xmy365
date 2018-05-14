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























	//分类管理
	Route::resource('admin/category', 'Admin\goods\CategoryController');
	//商品管理
	Route::resource('admin/goods', 'Admin\goods\GoodsController');
	//商品上下架ajax验证
	Route::get('home/status','ajax\AjaxController@status');
	
	
});




//后台登录
Route::get('admin/login','login\LoginController@login');
Route::post('admin/dologin','login\LoginController@dologin');
//后台退出
Route::get('admin/signout','login\LoginController@signout');






//前台注册
Route::get('home/register','login\HomeLoginController@register');
//前台登录
Route::get('home/login','login\HomeLoginController@login');

//前台首页
Route::get('/','home\IndexController@index');

//前台列表页
Route::get('home/list','home\IndexController@list');
