<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Medicare || OPD Appointment</title>
<link href="css/demo.css" rel="stylesheet">
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
		style="position: fixed; top: 0px; left: 0px; width: 100%; height: 80px; background: white; z-index: 5;">
		<a class="homeLink" href="Home.jsp">MEDI<span>CARE</span></a>
	</div>
	<img src="Images\form.jpg"
		style="position: absolute; top: 80px; left: 0; width: 1348px; height: 200px;">

	<p
		style="position: absolute; left: 45%; top: 170px; border: 1px solid white; color: white; z-index: 3; padding: 10px 30px; cursor: pointer">OPD</p>
	<h4
		style="position: absolute; top: 220px; left: 455px; color: white; font-weight: normal; z-index: 2">Please
		fill in the form below to make an online appointment</h4>
	<div
		style="position: absolute; top: 80px; left: 0; width: 1348px; height: 5000px; background: rgba(20, 20, 20, 0.5)">

		<h1 style="margin: 50px 470px 0px; color: white;">
			Patient<span style="font-weight: normal;">&nbspAppointment
				Form</span>
		</h1>


	</div>

	<form action="makeAppointment" method="post" id="myform">

		<!-- personal details -->
		<fieldset>
			<p>PERSONAL DETAILS</p>
			<hr>
			<input type="text" placeholder="First Name" name="fname" id="1" onBlur="getName()">
			<input type="text" placeholder="Midle Name" name="mname" > <input
				type="text" placeholder="Last Name" name="lname" id="2" onBlur="getName()"> <br>

			<input type="checkbox" name="sex" class="gender">Male&emsp;&emsp;&emsp;
			<input type="checkbox" name="sex" class="gender">Female <select
				name="marritalstatus">
				<option value="">Marital Status</option>
				<option value="">Single</option>
				<option value="">Married</option>
				<option value="">Unmarried</option>
				<option value="">Widow</option>
				<option value="">Divorsed</option>
				<option value="">Seperated</option>

			</select> <input type="text" name="spouce"
				placeholder="Spouce(Applicable if you are married)"> <br>
			<br> <br> <label>Date Of Birth:</label><br><input type="date"
				style="margin-top: 20px;" name="dob"> <br> <br> <br>
			<label>Age:</label><br> <input type="text" placeholder="Year"
				maxlength="3" class="age" name="y"
				style="width: 70px; margin-top: 20px;"> <input type="text"
				placeholder="Month" maxlength="2" class="age" name="m"
				style="width: 70px; margin-left: 20px; margin-top: 20px;"> <input
				type="text" placeholder="Days" maxlength="2" class="age" name="d"
				style="width: 80px; margin-left: 20px; margin-top: 20px;"> <input
				type="text" placeholder="Guardian's full name" name="grd_name"
				size="48"> <select name="relation" id="demo-htmlselect1">
				<option value="">Relation with patient</option>
				<option value="">Father</option>
				<option value="">Son</option>
				<option value="">Husband</option>
				<option value="">Brother</option>
				<option value="">Grandfather</option>
				<option value="">Grandson</option>
				<option value="">Uncle</option>
				<option value="">Nephew</option>
				<option value="">Cousin</option>
				<option value="">Mother</option>
				<option value="">Daughter</option>
				<option value="">Wife</option>
				<option value="">Sister</option>
				<option value="">Grandmother</option>
				<option value="">Granddaughter</option>
				<option value="">Aunt</option>
				<option value="">Niece</option>
			</select> <select name="religion" id="demo-htmlselect">
				<option selected value="">Religion</option>
			</select> <select name="nationality">
				<option selected value="">Nationality</option>

			</select> <select name="nationality">
				<option selected value="">Blood Group</option>
				<option value="">A+</option>
				<option value="">A-</option>
				<option value="">A1+</option>
				<option value="">A1-</option>
				<option value="">A1B+</option>
				<option value="">A1B-</option>
				<option value="">A2+</option>
				<option value="">A2-</option>
				<option value="">A2B+</option>
				<option value="">A2B-</option>
				<option value="">AB+</option>
				<option value="">AB-</option>
				<option value="">B+</option>
				<option value="">B-</option>
				<option value="">Bombay Blood Group</option>
				<option value="">O+</option>
				<option value="">O-</option>
			</select> <br> </select>


		</fieldset>




		<!--patient's residence details division -->

		<fieldset>
			<p>CURRENT CONTACT DETAILS</p>
			<hr>
			<input type="text" name="cadd1"
				placeholder="Residential Address Line 1" id="3" onBlur="getAddr()"> <input
				type="text" name="cadd2" placeholder="Residential Address Line 2"><br>

			<input type="text" placeholder="City/Village" name="c_city" size="20">
			<input type="text" placeholder="Post Office" name="c_po" size="20">
			<input type="text" placeholder="Police Station" name="c_ps" size="20">
			<input type="text" placeholder="Municipilaty/Block"
				name="c_municipality" size="38"> <input type="text"
				placeholder="Zip Code" name="c_zip" size="48"> <select
				name="country">

				<option selected value="">Select Country</option>
			</select> <select name="state">
				<option value="">Select State</option>
			</select> <select name="district">
				<option value="">Select District</option>
			</select> <input type="text" placeholder="Email ID" name="email1" size="43">
			<input type="text" placeholder="Alternate Email ID" name="email2"
				size="43"><br> <input type="text"
				placeholder="Telephone with STD code" name="tel" size="40">
			<input type="text" placeholder="Mobile" maxlength="10" name="mob"
				size="40"> <input type="text"
				placeholder="Guardian Contact no" maxlength="10" name="grd_cont"
				size="43"> <br>

		</fieldset>


		<!-- patient's relative address details division  -->

		<fieldset>
			<p>PERMANENT CONTACT DETAILS</p>
			<hr>
			<div
				style="margin-left: 100px; background: #dedadb; width: 350px; height: 50px;">
				<input type="checkbox" class="sp"> Same as current address.
			</div>
			<br> <input type="text" placeholder="Residential Address Line 1"
				name="padd1"><input type="text"
				placeholder="Residential Address Line 2" "
				name="padd2"><br>
			<input type="text" placeholder="City/Village" name="p_city" size="20">
			<input type="text" placeholder="Post Office" name="p_po" size="20">
			<input type="text" placeholder="Police Station" name="p_ps" size="20">
			<input type="text" placeholder="Municipilaty/Block"
				name="p_municipality" size="38"> <input type="text"
				placeholder="Zip Code" name="p_zip" size="48"> <select
				name="pcountry">

				<option selected value="">Select Country</option>
			</select> <select name="pstate">
				<option value="">Select State</option>
			</select> <select name="pdistrict">
				<option value="">Select District</option>
			</select> <br> <input type="text" placeholder="Telephone with STD code"
				name="ptel" size="40"> <input type="text"
				placeholder="Mobile" maxlength="10" name="pmob" size="40"> <input
				type="text" placeholder="Guardian Contact no" maxlength="10"
				name="pgrd_cont" size="43"> <br>

		</fieldset>



		<!--patient's admission division -->
		<fieldset>
			<p>ADMISSION DETAILS</p>
			<hr>
			<br> <br> <br> 
			<br> <label style="margin-left: 100px;">I want to see a</label><br>
			<select name="specialist" style="margin-top: 20px">
				<option value="">Cardiologist</option>
				<option value="">Dentist</option>
				<option value="">Opthalmologist</option>
				<option value="">ENT</option>
				<option value="">Nephrologist</option>
				<option value="">Haematologist</option>
				<option value="">Pediatrics</option>
				<option value="">Endocrinologist</option>
				<option value="">Gastroentrologist</option>
				<option value="">Dermatologist</option>
				<option value="">Gynecologist</option>
				<option value="">Psychiatrist</option>
				<option value="">Neurologist</option>
				<option value="">Urologist</option>
				<option value="">Oncologist</option>
				<option value="">Orthopedic</option>
				<option value="">Pathologist</option>
				<option value="">Surgeon</option>
				<option value="">Medicine</option>

			</select> <br> <br> <br> <br>
	
			
			<label style="margin-left: 100px;">Date
				of Appointment</label><br><input type="date" name="appdate" id="4" onBlur="getDate()"
				style="margin-left: 100px; margin-top: 20px;"><br> <br><br> <br> 
				
						<label style="margin-left: 100px;">Select Slot</label><br>
			<select name="specialist" style="margin-top: 20px">
				<option value="">Wednesday (9.30AM)</option>
				
			</select> <br> <br> <br> <br>
		<label style="margin-left: 100px;">Select Doctor</label><br>
			<select name="specialist" style="margin-top: 20px">
				<option value="">Dr. Sunil Pakrashi</option>
				
			</select> <br> <br> <br> <br>
			<label style="margin: 100px; font-size: 15px; color: gray">Leave
				a disease description(if any)</label><br> <br>
			<textarea rows="5" cols="39"
				style="margin-left: 100px; resize: none; outline: none; padding: 10px;"
				name="desc"></textarea>

		</fieldset>
<div class="regstatus">
<h2>Your Booking</h2><hr>
		<table>

				<tr><td id="fname"></td></tr>
				<tr><td id="lname"></td></tr>
				<tr><td id="address"></td></tr>
				<tr><td id="sp&cost">SPECIALIST | COST</td></tr>
				<tr><td id="doc"></td></tr>
				<tr><td id="date"></td></tr>
				
			</table>
			
			<input type="submit" class="submit" value="Confirm Booking">
</div>

	</form>
<a href="#" class="back-to-top"><img src="Images/up.png" width="64"
		height="64" style="box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);"></a>

	<!-- All scripting part -->
	<script src="JQuery/Jquery.js"></script>
	<script src="js/ddslick.js"></script>
	<script type="text/javascript">
		$(".gender").change(function() {
			$(".gender").prop('checked', false);
			$(this).prop('checked', true);
		});
		$(".status").change(function() {
			$(".status").prop('checked', false);
			$(this).prop('checked', true);
		});
		$(".sp").change(function() {
			$(".sp").prop('checked', false);
			$(this).prop('checked', true);
		});

		$(window).load(function() {
			$('.navigation li:nth-child(1)').addClass('active');
			$('html,body').animate({
				scrollTop : 0
			});
			$('.f').animate({
				'left' : '275px'
			}, 1000);
			$('.a').animate({
				'top' : '400px',
				'left' : '680px'
			}, 1000);
			$('.heading').text("Personal Details").css({
				'font-style' : 'italic'
			});
		});

		$(window).scroll(function() {
			if (jQuery(this).scrollTop() < 500) {
				$('.navigation li').removeClass('active');
				$('.navigation li:nth-child(1)').addClass('active');
				$('.heading').text("Personal Details").css({
					'font-style' : 'italic'
				});

			}
			
			if (jQuery(this).scrollTop() >= 500) {
				$('.navigation li').removeClass('active');
				$('.navigation li:nth-child(2)').addClass('active');
				$('.heading').text("Current Contact Details").css({
					'font-style' : 'italic'
				});
			}

			if (jQuery(this).scrollTop() >= 1300) {

				$('.navigation li').removeClass('active');
				$('.navigation li:nth-child(3)').addClass('active');
				$('.heading').text("Permanent Contact Details").css({
					'font-style' : 'italic'
				});
			}

			if (jQuery(this).scrollTop() >= 2000) {

				$('.navigation li').removeClass('active');
				$('.navigation li:nth-child(4)').addClass('active');
				$('.heading').text("Admission Details").css({
					'font-style' : 'italic'
				});
			}
			
			if (jQuery(this).scrollTop() > 200)
				$('.regstatus').addClass('fixed');
			else
				$('.regstatus').removeClass('fixed');
		});
		$(window).load(function() {
			$('#demo-htmlselect').ddslick();
			$('#demo-htmlselect1').ddslick();
		});
		
		$(window).scroll(function() {

			if ($(this).scrollTop() > 250) {
				jQuery('.back-to-top').fadeIn();

			} else {
				$('.back-to-top').fadeOut();
			}
		});
		$('.back-to-top').click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop : 0
			}, 1000);
			return false;

		});
		
		function getName(){
			var fnm=document.getElementById("1").value;
			document.getElementById("fname").innerHTML=fnm;
			var lnm=document.getElementById("2").value;
			document.getElementById("lname").innerHTML=lnm;
		}
		function getAddr(){
			var addr=document.getElementById("3").value;
			document.getElementById("address").innerHTML=addr;
		}
		
		function getDate(){
			var dt=document.getElementById("4").value;
			var date=new Date(dt);
			
			var weekday=new Array(7);
			weekday[0]="Sunday";
			weekday[1]="Monday";
			weekday[2]="Tuesday";
			weekday[3]="Wednesday";
			weekday[4]="Thursday";
			weekday[5]="Friday";
			weekday[6]="Saturday";
			
			
			document.getElementById("date").innerHTML=weekday[date.getDay()];
		}
	</script>
</body>
</html>