@extends('layouts.app')

@section('content')

	@if(Session::has('msg'))
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span><strong> Bien hecho! </strong> {{ Session::get('msg') }}
		</div>
	@endif

	<h2>Direcciones</h2>
	<hr>

	<table class="table table-hover">
		<thead>
			<th>Carrera</th>
			<th>Kilometro</th>
		</thead>
		@foreach($direcciones as $direccion)
		<tbody>
			<td>{{ $direccion->carrera }}</td>
			<td>{{ $direccion->kilometro }}</td>
		</tbody>
		@endforeach
	</table>
	
@endsection