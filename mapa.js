function initMap(){
	var locacion = {
		lat: 21.161908, 
		lng: -86.851528
	};

	var map = new google.maps.Map(document.getElementById("map"),
		{
			zoom: 13,
			center: locacion
		});

  var marker = new google.maps.Marker({
    map : map,
    draggable: true
  });

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position){
      var pos ={
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      marker.setPosition(pos);
      map.setCenter(pos);
    }, function(){
      handleLocationError(true, infoWindow, map.getCenter());
    });
  }

  else{
    handleLocationError(false, marker, map.getCenter());
  }

	var input = document.getElementById('bscMapa');
	var bscBox = new google.maps.places.SearchBox(input);
	map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

	map.addListener('bounds_changed', function(){
		bscBox.setBounds(map.getBounds());
	});

	var marker = new google.maps.Marker({
		position: locacion,
		map: map,
		draggable: true
	});

  var markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  bscBox.addListener('places_changed', function() {
    var places = bscBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      if (!place.geometry) {
        console.log("Returned place contains no geometry");
        return;
      }
      
      var marker = new google.maps.Marker({
		    position: locacion,
		    map: map,
		    draggable: true
	});

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        marker: marker,
        title: place.name,
        position: place.geometry.location,
        draggable: true
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
}