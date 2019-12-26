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
})->name('template');
Route::group(['prefix'=>'font-end'],function(){
   Route::get('article','font_end\ArticleController@index')->name('article-template');

   Route::get('article_detail/{id}','font_end\ArticleDetailController@article_detail')->name('article_detail_template');
});
Route::group(['prefix'=>'admin'],function(){
   Route::get('/','Admin\AdminController@index')->name('admin');
   //article
   Route::get('article','Admin\ArticleController@index')->name('article');
   Route::post('article','Admin\ArticleController@create')->name('article');
   //article_detail
   Route::get('artile_detail','Admin\ArticleDetailController@index')->name('article_detail');
   Route::post('artile_detail','Admin\ArticleDetailController@create')->name('article_detail');
});