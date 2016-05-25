@extends('layouts.app')

@section('content')

	<h2>{{ $marca->nombre }} <small>{{ $marca->direccion }}</small> </h2>
	<hr>

	<table class="table table-hover">
		<thead>
			<th>Nombre</th>
			<th>Potencia</th>
			<th>Editar</th>
		</thead>
		@foreach($marca->modelos as $modelo)
		<tbody>
			<td><a href="{{ route('modelos.show', $modelo->id) }}">{{ $modelo->nombre }}</a></td>
			<td>{{ $modelo->potencia }}</td>
			<td><a href="{{ route('modelos.edit', $modelo->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
		</tbody>
		@endforeach
	</table>

@endsection