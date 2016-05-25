@extends('layouts.app')

@section('content')

	@if(count($errors))
		@include('errors.forms')
	@endif

	<h2>Crear propietario</h2>
	<hr>

	{!! Form::open(['route'=>['propietarios.store'], 'method'=>'POST']) !!}

		@include('forms.propietarios')


@endsection