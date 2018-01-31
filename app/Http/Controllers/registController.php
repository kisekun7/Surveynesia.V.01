<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registController extends Controller
{
    public function index()
    {
    	return view('User.login.login');
    }

    public function register()
    {
    	return view('User.login.register');
    }
}
