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
Route::get('prueba', function () {
    return view('pagina_prueba');
});
//RUTAS PRODUCTOS

Route::get('producto', 'ProductoController@index')->name('productoListar');

Route::get('producto/create','ProductoController@create')->name('productoCrear');

Route::post('producto','ProductoController@store')->name('productoGuardar');

Route::get('producto/{id}/editar','ProductoController@edit')->name('productoEditar');
Route::put('producto/{id}', 'ProductoController@update')->name('productoModifocar');
Route::delete('producto/{id}', 'ProductoController@eliminar')->name('productoEliminar');
Route::get('producto/{id}','ProductoController@show')->name('productoVer');



Route::get('clientes', function () {
    return view('clientes.usuarios');
});

Route::get('clientes', 'ClienteController@index');

Route::get('fotos', function () {
    return view('fotos');
});

Route::get('blog', function () {
    return view('blog');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
