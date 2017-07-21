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
    	return view('index.apply');
    }
    //意见反馈
    public function feedback()
    {
    	return view('index.feedback');
    }
    //商城
    public function mall()
    {
        return view('index.mall');
    }
    //音乐直播间
    public function music()
    {
        return view('index.music');
    }
}    