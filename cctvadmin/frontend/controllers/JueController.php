<?php  

namespace frontend\controllers;

use Yii;
use db;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class JueController extends Controller
{
	public $enableCsrfValidation = false;
	public $layout = "header";
	
	public function actionJueadd()
	{		
		return $this->render('jueadd');
	}


	//用户展示
	public function actionJuelist()
	{
		return $this->render('juelist');
	}
}