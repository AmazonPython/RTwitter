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
//Home page
Route::get('/', 'HomeController@index');

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'home'], function() {
    //User home
    Route::get('/', 'AdminController@index');
    Route::get('timeline', 'AdminController@timeline');

    //Tweets route, have CURD function配置资源路由得到7条路由配置，完成增删改查操作
    Route::post('tweets', 'AdminController@store');
    Route::delete('tweets/{tweet}', 'AdminController@destroy');

    //My resume
    Route::get('resume', 'ResumeController@index');
    Route::get('resume/dark', 'ResumeController@dark');
    Route::get('resume/light', 'ResumeController@light');
});