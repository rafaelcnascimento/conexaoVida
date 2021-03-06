<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/doacoes', 'PedidosController@apiIndex');
Route::get('/doacao/{pedido}', 'PedidosController@apiShow');
Route::post('/login', 'Auth\LoginController@apiLogin');
Route::get('/registrar', 'UsersController@apiCreate');
Route::post('/registrar', 'UsersController@apiStore');

Route::group(['middleware' => 'auth:api'], function ()
{
    Route::post('/doacao', 'PedidosController@apiStore');
    Route::post('/user/{user}', 'UsersController@apiUpdate');
    Route::post('/mudar-senha/{user}', 'UsersController@apiUpdatePassword');
    Route::post('/logout', 'UsersController@apiLogout');
});

