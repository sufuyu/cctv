<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;//使用input接值
use App\Http\Requests;
use DB;//使用数据库

class IndexController extends Controller
{   
	//首页
    public function index()
    {
        //查询所有主播人员
        $user = DB::table('cctv_user')
            ->join('cctv_user_info', 'cctv_user.user_id', '=', 'cctv_user_info.user_id')
            ->join('cctv_live_info', 'cctv_user.user_id', '=', 'cctv_live_info.user_id')
            ->where('user_live','=',1)
            ->select('cctv_user.user_id','user_name', 'user_img', 'user_room','user_fans','user_level','user_type','user_time')//首页展示前10条
            ->get();
//        print_r($user);die;


        //(一)首页展示前十条主播
        for($i=0;$i<=13;$i++){
            $user_first[]=$user[$i];
        }
        //(二)特别推荐的主播【条件：粉丝数量位于前10名】
        foreach($user as $k=>$v){
            $fans[$k]['user_fans']=$v['user_fans'];
            $fans[$k]['user_id']=$v['user_id'];
        }
//        print_r($fans);die;
        foreach($fans as $k=>$v){
            $data[]=$v['user_fans'];
        }
        //print_r($data);die;
        arsort($data);//对数组进行降序排序【键名保留】
        //print_r($data);die;
        foreach($data as $k=>$v){
            $arr[]=$k+1;//取出特别推荐的主播的所有id
        }
        //print_r($arr);die;
        for($i=0;$i<=9;$i++){
            $a[]=$arr[$i];//取出特别推荐的主播的前十条的id
        }
        //print_r($a);die;
    //开始根据id查询主播的信息【可以直接在所查询的所有信息中取出此id的主笔播信息】
        //【一】取出粉丝数量最多的主播【推荐项目中的佼佼者，最大的图片展示】
        $best=$a[0];//粉丝最多的主播的id
        //echo $best;die;
        foreach($user as $k=>$v){
            if($v['user_id']=$best){
                $best_user=$v;
                //echo $v['user_id'];
            }
        }

        //print_r($best_user);die;
//        echo $best;die;
        unset($a[0]);//去除粉丝最多的主播
        foreach($user as $k=>$v){
            if(in_array($v['user_id'],$a)){
                $specail_user[]=$v;
            }
        }
        //print_r($specail_user);die;
//        print_r($data);die;
        //【奇秀新星专题】时间排序
        foreach($user as $k=>$v){
            $time[]=$v['user_time'];
            sort($time);//升序，对数组进行排序
        }
        //print_r($time);die;
        for($i=0;$i<=9;$i++){
            $new_time[]= $time[$i];
        }
        foreach($user as $k=>$v){
           if(in_array($v['user_time'],$new_time)){
               $new[]=$v;
           }
        }
        for($i=0;$i<=9;$i++){
            $new_user[]= $new[$i];
        }
        //print_r($new_user);die;

        //精选主播导航
        for($i=0;$i<=17;$i++){
            $good_user[]=$user[$i];
        }
       // print_r($good_user);die;
        return view('index.index',
            ['user'=>$user_first,'specail_user'=>$specail_user,'best_user'=>$best_user,'new_user'=>$new_user,'good_user'=>$good_user]);
    }


    //点击图片跳转页面
    public function img(){
        $id= Input::all();//接值
        //print_r($id);die;
//        $live_info = DB::table('cctv_user')
//            ->where()
//            ->get();

        return view('index.img');
    }
    //申请入住
    public function Apply()
    {
    	return view('index.apply');
    }
    //意见反馈
    public function feedback()
    {
    	return view('index.feedback');
    }
    //商城
    public function mall()
    {
        return view('index.mall');
    }
    //音乐直播间
    public function music()
    {
        return view('index.music');
    }
}    