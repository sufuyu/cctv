<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/18
 * Time: 20:30
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
class LoginController extends Controller{
 	public $layout=false;
    public $enableCsrfValidation=false;//禁用form表单提交【防止出现400的错误】

    //退出登录
    public function actionLogin_out(){
        return $this->render("login.html");
    }

    //登录
    public function actionLogin(){
        return $this->render("login.html");
    }
    //注册
    public function actionRegister(){
        return $this->render("login.html");
    }
}