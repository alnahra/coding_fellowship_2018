<?php

include('include/include_all.php');
site_header('PRP Municipality Map');
?>

<html>

  <head>
    <title>Google Map</title>
	<h1>POLICING MAP</h1><br><br><br><br><br>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
	<style>
	h1 {
		color:#224337;
		float: left;
		font-family: Verdana, sans-serif;
		font-size: 46px;
		margin-left: 10px;
		margin-bottom: auto;
	}
	html, body, #map {
		height: 100%;
		margin: 10px;
		padding: 10px;
		overflow: visible;
		background-color: #F7FBFC;
	}
	.navigation{
		list-style-type: none;
		float: right;
		position: fixed;
			right: 50;
			top: 45;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		padding-right: 20px;
		margin-bottom: 3px;
		margin-top: 5px;
	    background-color: rgba(110, 124, 138, .2);
	    display: inline;
		font-family: Verdana, sans-serif;
		font-size: 20;
	}
</style>
  </head>
  <body>
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
		function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: 38.64429, lng: -90.490128},
				zoom: 11,
				styles: map_style,
			});
			var Ballwin = {lat: 38.5951, lng: -90.5462};
			var contentString = '<div id="content">'+
				'<h2 id="firstHeading" class="firstHeading">Ballwin</h2>'+
				'<div id="bodyContent">'+
				'<p>Independent Police Force<p>'+
				'<p><a href="view_municipalities.php?id=1">Municpality Page</a><p>'+
				'</div>';
			var infoWindow = new google.maps.InfoWindow({
				content: contentString,
			});
			  var marker = new google.maps.Marker({
				  position: Ballwin,
				  map: map,
				  title: 'Ballwin'});
				  marker.setOpacity(1);
			marker.addListener('click', function() {
				infoWindow.open(map,marker);
			});
		 map.data.loadGeoJson('https://opendata.arcgis.com/datasets/2273a9e78bae4b94a2a1e6bf67e375e1_6.geojson');
		 map.data.setStyle({strokeWeight: 1, opacity: 0.2});
		 map.data.addListener('click',function(e){
		    google.maps.event.trigger(this.getMap(), 'click', e);
		  });
  		};
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLWcuhkxzhwRwV21oAoA-hBEq-BzDIVPE&callback=initMap"
    async defer></script>
  </body>

</html>
