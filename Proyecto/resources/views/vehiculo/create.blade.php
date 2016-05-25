@extends('layouts.app')

@section('content')

	@if(count($errors))
		@include('errors.forms')
	@endif

	<h2>Crear vehiculo</h2>
	<hr>

	{!! Form::open(['route'=>['vehiculos.store'], 'method'=>'POST']) !!}

		@include('forms.vehiculos')


@endsection