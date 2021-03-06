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

Route::get('/status', function () {
    return redirect('home')->with('status','This is the success message!');
});

Route::get('/error', function () {
    return redirect('home')->with('errors',['Error nr1','Error nr1']);
});

Auth::routes();
// Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('auth','admin')->group(function(){
  Route::get('/', 'AdminController@index')->name('dashboard');
});
