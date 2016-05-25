<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Infraccion;
use App\Propietario;
use App\Agente;
use App\Direccion;
use Session;
use Redirect;

use Illuminate\Http\Request;

class InfraccionController extends Controller
{
    public function index() {
    	$infracciones = Infraccion::all();
    	return view('infraccion.index', compact('infracciones'));
    }

    public function create() {
    	$propietarios = Propietario::all();
    	$agentes = Agente::all();
    	$direcciones = Direccion::all();
    	return view('infraccion.create',  ['direcciones' => $direcciones, 'propietarios' => $propietarios, 'agentes' => $agentes]);
    }

    public function show(Infraccion $infraccion) {
        return view('infraccion.show', compact('infraccion'));
    }

    public function store(Request $request) {

    	$this->validate($request, [
	        'propietario_id' => 'required',
	        'agente_id' => 'required',
	        'direccion_id' => 'required',
	        'articulo' => 'required',
	        'valor_total' => 'required',
	    ]);

    	Infraccion::create($request->all());

    	Session::flash('msg', 'Vehiculo creado satisfactoriamente');
    	return Redirect::to('/infracciones');
    }

    public function edit(Infraccion $infraccion) {
    	$propietarios = Propietario::all();
    	$modelos = Modelo::all();
    	return view('infraccion.edit',  ['infraccion' => $infraccion, 'propietarios' => $propietarios, 'modelos' => $modelos]);
    }

    public function update(Infraccion $infraccion, Request $request) {

        $this->validate($request, [
            'propietario_id' => 'required',
	        'agente_id' => 'required',
	        'direccion_id' => 'required',
	        'articulo' => 'required',
	        'valor_total' => 'required',
        ]);

        $infraccion->fill($request->all());
        $infraccion->save();

        Session::flash('msg', 'Infraccion actualizada exitosamente');
        return Redirect::to('/infracciones');
    }

    public function destroy(Infraccion $infraccion) {
        Infraccion::destroy($infraccion->id);
        
        Session::flash('msg', 'Marca destruida exitosamente');
        return Redirect::to('/infracciones');
    }
}
