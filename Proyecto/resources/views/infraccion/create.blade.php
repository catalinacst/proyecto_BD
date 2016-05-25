@extends('layouts.app')

@section('content')

	@if(count($errors))
		@include('errors.forms')
	@endif

	<h2>Crear infraccion</h2>
	<hr>

	{!! Form::open(['route'=>['infracciones.store'], 'method'=>'POST']) !!}

		@include('forms.infracciones')


@endsection