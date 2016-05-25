@extends('layouts.app')

@section('content')

	@if(count($errors))
		@include('errors.forms')
	@endif

	<h2>Update vehiculo {{ $vehiculo->id + 100 }}</h2>
	<hr>


	{!! Form::model($vehiculo, ['route'=>['vehiculos.update', $vehiculo->id], 'method'=>'PUT']) !!}
		@include('forms.vehiculos')

	<hr>

	{!! Form::open(['route'=>['vehiculos.destroy', $vehiculo->id], 'method'=>'DELETE']) !!}
		{!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}

@endsection