function initMap() {
    var map, service, marker;

    map = new google.maps.Map(document.getElementById('map-canvas'),{
        center: {
            lat: 7.1907,
            lng: 125.4553
        }, 
        zoom : 15
    });

    var icon = {
        url : 'http://maps.google.com/mapfiles/kml/paddle/grn-circle.png',
        scaledSize: new google.maps.Size(45, 45), // scaled size
        
    };

    marker = new google.maps.Marker({
        position: {
            lat: 7.1907,
            lng: 125.4553
        }, 
        icon: icon,
        map: map,
        draggable: true
    });

    var searchBox = new google.maps.places.SearchBox(document.getElementById('address'));

    google.maps.event.addListener(searchBox, 'places_changed', function() {
        var places = searchBox.getPlaces();
        var bounds = new google.maps.LatLngBounds();
        var i, place;

        for(i=0; place=places[i]; i++) {
            bounds.extend(place.geometry.location);
            marker.setPosition(place.geometry.location); // set marker position new
        }

        map.fitBounds(bounds);
        map.setZoom(17);
    });

    google.maps.event.addListener(marker, 'dragend', function() {
        var lat = marker.getPosition().lat();
        var lng = marker.getPosition().lng();
        $('#lat').val(lat);
        $('#lng').val(lng);
        getReverseGeocodingData(lat, lng);


    });

    function getReverseGeocodingData(lat, lng) {
    var latlng = new google.maps.LatLng(lat, lng);
    // This is making the Geocode request
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({ 'latLng': latlng }, function (results, status) {
        if (status !== google.maps.GeocoderStatus.OK) {
            alert(status);
        }
        // This is checking to see if the Geoeode Status is OK before proceeding
        if (status == google.maps.GeocoderStatus.OK) {
            console.log(results);
            var address = (results[0].formatted_address);
            var addressBar = document.getElementById("address");
            addressBar.value = address;
        }
    });
}


}
