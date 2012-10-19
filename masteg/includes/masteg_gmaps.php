<?php

function masteg_gmaps_text(){
	echo '
	<!DOCTYPE html>
	<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<style type="text/css">
			html { height: 100% }
			body { height: 100%; margin: 0; padding: 0 }
			#map_canvas { height: 100% }
		</style>
		<script type="text/javascript"
			src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDvwOPjQvFBxpfLoAqeDw9-qDJUccTI_Jk&sensor=false">
		</script>
		<script type="text/javascript">
			var geocoder;
			var map; 
			function initialize() {
				geocoder = new google.maps.Geocoder();
				var latlng = new google.maps.LatLng(-6.914744, 107.609811);
				var mapOptions = {
				zoom: 8,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
				}
			map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
			}

			function codeAddress() {
			var address = document.getElementById("address").value;
			geocoder.geocode( { "address": address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
				var marker = new google.maps.Marker({
				map: map,
				position: results[0].geometry.location
				});
			} else {
			alert("Geocode was not successful for the following reason: " + status);
			}
			});
			}
		</script>
	</head>
	<body onload="initialize()">
	<div>
		<input id="address" type="textbox" value="">
		<input type="button" value="Get Maps" onclick="codeAddress()">
	</div>
	<p/>
	<div id="map_canvas" style="width: 1180px; height: 450px;"></div>
	</body>
	</html>
	';
}

