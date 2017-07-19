<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/17
 * Time: 15:36
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
class GiftController extends Controller{

    public $layout = false;
    public $enableCsrfValidation = false;//禁用form表单提交【防止出现400的错误】
    //添加礼物
    public function actionGift_add(){
        $callback = $_GET['callback'];//接代理人
        $gift_name=$_GET['gift_name'];//礼物名称
        $gift_price=$_GET['gift_price'];//礼物价格
        $gift_logo=$_GET['gift_logo'];//礼物名称
        $sql="insert into `cctv_gift` values(null,'$gift_name','$gift_price','$gift_price')";
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