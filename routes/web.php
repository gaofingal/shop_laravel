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

// 后台首页
Route::get('/home', 'AdminController@index')->name('home');

// 新闻汇总页面
Route::get('/news', 'NewsController@index')->name('news');

// 新闻分类页面
Route::get('/category', 'NewsController@index')->name('category');

// 新闻采集页面
Route::get('/collection', 'NewsController@index')->name('collection');