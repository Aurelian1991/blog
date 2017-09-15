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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('/login/oauth', 'auth\LoginController@oauth');
Route::get('/login/callback', 'auth\LoginController@handleProviderCallback');



//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Home'], function(){
    Route::get('/', 'TopicsController@index');
    // 控制器在 "App\Http\Controllers\Admin" 命名空间下
});
