<?php

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

Route::get('/feed', 'IndexController@feed')->name('feed')->middleware('auth');

Route::get('/adicionarAmigo', 'IndexController@feed')->name('adicionaramigo')->middleware('auth');

Route::get('/amigos', 'AmigosController@index')->name('amigos')->middleware('auth');

Route::get('/novo-post', 'PostController@newPost')->name('novopost')->middleware('auth');
Route::post('/novo-post', 'PostController@createPost')->name('createpost');

Route::post('/meus-amigos', 'AmigosController@meusAmigos')->name('meusamigos')->middleware('auth');
Route::post('/novo-amigo', 'AmigosController@novoAmigo')->name('novoamigo')->middleware('auth');
Route::post('/add-amigo', 'AmigosController@addAmigo')->name('addamigo')->middleware('auth');

Route::post('/feed/likePost', 'IndexController@likePost')->name('like')->middleware('auth');

Route::get('/foto-perfil', 'StartController@addFoto')->name('addfotoperfil');
Route::get('/map', 'MapController@index')->name('maps')->middleware('auth');
Route::post('/save-avatar', 'StartController@saveAvatar')->name('selectavatar');

Route::get('/meu-perfil', 'PerfilController@meuPerfil')->name('meu-perfil')->middleware('auth');
Route::get('/meus-posts', 'PerfilController@meusPosts')->name('meus-posts')->middleware('auth');
Route::get('/perfil/{id}', 'PerfilController@Perfil')->name('perfil')->middleware('auth');

Route::post('/post-comentar', 'IndexController@Comentar')->name('comentar')->middleware("auth");

Route::get('/getPostsById', 'IndexController@getPostsById')->name('getPostsById')->middleware('auth');
