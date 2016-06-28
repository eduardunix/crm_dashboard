<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::resource('vendedores', 'VendedoresController');
Route::get('vendedores/show/{id}', 'VendedoresController@show');
Route::get('vendedores/destroy/{id}', 'VendedoresController@destroy');
Route::resource('metas', 'MetasController');
Route::get('metas/destroy/{id}', 'MetasController@destroy');
Route::resource('pedidos', 'PedidosController');
Route::get('pedidos/show/{id}', 'PedidosController@show');
Route::get('pedidos/destroy/{id}', 'PedidosController@destroy');

Route::auth();

Route::get('/home', 'HomeController@index');
