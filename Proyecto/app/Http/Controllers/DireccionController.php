<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Direccion;
use Session;
use Redirect;

use Illuminate\Http\Request;

class DireccionController extends Controller
{
    public function index() {
    	$direcciones = Direccion::all();
    	return view('direccion.index', compact('direcciones'));
    }
}
