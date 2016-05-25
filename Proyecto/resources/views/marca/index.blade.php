@extends('layouts.app')

@section('content')

	@if(Session::has('msg'))
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span><strong> Bien hecho! </strong> {{ Session::get('msg') }}
		</div>
	@endif

	<h2>Marcas</h2>
	<a href="{{ route('marcas.create') }}" class="btn btn-primary">Agregar</a>
	<hr>

	<table class="table table-hover">
		<thead>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Editar</th>
		</thead>
		@foreach($marcas as $marca)
		<tbody>
			<td><a href="{{ route('marcas.show', $marca->id) }}">{{ $marca->nombre }}</a></td>
			<td>{{ $marca->direccion }}</td>
			<td><a href="{{ route('marcas.edit', $marca->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
		</tbody>
		@endforeach
	</table>
	
@endsection