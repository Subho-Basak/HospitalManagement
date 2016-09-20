<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1" import="java.util.*,com.hospital.Beans.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Doctor name || New appointments</title>

<style type="text/css">
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
<body bgcolor="#efefef">

	<div
		style="position: fixed; top: 0px; left: 0px; width: 100%; height: 80px; background: white; z-index: 4;">
		<a class="homeLink" href="Home.jsp">MEDI<span
			style="color: #3ab4b0;">CARE</span></a>

	</div>
	<img src="Images\2.jpg" width="1348dp" height="150dp"
		style="position: fixed; top: 80px; left: 0;z-index:4;">
	<div
		style="position: fixed; top: 80px; left: 0; right: 0; height: 150px; background: rgba(92, 181, 229, 0.9);z-index:4;">
		<p align="center"
			style="margin-top: 50px; font-family: arial; font-size: 25px">
			Doctor Name<br>
			<br>
			<span style="font-size: 15px;"><i>Doctor</i></span>
		</p>
	</div>

	<ul class="navigation">
		<a href="Home.jsp"><li>
			<h2>New Appointments</h2><label style="position:absolute;top:30px;right:45px;color:green" id="no"></label>
			<p>Unread appointments</p>
		</li></a>

		<a href="#"><li>
			<h2>Old Appointments</h2>
			<p>Read appointments</p>
		</li></a>
		
		<a href="#"><li>
			<h2>New Appointments</h2>
			<p>Unread appointments</p>
		</li></a>
		
		<a href="#"><li>
			<h2>New Appointments</h2>
			<p>Unread appointments</p>
		</li></a>
	</ul>
<div class="appointments">
<p>New Appointments</p>

<div>

<table class="newAppointment" id="app">

	
	

<tr>
<td><h4 align="center"  id="l"></h4></td>
	<td><br><br><label id="pid"></label></td>
	<td></td>

</tr>

</table>
</div>

</div>
<link href="css/DoctorProf.css" rel="stylesheet">
<script
		src="JQuery/Jquery.js"></script>
<script type="text/javascript">
var count = $('#app tr').length;
$("#no").text(count);

for(var i=1;i<=count;i++){
	var newColor = '#'+(0x1000000+(Math.random())*0xffffff).toString(16).substr(1,6);
	$("#app tr:nth-child("+i+") h4").css({background:newColor});
}
</script>

</body>
</html>