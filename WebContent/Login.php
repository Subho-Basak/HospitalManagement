<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Criticare | Login to your account</title>
<link rel="stylesheet" type="text/css" href="Style/jquery.material.form.css">
<link rel="stylesheet" type="text/css" href="Style/Home.css">
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/ajSlider.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<style>

form{
margin:100px 500px;	
}

#login{
width:250px;
height:40px;
background:#333;
border:none;
color:#FFF;
font-size:18px;	
}
</style>

</head>

<body>

<div class="header1">



		<a href="#" style="border:none;">BOOK AMBULANCE </a> <a href="CancelBooking.php">CANCELLATION </a> <a
			href="Login.php" id="login">LOGIN </a>
</div>

   <p style="margin:100px 600px;font-size:18px;"><i class="fa fa-home" aria-hidden="true"></i> <a href="Home.php" style="color:#000">Home</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true"></i>
   Login</p>

<form action="" class="material">


	<select name="mySelect" placeholder="Sign In as :">
		<option value="1" selected>Patient</option>
		<option value="2">Receptionist</option>
		<option value="3" >Doctor</option>
		<option value="4">Staff</option>
	</select>
    
	<input type="email" name="email" placeholder="E-mail" required>
	<input type="password" name="name" placeholder="Password" required><br />
<input type="submit" id="login" value="Login"/>
</form>



<footer>
<br>
<ul style="display:inline;margin-top:400px;">
<li>
<h4>What We Offer</h4>

<ul>
<li>24 / 7 Emergency Service</li>
<li>Sending Booking Alert By SMS</li>
<li>GPS Tracking System For Location Guessing</li>
<li>Instant Printed Bills In Car On Departure</li>
<li>Magazine And News Papers For Reading On Ride</li>
<li>Credit And Debit Card Payment Available</li>

</ul>
</li>

<li>
<h4>Contact Info</h4>

<ul>
<li><i class="fa fa-home" aria-hidden="true"></i> 63739 street lorem ipsum City, Country</li>
<li><i class="fa fa-phone" aria-hidden="true"></i> +1 123 312 32 24</li><br>
<li><i class="fa fa-mobile" aria-hidden="true"></i> +1 123 312 32 24</li><br>
<li><i class="fa fa-envelope" aria-hidden="true"></i> info@Criticare.com</li><br>
<li><i class="fa fa-map" aria-hidden="true"></i> Find us on Map</li><br>
<li><input type="search" placeholder="Search"></li>

</ul>

</li>

<li>
<h4>Important Links</h4>

<ul>

<li><a href="">Book Ambulance</a></li><br>
<li><a href="">Find a Doctor</a></li><br>
<li><a href="">Emergency Contacts</a></li><br>
<li><a href="">Help Desk</a></li><br>
<li><a href="">Visiting Hours</a></li><br>


</ul>

</li>


</ul>

<hr>
<h5>Copyright &#169 CritiCare, Inc. 2010 - 2016. All Rights Reserved</h5>
</footer>

 <!-- JQUERY VALIDATOR (additional) -->
<script type="text/javascript" src="js/jquery.material.form.js"></script> <!-- JQUERY MATERIAL FORM PLUGIN -->

<script type="text/javascript">
	$(function(){
		$('form.material').materialForm(); // Apply material
		$('form').validate({ 
			errorPlacement: function(error, element) {}
		}); // Apply validator with no error messages but classes only
	});
</script>

</body>
</html>