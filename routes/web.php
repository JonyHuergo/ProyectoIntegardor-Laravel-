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

//Route::resource('canchasYa', 'UsersController');

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

Route::get('canchas', 'FieldController@index');
Route::get('registrarCancha', 'FieldController@create');
Route::post('registrarCancha', 'FieldController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
