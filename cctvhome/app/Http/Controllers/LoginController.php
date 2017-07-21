<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    //登录
    public function login()
    {
    	return view('login.login');
    }
    //注册
    public function register()
    {
    	return view('login.register');
    }
}
