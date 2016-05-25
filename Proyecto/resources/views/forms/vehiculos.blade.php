		<div class="form-group">
			{!! Form::label('Propietario:') !!}
			<select name="propietario_id" class="form-control">
				@foreach($propietarios as $propietario)
				<option value="{{ $propietario->id }}" {{ (isset($vehiculo) AND ($vehiculo->propietario_id == $propietario->id)) ? 'selected' : '' }} > {{ $propietario->nombre }} </option>
			  	@endforeach
			</select>
		</div>

		<div class="form-group">
			{!! Form::label('Modelo:') !!}
			<select name="modelo_id" class="form-control">
				@foreach($modelos as $modelo)
				<option value="{{ $modelo->id }}" {{ (isset($vehiculo) AND ($vehiculo->modelo_id == $modelo->id)) ? 'selected' : '' }} > {{ $modelo->nombre }} </option>
			  	@endforeach
			</select>
		</div>

		{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
		<a href="{{ route('vehiculos.index') }}" class="btn btn-info">Volver</a>

	{!! Form::close() !!}