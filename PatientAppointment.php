
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Medicare || OPD Appointment</title>
<link href="Style/Home.css" rel="stylesheet">
<style type="text/css">
body {
	margin: 0;
	font-family:ZagReg;
}
</style>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/ajSlider.min.js"></script>
</head>
<body bgcolor="#efefef">

<div class="header1">



		<a href="#" style="border:none;">BOOK AMBULANCE </a> <a href="CancelBooking.php">CANCELLATION </a> <a
			href="Enquiry.php">LOGIN </a>
	</div>
    
    <div class="header2">
     <h1>Departments</h1>
   <p><i class="fa fa-home" aria-hidden="true"></i> <a href="Home.php">Home</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true"></i> Departments</p>
    </div>
    

		
	<form action="makeAppointment" method="post" id="myform" class="patientApp">

		<!-- personal details -->
		<fieldset>
			<hr><p align="center">PERSONAL DETAILS</p>
			<input type="text" placeholder="First Name" name="fname" id="1" onBlur="getName()">
			<input type="text" placeholder="Midle Name" name="mname" > <input
				type="text" placeholder="Last Name" name="lname" id="2" onBlur="getName()"> <br>

			<div class="squaredThree">
				<input type="checkbox" value="None" id="male" name="check" />Male
				<label for="male"></label>
            </div>    
                
            <div class="squaredThree">
                <input type="checkbox" value="None" id="female" name="check" />Female
				<label for="female"></label>
			</div>
            
            
            <select
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
			<br> <br> <label style="margin:20px;font-size:18px;">Date Of Birth -</label><input type="date"
				style="margin-top: 20px;" name="dob"> 
			<label>Age -</label> <input type="text" placeholder="Year"
				maxlength="3" class="age" name="y"
				style="width: 60px; margin: 20px;"> <input type="text"
				placeholder="Month" maxlength="2" class="age" name="m"
				style="width: 65px; margin: 20px;"> <input
				type="text" placeholder="Days" maxlength="2" class="age" name="d"
				style="width: 60px;  margin: 20px;"> <br><br><br>
                
                <input
				type="text" placeholder="Guardian's full name" name="grd_name"
				style="width:500px"> <select name="relation" id="demo-htmlselect1">
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
			</select> <br><br><br><select name="religion" id="demo-htmlselect">
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
			<hr ><p align="center" >CONTACT DETAILS</p>
			
			<input type="text" name="cadd1"
				placeholder="Residential Address Line 1" id="3" style="width:510px;"> <input
				type="text" name="cadd2" placeholder="Residential Address Line 2" style="width:510px;"><br><br><br>

			<input type="text" placeholder="City/Village" name="c_city" size="20">
			<input type="text" placeholder="Post Office" name="c_po" size="20">
			<input type="text" placeholder="Police Station" name="c_ps" size="20"><br><br><br>
			<input type="text" placeholder="Municipilaty/Block"
				name="c_municipality" size="38"> <input type="text"
				placeholder="Zip Code" name="c_zip" size="48"> <select
				name="country">

				<option selected value="">Select Country</option>
			</select> <select name="state">
				<option value="">Select State</option>
			</select> <select name="district">
				<option value="">Select District</option>
			</select><br><br><br> 
            
            <input type="text" placeholder="Email ID" name="email1" style="width:440px;">
			<input type="text" placeholder="Alternate Email ID" name="email2"
				style="width:440px;"><br><br><br>
                
                 <input type="text"
				placeholder="Telephone with STD code" name="tel" size="40">
			<input type="text" placeholder="Mobile" maxlength="10" name="mob"
				size="40"> <input type="text"
				placeholder="Guardian Contact no" maxlength="10" name="grd_cont"
				size="43"> <br><br>

<div class="squaredThree">
                <input type="checkbox" value="None" id="agree" name="check" />I agree with the Terms & Conditions.
				<label for="agree"></label>
			</div>

		</fieldset>

			<input type="submit" class="submit" value="Sign Me Up">

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