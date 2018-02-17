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
Route::get('/larevel', function () {
	return view('welcome');
});

Route::get('/', function () {
	return redirect()->route('init');
	//return view('inicio');

});

Route::get('/get', function () {

	return 'Hello ';
});

Route::get('/test/{nombre}', function ($nombre) {
	// $nombre = $nombre;
	$respuesta = array('respuesta' => 'Bienvenido ' . $nombre);
	return json_encode($respuesta);
});
