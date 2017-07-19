<?php
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
class IndexController extends Controller{

// 	public $layout=false;
    public $enableCsrfValidation=false;//禁用form表单提交【防止出现400的错误】
	//首页展示
	public function actionIndex(){
		//echo 1;die;
		return $this->render("index.html");
		 //return $this->render("demo.html");
	}
}