@extends('layouts.app')

@section('content')

	@if(Session::has('msg'))
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span><strong> Bien hecho! </strong> {{ Session::get('msg') }}
		</div>
	@endif

	<h2>Propietarios</h2>
	<a href="{{ route('propietarios.create') }}" class="btn btn-primary">Agregar</a>
	<hr>

	<table class="table table-hover">
		<thead>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Ciudad</th>
			<th>Dirección</th>
			<th>Fecha de Nacimiento</th>
			<th>Editar</th>
		</thead>
		@foreach($propietarios as $propietario)
		<tbody>
			<td><a href="{{ route('propietarios.show', $propietario->id) }}">{{ $propietario->nombre }}</a></td>
			<td>{{ $propietario->apellidos }}</td>
			<td>{{ $propietario->ciudad }}</td>
			<td>{{ $propietario->direccion }}</td>
			<td>{{ $propietario->fecha_nac }}</td>
			<td><a href="{{ route('propietarios.edit', $propietario->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
		</tbody>
		@endforeach
	</table>
	
@endsection