<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style type="text/css">
* {
	font-family: arial;
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
</style>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Medicare || Book Ambulance</title>
</head>
<body bgcolor="#ccc">
	<div
		style="position: fixed; top: 0px; left: 0px; width: 100%; height: 80px; background: white; z-index: 4; box-shadow: 0px 5px 5px gray">
		<a class="homeLink" href="Home.jsp">MEDI<span
			style="color: #3ab4b0;">CARE</span></a>

	</div>
	<figure
		style="position: absolute; left: 40px; top: 90px;overflow:hidden;">
	<img src="Images\ambulance1.jpg" width="700dp" height="520dp"> <figcaption
		class="title">AMBULANCE SERVICE<br>
	<br>
	<span>Book a lowest price</span></figcaption></figure>


	<ul class="tabs">
		<li class="active">Book Ambulance</li>
		<li>Manage Booking</li>
	</ul>

	<fieldset class="searchPanel">
		<br> <br> <br>
		<h3 for="src">Search Your Booking</h3>
	<input type="text" name="search" placeholder="Enter your contact number" >
	<input type="submit" value="SEARCH"class="srch" style="margin-top:50px;width:275px;border:none;padding: 8px; height: 30px;cursor: pointer; color: white;">
	</fieldset>



	<form action="BookAmbulance" method="post">
		<fieldset class="bookform">
			<br> <br> <br>
			<h3 for="src">Name</h3>
			<input type="text" name="name" placeholder="Enter Full Name">
			<h3 for="src">Contact number</h3>

			<input type="text" name="contact">

			<h3 for="src">Pick up Location</h3>
			<input type="text" name="location"
				placeholder="Enter Address or Landmark">

			<h3 for="src">Reach Time</h3>

			<input type="time" name="time">
			
			<div id="dd" class="wrapper-dropdown-1" tabindex="1">
				<span>Ambulance Type</span>
				<ul class="dropdown">
		
					<li><a href="#">General Van</a></li>
					<li><a href="#">AC Van</a></li>
					<li><a href="#">General SUV</a></li>
					<li><a href="#">AC SUV</a></li>
					<li><a href="#">Helicopter</a></li>
					<li><a href="#">Rapid Response</a></li>
					<li><a href="#">Rapid Response with AC</a></li>
				</ul>
			</div>
<input type="hidden" name="ambtype" id="type">
		<br> <input type="submit" value="Confirm Booking"
				class="confirmbook"
				style="cursor: pointer; color: white; border: none; padding: 8px; height: 30px; width: 275px;">
		</fieldset>
	</form>



	<div
		style="position: absolute; left: 0; right: 0; top: 700px; height: 1100px; background: #fff;">
<h2 style="margin:20px 65px;padding:10px;width:785px;border-bottom:1px solid #ccc;font-weight:normal">Our Vehicles</h2>
		<table class="vehicles">
			<tr>
				<td><img src="Images\a1.jpg" width="200dp" height="150dp"></td>
				<td><p>VAN</p> <span> A typical ambulance is of a van
						construction, based on a standard chassis, usually with a maximum
						road weight loaded of between 3.5 and 7.5 tonnes.<br> <br>
						<br>
				</span>
					<h5>300KM INCLUDED PER DAY</h5></td>
				<td>Price</td>
			</tr>

			<tr>
				<td><img src="Images\a4.jpg" width="200dp" height="150dp"></td>
				<td><p>SUV</p> <span>Used either as a fly-car for
						patients who can sit. These are standard car models adapted to the
						requirements of the service using them. These cars are capable of
						taking a stretcher with a recumbent patient.These were some of the
						few vehicles able to accept a human body in a supine position. <br>
						<br>
				</span>
					<h5>300KM INCLUDED PER DAY</h5></td>
				<td>Price</td>
			</tr>

			<tr>
				<td><img src="Images\a3.jpg" width="200dp" height="150dp"></td>
				<td><p>HELICOPTER</p> <span>Usually used for emergency
						care, either in places inaccessible by road, or in areas where
						speed is of the essence, as they are able to travel significantly
						faster than a road ambulance.<br> <br> <br>

				</span>
					<h5>700KM INCLUDED PER DAY</h5></td>
				<td>Price</td>
			</tr>

			<tr>
				<td><img src="Images\a2.jpg" width="200dp" height="150dp"></td>
				<td><p>RAPID RESPONSE</p> <span>The most common type of
						ambulance, which provide care to patients with an acute illness or
						injury.<br> <br> <br> <br>
				</span>
					<h5>300KM INCLUDED PER DAY</h5></td>
				<td>Price</td>
			</tr>
		</table>

		<div class="footer">
			<h2>Leave a Comment</h2>
			<textarea cols="40" rows="5" placeholder="Write Here.."></textarea>
			<br> <input type="submit" value="Send">
		</div>
	</div>



	<link href="css/AmbulanceService.css" rel="stylesheet">
	<script src="JQuery/Jquery.js"></script>
	
	<script type="text/javascript">
		$('.tabs li:nth-child(1)').click(function() {
			$('.tabs li').removeClass('active');
			$('.tabs li:nth-child(1)').addClass('active');
			$('.bookform').addClass('active');

			$('.searchPanel').removeClass('active');

		});
		$('.tabs li:nth-child(2)').click(function() {
			$('.tabs li').removeClass('active');
			$('.tabs li:nth-child(2)').addClass('active');
			$('.bookform').removeClass('active');

			$('.searchPanel').addClass('active');
	
		});

		$(window).load(function() {

			$('.title').animate({
				'top' : '0px'
			}, 1200);
		});
		
		</script>
		//script for dropdown operation
	<script type="text/javascript">
	


	//...

	$(function() {

		var dd = new DropDown( $('#dd') );

		$(document).click(function() {
			// all dropdowns
			$('.wrapper-dropdown-1').removeClass('active');
		});

	});
	
		function DropDown(el) {
		    this.dd = el;
		    this.placeholder = this.dd.children('span');
		    this.opts = this.dd.find('ul.dropdown > li');
		    this.val = '';
		    this.index = -1;
		    this.initEvents();
		}
		DropDown.prototype = {
		    initEvents : function() {
		        var obj = this;

		        obj.dd.on('click', function(event){
		            $(this).toggleClass('active');
		            return false;
		        });

		        obj.opts.on('click',function(){
		            var opt = $(this);
		            obj.val = opt.text();
		            obj.index = opt.index();
		            obj.placeholder.text('' + obj.val);
		            document.getElementById("type").value=obj.val;
		        });
		    },
		    getValue : function() {
		        return this.val;
		    },
		    getIndex : function() {
		        return this.index;
		    }
		}
		
		obj.dd.on('click', function(event){
			$(this).toggleClass('active');
			return false;
		});
	</script>
</body>
</html>