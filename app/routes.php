<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('bodegas',array('uses'=>'BodegasController@mostrarBodegas'));

Route::get('bodegas/nueva',array('uses'=>'BodegasController@nuevaBodega'));

Route::post('bodegas/crear', array('uses' => 'BodegasController@crearBodega'));

Route::get('bodegas/buscar/{id}', array('uses' => 'BodegasController@verBodega'));

Route::get('bodegas/borrar/{id}', array('uses' => 'BodegasController@borrarBodega'));

Route::get('bodegas/modificar', array('uses' => 'BodegasController@formModificarBodega'));

Route::post('bodegas/modificar/enviar', array('uses' => 'BodegasController@modificarBodega'));


Route::get('productos',array('uses'=>'ProductosController@mostrarProductos'));

Route::get('productos/nuevo',array('uses'=>'ProductosController@nuevoProducto'));

Route::post('productos/crear',array('uses'=>'ProductosController@crearProducto'));

Route::get('productos/buscar/{id}', array('uses' => 'ProductosController@verProducto'));

Route::get('productos/borrar{id}', array('uses' => 'ProductosController@borrarProducto'));

Route::get('productos/modificar', array('uses' => 'ProductosController@formModificarProducto'));

Route::post('productos/modificar/enviar', array('uses' => 'ProductosController@modificarProducto'));

