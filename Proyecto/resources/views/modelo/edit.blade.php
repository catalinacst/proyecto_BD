@extends('layouts.app')

@section('content')

	@if(count($errors))
		@include('errors.forms')
	@endif

	<h2>Update Category {{ $modelo->id }}</h2>
	<hr>


	{!! Form::model($modelo, ['route'=>['modelos.update', $modelo->id], 'method'=>'PUT']) !!}
		@include('forms.modelos')

	<hr>

	{!! Form::open(['route'=>['modelos.destroy', $modelo->id], 'method'=>'DELETE']) !!}
		{!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}

@endsection