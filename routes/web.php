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
Route::get('perfil', 'UserController@perfil');;

Route::get('canchas', 'FieldController@index');
Route::get('canchas/{id}', 'FieldController@show');
Route::get('registrarCancha', 'FieldController@create');
Route::post('registrarCancha', 'FieldController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
