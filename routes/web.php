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

Route::resource('pages','PagesController');


Route::resource('articles','ArticlesController');
Route::resource('comments','CommentsController');
Route::resource('indices','FitIndicesController');
Route::resource('data','UserDataController');
Route::resource('has_indices','UserHasIndicesController');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/cms', 'CmsController@index');
Route::get('/index', 'IndexController@index');
