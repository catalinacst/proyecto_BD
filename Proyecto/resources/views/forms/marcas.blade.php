	<div class="form-group">
		{!! Form::label('Nombre:') !!}
		{!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Ingresar el nombre de la marca']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Direccion:') !!}
		{!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Insertar la direccion de la marca']) !!}
	</div>

	{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
	<a href="{{ route('marcas.index') }}" class="btn btn-info">Volver</a>

{!! Form::close() !!}