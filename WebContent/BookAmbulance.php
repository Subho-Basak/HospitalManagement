
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>CritiCare || Book Ambulance</title>
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
     <h1>Book Ambulance</h1>
   <p><i class="fa fa-home" aria-hidden="true"></i> <a href="Home.php">Home</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true"></i> Book Ambulance</p>
    </div>
    

		
	<form action="makeAppointment" method="post" id="myform" class="patientApp">

		<!-- personal details -->
		<fieldset>
			<hr><p align="center">PATIENT DETAILS</p>
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
			<hr ><p align="center" >BOOKING DETAILS</p>
			
			<input type="text" name="cadd1"
				placeholder="Pickup Address" id="3" style="width:510px;"> 
                
			<input type="text" placeholder="Landmark" name="c_city" size="20">
			<label style="margin:20px;font-size:18px;">Pickup Time - </label><input type="time"  name="c_po" size="20"><br>
            <label style="margin:20px;font-size:18px;">[Note: Ambulance will try to reach within th given time depending on the traffic.]  </label><br>
			 <select
				name="country">

				<option value="">Ambulance Type</option>
                <option value="">AC</option>
                <option value="">Non-AC</option>
			</select> 
            
            <input type="text"
				placeholder="Guardian Contact no" maxlength="10" name="grd_cont"
				size="43"> <br><br>

			
<div class="squaredThree">
                <input type="checkbox" value="None" id="agree" name="check" />I agree with the Terms & Conditions and the service charges.
				<label for="agree"></label>
			</div>

		</fieldset>

			<input type="submit" class="submit" value="Book Now">

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