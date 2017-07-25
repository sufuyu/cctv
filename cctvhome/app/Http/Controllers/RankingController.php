<?php

namespace App\Http\Controllers;


class RankingController extends Controller
{   
	//榜单
    public function index()
    {
        return view('ranking.index');
    }
}    