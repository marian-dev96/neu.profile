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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::group([],function() {
	Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
	//Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page']);
	
	Route::auth();
});