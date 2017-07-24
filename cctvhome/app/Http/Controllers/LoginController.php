<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;//使用input接值
use App\Http\Requests;
use DB;//使用数据库

class LoginController extends Controller
{
    //登录页面
    public function login()
    {
    	return view('login.login');
    }
    //执行登录
    public function login_do(){
        $input = Input::all();//接值
        $user_tel=$input['user_tel'];
        $user_pwd=md5($input['password']);
        if(empty($input['user_tel'])||empty($input['password'])){
            echo "<script>alert('用户名或者密码不能为空');location.href='login'</script>";die;
        }else{
            $user= DB::table('cctv_user')->select('user_pwd')
                ->where('user_tel',$input['user_tel'])->first();//查询一条
            if($user['user_pwd']==$user_pwd){
                echo "<script>alert('登陆成功');
            location.href='http://127.0.0.1/Index/July/aaaa/public/index.php/index/index'</script>";
            }else{
                echo "<script>alert('登陆失败');
            location.href='login'</script>";
            }
        }
    }

    //注册页面
    public function register()
    {
    	return view('login.register');
    }

    //执行注册
    public function register_do(){

        $input = Input::all();//
        //print_r($input);
        $user =DB::table('cctv_user')->where('user_tel',$input['user_tel'])->get();
        if(!empty($user)){
            echo "<script>alert('此用户已经被注册');location.href='register'</script>";die;
        }else{
            if(empty($input['user_tel'])||empty($input['password'])||empty($input['password_sure'])){
                echo "<script>alert('用户名、密码或者确认密码不能为空');location.href='register'</script>";die;
        }else{
            if($input['password']!=$input['password_sure']){
                echo "<script>alert('密码必须与确认密码相同');location.href='register'</script>";die;
            }else{
                $user_name=$input['user_tel'];
                $user_pwd=md5($input['password']);
                 $a=DB::table('cctv_user')->insert([
                 		'user_tel'=>$user_name,
                        'user_pwd'=>$user_pwd
                 	]);
                if($a){
                    echo '<script>alert("注册成功");
                location.href="http://127.0.0.1/Index/July/aaaa/public/index.php/index/index"</script>';die;
                }else{
                    echo "<script>alert('注册失败');location.href='register'</script>";die;
                }
            }
        }
       }
    }
}
