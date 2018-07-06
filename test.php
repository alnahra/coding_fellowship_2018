<html>
<div id="map"></div>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLWcuhkxzhwRwV21oAoA-hBEq-BzDIVPE&callback=initMap">
</script>

<style>
	#map {height: 100%;}
html, body {
  height: 95%;
  margin: 10px;
  padding: 0;
}
</style>
</html>
<script>
var customLabel = {
  restaurant: {
	label: 'R'
  },
  bar: {
	label: 'B'
  }
};

  function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-33.863276, 151.207977),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;
	downloadUrl('county_crime.xml', function(data) {
	  var xml = data.responseXML;
	  var markers = xml.documentElement.getElementsByTagName('id');
	  Array.prototype.forEach.call(markers, function(markerElem) {
		var id = markerElem.getAttribute('id');
		var offense = markerElem.getAttribute('offense');
		var type = markerElem.getAttribute('type');
		var occurred = markerElem.getAttribute('occurred');
		var address = markerElem.getAttribute('address');
		var precinct = markerElem.getAttribute('precinct');
		var reporting_jurisdiction = markerElem.getAttribute('reporting_jurisdiction');
		var for_jurisdiction = markerElem.getAttribute('for_jurisdiction');
		var point = new google.maps.LatLng(
			parseFloat(markerElem.getAttribute('latitude')),
			parseFloat(markerElem.getAttribute('longitude')));

		var infowincontent = document.createElement('div');
		var strong = document.createElement('strong');
		strong.textContent = name
		infowincontent.appendChild(strong);
		infowincontent.appendChild(document.createElement('br'));

		var text = document.createElement('text');
		text.textContent = address
		infowincontent.appendChild(text);
		var icon = customLabel[type] || {};
		var marker = new google.maps.Marker({
		  map: map,
		  position: point,
		  label: icon.label
		});
		marker.addListener('click', function() {
		  infoWindow.setContent(infowincontent);
		  infoWindow.open(map, marker);
		});
	  });
	});
  }



function downloadUrl(url, callback) {
  var request = window.ActiveXObject ?
	  new ActiveXObject('Microsoft.XMLHTTP') :
	  new XMLHttpRequest;

  request.onreadystatechange = function() {
	if (request.readyState == 4) {
	  request.onreadystatechange = doNothing;
	  callback(request, request.status);
	}
  };

  request.open('GET', url, true);
  request.send(null);
}

function doNothing() {}

</script>
