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
	// return redirect()->route('');
	return redirect()->away('/home');
	//return view('inicio');

});


// Route::get('/home/1', function () {
// 	// return redirect()->route('');
// 	//return redirect()->away('/home/1');
// 	//return view('index');

// });



Route::get('/get', function () {

	return 'Hello ';
});

// Route::get('/test/{nombre}', function ($nombre) {
// 	// $nombre = $nombre;
// 	$respuesta = array('respuesta' => 'Bienvenido ' . $nombre);
// 	return json_encode($respuesta);
// });
