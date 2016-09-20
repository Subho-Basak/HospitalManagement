<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Medicare || Location</title>

<style type="text/css">
p{font-family:arial;color:white;}
.homeLink {
	position: relative;
	top: 20px;
	left: 50px;
	width: 250px;
	height: 40px;
	font-family: arial;
	font-weight: bold;
	color: gray;
	text-decoration: none;
	font-size: 2em;
	background: url("Images/logo.png") no-repeat left center;
	padding-left: 60px;
}
</style>

</head>
<body>
	<div
		style="position: fixed; top: 0px; left: 0px; width: 100%; height: 80px; background: white; z-index: 4; box-shadow: 0px 5px 5px gray">
		<a class="homeLink" href="Home.jsp">MEDI<span
			style="color: #3ab4b0;">CARE</span></a>
	</div>

	<img src="Images\loc.jpg" width="1348dp" height="250dp"
		style="position: absolute; top: 80px; left: 0; z-index: 3;">
	<div
		style="position: absolute; top: 80px; left: 0; right: 0; height: 250px; background: rgba(0, 0, 0, 0.3); z-index: 3;">
		<p align="center"
			style="margin-top: 100px; font-family: arial; font-size: 30px; color: white;">
			Location<br> <br> <span
				style="font-size: 15px; color: white"><i>Find us on Map</i></span>
		</p>
	</div>

<img src="Images\direction.png" width="70dp" height="70dp" style="margin-left:46%;margin-top:350px;">
<p  style="color:gray;margin-top:-58px;margin-bottom:65px;margin-left:800px"><span style="color:gray;font-size:20px">Address</span><br><br>500 Terry Francois St. San Francisco, CA 94158</p>

	<div id="map" style="margin-top: 43px; width: 100%; height: 300px;"></div>
	<div
		style="position: absolute; top: 500px; left: 0; height: 300px; width: 100%; background: rgba(200,200,200,0.6);cursor:pointer;"><img src="Images\viewmap.png" width="100dp" height="100dp" style="margin-left:46%;margin-top:100px;"><p align="center">View on Google Map</p></div>
		
	
		
	<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
		async defer></script>

	<script>
		function initMap() {
			var mapDiv = document.getElementById('map');
			var map = new google.maps.Map(mapDiv, {
				center : {
					lat : 44.540,
					lng : -78.546
				},
				zoom : 8
			});
		}
	</script>
</body>
</html>