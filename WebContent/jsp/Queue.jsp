<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Patient Queue</title>
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
.queslip{
position: absolute;
	top: 250px;
	left:500px;
	background:white;
	width:400px;
	height:400px;
	box-shadow: 0px 20px 20px #555;
}
.searchtab{
margin-top:100px;
}
.searchtab input{
margin-left:50px;
outline:none;
border:1px solid #ccc;
padding-left:20px;
width:200px;
height:25px;

}
</style>
</head>
<body>
<div
		style="position: fixed; top: 0px; left: 0px; width: 100%; height: 80px; background: white; z-index: 4;">
		<a class="homeLink" href="Home.jsp">MEDI<span
			style="color: #3ab4b0;">CARE</span></a>

</div>

<div
		style="position: absolute; top: 80px; left: 0; width: 1348px; height: 200px; background: rgba(20, 20, 20, 0.5)"></div>

<div class="queslip">
		<div class="searchtab">
			<form method="get" >
			<input type="text" name="pid" placeholder="patient ID" class="pid">
			<input type="submit" name="search" value="search" class="search">
			</form>
			<br><br><hr>			
		</div>
		<div class="queuedata">
		<table name="quetable" >
		<tr><td>Patient ID:<td></tr>
		<tr><td>Patient Name:<td></tr>
		<tr><td>Doctor Name:<td></tr>
		<tr><td>Room No.:<td></tr>
		<tr><td>Serial Number:<td></tr>		
		</table>
		</div>
	
</div>			


</body>
</html>