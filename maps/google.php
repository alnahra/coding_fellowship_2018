<?php

include('include/include_all.php');
site_header('PRP Municipality Map');
?>

<html>
	<link rel='stylesheet' href='style.css'/>
	<link rel='stylesheet' href='boilerplate_style.css'/>
  <head>
    <title>Google Map</title>
	<h1>POLICING MAP</h1>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
	<style>
  html, body, #map { height: 100%; margin: 10px; padding: 10px; overflow: scroll; }
    .nicebox {
      position: absolute;
      text-align: center;
      font-family: "Roboto", "Arial", sans-serif;
      font-size: 13px;
      z-index: 5;
      box-shadow: 0px 4px 6px -4px #333;
      padding: 10px;
      background: rgb(255,255,255);
      background: linear-gradient(to bottom,rgba(255,255,255,1) 0%,rgba(245,245,245,1) 100%);
      border: rgb(229, 229, 229) 1px solid;
    }
    #controls {
      top: 10px;
      left: 110px;
      width: 360px;
      height: 45px;
    }
    #data-box {
      top: 10px;
      left: 500px;
      height: 45px;
      line-height: 45px;
      display: none;
    }
    #census-variable {
      width: 360px;
      height: 20px;
    }
    #legend { display: flex; display: -webkit-box; padding-top: 7px }
    .color-key {
      background: linear-gradient(to right,
        hsl(5, 69%, 54%) 0%,
        hsl(29, 71%, 51%) 17%,
        hsl(54, 74%, 47%) 33%,
        hsl(78, 76%, 44%) 50%,
        hsl(102, 78%, 41%) 67%,
        hsl(127, 81%, 37%) 83%,
        hsl(151, 83%, 34%) 100%);
      flex: 1;
      -webkit-box-flex: 1;
      margin: 0 5px;
      text-align: left;
      font-size: 1.0em;
      line-height: 1.0em;
    }
    #data-value { font-size: 2.0em; font-weight: bold }
    #data-label { font-size: 2.0em; font-weight: normal; padding-right: 10px; }
    #data-label:after { content: ':' }
    #data-caret { margin-left: -5px; display: none; font-size: 14px; width: 14px}
</style>
  </head>
  <body>
	<div id="data-box" class="nicebox">
	  <label id="data-label" for="data-value"></label>
	  <span id="data-value"></span>
	</div>
	  <div id="map">
		  <script>
  			// maps of roads etc. not showing
	  		var map_style = [{
	  		  'stylers': [{'visibility': 'on'}]
	  		}, {
	  			'featureType': 'landscape',
	  			'elementType': 'all',
	  			'stylers': [{'visibility': 'off'}, {'color': '#fcfcfc'}]
	  		}, {
	  			'featureType': 'poi',
	  			'elementType': 'all',
	  			'stylers': [{'visibility': 'off'}, {'color': '#fcfcfc'}]
	  		}, {
	  			'featureType': 'road',
	  			'elementType': 'all',
	  			'stylers': [{'visibility': 'off'}, {'color': '#fcfcfc'}]
	  		}, {
	  		  'featureType': 'transit',
	  		  'elementType': 'all',
	  		  'stylers': [{'visibility': 'off'}, {'color': '#fcfcfc'}]
		  }];
		</script>
	</div>
    <script>
	  var map;
		function initMap() {
		  map = new google.maps.Map(document.getElementById('map'), {
		    center: {lat: 38.64429, lng: -90.490128},
			zoom: 11,
			styles: map_style,
		  });

		  // var Ballwin = {lat: 38.5951, lng: -90.5462};
		  // var infoWindow = new google.maps.InfoWindow({
			//   content: "hello",
			//   position: new google.maps.LatLng(38.5951, -90.5462)
		  // });

		          //Create InfoWindow.
		          var infoWindow = new google.maps.InfoWindow();

		          //Attach click event handler to the map.
		          google.maps.event.addListener(map, 'click', function (info) {

		              //Determine the location where the user has clicked.
		              var location = info.latLng;

		              //Set Content of InfoWindow.
		              infoWindow.setContent('Latitude: ' + location.lat() + '<br />Longitude: ' + location.lng());

		              //Set Position of InfoWindow.
		              infoWindow.setPosition(location);

		              //Open InfoWindow.
		              infoWindow.open(map);
		          });

				  map.data.loadGeoJson(
					  'https://opendata.arcgis.com/datasets/2273a9e78bae4b94a2a1e6bf67e375e1_6.geojson');
					  map.data.setStyle({strokeWeight: 1});

			// var marker = new google.maps.Marker({
			// 	position: Ballwin,
			// 	map: map,
			// title: 'Ballwin'});
		}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLWcuhkxzhwRwV21oAoA-hBEq-BzDIVPE&callback=initMap"
    async defer></script>
  </body>

</html>
