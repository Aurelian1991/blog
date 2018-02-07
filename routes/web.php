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
Route::get('/login/callback/driver/{driver}', 'auth\LoginController@handleProviderCallback');



//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Home'], function () {
  Route::get('/', 'IndexController@index');
  Route::get('/hot', 'IndexController@hot');
  Route::get('/topics/{id}', 'TopicController@show');
  Route::get('/topics/create', 'TopicController@createOrEdit');
  Route::post('/topics/save', 'TopicController@save');
  Route::post('/Upload/pictures', 'UploadController@once_image');
  Route::post('/blog/apply', 'BlogController@apply');
  Route::get('/blog/applyform', 'BlogController@applyform');

});
