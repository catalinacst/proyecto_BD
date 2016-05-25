@extends('layouts.app')

@section('content')

	<h2>{{ $propietario->nombre }} <small>{{ $propietario->id + 1093228750 }}</small> </h2>

	<h3>Vehiculos</h3>
	<hr>
	<table class="table table-hover">
		<thead>
			<th>Placas</th>
			<th>Modelo</th>
			<th>Fecha Matricula</th>
			<th>Editar</th>
		</thead>
		@foreach($propietario->vehiculos as $vehiculo)
		<tbody>
			<td>{{ $vehiculo->id + 100 }}</td>
			<td><a href="{{ route('modelos.show', $vehiculo->modelo->id) }}">{{ $vehiculo->modelo->nombre }}</a></td>
			<td>{{ $vehiculo->fecha_matricula }}</td>
			<td><a href="{{ route('vehiculos.edit', $vehiculo->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
		</tbody>
		@endforeach
	</table>
	<br>
	<h3>Infracciones</h3>
	<hr>
	<table class="table table-hover">
		<thead>
			<th>ID</th>
			<th>Agente</th>
			<th>Dirección</th>
			<th>Articulo</th>
			<th>Valor Total</th>
			<th>Editar</th>
		</thead>
		@foreach($propietario->infracciones as $infraccion)
		<tbody>
			<td>{{ $infraccion->id }}</td>
			<td>{{ $infraccion->agente->nombre }}</td>
			<td>{{ $infraccion->direccion->carrera }}</td>
			<td>{{ $infraccion->articulo }}</td>
			<td>{{ $infraccion->valor_total }}</td>
			<td><a href="{{ route('infracciones.edit', $infraccion->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
		</tbody>
		@endforeach
	</table>

@endsection
