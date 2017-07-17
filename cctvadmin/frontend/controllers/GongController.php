<?php  

namespace frontend\controllers;

use Yii;
use db;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class GongController extends Controller
{
	public $enableCsrfValidation = false;
	public $layout = "header";
	
	//工会展示
	public function actionList()
	{
		return $this->render('list');
	}
}