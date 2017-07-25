<?php

namespace App\Http\Controllers;


class SquareController extends Controller
{   
	//广场
    public function index()
    {
        return view('square.index');
    }
}    