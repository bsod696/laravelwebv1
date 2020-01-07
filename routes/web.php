<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/hai', 'FirstController@first_fx')->name('hai');

//Route::get('/insert', 'MainController@first_fx')->name('hai');


// Route::middleware(['checkfinalyear'])->group(function(){
// 	Route::get('final', 'FirstController@second_fx');
// }); 


Route::get('final', 'FirstController@second_fx')->middleware('checkfinalyear');



Route::get('dis', 'FirstController@fourth_fx');
