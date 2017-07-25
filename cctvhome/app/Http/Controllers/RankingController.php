<?php

namespace App\Http\Controllers;
use DB;

class RankingController extends Controller
{   
	//榜单
    public function index()
    {
        return view('ranking.index');
    }
    //周星榜
    public function week()
    {
    	return view('ranking.week');
    }
    //风云榜
    public function rank()
    {
        $rankList = DB::table('cctv_user')
                    ->join('cctv_user_info', 'cctv_user.user_id', '=', 'cctv_user_info.user_id')
                    ->join('cctv_live_info', 'cctv_user.user_id', '=', 'cctv_live_info.user_id')
                    ->where('user_level','>','2')
                    ->orderBy('user_level','desc')
                    ->limit(10)
                    ->select('user_name','user_img', 'user_room','user_fans','user_level','user_type','user_address')
                    ->get();

        $rankDate= DB::table('cctv_user')
                    ->join('cctv_user_info', 'cctv_user.user_id', '=', 'cctv_user_info.user_id')
                    ->join('cctv_live_info', 'cctv_user.user_id', '=', 'cctv_live_info.user_id')
                    ->where('user_fans','<','5000')
                    ->limit(10)
                    ->select('user_name','user_img', 'user_room','user_fans','user_level','user_type','user_address')
                    ->get();
                    //var_dump($rankList2);die;
    	return view('ranking.rank',['rankList' => $rankList,'rankDate' => $rankDate]);
    }
}    