<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Propietario;
use Session;
use Redirect;

use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    
    public function index() {
    	$propietarios = Propietario::all();
    	return view('propietario.index', compact('propietarios'));
    }

    public function create() {
    	return view('propietario.create');
    }

    public function show(Propietario $propietario) {
        return view('propietario.show', compact('propietario'));
    }

    public function store(Request $request) {

    	$this->validate($request, [
	        'nombre' => 'required',
	        'apellidos' => 'required',
	        'ciudad' => 'required',
	        'direccion' => 'required',
	        'fecha_nac' => 'required',
	    ]);

    	Propietario::create($request->all());

    	Session::flash('msg', 'Propietario creada satisfactoriamente');
    	return Redirect::to('/propietarios');
    }

    public function edit(Propietario $propietario) {
        return view('propietario.edit', compact('propietario'));
    }

    public function update(Propietario $propietario, Request $request) {

        $this->validate($request, [
	        'nombre' => 'required',
	        'apellidos' => 'required',
	        'ciudad' => 'required',
	        'direccion' => 'required',
	        'fecha_nac' => 'required',
	    ]);

        $propietario->fill($request->all());
        $propietario->save();

        Session::flash('msg', 'Propietario actualizada exitosamente');
        return Redirect::to('/propietarios');
    }

    public function destroy(Propietario $propietario) {
        Propietario::destroy($propietario->id);
        
        Session::flash('msg', 'Propietario destruida exitosamente');
        return Redirect::to('/propietarios');
    }
}
