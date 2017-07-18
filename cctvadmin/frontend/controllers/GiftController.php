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
class GiftController extends Controller{
	//public $layout=false;
    public $enableCsrfValidation=false;//禁用form表单提交【防止出现400的错误】
     //礼物添加
    public function actionGift_add()
    {
    	return $this->render('add');
    }
}