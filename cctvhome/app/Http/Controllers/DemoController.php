<?php

namespace App\Http\Controllers;


class DemoController extends Controller
{   
	//展示
    public function index(){
        return view('demo.index');
    }
    //添加
    public function add(Request $request){
        $arr=$request->input();
        unset($arr['_token']);
        $query=DB::table('user')->insert($arr);
        if ($query) {
        	return redirect('show');
        }
    }
    //展示
    public function show(){
        $arr=DB::table('user')->get();
        return view('demo.show')->with('arr',$arr);
    }
    //删除
    public function del($id){
    	$a=DB::table('user')->where("user_id",'=',$id)->delete();
        if ($a) {
        	return redirect('show');
        }
    }
    public function up($id){
    	$arr=DB::table('user')->where("user_id",'=',$id)->first();
    }
}
