<?php
namespace App\Http\Controllers;
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
            ->select('cctv_user.user_id','user_name', 'user_img', 'user_room','user_fans','user_level','user_type')//首页展示前10条
            ->get();

        //(一)首页展示前十条主播
        for($i=0;$i<=9;$i++){
            $user_first[]=$user[$i];
        }
        //(二)特别推荐的主播【条件：粉丝数量位于前10名】
        foreach($user as $k=>$v){
            $fans[$k]['user_fans']=$v['user_fans'];
            $fans[$k]['user_id']=$v['user_id'];
        }

        //print_r($fans);die;
        foreach($fans as $k=>$v){
            echo $v['user_fans'];

           // $data[]=asort($v['user_fans']);
        }
        die;
        print_r($data);die;


        //特别推荐【粉丝最多的前十名】
        $special_user = DB::table('cctv_user')
            ->join('cctv_user_info', 'cctv_user.user_id', '=', 'cctv_user_info.user_id')
            ->join('cctv_live_info', 'cctv_user.user_id', '=', 'cctv_live_info.user_id')
            ->where('user_live','=',1)
            ->select('user_name', 'user_img', 'user_room','user_fans','user_level','user_type')
            ->get();
        //print_r($special_user);die;
        return view('index.index',['user'=>$user]);
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