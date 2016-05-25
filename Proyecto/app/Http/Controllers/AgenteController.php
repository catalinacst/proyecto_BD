<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Agente;
use Session;
use Redirect;

use Illuminate\Http\Request;

class AgenteController extends Controller
{
    public function index() {
    	$agentes = Agente::all();
    	return view('agente.index', compact('agentes'));
    }
}
