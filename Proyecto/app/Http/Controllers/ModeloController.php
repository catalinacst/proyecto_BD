<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Modelo;
use App\Marca;
use Session;
use Redirect;

use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function index() {
    	$modelos = Modelo::all();
    	return view('modelo.index', compact('modelos'));
    }

    public function create() {
    	$marcas = Marca::all();
    	return view('modelo.create',  ['marcas' => $marcas]);
    }

    public function show(Modelo $modelo) {
        return view('modelo.show', compact('modelo'));
    }

    public function store(Request $request) {

    	$this->validate($request, [
	        'nombre' => 'required',
	        'potencia' => 'required',
	        'marca_id' => 'required',
	    ]);

    	Modelo::create($request->all());

    	Session::flash('msg', 'Modelo creado satisfactoriamente');
    	return Redirect::to('/modelos');
    }

    public function edit(Modelo $modelo) {
    	$marcas = Marca::all();
        return view('modelo.edit', ['modelo'=>$modelo, 'marcas'=>$marcas]);
    }

    public function update(Modelo $modelo, Request $request) {

        $this->validate($request, [
            'nombre' => 'required',
	        'potencia' => 'required',
	        'marca_id' => 'required',
        ]);

        $modelo->fill($request->all());
        $modelo->save();

        Session::flash('msg', 'Modelo actualizada exitosamente');
        return Redirect::to('/modelos');
    }

    public function destroy(Modelo $modelo) {
        Modelo::destroy($modelo->id);
        
        Session::flash('msg', 'Marca destruida exitosamente');
        return Redirect::to('/modelos');
    }
}
