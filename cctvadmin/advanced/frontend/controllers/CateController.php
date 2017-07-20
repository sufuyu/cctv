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
class CateController extends Controller{

 	//public $layout='header';
    public $enableCsrfValidation=false;//禁用form表单提交【防止出现400的错误】
	//首页展示
	public function actionCate_add()
	{
		return $this->render("cate_add.html");

	}


	public function  actionCate_insert()
	{
		$cate_name = \Yii::$app->request->post('cate_name');
		$is_show = \Yii::$app->request->post('is_show');
		
		$cate_log = $_FILES["cate_log"];
		$path = yii::$app->basePath.'/web/uploads/';//路径
		$name = $path.$cate_log['name'];//路径
		move_uploaded_file($cate_log["tmp_name"],$name);//创建临时文件
		$new_name = substr($name,strpos($name,'/uploads'));//拼路径
		$new_name="."."$new_name";//最终类型

		$db = yii::$app->db;
		$sql = "insert into cctv_category (cate_name,is_show,cate_log) values('$cate_name','$is_show','$new_name')";
		$res = $db->createCommand($sql)->execute();
		if ($res) 
		{
			echo "<script>alert('成功');location.href='?r=cate/cate_list'</script>";
		}

	}


	public function actionCate_list()
	{
		$sql = "select * from cctv_category";
		$res = Yii::$app->db->createCommand($sql)->queryAll();
		array_multisort($res,SORT_DESC);
		if ($res)
		{
			return $this->render('cate_list.html',array('cateData' => $res));
		}

	}



	public function actionCate_update()
	{
		$cate_id  = \Yii::$app->request->post('cate_id');
		$cate_name  = \Yii::$app->request->post('cate_name');
		
		$res = \Yii::$app->db->createCommand("update cctv_category set cate_name = '$cate_name' where cate_id = '$cate_id'")->query();
		if ($res)
		{
			echo "ok";
		}
		else
		{
			echo "no";
		}
	}

     // 无刷新delete  
    public function actionCate_del(){  
        $id=\Yii::$app->request->get('ids');
        $connection=\Yii::$app->db;  
        $arr=$connection->createCommand("delete from cctv_category where cate_id='$id'")->execute();  
        if($arr){  
            echo 1;  
        }else{  
            echo 0;  
        }  
     }  
}