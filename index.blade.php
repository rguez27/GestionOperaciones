<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Material Design fonts -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    {{-- {!!Html::style('css/bootstrap.min.css')!!} --}}
    {{-- {!!Html::style('css/metisMenu.min.css')!!} --}}
    {{-- {!!Html::style('css/sb-admin-2.css')!!} --}}
    {{-- {!!Html::style('css/font-awesome.min.css')!!} --}}
    {!!Html::style('/css/estilos.css')!!}
    {!!Html::style('/css/formulario.css')!!}
    {!!Html::style('/css/bootstrap-material-design.css')!!}
    {!!Html::style('/css/ripples.min.css')!!}

  <title>Panel de Administración</title>
</head>
<body>
<input type="hidden" value="{{ csrf_token() }}" id="token" >

  <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="{!!URL::to('panel')!!}">Panel de Administración</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Registrar</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>
            </ul>
          </div>
    </nav>
  
  <div id="container"><!--Contenedor-->

    @yield('contenedor')
  
    <br><br><br><br>
    <div id="footer"><!--Pie-->
      <p>&copy; 2017 - Derechos Reservados</p>
      <p>Site 2017</p>
  </div><!--/Pie-->

  </div><!--/Contenedor-->

  <div class="side navbar-fixed-top"><!--Lado-->
    
    <img src="holder.js/205x150?text=LOGO" id="holder">

    <ul id="menu" class="clearfix">
        <li><a href="{!!URL::to('panel')!!}">Inicio</a></li>
        <li><a href="{!!URL::to('/Empresas/create')!!}">Alta de Empresa</a></li>
        <li><a href="{!!URL::to('/Empresas')!!}">Lista de Empresas</a></li>
        <li><a href="{!!URL::to('/Empleados/create')!!}">Alta de Personal</a></li>
        <li><a href="{}">Lista de Personal</a></li>
        <li><a href="">Sectores</a></li>
        <li><a href="">Horarios de Empleados</a></li>
        <li><a href="">Rol de Descansos</a></li>
    </ul>
        
  </div><!--/Lado-->
    
    
<!--<script src="public/holder/holder.js"></script>-->
    {!!Html::script('/js/jquery.js')!!}
    {!!Html::script('/js/bootstrap.min.js')!!}
    {!!HTML::script('/js/holder.js')!!}
    {!!HTML::script('/js/ripples.min.js')!!}
    {!!HTML::script('/js/material.min.js')!!}
    <script>
        $(document).ready(function(){
          $.material.init();
        });
    </script>
    {{-- {!!Html::script('js/metisMenu.min.js')!!} --}}
    {{-- {!!Html::script('js/sb-admin-2.js')!!} --}}
    @yield('script')
</body>
</html>