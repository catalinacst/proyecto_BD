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

Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
	    return view('welcome');
	});


    Route::model('marcas', 'Marca');
    Route::bind('marcas', function($value) {
    	return App\Marca::where('id', $value)->first();
	});
    Route::resource('marcas', 'MarcaController');


    Route::model('agentes', 'Agente');
    Route::bind('agentes', function($value) {
    	return App\Agente::where('id', $value)->first();
	});
    Route::resource('agentes', 'AgenteController');


    Route::model('direcciones', 'Direccion');
    Route::bind('direcciones', function($value) {
    	return App\Direccion::where('id', $value)->first();
	});
    Route::resource('direcciones', 'DireccionController');


    Route::model('propietarios', 'Propietario');
    Route::bind('propietarios', function($value) {
    	return App\Propietario::where('id', $value)->first();
	});
    Route::resource('propietarios', 'PropietarioController');


    Route::model('modelos', 'Modelo');
    Route::bind('modelos', function($value) {
    	return App\Modelo::where('id', $value)->first();
	});
    Route::resource('modelos', 'ModeloController');


    Route::model('vehiculos', 'Vehiculo');
    Route::bind('vehiculos', function($value) {
    	return App\Vehiculo::where('id', $value)->first();
	});
    Route::resource('vehiculos', 'VehiculoController');


    Route::model('infracciones', 'Infraccion');
    Route::bind('infracciones', function($value) {
    	return App\Infraccion::where('id', $value)->first();
	});
    Route::resource('infracciones', 'InfraccionController');

});
