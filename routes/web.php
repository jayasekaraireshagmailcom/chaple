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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('generalInfor/')->group(function () {
	Route::post('loadsaint','HomeController@loadsaint');
	Route::post('create_part1','HomeController@create_part1');
	Route::get('gotofamily','HomeController@gotofamily');
});
Route::prefix('/familyinfor/')->group(function () {
	Route::post('create_part2','HomeController@create_part2');
	Route::post('create_part3','HomeController@create_part3');
	
});
