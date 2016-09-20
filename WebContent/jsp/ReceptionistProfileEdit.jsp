
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
<body >

	<div
		style="position: fixed; top: 0px; left: 0px; width: 100%; height: 80px; background: white; z-index: 4;">
		<a class="homeLink" href="Home.php">MEDI<span
			style="color: #3ab4b0;">CARE</span></a>

	</div>
	<img src="Images\1.jpg" width="1348dp" height="300dp"
		style="position: absolute; top: 80px; left: 0; z-index: 3;">
	<div
		style="position: absolute; top: 80px; left: 0; right: 0; height: 300px; background: rgba(239, 200, 73, 0.9); z-index: 3;">
		<p align="center"
			style="margin-top: 100px; font-family: arial; font-size: 25px">
			Receptionist Name<br> <br> <span style="font-size: 15px;"><i>Receptionist</i><br><br><br><br>PROFILE</span>
		</p>
	</div>

	<ul class="navigation">
		<li class="active"><a href="#">Personal Details</a></li>

		<li><a href="#">Contact Details</a></li>

		<li><a href="#">Educational Qualification</a></li>

		<li><a href="#"> New Appointments </a></li>
	</ul>
	
	
	<div class="appointments"></div>
	
	
	
	<link href="css/ReceptionistProfEdit.css" rel="stylesheet">
	<script src="JQuery/Jquery.js"></script>
	<script type="text/javascript">
		$('.navigation li:nth-child(1)').click(function(){
			$('.navigation li').removeClass('active');
			$('.navigation li:nth-child(1)').addClass('active');
			
		});
		$('.navigation li:nth-child(2)').click(function(){
			$('.navigation li').removeClass('active');
			$('.navigation li:nth-child(2)').addClass('active');
			
		});
		$('.navigation li:nth-child(3)').click(function(){
			$('.navigation li').removeClass('active');
			$('.navigation li:nth-child(3)').addClass('active');
			
		});
		$('.navigation li:nth-child(4)').click(function(){
			$('.navigation li').removeClass('active');
			$('.navigation li:nth-child(4)').addClass('active');
			
		});
	</script>

</body>
</html>