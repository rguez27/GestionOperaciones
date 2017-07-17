@extends('index')

@section('contenedor')
	<div class="bid-padding text-center blue-grey white-text">
		<h1>Empresas con servicio</h1>
	</div>
	<table class="table">
		<thead>
			<th>Empresa</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Fecha de Contratación</th>
			<th>Acción</th>
		</thead>
		<tbody id="datos"></tbody>
	</table>
@endsection

@section('script')
	{!!Html::script('/js/empresa.js')!!}
@endsection