<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/18
 * Time: 21:39
 */
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class AdminController extends Controller{

    //管理员列表
    public function actionAdmin_list(){

        return $this->render("admin_list.html");
    }
    //添加管理员
    public function actionUser_add(){
        return $this->render("admin_add.html");
    }
    //修改管理员
    public function actionAdmin_update(){
        $id=$_GET['id'];
        //echo $id;
        return $this->render("admin_update.html",['id'=>$id]);
    }
}
