<?php  

namespace frontend\controllers;

use Yii;
use db;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class NavController extends Controller
{
	public $enableCsrfValidation = false;
	public $layout = "header";
	
	public function actionNavadd()
	{		
		return $this->render('navadd');
	}


	//用户展示
	public function actionNavlist()
	{
		return $this->render('navlist');
	}
}