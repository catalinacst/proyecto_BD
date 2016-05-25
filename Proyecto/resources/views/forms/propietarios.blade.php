	<div class="form-group">
		{!! Form::label('Nombre:') !!}
		{!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Ingresar el nombre del propietario']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Apellidos:') !!}
		{!! Form::text('apellidos', null, ['class'=>'form-control', 'placeholder'=>'Insertar los apellidos del propietario']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Ciudad:') !!}
		{!! Form::text('ciudad', null, ['class'=>'form-control', 'placeholder'=>'Ingresar la ciudad del propietario']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Direccion:') !!}
		{!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Insertar la direccion del propietario']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Fecha de Nacimiento:') !!}
		{!! Form::date('fecha_nac', \Carbon\Carbon::now(), ['class'=>'form-control', 'placeholder'=>'Ingresar la fecha de nacimiento del propietario']) !!}
	</div>

	{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
	<a href="{{ route('propietarios.index') }}" class="btn btn-info">Volver</a>

{!! Form::close() !!}