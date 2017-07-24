<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/24
 * Time: 2:40
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;//使用input接值
use App\Http\Requests;
use DB;//使用数据库

class MallController extends Controller{
    //贵族
    public function guizu(){
        return view('mall');
    }
    //礼包
    public function gift(){
        $gift = DB::table('cctv_gift')->get();
        //print_r($gift);die;
        return view('mall.gift',['gift'=>$gift]);
    }



}