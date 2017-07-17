<?php  

namespace frontend\controllers;

use Yii;
use db;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class UserController extends Controller
{
	public $enableCsrfValidation = false;
	public $layout = "header";
	
	public function actionUseradd()
	{		
		return $this->render('useradd');
	}


	//用户展示
	public function actionUserdesign()
	{
		return $this->render('userdesign');
	}
}