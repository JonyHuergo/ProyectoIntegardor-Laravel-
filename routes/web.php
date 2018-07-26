<?php

Route::get('/', 'SiteController@index');

Route::get('bienvenido', function () {
    return view('bienvenido');
});

Route::get('preguntas', 'SiteController@FAQ');

Route::get('registro', 'UserController@create');
Route::post('registro', 'UserController@store');
Route::get('ingresar', 'UserController@login');
Route::post('ingresar', 'UserController@validateUser');
Route::get('perfil', 'UserController@perfil');

Route::get('editarUsuario/{id}', 'UserController@edit');
Route::post('editarUsuario/{id}', 'UserController@update');

Route::get('canchas', 'FieldController@index');
Route::get('canchas/{id}', 'FieldController@show');
Route::get('registrarCancha', 'FieldController@create');
Route::post('registrarCancha', 'FieldController@store');
Route::get('canchas/editarCancha/{id}', 'FieldController@edit');
Route::post('canchas/editarCancha/{id}', 'FieldController@update');
Route::get('canchas/borrarCancha/{id}', 'FieldController@destroy');

Route::get('cantUsuarios', 'AjaxController@getCantUsuarios');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
