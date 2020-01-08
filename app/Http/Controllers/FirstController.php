<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirstController extends Controller
{
    public function first_fx() {
    	dd('Hai awak');
    }


    public function second_fx() {
    	dd('Belum lagi');
    }


    public function third_fx(Request $request) {
    	$name = $request->name;

    	return $name;
    }


    public function fourth_fx(Request $request) {
    	$name = $request->name;

      	return view('student', compact('name'));
    }


    public function fifth_fx(Request $request) {
    	$name = $request->name;

      	return view('user.student', compact('name'));
    }


    public function sixth_fx(Request $request) {
    	$user_details = $request->user();

      	return view('user.student', compact('user_details'));
    }


    public function seventh_fx(Request $request) {
    	$user_details = $request->user();

    	return view('user.student', compact('user_details'));
    }


    public function eightth_fx(Request $request) {
    	$user_details = $request->user();

      	return view('user.student', compact('user_details'));
    }

}






