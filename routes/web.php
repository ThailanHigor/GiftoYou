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

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

//Auth::routes();
Route::auth();
Auth::routes();

Route::get('/startcategorias', 'StartController@categorias')->middleware('auth');
Route::post('/startcategorias', 'StartController@storeCategorias')->name('start.categorias')->middleware('auth');

Route::get('/startlojas', 'StartController@lojas')->name('start.lojas')->middleware('auth');
Route::post('/startlojas', 'StartController@storeLojas')->name('lojas.store')->middleware('auth');

Route::get('/finish', 'StartController@finish')->middleware('auth');

Route::get('/start', 'StartController@start')->middleware('auth');
Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('/', 'HomeController@index')->middleware('auth');

Route::get('/index', 'IndexController@index')->middleware('auth');

Route::get('/feed', 'IndexController@feed')->name('feed')->middleware('auth');

