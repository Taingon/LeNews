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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test',function(){
	return "siv is noob";
});
Route::get("/test/{name}",function($test){
	return "Wecome".$test."You are meh";
});


Route::get("/test/hello",function(){
	return "You are meh";
});

Route::get('/calln/{name}',"Calling@callName");
