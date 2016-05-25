@extends('layouts.app')

@section('content')

	@if(count($errors))
		@include('errors.forms')
	@endif

	<h2>Update infraccion {{ $infraccion->id }}</h2>
	<hr>


	{!! Form::model($infraccion, ['route'=>['infracciones.update', $infraccion->id], 'method'=>'PUT']) !!}
		@include('forms.infracciones')

	<hr>

	{!! Form::open(['route'=>['infracciones.destroy', $infraccion->id], 'method'=>'DELETE']) !!}
		{!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}

@endsection