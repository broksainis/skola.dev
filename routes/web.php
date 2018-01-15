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
    return view('dashboard');
});

//news categories

Route::get('category/news', 'NewsCategoryController@index')->name('newscategory.index');

// news category add
Route::post('category/news/add', 'NewsCategoryController@store')->name('newscategory.add');


//show news
Route::get('/news', 'NewsController@index')->name('news.index');

// add news
Route::post('/news/add', 'NewsController@store')->name('news.add');