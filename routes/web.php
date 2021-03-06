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
    return view('home');
});

Route::resource('pages','PagesController');
Route::resource('/users', 'UsersController', ['except' => ['index', 'create', 'store']]);


Route::resource('articles','ArticlesController');
Route::resource('comments','CommentsController');
Route::resource('indices','FitIndicesController');
Route::resource('data','UserDataController');
Route::resource('has_indices','UserHasIndicesController');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/index', 'IndexController@index');
Route::get('/community', 'IndexController@community');
Route::get('/knowledge', 'IndexController@knowledge');
Route::get('/tests', 'IndexController@tests');
Route::get('/contact', 'IndexController@contact');
Auth::routes();