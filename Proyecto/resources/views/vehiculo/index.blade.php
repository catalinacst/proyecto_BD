@extends('layouts.app')

@section('content')

	@if(Session::has('msg'))
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span><strong> Bien hecho! </strong> {{ Session::get('msg') }}
		</div>
	@endif

	<h2>Vehiculos</h2>
	<a href="{{ route('vehiculos.create') }}" class="btn btn-primary">Agregar</a>
	<hr>

	<table class="table table-hover">
		<thead>
			<th>Placa</th>
			<th>Propietario</th>
			<th>Modelo</th>
			<th>Fecha Matricula</th>
			<th>Editar</th>
		</thead>
		@foreach($vehiculos as $vehiculo)
		<tbody>
			<td>{{ $vehiculo->id + 100 }}</td>
			<td><a href="{{ route('propietarios.show', $vehiculo->propietario->id) }}">{{ $vehiculo->propietario->nombre }}</a></td>
			<td><a href="{{ route('modelos.show', $vehiculo->modelo->id) }}">{{ $vehiculo->modelo->nombre }}</a></td>
			<td>{{ $vehiculo->created_at }}</td>
			<td><a href="{{ route('vehiculos.edit', $vehiculo->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
		</tbody>
		@endforeach
	</table>
	
@endsection