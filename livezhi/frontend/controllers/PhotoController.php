<?php  

namespace frontend\controllers;

use Yii;
use db;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class PhotoController extends Controller
{
	public $enableCsrfValidation = false;
	public $layout = "header";
	
	//相册管理
	public function actionGallery()
	{
		return $this->render('gallery');
	}

}