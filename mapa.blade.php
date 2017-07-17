@extends('index')
@section('contenedor')

	<div id="map">
      
    </div>
    
    <input type="text" id="bscMapa">
@stop
@section('script')
<script src="/js/mapa.js"></script>
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxY2t6vfI0_pTZm35WozqteWNecmH6joI&libraries=places&callback=initMap" async defer>
</script>
@endsection