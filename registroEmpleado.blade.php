@extends('index')
@section('contenedor')

	<div id="msj-ok" class="alert alert-success alert-dismissible" role="alert" style="display:none">
		<strong>Empleado agregado con exito</strong>
	</div>
	{{ csrf_field()}}
	<div class="bid-padding text-center blue-grey white-text">
		<h1>Registro de Empleados</h1>
	</div>
	{!!Form::open(array('id' => 'ajax')) !!}
		<div class="form-group label-floating">
			{!!Form::label('Nombre:',null,['class'=>'control-label'])!!}
			{!!Form::text('nombreEmpleado', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Fecha de Contratación:',null,['class'=>'control-label'])!!}
			{!!Form::date('contratacion', Carbon::now(),['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Telefono:',null,['class'=>'control-label'])!!}
			{!!Form::number('telefono', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Comprobante de Domicilio:',null,['class'=>'control-label'])!!}
			{!!Form::text('domicilio', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Número de Seguro Social:',null,['class'=>'control-label'])!!}
			{!!Form::number('nss', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('CURP:',null,['class'=>'control-label'])!!}
			{!!Form::text('curp', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('RFC:',null,['class'=>'control-label'])!!}
			{!!Form::text('rfc', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Talla de Camisa:',null,['class'=>'control-label'])!!}
			{!!Form::text('tallaCamisa', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Talla de Pantalón:',null,['class'=>'control-label'])!!}
			{!!Form::text('tallaPantalon', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Servicio:',null,['class'=>'control-label'])!!}
			{!!Form::text('servicio', null,['class'=>'form-control'])!!}
		</div>
		{!! Form::submit('Registrar', array('class' => 'btn btn-raised btn-primary')) !!}
	{!!Form::close()!!}
@stop
@section('script')
<script src="/js/empleado.js"></script>
<script src="/js/holder.js"></script>
@endsection