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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('authdet', 'FirstController@sixth_fx');


Route::get('authcheck', 'FirstController@eightth_fx')->middleware('auth');


Route::middleware('auth')->group(function () {

    Route::get('authdet', 'FirstController@sixth_fx');

    Route::get('authdet2', 'FirstController@seventh_fx');
});


Route::prefix('user')->group(function() {
	Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name('user.register');
	Route::post('/register', 'Auth\RegisterController@register')->name('user.register.submit');
	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('user.login');
   	Route::post('/login', 'Auth\LoginController@login')->name('user.login.submit');
	Route::get('/home', 'UserController@index')->name('user.home');
	Route::post('/logout', 'Auth\LoginController@logout')->name('user.logout');
});

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
   	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

