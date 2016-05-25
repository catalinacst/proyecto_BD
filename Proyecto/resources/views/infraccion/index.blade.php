@extends('layouts.app')

@section('content')

	@if(Session::has('msg'))
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span><strong> Bien hecho! </strong> {{ Session::get('msg') }}
		</div>
	@endif

	<h2>Infracciones</h2>
	<a href="{{ route('infracciones.create') }}" class="btn btn-primary">Agregar</a>
	<hr>

	<table class="table table-hover">
		<thead>
			<th>ID</th>
			<th>Propietario</th>
			<th>Agente</th>
			<th>Direccion</th>
			<th>Articulo</th>
			<th>Valor Total</th>
			<th>Editar</th>
		</thead>
		@foreach($infracciones as $infraccion)
		<tbody>
			<td>{{ $infraccion->id }}</td>
			<td><a href="{{ route('propietarios.show', $infraccion->propietario->id) }}">{{ $infraccion->propietario->nombre }}</a></td>
			<td>{{ $infraccion->agente->nombre }}</td>
			<td>{{ $infraccion->direccion->carrera }}</td>
			<td>{{ $infraccion->articulo }}</td>
			<td>{{ $infraccion->valor_total }}</td>
			<td><a href="{{ route('infracciones.edit', $infraccion->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
		</tbody>
		@endforeach
	</table>
	
@endsection