		<div class="form-group">
			{!! Form::label('Propietario:') !!}
			<select name="propietario_id" class="form-control">
				@foreach($propietarios as $propietario)
				<option value="{{ $propietario->id }}" {{ (isset($infraccion) AND ($infraccion->propietario_id == $propietario->id)) ? 'selected' : '' }} > {{ $propietario->nombre }} </option>
			  	@endforeach
			</select>
		</div>

		<div class="form-group">
			{!! Form::label('Agente:') !!}
			<select name="agente_id" class="form-control">
				@foreach($agentes as $agente)
				<option value="{{ $agente->id }}" {{ (isset($infraccion) AND ($infraccion->agente_id == $agente->id)) ? 'selected' : '' }} > {{ $agente->nombre }} </option>
			  	@endforeach
			</select>
		</div>

		<div class="form-group">
			{!! Form::label('Dirección:') !!}
			<select name="direccion_id" class="form-control">
				@foreach($direcciones as $direccion)
				<option value="{{ $direccion->id }}" {{ (isset($infraccion) AND ($infraccion->direccion_id == $direccion->id)) ? 'selected' : '' }} > {{ $direccion->carrera }} </option>
			  	@endforeach
			</select>
		</div>

		<div class="form-group">
			{!! Form::label('Articulo:') !!}
			{!! Form::text('articulo', null, ['class'=>'form-control', 'placeholder'=>'Insertar el articulo infringido']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Valor Total:') !!}
			{!! Form::text('valor_total', null, ['class'=>'form-control', 'placeholder'=>'Insertar el valor total de la infracción']) !!}
		</div>

		{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
		<a href="{{ route('infracciones.index') }}" class="btn btn-info">Volver</a>

	{!! Form::close() !!}