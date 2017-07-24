<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//首页展示
Route::any('index/index','IndexController@index');
//点击图片跳转页面
Route::any('index/img','IndexController@img');
//申请入住
Route::get('index/apply','IndexController@apply');
//意见反馈
Route::get('index/feedback','IndexController@feedback');
//商城
Route::get('index/mall','IndexController@mall');
    //贵族
    Route::any('mall/guizu','MallController@guizu');
    //礼包
    Route::any('mall/gift','MallController@gift');
//music直播间
Route::get('index/music','IndexController@music');
// --------------------------------------------------------------------
//广场
Route::get('square/index','SquareController@index');
    Route::any('square/search','SquareController@search');

//榜单
Route::get('ranking/index','RankingController@index');
    Route::get('ranking/week','RankingController@week');
    Route::get('ranking/rank','RankingController@rank');

//-----------------------------------------------------------------
//登录
Route::get('login/login','LoginController@login');
//执行登录
Route::any('login/login_do','LoginController@login_do');
//注册
Route::get('login/register','LoginController@register');
//执行注册
Route::post('login/register_do','LoginController@register_do');//注意传值方式应该是any或者post

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
