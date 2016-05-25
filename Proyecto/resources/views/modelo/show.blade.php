@extends('layouts.app')

@section('content')

	<h2>{{ $modelo->nombre }} <small>{{ $modelo->potencia }}</small> </h2>
	<hr>

	<table class="table table-hover">
		<thead>
			<th>Propietario</th>
			<th>Fecha Matricula</th>
			<th>Editar</th>
		</thead>
		@foreach($modelo->vehiculos as $vehiculo)
		<tbody>
			<td><a href="{{ route('vehiculos.show', $vehiculo->id) }}">{{ $vehiculo->propietario->nombre }}</a></td>
			<td>{{ $vehiculo->fecha_matricula }}</td>
			<td><a href="{{ route('vehiculos.edit', $vehiculo->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
		</tbody>
		@endforeach
	</table>

@endsection