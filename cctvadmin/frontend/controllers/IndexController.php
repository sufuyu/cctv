<?php  

namespace frontend\controllers;

use Yii;
use db;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class IndexController extends Controller
{
	public $enableCsrfValidation = false;
	public $layout = "header";
	public function actionIndex()
	{		
		return $this->render('index');
	}
}