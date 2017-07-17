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
Route::get('demo/index','DemoController@index');
Route::get('demo/show',"DemoController@show");
Route::get('demo/del/{id}',"DemoController@Del",function($id){
	return $id;
});
Route::post('demo/add',"DemoController@Add");
Route::get('demo/up/{$id}',"DemoController@up",function($id){
	return $id;
});
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
