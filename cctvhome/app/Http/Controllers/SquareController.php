<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;

class SquareController extends Controller
{   
	//广场
    public function index()
    {
    	//查询导航分类
    	$navList = DB::table('cctv_category')
    				->where('is_show','=',1)
    				->select('cate_id','cate_name','is_show')
    				->get();

    	//查询全部在线直播
		$liveList = DB::table('cctv_user')
		  			->join('cctv_user_info', 'cctv_user.user_id', '=', 'cctv_user_info.user_id')
		   			->join('cctv_live_info', 'cctv_user.user_id', '=', 'cctv_live_info.user_id')
		   			->join('cctv_category', 'cctv_live_info.user_type', '=', 'cctv_category.cate_id')
		    		->where('user_live','=',1)
		    		->select('user_name','cate_name','cate_id','user_img', 'user_room','user_fans','user_level','user_type','user_address')
		    		->get();
                    //var_dump($liveList);die;

		//查询
        return view('square.index',['navList' => $navList,'liveList' => $liveList]);
    }

        public function search()
        {
            //查询导航分类
            $navList = DB::table('cctv_category')
                        ->where('is_show','=',1)
                        ->select('cate_id','cate_name','is_show')
                        ->get();

        	$cate_id = Input::all();
        	$search = DB::table('cctv_user')
        	  			->join('cctv_user_info', 'cctv_user.user_id', '=', 'cctv_user_info.user_id')
        	   			->join('cctv_live_info', 'cctv_user.user_id', '=', 'cctv_live_info.user_id')
        	   			->join('cctv_category', 'cctv_live_info.user_type', '=', 'cctv_category.cate_id')
        	    		->where('user_type','=',$cate_id)
        	    		->select('user_name','cate_name','cate_id','user_img', 'user_room','user_fans','user_level','user_type','user_address')
        	    		->get();
        	    		//print_r($search);die;    
            return view('square.search',['navList' => $navList,'search' => $search]);
       	}

}    