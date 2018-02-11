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

Route::group(["middleware"=>['web']],function(){
    // ====新闻====
    Route::get("/news/index", "NewsController@getList");
    Route::any("/news/add", "NewsController@addNews");
    Route::any("/news/view/{id}", "NewsController@viewNews");
    Route::get("/news/edit/{id}", "NewsController@editNews");
    Route::post("/news/edit", "NewsController@modifyNews");
    Route::get("/news/del/{id}", "NewsController@delNews");
    Route::get("/news/switch", "NewsController@changeStatus")->name("changeStatus");
    // 接口：新闻列表
    Route::get("/news/list", "NewsController@getListNew");

    // ====分类====
    Route::get("/category/index", "CategoryController@getList");
    Route::any("/category/add", "CategoryController@addCate");
    Route::get("/category/edit/{id}", "CategoryController@editCate");
    Route::post("/category/edit", "CategoryController@modifyCate");
    Route::get("/category/del/{id}", "CategoryController@delCate");
    // 接口：分类列表
    Route::get("/category/list", "CategoryController@getListCategory");

    // ====编辑====
    Route::get("/editor/index", "EditorController@getList");
    Route::any("/editor/add", "EditorController@addEditor");
    Route::get("/editor/edit/{id}", "EditorController@editEditor");
    Route::post("/editor/edit", "EditorController@modifyEditor");
    Route::get("/editor/del/{id}", "EditorController@delEditor");

    // ====国家====
    Route::get("/country/index", "CountryController@getList");
    Route::any("/country/add", "CountryController@addCountry");
    Route::get("/country/edit/{id}", "CountryController@editCountry");
    Route::post("/country/edit", "CountryController@modifyCountry");
    Route::get("/country/del/{id}", "CountryController@delCountry");
    Route::get("/country/del/{id}", "CountryController@delCountry");
    // 接口：国家列表
    Route::get("/country/list", "CountryController@getListCountry");
});



