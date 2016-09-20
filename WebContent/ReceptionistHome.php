
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Receptionist name || New appointments</title>

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
<body>

	<div
		style="position: fixed; top: 0px; left: 0px; width: 100%; height: 80px; background: white; z-index: 4;">
		<a class="homeLink" href="Home.php">MEDI<span
			style="color: #3ab4b0;">CARE</span></a>

	</div>
	<img src="Images\1.jpg" width="1348dp" height="200dp"
		style="position: absolute; top: 80px; left: 0; z-index: 3;">
	<div
		style="position: absolute; top: 80px; left: 0; right: 0; height: 200px; background: rgba(0, 0, 0, 0.9); z-index: 3;">
		<img src="Images\receptionist2.jpg"
			style="margin-top: 25px; margin-left: 30%; width: 150px; height: 150px; border-radius: 50%;">
		<p
			style="margin-top: -120px; margin-left: 600px; font-family: arial; letter-spacing: 5px; font-size: 20px; color: white;">
			RECEPTIONIST NAME<br> <br> <span
				style="font-size: 15px; color: white"><i>Receptionist</i></span>
		</p>
		<br><br><a href="ReceptionistProfileEdit.php" style="margin-left:600px;color:white;font-family:arial;border-radius:4px;font-size:12px;text-decoration:none;border:1px solid white;padding:10px 30px;">View Profile</a>
	</div>

	<div
		style="position: absolute; left: 0px; top: 280px; width: 100%; height: 150px; background: #ddd; z-index: 2">
		<h2
			style="margin-left: 160px; margin-top: 40px; font-family: arial; font-size: 18px; font-weight: normal;">Search
			previously registered patient by patient ID.</h2>
		<input type="text"
			style="position: absolute; top: 80px; left: 165px; width: 200px; height: 30px; outline: none; font-size: 15px; border: none; padding-left: 20px;"
			placeholder="Search by id here..."> <input type="submit"
			style="position: absolute; top: 80px; left: 390px; width: 100px; height: 30px; outline: none; font-size: 15px; border: none; background: #21b88d; color: white; cursor: pointer;"
			value="Search">
	</div>
	<ul class="navigation">
	<li style="background:#222;color:white;padding-left:20px;padding-top:10px;height:25px;">MENU</li>
		<li><img src="Images\newapp.png" width="40dp" height="40dp">

			<a href="ViewNewAppointments">New Appointments</a></li>

		<li><img src="Images\history.png" width="30dp" height="30dp">

			<a href="#">Patient History</a></li>

		<li><img src="Images\admit.png" width="30dp" height="30dp">

			<a href="#">Admit Patient</a></li>

		<li><img src="Images\discharge.png" width="30dp" height="30dp">

			<a href="#">Discharge Patient</a></li>

	</ul>
<div class="appointments">
<p align="center">NEW APPOINTMENTS</p>
<%
Object obj1  = request.getAttribute("c");
ArrayList<Appointment> appList = null;
if(obj1 != null){
appList = (ArrayList<Appointment>)obj1;
}

%>

<% 
if(appList!=null){
	%>
<table class="newAppointment" id="app">
<% for(Appointment app:appList){ 
	%>
	
	

<tr>
<td><h4 align="center"  id="l"><%= app.getFname() %></h4></td>
	<td><%=app.getFname() %>&nbsp &nbsp<%=app.getLname() %><br><br><label id="pid"><%=app.getPt_id() %></label></td>
	<td><img src="Images\view.png" width="40dp" height="40dp"><br><%=app.getReg_date() %></td>

</tr>
<% }} %>
</table>
</div>
	<link href="css/ReceptionistProf.css" rel="stylesheet">
</body>
</html>