@extends('layouts.app')

@section('content')

	@if(Session::has('msg'))
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span><strong> Bien hecho! </strong> {{ Session::get('msg') }}
		</div>
	@endif

	<h2>Modelos</h2>
	<a href="{{ route('modelos.create') }}" class="btn btn-primary">Agregar</a>
	<hr>

	<table class="table table-hover">
		<thead>
			<th>Nombre</th>
			<th>Marca</th>
			<th>Potencia</th>
			<th>Editar</th>
		</thead>
		@foreach($modelos as $modelo)
		<tbody>
			<td><a href="{{ route('modelos.show', $modelo->id) }}">{{ $modelo->nombre }}</a></td>
			<td><a href="{{ route('marcas.show', $modelo->marca->id) }}">{{ $modelo->marca->nombre }}</a></td>
			<td>{{ $modelo->potencia }}</td>
			<td><a href="{{ route('modelos.edit', $modelo->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
		</tbody>
		@endforeach
	</table>
	
@endsection