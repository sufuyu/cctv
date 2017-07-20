<?php

namespace App\Http\Controllers;


class IndexController extends Controller
{   
	//首页
    public function index()
    {
        return view('index.index');
    }
    //申请入住
    public function Apply()
    {
    	return view('index.index-1');
    }
    //意见反馈
    public function feedback()
    {
    	return view('index.index-2');
    }
}    