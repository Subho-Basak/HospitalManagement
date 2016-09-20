
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
    

		
	<form action="patient_reg_script.php" method="post" id="myform" class="patientApp">

		<!-- personal details -->
		<fieldset>
			<hr><p align="center">PERSONAL DETAILS</p>
			<input type="text" placeholder="First Name" name="fname" id="1" onBlur="getName()">
			<input type="text" placeholder="Midle Name" name="mname" > <input
				type="text" placeholder="Last Name" name="lname" id="2" onBlur="getName()"> <br>

			<div class="squaredThree">
				<input type="checkbox" value="None" id="male" class="gnd" name="check" />Male
				<label for="male"></label>
            </div>    
                
            <div class="squaredThree">
                <input type="checkbox" value="None" id="female" class="gnd" name="check" />Female
				<label for="female"></label>
			</div>
            
            
            <select
				name="marritalstatus">
				<option value="1">Marital Status</option>
				<option value="2">Single</option>
				<option value="3">Married</option>
				<option value="4">Unmarried</option>
				<option value="5">Widow</option>
				<option value="6">Divorsed</option>
				<option value="7">Seperated</option>

			</select> <input type="text" name="spouce"
				placeholder="Spouce(Applicable if you are married)"> <br>
			<br> <br> <label style="margin:20px;font-size:18px;">Date Of Birth -</label><input type="date"
				style="margin-top: 20px;" name="dob"> 
			<label>Age -</label> <input type="text" placeholder="Year"
				maxlength="3" class="age" name="y"
				<style="width: 60px; margin: 20px;"> <!--<input type="text"
				placeholder="Month" maxlength="2" class="age" name="m"
				style="width: 65px; margin: 20px;"> <input
				type="text" placeholder="Days" maxlength="2" class="age" name="d"
				style="width: 60px;  margin: 20px;">--> <br><br><br>
                
                <input
				type="text" placeholder="Guardian's full name" name="grd_name"
				style="width:500px"> <select name="relation" id="demo-htmlselect1">
				<option value="1">Relation with patient</option>
				<option value="2">Father</option>
				<option value="3">Son</option>
				<option value="4">Husband</option>
				<option value="5">Brother</option>
				<option value="6">Grandfather</option>
				<option value="7">Grandson</option>
				<option value="8">Uncle</option>
				<option value="9">Nephew</option>
				<option value="10">Cousin</option>
				<option value="11">Mother</option>
				<option value="12">Daughter</option>
				<option value="12">Wife</option>
				<option value="12">Sister</option>
				<option value="12">Grandmother</option>
				<option value="12">Granddaughter</option>
				<option value="12">Aunt</option>
				<option value="12">Niece</option>
			</select> <br><br><br><select name="religion" id="demo-htmlselect">
				<option selected value="">Religion</option>
                <option value="1">Hindu</option>
				<option value="2">Muslim</option>
				<option value="3">Christian</option>
			</select> <select name="nationality">
				<option selected value="">Nationality</option>
                <option value="1">INDIAN</option>
				<option value="2">PAKISTANI</option>
				<option value="3">EUROPEAN</option>
				<option value="4">BRITISH</option>
				<option value="5">ITALIAN</option>
				<option value="6">AMERICAN</option>
				<option value="7">PORTUGESE</option>
				<option value="8">SOUTH-AFRICAN</option>
				<option value="0">AUSTRALIAN</option>
				<option value="10">CHINESE</option>
				<option value="11">SPANISH</option>

			</select> <select name="bld">
				<option selected value="">Blood Group</option>
				<option value="1">A+</option>
				<option value="2">A-</option>
				<option value="3">A1+</option>
				<option value="4">A1-</option>
				<option value="5">A1B+</option>
				<option value="6">A1B-</option>
				<option value="7">A2+</option>
				<option value="8">A2-</option>
				<option value="8">A2B+</option>
				<option value="9">A2B-</option>
				<option value="10">AB+</option>
				<option value="11">AB-</option>
				<option value="12">B+</option>
				<option value="12">B-</option>
				<option value="12">Bombay Blood Group</option>
				<option value="12">O+</option>
				<option value="12">O-</option>
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
                <option value="1">INDIA</option>
				<option value="2">PAKISTAN</option>
				<option value="3">EUROPE</option>
				<option value="4">BRITAIN</option>
				<option value="5">ITALY</option>
				<option value="6">USA</option>
				<option value="7">PORTUGAL</option>
				<option value="8">SOUTH-AFRICA</option>
				<option value="9">AUSTRALIA</option>
				<option value="10">CHINA</option>
				<option value="11">SPAIN</option>
			</select> <select name="state">
				<option value="1">Select State</option>
                <option value="2">WEST BENGAL</option>
				<option value="3">MADHYAPRADESH</option>
				<option value="4">UTTARPRADESH</option>
				<option value="5">MAHARASHTRA</option>
				
			</select> <!--<select name="district">
				<option value="">Select District</option>
			</select>--><br><br><br> 
            
            <input type="text" placeholder="Email ID" name="email1" style="width:365px;">
			<input type="text" placeholder="Alternate Email ID" name="email2"
				style="width:365px;"><br><br><br>
                
                 <input type="text"
				placeholder="Telephone with STD code" name="tel" size="40">
			<input type="text" placeholder="Mobile" maxlength="10" name="mob"
				size="40"> <input type="text"
				placeholder="Guardian Contact no" maxlength="10" name="grd_cont"
				size="43"> <br><br>

<div class="squaredThree">
                <input type="checkbox" value="None" id="agree" name="check2" />I agree with the Terms & Conditions.
				<label for="agree"></label>
			</div>

		</fieldset>

			<input type="submit" class="submit" value="Sign Me Up">

	</form>
    

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
		
		
	$(".gnd").change(function() {
    $(".gnd").prop('checked', false);
    $(this).prop('checked', true);
});
	</script>
</body>
</html>