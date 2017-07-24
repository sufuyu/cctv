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
Route::get('index/index','IndexController@index');
//申请入住
Route::get('index/apply','IndexController@apply');
//意见反馈
Route::get('index/feedback','IndexController@feedback');
//商城
Route::get('index/mall','IndexController@mall');
//music直播间
Route::get('index/music','IndexController@music');
// --------------------------------------------------------------------
//广场
Route::get('square/index','SquareController@index');
//榜单
Route::get('ranking/index','RankingController@index');





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
