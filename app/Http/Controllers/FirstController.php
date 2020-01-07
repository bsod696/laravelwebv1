<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}






