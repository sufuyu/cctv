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
//首页
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
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
