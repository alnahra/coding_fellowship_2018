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
			"description":"<h2>Cool Valley</h2><p>Under Normandy Police Force</p><a href='view_municipalities.php?id=19'>Municipality Page</a>"},
		{"title":"Country Club",
				"lat":"38.7209",
				"lng":"-90.2748",
				"description":"<h2>Country Club Hills</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=20'>Municipality Page</a>"},
		{"title":"Country Life",
				"lat":"38.6239",
				"lng":"-90.4562",
				"description":"<h2>Country Life Acres</h2><p>Under Town & Country Police Force</p><a href='view_municipalities.php?id=21'>Municipality Page</a>"},
		{"title":"Crestwood",
				"lat":"38.5570",
				"lng":"-90.3818",
				"description":"<h2>Crestwood</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=22'>Municipality Page</a>"},
		{"title":"Creve Couer",
			"lat":"38.6609",
			"lng":"-90.4226",
			"description":"<h2>Creve Couer</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=23'>Municipality Page</a>"},
		{"title":"Crystal Lake Park",
				"lat":"38.6220",
				"lng":"-90.4326",
				"description":"<h2>Crystal Lake Park</h2><p>Under Frontenac Police Force</p><a href='view_municipalities.php?id=24'>Municipality Page</a>"},
		{"title":"Dellwood",
				"lat":"38.7495",
				"lng":"-90.2857",
				"description":"<h2>Dellwood</h2><p>County Police (North County, Precinct 1)</p><a href='view_municipalities.php?id=25'>Municipality Page</a>"},
		{"title":"Des Peres",
				"lat":"38.6009",
				"lng":"-90.4329",
				"description":"<h2>Des Peres</h2><p>Independent Police Force(Combined w/ Fire Department)</p><a href='view_municipalities.php?id=26'>Municipality Page</a>"},
		{"title":"Edmundson",
				"lat":"38.7359",
				"lng":"-90.3640",
				"description":"<h2>Edmundson</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=27'>Municipality Page</a>"},
		{"title":"Ellisville",
				"lat":"38.5926",
				"lng":"-90.5871",
				"description":"<h2>Ellisville</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=28'>Municipality Page</a>"},
		{"title":"Eureka",
				"lat":"38.5026",
				"lng":"-90.6279",
				"description":"<h2>Eureka</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=29'>Municipality Page</a>"},
		{"title":"Fenton",
				"lat":"38.5126",
				"lng":"-90.4430",
				"description":"<h2>Fenton</h2><p>County Police (City of Fenton, Precinct 5)</p><a href='view_municipalities.php?id=30'>Municipality Page</a>"},
		{"title":"Ferguson",
				"lat":"38.7442",
				"lng":"-90.3054",
				"description":"<h2>Ferguson</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=31'>Municipality Page</a>"},
		{"title":"Flordell Hills",
				"lat":"38.7176",
				"lng":"-90.2657",
				"description":"<h2>Flordell Hills</h2><p>Under Velda City Police Force</p><a href='view_municipalities.php?id=32'>Municipality Page</a>"},
		{"title":"Florissant",
			"lat":"38.7892",
			"lng":"-90.3226",
			"description":"<h2>Florissant</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=33'>Municipality Page</a>"},
		{"title":"Frontenac",
			"lat":"38.6356",
			"lng":"-90.4151",
			"description":"<h2>Frontenac</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=34'>Municipality Page</a>"},
		{"title":"Glen Echo Park",
			"lat":"38.7012",
			"lng":"-90.2979",
			"description":"<h2>Glen Echo Park</h2><p>Under Normandy Police Force</p><a href='view_municipalities.php?id=35'>Municipality Page</a>"},
		{"title":"Glendale",
			"lat":"38.5959",
			"lng":"-90.3771",
			"description":"<h2>Glendale</h2><p>North County Police Cooperative</p><a href='view_municipalities.php?id=36'>Municipality Page</a>"},
		{"title":"Grantwood Village",
			"lat":"38.5503",
			"lng":"-90.3546",
			"description":"<h2>Grantwood Village</h2><p>County Police (Affton Southwest, Precinct 3)</p><a href='view_municipalities.php?id=37'>Municipality Page</a>"},
		{"title":"Green Park",
			"lat":"38.5237",
			"lng":"-90.3385",
			"description":"<h2>Green Park</h2><p>County Police (Affton Southwest, Precinct 3)</p><a href='view_municipalities.php?id=38'>Municipality Page</a>"},
		{"title":"Greendale",
			"lat":"38.6953",
			"lng":"-90.3132",
			"description":"<h2>Greendale</h2><p>North County Police Cooperative</p><a href='view_municipalities.php?id=39'>Municipality Page</a>"},
		{"title":"Hanley Hills",
			"lat":"38.6859",
			"lng":"-90.3237",
			"description":"<h2>Hanley Hills</h2><p>County Police (Central County, Precinct 2)</p><a href='view_municipalities.php?id=40'>Municipality Page</a>"},
		{"title":"Hazelwood",
			"lat":"38.7714",
			"lng":"-90.3709",
			"description":"<h2>Hazelwood</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=41'>Municipality Page</a>"},
		{"title":"Hillsdale",
			"lat":"38.6854",
			"lng":"-90.2876",
			"description":"<h2>Hillsdale</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=42'>Municipality Page</a>"},
		{"title":"Huntleigh",
			"lat":"38.6159",
			"lng":"-90.4107",
			"description":"<h2>Huntleigh</h2><p>Under Frontenac Police Force</p><a href='view_municipalities.php?id=43'>Municipality Page</a>"},
		{"title":"Jennings",
			"lat":"38.7192",
			"lng":"-90.2604",
			"description":"<h2>Jennings</h2><p>County Police (Jennings, Precinct 8)</p><a href='view_municipalities.php?id=44'>Municipality Page</a>"},
		{"title":"Kinloch",
			"lat":"38.7406",
			"lng":"-90.3254",
			"description":"<h2>Kinloch</h2><p>Under Northwoods Police Force</p><a href='view_municipalities.php?id=45'>Municipality Page</a>"},
		{"title":"Kirkwood",
			"lat":"38.5834",
			"lng":"-90.4068",
			"description":"<h2>Kirkwood</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=46'>Municipality Page</a>"},
		{"title":"Ladue",
			"lat":"38.6498",
			"lng":"-90.3807",
			"description":"<h2>Ladue</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=47'>Municipality Page</a>"},
		{"title":"Lakeshire",
			"lat":"38.53387",
			"lng":"-90.3351",
			"description":"<h2>Lakeshire</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=48'>Municipality Page</a>"},
		{"title":"Manchester",
			"lat":"38.5970",
			"lng":"-90.5093",
			"description":"<h2>Manchester</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=49'>Municipality Page</a>"},
		{"title":"Maplewood",
			"lat":"38.6126",
			"lng":"-90.3246",
			"description":"<h2>Maplewood</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=50'>Municipality Page</a>"},
		{"title":"Marlborough",
			"lat":"38.5703",
			"lng":"-90.3371",
			"description":"<h2>Marlborough</h2><p>County Police (Affton Southwest, Precinct 3)</p><a href='view_municipalities.php?id=51'>Municipality Page</a>"},
		{"title":"Maryland Heights",
			"lat":"38.7131",
			"lng":"-90.4298",
			"description":"<h2>Maryland Heights</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=52'>Municipality Page</a>"},
		{"title":"Moline Acres",
			"lat":"38.7470",
			"lng":"-90.2401",
			"description":"<h2>Moline Acres</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=53'>Municipality Page</a>"},
		{"title":"Normandy",
			"lat":"38.7209",
			"lng":"-90.2973",
			"description":"<h2>Normandy</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=54'>Municipality Page</a>"},
		{"title":"Northwoods",
			"lat":"38.7042",
			"lng":"-90.2834",
			"description":"<h2>Northwoods</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=55'>Municipality Page</a>"},
		{"title":"Norwood Court",
			"lat":"38.7149",
			"lng":"-90.2896",
			"description":"<h2>Norwood Court</h2><p>Under Northwoods Police Force</p><a href='view_municipalities.php?id=56'>Municipality Page</a>"},
		{"title":"Oakland",
			"lat":"38.5764",
			"lng":"-90.3857",
			"description":"<h2>Oakland</h2><p>Under Kirkwood Police Force</p><a href='view_municipalities.php?id=57'>Municipality Page</a>"},
		{"title":"Olivette",
			"lat":"38.6653",
			"lng":"-90.3759",
			"description":"<h2>Olivette</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=58'>Municipality Page</a>"},
		{"title":"Overland",
			"lat":"38.7012",
			"lng":"-90.3623",
			"description":"<h2>Overland</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=59'>Municipality Page</a>"},
		{"title":"Pacific",
			"lat":"38.48",
			"lng":"-90.735",
			"description":"<h2>Pacific</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=60'>Municipality Page</a>"},
		{"title":"Pagedale",
			"lat":"38.6834",
			"lng":"-90.3076",
			"description":"<h2>Pagedale</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=61'>Municipality Page</a>"},
		{"title":"Pasadena Hills",
			"lat":"38.7084",
			"lng":"-90.2929",
			"description":"<h2>Pasadena Hills</h2><p>Under Normandy Police Force</p><a href='view_municipalities.php?id=62'>Municipality Page</a>"},
		{"title":"Pasadena Park",
			"lat":"38.711639",
			"lng":"-90.297292",
			"description":"<h2>Pasadena Park</h2><p>Under Normandy Police Force</p><a href='view_municipalities.php?id=63'>Municipality Page</a>"},
		{"title":"Pine Lawn",
			"lat":"38.6959",
			"lng":"-90.2751",
			"description":"<h2>Pine Lawn</h2><p>North County Police Cooperative</p><a href='view_municipalities.php?id=64'>Municipality Page</a>"},
		{"title":"Richmond Heights",
			"lat":"38.6287",
			"lng":"-90.3196",
			"description":"<h2>Richmond Heights</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=65'>Municipality Page</a>"},
		{"title":"Riverview",
			"lat":"38.7478",
			"lng":"-90.3196",
			"description":"<h2>Riiverview</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=66'>Municipality Page</a>"},
		{"title":"Rock Hill",
			"lat":"38.6076",
			"lng":"-90.3785",
			"description":"<h2>Rock Hill</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=67'>Municipality Page</a>"},
		{"title":"Shrewsbury",
			"lat":"38.5869",
			"lng":"-90.3301",
			"description":"<h2>Shrewsbury</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=68'>Municipality Page</a>"},
		{"title":"St. Ann",
			"lat":"38.7309",
			"lng":"-90.3890",
			"description":"<h2>St. Ann</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=69'>Municipality Page</a>"},
		{"title":"St. John",
			"lat":"38.716091",
			"lng":"-90.346871",
			"description":"<h2>St. John</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=70'>Municipality Page</a>"},
		{"title":"Sunset Hills",
			"lat":"38.5389",
			"lng":"-90.4073",
			"description":"<h2>Sunset Hills</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=71'>Municipality Page</a>"},
		{"title":"Sycamore Hills",
			"lat":"38.7009",
			"lng":"-90.3498",
			"description":"<h2>Sycamore Hills</h2><p>Under St. John Police Force</p><a href='view_municipalities.php?id=72'>Municipality Page</a>"},
		{"title":"Town & Country",
			"lat":"38.6123",
			"lng":"-90.4635",
			"description":"<h2>Town & Country</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=73'>Municipality Page</a>"},
		{"title":"Twin Oaks",
			"lat":"38.5667",
			"lng":"-90.4986",
			"description":"<h2>Twin Oaks</h2><p>County Police (West County, Precinct 7)</p><a href='view_municipalities.php?id=74'>Municipality Page</a>"},
		{"title":"University City",
			"lat":"38.6682",
			"lng":"-90.3325",
			"description":"<h2>University City</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=75'>Municipality Page</a>"},
		{"title":"Uplands Park",
			"lat":"38.6931",
			"lng":"-90.2823",
			"description":"<h2>Uplands Park</h2><p>North County Police Cooperative</p><a href='view_municipalities.php?id=76'>Municipality Page</a>"},
		{"title":"Valley Park",
			"lat":"38.5492",
			"lng":"-90.4926",
			"description":"<h2>Valley Park</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=77'>Municipality Page</a>"},
		{"title":"Velda City",
			"lat":"38.6932",
			"lng":"-90.2937",
			"description":"<h2>Velda City</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=78'>Municipality Page</a>"},
		{"title":"Velda Village Hills",
			"lat":"38.6906",
			"lng":"-90.2873",
			"description":"<h2>Velda Village Hills</h2><p>North County Police Cooperative</p><a href='view_municipalities.php?id=79'>Municipality Page</a>"},
		{"title":"Vinita Park",
			"lat":"38.6901",
			"lng":"-90.3426",
			"description":"<h2>Vinita Park</h2><p>North County Police Cooperative</p><a href='view_municipalities.php?id=80'>Municipality Page</a>"},
		{"title":"Warson Woods",
			"lat":"38.6073",
			"lng":"-90.3835",
			"description":"<h2>Warson Woods</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=81'>Municipality Page</a>"},
		{"title":"Webster Groves",
			"lat":"38.5926",
			"lng":"-90.3573",
			"description":"<h2>Webster Groves</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=82'>Municipality Page</a>"},
		{"title":"Wellston",
			"lat":"38.6728",
			"lng":"-90.2993",
			"description":"<h2>Wellston</h2><p>North County Police Cooperative</p><a href='view_municipalities.php?id=83'>Municipality Page</a>"},
		{"title":"Westwood",
			"lat":"38.6437",
			"lng":"-90.4398",
			"description":"<h2>Westwood</h2><p>Under Frontenac Police Department</p><a href='view_municipalities.php?id=84'>Municipality Page</a>"},
		{"title":"Wilbur Park",
			"lat":"38.5531",
			"lng":"-90.3096",
			"description":"<h2>Wilbur Park</h2><p>County Police (Affton Southwest, Precinct 3)</p><a href='view_municipalities.php?id=85'>Municipality Page</a>"},
		{"title":"Wildwood",
			"lat":"38.5828",
			"lng":"-90.6629",
			"description":"<h2>Wildwood</h2><p>County Police (Wildwood, Precinct 6)</p><a href='view_municipalities.php?id=86'>Municipality Page</a>"},
		{"title":"Winchester",
			"lat":"38.5903",
			"lng":"-90.5279",
			"description":"<h2>Winchester</h2><p>County Police (West County, Precinct 7)</p><a href='view_municipalities.php?id=87'>Municipality Page</a>"},
		{"title":"Woodson Terrace",
			"lat":"38.7251",
			"lng":"-90.3584",
			"description":"<h2>Woodson Terrace</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=88'>Municipality Page</a>"},
		{"title":"St. Louis City",
			"lat":"38.6270",
			"lng":"-90.1994",
			"description":"<h2>St. Louis City</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=89'>Municipality Page</a>"},
		{"title":"St. Louis County",
			"lat":"38.641515",
			"lng":"-90.296",
			"description":"<h2>St. Louis County</h2><p>Independent Police Force</p><a href='view_municipalities.php?id=90'>Municipality Page</a>"},
];

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
