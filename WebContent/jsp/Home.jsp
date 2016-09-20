<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Medicare | Home</title>
<style type="text/css">
.l {
	background: linear-gradient(45deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)),
		url("Images/map.jpg");
}

.back {
	background: url("Images/back.png");
}

.cross {
	background: url("Images/cross.png")
}

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

.followus li:nth-child(1) a {
	padding: 50px;
	background: url("Images/fb.png") no-repeat left center;
}

.followus li:nth-child(2) a {
	padding: 40px;
	background: url("Images/twit.png") no-repeat left center;
}

.followus li:nth-child(3) a {
	padding: 40px;
	background: url("Images/g+.png") no-repeat left center;
}

.followus li:nth-child(4) a {
	padding: 40px;
	background: url("Images/linked.png") no-repeat left center;
}
</style>
<link href="css/home.css" rel="stylesheet">
</head>
<body>



	<div
		style="position: fixed; top: 0px; left: 0px; width: 100%; height: 80px; background: white; z-index: 4; box-shadow: 0px 5px 5px gray">
		<a class="homeLink" href="Home.jsp">MEDI<span>CARE</span></a>

	</div>

	<div id="menuScreen1">
		<ul>
			<li class="lst"><a href="">Home</a></li>
			<li class="lst"><a href="">Ward or Departments</a></li>
			<li class="lst"><a href="">Infrastructure</a></li>
			<li class="lst"><a href="">Our Staffs</a></li>
			<li class="lst"><a href="">Visiting Ours</a></li>
			<li class="lst"><a href="">Contact Us</a></li>
			<li class="lst"><a href="">About Us</a></li>
		</ul>


	</div>
	<div id="menuScreen2"></div>

	<div class="slide-show">

		<figure> <img src="Images\slide1.jpg"
			style="position: fixed; top: 0px; left: 0px; height: 667px;"
			width="1348"> <figcaption></figcaption></figure>
		<figure> <img src="Images\slide2.jpg"
			style="position: fixed; top: 0px; left: 0px; height: 667px;"
			width="1348"> <figcaption></figcaption></figure>
		<figure> <img src="Images\slide3.jpg"
			style="position: fixed; top: 0px; left: 0px; height: 667px;"
			width="1348"> <figcaption></figcaption></figure>
		<figure> <img src="Images\slide4.jpg"
			style="position: fixed; top: 0px; left: 0px; height: 667px;"
			width="1348"> <figcaption></figcaption></figure>
		<figure> <img src="Images\slide5.jpg"
			style="position: fixed; top: 0px; left: 0px; height: 667px;"
			width="1348"> <figcaption></figcaption></figure>
	</div>
	<div class="navbar">

		<ul>
			<li class="active"></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>

	</div>
	<button class="hamburger menubar">
		<span></span>
	</button>
	<button class="login">Login</button>

	<button class="register">Make Appointment</button>
	<div
		style="position: fixed; top: 630px; left: 48.3%; width: 100px; height: 100px; border-radius: 50px; color: white; font-family: yu gothic light; text-align: center; line-height: 50px; font-style: normal; background: #505050; z-index: 1; text-shadow: 0px 1px 1px black">Scroll</div>
	<div class="emp">


		<img class="doclogo" src="Images\doc.jpg" width="550dp" height="450dp">

	</div>

	<div class="emptitle">
		<h1>employees</h1>
		<ul>
			<li>Doctors</li>
			<br>
			<li>Nurse</li>
		</ul>

		<button>View more</button>
	</div>

	<div class="srv">
		<h1 class="service">services</h1>
		<div class="servlist">
			<ul>
				<li>Ambulance</li>
				<br>
				<li>Nurse</li>
			</ul>
			<button>View more</button>
		</div>
		<div
			style="position: absolute; top: 50px; left: 100px; width: 400px; height: 400px; background: #514c51; opacity: 0.7; overflow: hidden;">
			<img src="Images\ambulance.jpg" width="400dp" height="500dp"
				class="ambu">
		</div>
	</div>
	<div
		style="position: absolute; top: 2200px; left: 0px; width: 0px; height: 0px; border-left: 1348px solid #2a2926; border-top: 400px solid transparent; border-bottom: 400px solid transparent; overflow: hidden; z-index: 2">
		<img src="Images\ORmain.jpg" width="1348dp" width="500dp">
	</div>

	<div class="dept">
		<h1>departments</h1>
		<ul>
			<li>Ambulance</li>
			<br>
			<li>Nurse</li>
		</ul>
		<button>View more</button>
	</div>
	<div
		style="position: absolute; top: 2600px; left: 0px; width: 100%; height: 800px; background: #fff; z-index: 1">

		<div class="location">
			<h1>location</h1>
			<p>
				Find our location<br> on google map.
			</p>
			<button>View on map</button>
		</div>

		<ul class="map">
			<li class="l"><span class="s"></span></li>
		</ul>

		<label class="pointer">MEDICARE</label>
		<div class="triangle"></div>
	</div>
	<hr width="600"
		style="position: absolute; top: 3400px; left: 400px; border: none; background: -webkit-gradient(linear, 0 0, 100% 0, from(rgba(0, 0, 0, 0)), color-stop(0.5, #333333), to(rgba(0, 0, 0, 0))); z-index: 2;">

	<div
		style="position: absolute; top: 3400px; left: 0; width: 0px; height: 0px; z-index: 2; border-top: 400px solid white; border-left: 674px solid transparent; border-right: 674px solid transparent;"></div>
	<h1
		style="position: absolute; top: 3300px; left: 40%; font-size: 4em; color: gray; z-index: 2;">contacts</h1>
	<div class="followus">
		<h4>Follow Us:</h4>
		<ul>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
		</ul>
	</div>
	<img src="Images\footerimage.jpg" width="1348dp" height="850dp"
		style="position: absolute; top: 3400px; left: 0; z-index: 1">
	<div
		style="position: absolute; top: 3400px; left: 0; width: 100%; height: 850px; z-index: 1; background: rgba(0, 0, 0, 0.5)">
		<div class="email">
			<h1>WRITE TO US</h1>
			<form action="EmailSendingServlet" method="post">
				<input type="text" placeholder="Name" name="name"><br>
				<input type="text" placeholder="Your Email" name="recipient"><br>
				<input type="text" placeholder="Subject" name="subject"><br>
				<textarea rows="7" cols="48" placeholder="Message" name="content"></textarea>
				<input type="submit" class="send" value="Send"
					style="position: absolute; top: 298px; right: -150px; cursor: pointer; background: #3ab4b0; border: none; outline: none; width: 120px; height: 50px;"><br>
			</form>
		</div>
	</div>
	<a href="#" class="back-to-top"><img src="Images/up.png" width="64"
		height="64" style="box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);"></a>

	<!-- Login Panel -->
	<div class="logSelect">
		<span></span>
		</button>
		<button class="cross"></button>
		<ul>
			<li class="click"><label>A</label><label>&nbsp&nbsp&nbsp
					admin</label></li>
			<li class="click"><label>D</label><label>&nbsp&nbsp&nbsp
					doctor</label></li>
			<li class="click"><label>N</label><label>&nbsp&nbsp&nbsp
					nurse</label></li>
			<li class="click"><label>P</label><label>&nbsp&nbsp&nbsp
					pathologist</label></li>
			<li class="click"><label>R</label><label>&nbsp&nbsp&nbsp
					receptionist</label></li>
			<li class="click"><label>S</label><label>&nbsp&nbsp&nbsp
					staff</label></li>


		</ul>

		<div class="logPanel">
			<button class="back"></button>
			<button class="cross"></button>
			<h4>login credentials</h4>
			<hr>
			<label></label>
			<form action="">
				<input type="text" name="uname" placeholder="Username"> <input
					type="text" name="pass" placeholder="Password"> <input
					type="submit" name="submit" value="Login"
					style="background: #2593E5; cursor: pointer; color: white; text-indent: 0; border: none;">
			</form>
		</div>


	</div>

	<!-- Register Panel -->
	<div class="regtype" style="z-index:0;opacity:0">
		<ul>
			<li><h3>Outpatient Department</h3>

				<p>OPD is a hospital department where patients receive diagnoses
					and/or treatment but do not stay overnight.</p> <br> <br><a href="PatientAppointment.jsp">+
					Make appointment</a></li>
			<li style="width: 100px"><hr style="transform: rotateZ(90deg)"></li>
			<li><h3>Inpatient Department.</h3>
				<p>IPD is a hospital department where patients are admitted to the hospital
					and stay overnight.</p>
				<br><br> <a href="IPDRegistrationPage.jsp">+ Make appointment</a></li>

		</ul>
	</div>
	<script src="JQuery/Jquery.js"></script>
	<script src="JQuery/Home.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<script src="js/Script.js"></script>
</body>
</html>