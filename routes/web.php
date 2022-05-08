<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('home');
});

//Route::get('/', 'CategoriasController@index');

Route::resource('categorias', CategoriasController::class);
Route::resource('sucursales', SucursalesController::class);
Route::resource('productos', ProductosController::class);
Route::resource('productossucursales', ProductosSucursalesController::class);

Route::get('productos/{id}', 'ProductosController@index');
Route::get('eliminarProductos/{id}', 'ProductosController@delete');
Route::get('eliminarProductosSucursales/{id}', 'ProductosSucursalesController@delete');
//Route::get('mostrarProductosSucursales/{id}', 'ProductosSucursalesController@show');
Route::post('producto', 'ProductosController@update');

Route::get('productos/{id}','PersonajesController@show');

Route::get('verProductosSucursales/{id}', 'ProductosSucursalesController@ver');
//Route::get('editarProductos/{id}', 'ProductosController@update');

Route::get('/buscar/{search?}', 'ProductosController@search')->name('buscar');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
