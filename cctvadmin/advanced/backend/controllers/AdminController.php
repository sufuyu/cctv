<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/18
 * Time: 21:54
 */
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Cate controller
 */
class AdminController extends Controller{
    public $layout = false;
    public $enableCsrfValidation = false;//禁用form表单提交【防止出现400的错误】


    //管理员的添加
    public function actionAdmin_add(){
        $callback = $_GET['callback'];//接代理人
        $admin_name=Yii::$app->request->get("admin_name");
        $admin_pwd=Yii::$app->request->get("admin_pwd");
        $admin_type=Yii::$app->request->get("admin_type");
        $sql="insert into `cctv_admin` values(null,'$admin_name','$admin_pwd','$admin_type')";
        $re=Yii::$app->db->createCommand($sql)->execute();

        //解决数据库主键自增id乱序的问题

        $sql="ALTER TABLE `cctv_admin` DROP `admin_id`";//删除原有的主键ID
        $a1=Yii::$app->db->createCommand($sql)->execute();

        $sql="ALTER TABLE `cctv_admin` ADD `admin_id` MEDIUMINT( 8 ) NOT NULL FIRST";//增加主键ID
        $a2=Yii::$app->db->createCommand($sql)->execute();

        $sql="ALTER TABLE `cctv_admin` MODIFY COLUMN `admin_id` MEDIUMINT( 8 ) NOT NULL AUTO_INCREMENT,ADD PRIMARY KEY(admin_id);";
        $a3=Yii::$app->db->createCommand($sql)->execute();

        $msg=Yii::$app->runAction('admin/response',['re'=>$re]);
        if($msg['code']==200){
            $msg['info']="添加成功";
        }else{
            $msg['info']="添加失败";
        }
        $str=json_encode($msg);
        echo $callback."(".$str.")";die;

    }
    //管理人员zahnshi展示的接口
    public function actionAdmin_list(){
        $callback = $_GET['callback'];//接代理人
        $sql="select * from `cctv_admin`";
        $arr=Yii::$app->db->createCommand($sql)->queryAll();
        if($arr){
            $data['code']=200;
            $data['msg']="OK";
            $data['info']=$arr;
            $str=json_encode($data);
            echo $callback."(".$str.")";
        }else{
            $data['code']=100;
            $data['msg']="Error";
            $str=json_encode($data);
            echo $callback."(".$str.")";
        }
    }
    //删除管理员人员
    public function actionDel_admin(){
        $callback = $_GET['callback'];//接代理人
        $id=$_GET['admin_id'];//接ID
        $sql="delete from `cctv_admin` where admin_id=$id";
        $re=Yii::$app->db->createCommand($sql)->execute();
        $msg=Yii::$app->runAction('admin/response',['re'=>$re]);
        if($msg['code']==200){
            $msg['info']="删除成功";
        }else{
            $msg['info']="删除失败";
        }
        $str=json_encode($msg);
        echo $callback."(".$str.")";
    }

//对管理员进行修改**************************啊啊啊啊啊
    //(一)首先查询要修改的id
    public function actionSe(){
        $callback = $_GET['callback'];//接代理人
        $id=$_GET['admin_id'];//接ID
//        $str=json_encode($id);
//        echo $callback."(".$str.")";die;
        $sql="select * from `cctv_admin` where admin_id=$id";
        $re=Yii::$app->db->createCommand($sql)->queryOne();
        if($re){
            $data['code']=200;
            $data['msg']="OK";
            $data['info']=$re;
            $str=json_encode($data);
            echo $callback."(".$str.")";
        }else{
            $data['code']=100;
            $data['msg']="Error";
            $str=json_encode($data);
            echo $callback."(".$str.")";
        }
    }

    //(二)开始修改
    public function actionUpdate_admin(){
        $callback = $_GET['callback'];//接代理人
        $id=$_GET['admin_id'];//接ID
        $name=Yii::$app->request->get("admin_name");
        $pwd=Yii::$app->request->get("admin_pwd");
        $type=Yii::$app->request->get("admin_type");
        $sql="update `cctv_admin` set admin_name='$name',admin_pwd='$pwd',admin_type='$type' where admin_id=$id";
        $re=Yii::$app->db->createCommand($sql)->execute();
        $msg=Yii::$app->runAction('admin/response',['re'=>$re]);

        if($msg['code']==200){
            $msg['info']="修改成功";
        }else{
            $msg['info']="修改失败";
        }
        $str=json_encode($msg);
        echo $callback."(".$str.")";
    }

    //调用接口成功或者失败的公共方法
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