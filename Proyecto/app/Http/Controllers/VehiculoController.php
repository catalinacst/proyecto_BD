<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Vehiculo;
use App\Propietario;
use App\Modelo;
use Session;
use Redirect;

use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index() {
    	$vehiculos = Vehiculo::all();
    	return view('vehiculo.index', compact('vehiculos'));
    }

    public function create() {
    	$propietarios = Propietario::all();
    	$modelos = Modelo::all();
    	return view('vehiculo.create',  ['propietarios' => $propietarios, 'modelos' => $modelos]);
    }

    public function show(Vehiculo $vehiculo) {
        return view('vehiculo.show', compact('vehiculo'));
    }

    public function store(Request $request) {

    	$this->validate($request, [
	        'propietario_id' => 'required',
	        'modelo_id' => 'required',
	    ]);

    	Vehiculo::create($request->all());

    	Session::flash('msg', 'Vehiculo creado satisfactoriamente');
    	return Redirect::to('/vehiculos');
    }

    public function edit(Vehiculo $vehiculo) {
    	$propietarios = Propietario::all();
    	$modelos = Modelo::all();
    	return view('vehiculo.edit',  ['vehiculo' => $vehiculo, 'propietarios' => $propietarios, 'modelos' => $modelos]);
    }

    public function update(Vehiculo $vehiculo, Request $request) {

        $this->validate($request, [
            'propietario_id' => 'required',
	        'modelo_id' => 'required',
        ]);

        $vehiculo->fill($request->all());
        $vehiculo->save();

        Session::flash('msg', 'Vehiculo actualizada exitosamente');
        return Redirect::to('/vehiculos');
    }

    public function destroy(Vehiculo $vehiculo) {
        Vehiculo::destroy($vehiculo->id);
        
        Session::flash('msg', 'Marca destruida exitosamente');
        return Redirect::to('/vehiculos');
    }
}
