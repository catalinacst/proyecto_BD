<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Marca;
use Session;
use Redirect;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index() {
    	$marcas = Marca::all();
    	return view('marca.index', compact('marcas'));
    }

    public function create() {
    	return view('marca.create');
    }

    public function show(Marca $marca) {
        return view('marca.show', compact('marca'));
    }

    public function store(Request $request) {

    	$this->validate($request, [
	        'nombre' => 'required|max:255',
	        'direccion' => 'required|unique:marcas',
	    ]);

    	Marca::create($request->all());

    	Session::flash('msg', 'Marca creada satisfactoriamente');
    	return Redirect::to('/marcas');
    }

    public function edit(Marca $marca) {
        return view('marca.edit', compact('marca'));
    }

    public function update(Marca $marca, Request $request) {

        $this->validate($request, [
            'nombre' => 'required|max:255',
	        'direccion' => 'required',
        ]);

        $marca->fill($request->all());
        $marca->save();

        Session::flash('msg', 'Marca actualizada exitosamente');
        return Redirect::to('/marcas');
    }

    public function destroy(Marca $marca) {
        Marca::destroy($marca->id);
        
        Session::flash('msg', 'Marca destruida exitosamente');
        return Redirect::to('/marcas');
    }
}
