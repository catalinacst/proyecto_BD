@extends('layouts.app')

@section('content')

	@if(count($errors))
		@include('errors.forms')
	@endif

	<h2>Update Category {{ $marca->id }}</h2>
	<hr>


	{!! Form::model($marca, ['route'=>['marcas.update', $marca->id], 'method'=>'PUT']) !!}
		@include('forms.marcas')

	<hr>

	{!! Form::open(['route'=>['marcas.destroy', $marca->id], 'method'=>'DELETE']) !!}
		{!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}

@endsection