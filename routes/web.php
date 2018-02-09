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


// 用户登录注册路由
Auth::routes();

Route::get("/test", "TestsController@index")->name('test');


// 后端管理

Route::group(["prefix"=>"admin"],function(){
    Route::get("/news/index", "NewsController@getList");
    Route::any("/news/add", "NewsController@addNews");
    Route::any("/news/view/{id}", "NewsController@viewNews");
    Route::any("/news/edit/{id}", "NewsController@editNews");
    Route::get("/news/del/{id}", "NewsController@delNews");
    Route::get("/news/switch", "NewsController@changeStatus")->name("changeStatus");

});

