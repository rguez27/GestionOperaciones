@extends('index')
@section('contenedor')

	<div id="msj-ok" class="alert alert-success alert-dismissible" role="alert" style="display:none">
		<strong>Empresa agregado con exito</strong>
	</div>
	{{ csrf_field()}}
	<div class="bid-padding text-center blue-grey white-text">
		<h1>Registro de Empresa</h1>
	</div>
	{!!Form::open(array('id' => 'ajax'))!!}
		<div class="form-group label-floating">
			{!!Form::label('Nombre de la empresa:',null,['class'=>'control-label'])!!}
			{!!Form::text('nombreEmpresa', null,['id'=>'empresa','class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Razón Social:',null,['class'=>'control-label'])!!}
			{!!Form::text('razonSocial', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('RFC:',null,['class'=>'control-label'])!!}
			{!!Form::text('rfc', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Dirección:',null,['class'=>'control-label'])!!}
			{!!Form::text('direccion', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Telefono:',null,['class'=>'control-label'])!!}
			{!!Form::number('telefono', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Correo de Contacto:',null,['class'=>'control-label'])!!}
			{!!Form::email('correoContacto', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Correo de Facturación:',null,['class'=>'control-label'])!!}
			{!!Form::email('correoFacturacion', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Fecha de Contratación:',null,['class'=>'control-label'])!!}
			{!!Form::date('inscripcion', Carbon::now(),['class'=>'form-control'])!!}
		</div>
		{!! Form::submit('Registrar', array('class' => 'btn btn-raised btn-primary')) !!}
	{!!Form::close()!!}
@stop
@section('script')
<script src="/js/empresa.js"></script>
<script src="/js/holder.js"></script>
@endsection