@extends('layouts.app')

@section('content')

	@if(count($errors))
		@include('errors.forms')
	@endif

	<h2>Crear modelo</h2>
	<hr>

	{!! Form::open(['route'=>['modelos.store'], 'method'=>'POST']) !!}

		@include('forms.modelos')


@endsection