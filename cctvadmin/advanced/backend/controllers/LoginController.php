<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/20
 * Time: 14:42
 */
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class LoginController extends Controller{
    public $enableCsrfValidation = false;//禁用form表单提交【防止出现400的错误】

    //注册
    public function actionRegister(){
        $callback = $_GET['callback'];//接代理人
        $user_name=$_GET['user_name'];
        $user_pwd=md5($_GET['user_pwd']);
        $user_pwd1=md5($_GET['user_pwd1']);

        //判断用户名是否存在
        $sql="select * from cctv_admin where admin_name='$user_name'";
        $arr=Yii::$app->db->createCommand($sql)->queryOne();

        if(!empty($arr)){
            $re=0;
            $msg=Yii::$app->runAction('login/response',['re'=>$re]);
            $info="用户名已经存在";
            $msg['info']=$info;
            $str=json_encode($msg);
            echo $callback."(".$str.")";
            die;
        }
        //注册所填栏目为空提示
        if($user_name==""||$user_pwd==""||$user_pwd1==""||$user_pwd!=$user_pwd1){
            $re=0;
            $msg=Yii::$app->runAction('login/response',['re'=>$re]);
            $info="用户名、密码或者确认密码任意一项不能为空/密码与确认密码必须相同";
            $msg['info']=$info;
            $str=json_encode($msg);
            echo $callback."(".$str.")";die;
        }
        $admin_type=0;
        $sql="insert into `cctv_admin` values(null,'$user_name','$user_pwd','$admin_type')";
        $re=Yii::$app->db->createCommand($sql)->execute();
        if($re){
            $msg=Yii::$app->runAction('login/response',['re'=>$re]);
            $info="注册成功";
            $msg['info']=$info;
            $str=json_encode($msg);
            echo $callback."(".$str.")";
        }else{
            $msg=Yii::$app->runAction('login/response',['re'=>$re]);
            $info="注册失败";
            $msg['info']=$info;
            $str=json_encode($msg);
            echo $callback."(".$str.")";
        }

    }
    //登录
    public function actionLogin(){
        $callback = $_GET['callback'];//接代理人
        $user_name=$_GET['user_name'];
        $user_pwd=md5($_GET['user_pwd']);//加密密码
        //用户名或者密码为空
        if($user_name==""||$user_pwd==""){
            $re=0;
            $msg=Yii::$app->runAction('login/response',['re'=>$re]);
            $info="用户名或者密码不能为空";
            $msg['info']=$info;
            $str=json_encode($msg);
            echo $callback."(".$str.")";die;
        }

        $sql="select `admin_pwd` from cctv_admin where admin_name='$user_name'";
        $re=Yii::$app->db->createCommand($sql)->queryOne();

        if($re['admin_pwd']==$user_pwd){
            $re=1;
            $msg=Yii::$app->runAction('login/response',['re'=>$re]);
            $info="登录成功";
            $msg['info']=$info;
            $str=json_encode($msg);
            echo $callback."(".$str.")";
        }else{
            $re=0;
            $msg=Yii::$app->runAction('login/response',['re'=>$re]);
            $info="登录失败";
            $msg['info']=$info;
            $str=json_encode($msg);
            echo $callback."(".$str.")";
        }
    }

    //操作成功的时候调用的公共信息的方法
    public function actionResponse($re){
        if($re){
            $data['code']=200;//成功码
            $data['msg']="OK";//成功信息
            return $data;
        }else{
            $data['code']=100;//失败码
            $data['msg']="Error";//失败信息
            return $data;
        }
    }
}