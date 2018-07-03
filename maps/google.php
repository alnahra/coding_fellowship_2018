<html>
  <head>
    <title>Google Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
	   #map {
 		  height: 100%; margin: 0; padding: 0; overflow: hidden;}

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
         #data-value { font-size: 2.0em; font-weight: bold }
         #data-label { font-size: 2.0em; font-weight: normal; padding-right: 10px; }
         #data-label:after { content: ':' }
         #data-caret { margin-left: -5px; display: none; font-size: 14px; width: 14px}
       /* Optional: Makes the sample page fill the window. */
       html, body {
         height: 100%;
         margin: 1%;
         padding: 1%;
       }
     </style>
  </head>
  <body>
    <script>
      var map;
      function initMap() {
		  map = new google.maps.Map(document.getElementById('map'), {
  		 center: {lat: 38.64429, lng: -90.330128},
  		 zoom: 12,
		 styles: map_style,
        });
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
		}, {
			'featureType': 'administrative',
			'elementType': 'all',
			'stylers': [{'visibility': 'simplified'}, {'color': '#224337'}]
		}];
		</script>
	</div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLWcuhkxzhwRwV21oAoA-hBEq-BzDIVPE&callback=initMap"
    async defer></script>
  </body>
</html>
