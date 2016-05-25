@extends('layouts.app')

@section('content')

	@if(Session::has('msg'))
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span><strong> Bien hecho! </strong> {{ Session::get('msg') }}
		</div>
	@endif

	<h2>Agentes</h2>
	<hr>

	<table class="table table-hover">
		<thead>
			<th>Nombre</th>
			<th>Apellidos</th>
		</thead>
		@foreach($agentes as $agente)
		<tbody>
			<td>{{ $agente->nombre }}</td>
			<td>{{ $agente->apellidos }}</td>
		</tbody>
		@endforeach
	</table>
	
@endsection