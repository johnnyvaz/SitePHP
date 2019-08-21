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
    return redirect('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'PagesController@home')->name('index');

Route::resource('admin/imagens', 'Admin\\ImagensController');
Route::resource('admin/treinadores', 'Admin\\TreinadoresController');
Route::resource('page/pages', 'PagesController');
Route::resource('/inicio', 'PagesController');