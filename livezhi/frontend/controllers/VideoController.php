<?php  

namespace frontend\controllers;

use Yii;
use db;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class VideoController extends Controller
{
	public $enableCsrfValidation = false;
	public $layout = "header";
	
	//o视频管理
	public function actionList()
	{
		return $this->render('list');
	}

	//大文件上传
	public function actionDropzone()
	{
		return $this->render('dropzone');
	}
}