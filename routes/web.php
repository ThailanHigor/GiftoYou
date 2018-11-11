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

Route::post('/startlojas', 'StartController@finish')->name('start.finish')->middleware('auth');
Route::get('/startlojas', 'StartController@show')->middleware('auth');
Route::get('/start', 'StartController@start')->middleware('auth');

Route::get('/home', 'HomeController@index')->middleware('auth');

Auth::routes();

Route::get('/', 'HomeController@index')->middleware('auth');


