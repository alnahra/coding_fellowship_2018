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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLWcuhkxzhwRwV21oAoA-hBEq-BzDIVPE&callback=initMap"
	type="text/javascript"></script>
<script type="text/javascript">
	var markers_a = [
		{"title":"Ballwin",
			"lat":"38.5951",
			"lng":"-90.5462",
			"description":"<h2>Ballwin</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=1'>Municipality Page</a>"},
		{"title":"Bel-Nor",
			"lat":"38.701986",
			"lng":"-90.316877",
			"description":"<h2>Bel-Nor</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=5'>Municipality Page</a>"},
		{"title":"Bel-Ridge",
			"lat":"38.7095",
			"lng":"-90.3254",
			"description":"<h2>Bel-Ridge</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=6'>Municipality Page</a>"},
		{"title":"Bella Villa",
			"lat":"38.5431",
			"lng":"-90.2861",
			"description":"<h2>Bella Villa</h2><p>County Police (South County, Precinct 4)</p><a href='view_municipalities.php?id=2'>Municipality Page</a>"},
		{"title":"Bellefontaine",
			"lat":"38.7403",
			"lng":"-90.2265",
			"description":"<h2>Bellefontaine Neighbors</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=3'>Municipality Page</a>"},
		{"title":"Bellerive",
			"lat":"38.7062",
			"lng":"-90.3043",
			"description":"<h2>Bellerive Acres</h2><p>Under Normandy Police Force</p><a href='view_municipalities.php?id=4'>Municipality Page</a>"},
		{"title":"Berkely",
			"lat":"38.7545",
			"lng":"-90.3312",
			"description":"<h2>Berkely</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=7'>Municipality Page</a>"},
		{"title":"Beverly",
			"lat":"38.7001",
			"lng":"-90.2923",
			"description":"<h2>Beverly Hills</h2><p>North County Police Cooperative</p><a href='view_municipalities.php?id=8'>Municipality Page</a>"},
		{"title":"Black Jack",
			"lat":"38.7934",
			"lng":"-90.2673",
			"description":"<h2>Black Jack</h2><p>County Police (North County, Precinct 1)</p><a href='view_municipalities.php?id=9'>Municipality Page</a>"},
		{"title":"Breckenridge",
			"lat":"38.7145",
			"lng":"-90.3673",
			"description":"<h2>Breckenridge Hills</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=10'>Municipality Page</a>"},
		{"title":"Brentwood",
			"lat":"38.6176",
			"lng":"-90.3493",
			"description":"<h2>Brentwood</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=11'>Municipality Page</a>"},
		{"title":"Bridgeton",
			"lat":"38.7670",
			"lng":"-90.4115",
			"description":"<h2>Bridgeton</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=12'>Municipality Page</a>"},
		{"title":"Calverton",
			"lat":"38.7648",
			"lng":"-90.3137",
			"description":"<h2>Calverton Park</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=13'>Municipality Page</a>"},
		{"title":"Champ",
				"lat":"38.7451",
				"lng":"-90.4538",
				"description":"<h2>Champ</h2><p>Under Maryland Heights Police</p><a href='view_municipalities.php?id=14'>Municipality Page</a>"},
		{"title":"Charlack",
			"lat":"38.7026",
			"lng":"-90.3434",
			"description":"<h2>Charlack</h2><p>North County Police Cooperative</p><a href='view_municipalities.php?id=15'>Municipality Page</a>"},
		{"title":"Chesterfield",
			"lat":"38.6631",
			"lng":"-90.5771",
			"description":"<h2>Chesterfield</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=16'>Municipality Page</a>"},
		{"title":"Clarkson",
			"lat":"38.6184",
			"lng":"-90.6426",
			"description":"<h2>Clarkson Valley</h2><p>Under Chesterfield Police Force</p><a href='view_municipalities.php?id=17'>Municipality Page</a>"},
		{"title":"Clayton",
			"lat":"38.6426",
			"lng":"-90.3237",
			"description":"<h2>Clayton</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=18'>Municipality Page</a>"},
		{"title":"Cool Valley",
			"lat":"38.7278",
			"lng":"-90.3101",
			"description":"<h2>Cool Valley</h2><p>Under Normandy Police Force</p><a href='view_municipalities.php?id=19'>Municipality Page</a>"}
	];
	// var markers_b = [
	// 	{"title":"Country Club",
	// 		"lat":"38.7209",
	// 		"lng":"-90.2748",
	// 		"description":"<h2>Country Club Hills</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=20'>Municipality Page</a>"}
	// 	{"title":"Country Life",
	// 		"lat":"38.6239",
	// 		"lng":"-90.4562",
	// 		"description":"<h2>Country Life Acres</h2><p>Under Town & Country Police Force</p><a href='view_municipalities.php?id=21'>Municipality Page</a>"},

	window.onload = function () {
		var mapOptions = {
			center: {lat: 38.64429, lng: -90.490128},
			zoom: 11,
			styles: map_style,
		};
		var map = new google.maps.Map(document.getElementById('map'),
			mapOptions);
		var infoWindow = new google.maps.InfoWindow();
		var lat_lng = new Array();
		var latlngbounds = new google.maps.LatLngBounds();
		for (i = 0; i < markers_a.length; i++) {
			var data = markers_a[i]
			var myLatlng = new google.maps.LatLng(data.lat, data.lng);
			lat_lng.push(myLatlng);
			var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			opacity: 0.9,
			title: data.title
		});
		latlngbounds.extend(marker.position);
		(function (marker, data) {
		google.maps.event.addListener(marker, "click", function (e) {
		infoWindow.setContent(data.description);
		infoWindow.open(map, marker);
		});
		})(marker, data);
	};
		// for (i = 0; i < markers_b.length; i++) {
		// 	var data = markers_b[i]
		// 	var myLatlng = new google.maps.LatLng(data.lat, data.lng);
		// 	lat_lng.push(myLatlng);
		// 	var marker = new google.maps.Marker({
		// 	position: myLatlng,
		// 	map: map,
		// 	opacity: 0.9,
		// 	title: data.title
		// });
		latlngbounds.extend(marker.position);
		(function (marker, data) {
		google.maps.event.addListener(marker, "click", function (e) {
		infoWindow.setContent(data.description);
		infoWindow.open(map, marker);
		});
		})(marker, data);
		map.setCenter(latlngbounds.getCenter());
	map.data.loadGeoJson('https://opendata.arcgis.com/datasets/2273a9e78bae4b94a2a1e6bf67e375e1_6.geojson');
		map.data.setStyle({strokeWeight: 0.8});
	}
</script>
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
</html>
