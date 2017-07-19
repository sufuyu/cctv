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
use yii\data\Pagination;

/**
 * Site controller
 */
class GiftController extends Controller{
	//public $layout=false;
    public $enableCsrfValidation=false;//禁用form表单提交【防止出现400的错误】
     //礼物添加
    public function actionGift_add()
    {
    	return $this->render('add.html');
    }
    //礼物图片上传
    public function actionUpload()
    {
    	$gift_id=Yii::$app->request->post('gift_id'); 
    	$gift_name=Yii::$app->request->post('gift_name');
    	$gift_price=Yii::$app->request->post('gift_price');
    	$sort=Yii::$app->request->post('sort');
    	// var_dump($sort);die; 
    	$is_show=Yii::$app->request->post('is_show');
 
        $gift_log = $_FILES["gift_log"];
		$path = yii::$app->basePath.'/web/uploads/';//路径
		$name = $path.$gift_log['name'];//路径
		// var_dump($name);die;
		move_uploaded_file($gift_log["tmp_name"],$name);//创建临时文件
		$new_name = substr($name,strpos($name,'/uploads'));//拼路径
		$new_name="."."$new_name";//最终类型
        $sql = "insert into cctv_gift(gift_id,gift_name,gift_log,gift_price,sort,is_show) value('$gift_id','$gift_name','$new_name','$gift_price','$sort','$is_show')";
        $res=Yii::$app->db->createCommand($sql)->execute();
        if ($res) 
        {
        	echo "<script>alert('添加成功');location.href='?r=gift/show'</script>";
        }else{
        	echo "<script>alert('添加失败');location.href='?r=gift/add'</script>";
        }
    }
    //礼物展示
    public function actionShow()
    {
    	$sql = "select * from cctv_gift";
    	$res = yii::$app->db->createCommand($sql)->queryAll();
    	array_multisort($res,SORT_DESC);
    	if ($res) 
    	{
    		return $this->render('show.html',array('gift'=>$res));
    	}
    }
    //礼物修改  
    public function actionUpdates()
	{
		$gift_id  = \Yii::$app->request->post('gift_id');
		$gift_name  = \Yii::$app->request->post('gift_name');
		
		$res = \Yii::$app->db->createCommand("update cctv_gift set gift_name = '$gift_name' where gift_id = '$gift_id'")->query();
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
    public function actionDel(){  
        $id=$_GET['ids'];  
        $connection=\Yii::$app->db;  
        $arr=$connection->createCommand("delete from cctv_gift where gift_id='$id'")->execute();  
        if($arr){  
            echo 1;  
        }else{  
            echo 0;  
        }  
     }  
}     