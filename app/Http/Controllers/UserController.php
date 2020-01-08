<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	return view('user.home');
    }
}



