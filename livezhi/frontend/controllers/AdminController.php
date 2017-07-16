<?php  

namespace frontend\controllers;

use Yii;
use db;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class AdminController extends Controller
{
	public $enableCsrfValidation = false;
	public $layout = "header";
	
	public function actionAdminadd()
	{		
		return $this->render('adminadd');
	}


	//用户展示
	public function actionAdminlist()
	{
		return $this->render('adminlist');
	}
}