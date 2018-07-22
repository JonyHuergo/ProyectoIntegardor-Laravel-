<?php

Route::get('/', function () {
    return view('paginaPrincipal');
});

Route::get('bienvenido', function () {
    return view('bienvenido');
});

Route::get('ingresar', function () {
    return view('ingresar');
});

Route::get('paginaPrincipal', function () {
    return view('paginaPrincipal');
});

Route::get('preguntas', function () {
    return view('preguntas');
});

Route::get('registro', 'UserController@create');
Route::post('registro', 'UserController@store');
Route::get('ingresar', 'UserController@login');
Route::post('ingresar', 'UserController@validateUser');

Route::get('canchas', 'FieldController@index');
Route::get('canchas/{id}', 'FieldController@show');
Route::get('registrarCancha', 'FieldController@create');
Route::post('registrarCancha', 'FieldController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
