<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/17
 * Time: 12:01
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
class CateController extends Controller{
    public $layout = false;
    public $enableCsrfValidation = false;//禁用form表单提交【防止出现400的错误】
    //添加直播的分类
    public function actionCate_add(){
        $callback = $_GET['callback'];//接代理人
        $cate_name=$_GET['cate_name'];//直播分类
        $sql="insert into `cctv_category` values(null,'$cate_name')";
        $re=Yii::$app->db->createCommand($sql)->execute();
        $msg=Yii::$app->runAction('cate/response',['re'=>$re]);
        if($msg['code']==200){
            $msg['info']="添加成功";
            $str=json_encode($msg);
            echo $callback."(".$str.")";
        }else{
            $msg['info']="添加失败";
            $str=json_encode($msg);
            echo $callback."(".$str.")";
        }
    }

    //直播分类的列表
    public function actionShow(){
        $callback = $_GET['callback'];//接代理人
        $sql="select *  from cctv_category";
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
            $data['info']="出现错误";
            $str=json_encode($data);
            echo $callback."(".$str.")";
        }
    }




    // //操作成功的时候调用的公共信息的方法
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