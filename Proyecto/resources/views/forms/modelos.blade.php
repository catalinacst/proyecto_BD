		<div class="form-group">
			{!! Form::label('Nombre:') !!}
			{!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Insertar el nombre del modelo']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Potencia:') !!}
			{!! Form::text('potencia', null, ['class'=>'form-control', 'placeholder'=>'Insertar la potencia del modelo']) !!}
		</div>

		<div class="form-group">
			<select name="marca_id" class="form-control">
				@foreach($marcas as $marca)
				<option value="{{ $marca->id }}" {{ (isset($modelo) AND ($modelo->marca_id == $marca->id)) ? 'selected' : '' }} > {{ $marca->nombre }} </option>
			  	@endforeach
			</select>
		</div>

		{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
		<a href="{{ route('modelos.index') }}" class="btn btn-info">Volver</a>

	{!! Form::close() !!}