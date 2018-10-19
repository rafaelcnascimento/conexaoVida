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

Route::get('/', 'HomeController@index');
Route::get('/como-funciona', 'HomeController@comoFunciona');

Route::get('/doacoes', 'PedidosController@index');
Route::get('/doacao/{pedido}', 'PedidosController@show');
Route::get('/doacao-cadastrar', 'PedidosController@create');
Route::post('/doacao', 'PedidosController@store');

Route::get('/doar', 'UsersController@donate');
Route::get('/meus-dados', 'UsersController@show');
Route::get('/registrar', 'UsersController@create');
Route::post('/registrar', 'UsersController@store');
Route::patch('/user/{user}', 'UsersController@update');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
