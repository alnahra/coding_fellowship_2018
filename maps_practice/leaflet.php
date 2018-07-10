<html>
<head>
	<link rel="stylesheet"
		href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
		integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
		crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
		integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
		crossorigin="">
	</script>
</head>
<body>
	 <div id="mapid">
		 <script>
		 	var mymap = L.map('mapid').setView([38.6270, -90.1994], 10);
			L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiYWxpYW5haHJhIiwiYSI6ImNqamE1N3lpeDNjbjUzc29nbGtvdXdkYmkifQ.5u2k_XgSpMuuOJma5nT-lQ', {
    			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    			maxZoom: 18,
    			id: 'mapbox.streets',
				accessToken: 'pk.eyJ1IjoiYWxpYW5haHJhIiwiYSI6ImNqamE1N3lpeDNjbjUzc29nbGtvdXdkYmkifQ.5u2k_XgSpMuuOJma5nT-lQ'
			}).addTo(mymap);

			var myLayer = L.geoJSON().addTo(map);
			myLayer.addData(geojsonFeature);

		</script>
	 </div>
	 <style>
	 	#mapid {height: 75%;
			width: 95%}
	</style>
