@extends('layouts.app')

@section('content')

	@if(count($errors))
		@include('errors.forms')
	@endif

	<h2>Crear Marca</h2>
	<hr>

	{!! Form::open(['route'=>['marcas.store'], 'method'=>'POST']) !!}

		@include('forms.marcas')


@endsection