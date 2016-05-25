@extends('layouts.app')

@section('content')

	@if(count($errors))
		@include('errors.forms')
	@endif

	<h2>Update Propietario {{ $propietario->id }}</h2>
	<hr>


	{!! Form::model($propietario, ['route'=>['propietarios.update', $propietario->id], 'method'=>'PUT']) !!}
		@include('forms.propietarios')

	<hr>

	{!! Form::open(['route'=>['propietarios.destroy', $propietario->id], 'method'=>'DELETE']) !!}
		{!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}

@endsection