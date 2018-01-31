<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frondendController extends Controller
{
    public function index()
    {
    	return view('Front_End.front_end');
    }
}
