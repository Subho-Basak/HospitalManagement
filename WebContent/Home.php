<!DOCTYPE>
<html>
<head>
<style type="text/css">
@font-face {
    font-family: ZagReg;
    src: url(ZagRegular.woff);
}
@font-face {
    font-family: calibri light;
    src: url(calibri light.woff);
}

.l {
	background: linear-gradient(45deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)),
		url("Images/map.jpg");
}

.contact  li:nth-child(1) a {
	padding: 50px;
	background: url("Images/fb.png") no-repeat left center;
}

.contact  li:nth-child(2) a {
	padding: 40px;
	background: url("Images/twit.png") no-repeat left center;
}

.contact  li:nth-child(3) a {
	padding: 40px;
	background: url("Images/g+.png") no-repeat left center;
}

.contact  li:nth-child(4) a {
	padding: 40px;
	background: url("Images/you.png") no-repeat left center;
}
.contact  li:nth-child(5) a {
	padding: 40px;
	background: url("Images/insta.png") no-repeat left center;
}

#ajSlider span{
color:#fff;
font-size:100px;
font-weight:normal;	
text-shadow:0px 2px 8px #222;
}
</style>


<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/ajSlider.min.js"></script>


<title>Home | Sign Up To get a Ride</title>
<link href="Style/Home.css" rel="stylesheet">
<style>
body {
	margin: 0;
	color: rgb(255, 255, 255);
	font-family:ZagReg;
}
</style>

<script type="text/javascript">
	$(document).ready(function() {
		$('#ajSlider').ajSlider(3000, {
			"width" : "100%",//width of slider
			"height" : "100%",//height of slider
			"textPosition" : "30%",//position of text from top
			"textSize" : "50px"//font size of the text
		});
	});

</script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
	
	<ul class="top-bottom">
	<li><a href="#" class="back-to-top"><i class="fa fa-caret-up" aria-hidden="true"></i></a></li>
    <li><a href="#" class="back-to-bottom"><i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
    </ul>
	
	<div class="header1">

		<input type="search" placeholder="Search Doctor,Patient,Departments etc.">

		<a href="BookAmbulance.php" style="border:none;">BOOK AMBULANCE </a> <a href="CancelBooking.php">CANCELLATION </a> <a
			href="Login.php" id="login">LOGIN </a>
	</div>
    <div id="menuScreen1">
		<ul>
			<li class="lst"><a href="Home.php">Home</a></li>
			<li class="lst"><a href="Department.php">Departments</a></li>
			<li class="lst"><a href="Diagnostic.php">diagnostics</a></li>
            <li class="lst"><a href="">24 X 7 services</a></li>
			<li class="lst"><a href="FindDoc.php">find a doctor</a></li>
			<li class="lst"><a href="">infrastructure</a></li>
			<li class="lst"><a href="VisitingHours.php">Visiting Ours</a></li>
            <li class="lst"><a href="">Emergency contacts</a></li>
            <li class="lst"><a href="">help desk</a></li>
			<li class="lst"><a href="">Contact Us</a></li>
			<li class="lst"><a href="">About Us</a></li>
		</ul>


	</div>
	<div id="menuScreen2"></div>

	<button class="hamburger menubar">
		<span></span>
	</button>
    

    
	<div id="ajSlider">
		<img src="Images\slide3.jpg" /> <img src="Images\slide2.jpg" /> <img
			src="Images\slide4.jpg" /> <img src="Images\slide5.jpg" /> <img
			src="Images\slide1.jpg" /> <img
			src="Images\slide6.jpg" /> <img
			src="Images\slide7.jpg" /><a><span>PHYSIOTHERAPY</span><br>TREATMENT FOR AGED PATIENT</a> <a><span>MATERNITY</span><br>CARE UNIT FOR YOUR BABIES</a> <a><span>WELL EQUIPPED</span><br>OPERATION LABS</a> <a><span>EASY</span><br>APPOINTMENT ON THE WEB</a> <a><span>24 X 7</span><br>AMBULANCE SERVICE</a><a><span>FIND</span><br>PHYSICIAN AROUND YOU</a><a><span>SECURE</span><br>ONLINE MONEY TRANSACTION</a>

	
	</div>
<div style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(50,50,50,0.4)">
<hr style="position:absolute;top:400px;left:140px;background:#222;width:800px;">
</div>
<button class="booking">Book Online</button>



	<div class="dept">
		<h1>Depart<span>ments</span></h1>
        <h2 style="margin-left:500px;margin-top:-450px;font-family:ZagReg;font-weight:normal;font-size:30px;color:#000">Both OPD & IPD Departments</h2>
        
        <ul>
        	<li><a href="">Cardiology &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
            <li><a href="">Cardiothoracic Surgury &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
            <li><a href="">Critical Care &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
            <li><a href="">Dialysis &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
        </ul>
        
		<hr>
<a href="Department.php" style="margin-left:990px;font-family:ZagReg;
font-size:20px;">View All</a>

	</div>

<div class="infra">

<img src="Images\ICCU.jpg" width="1348dp" height="500dp" >
<div style="position:absolute;top:1387px;width:100%;height:500px;background:rgba(20,10,10,0.6);">
<h1>Infrastructure</h1><hr>

<ul>
<li><img src="Images/i-inpatient.png" width="80dp" height="80dp" alt="Beds"><br><br>180 Beds</li>
<li><img src="Images/i-intensive-care.png" width="80dp" height="80dp" alt="Beds"><br><br>4 ICUs</li>
<li><img src="Images/i-kidney.png" width="80dp" height="80dp" alt="Beds"><br><br>3 Dialysis Unit</li>
<li><img src="Images/i-surgery.png" width="80dp" height="80dp" alt="Beds"><br><br>4 OTs</li>


</ul>
</div>


</div>

<div class="diagnose">
<h1>Diagnostic <span>with well equipped modern instrument.</span></h1><hr style="margin:20px 0px;background:#666;width:94%;">
<p style="color:#000;font-size:25px;padding:20px 0;">WE PROVIDE THE BEST AND APPROPRIATE DIAGNOSIS WITH MODERN INSTRUMENTS AND TECHNOLOGY.</p>
<img src="Images/pathology.jpg" width="300dp" height="220dp">
<img src="Images/radio.jpeg" width="300dp" height="220dp">
<img src="Images/gastro.jpg" width="300dp" height="220dp">
<img src="Images/spiro.jpg" width="300dp" height="220dp">

<ul>
<li>Pathology</li>
<li>Radiology and Imaging</li>
<li>Gastroenterology</li>
<li>Spirometry</li>
</ul>
<br><br><br><br>
<a href="Diagnostic.php">View All</a>
</div>


<div class="findDoc">
<img src="Images/stetho.jpg" width="450dp" height="534dp">
<h1>Find A Doctor<br><br><span style="font-style:italic;color:#000;font-size:20px;">let us help you.</span></h1>
<p>Welcome to Criti Care's newest feature, designed just for our patients to find the doctor that suits them best. Our Find a Doctor tool will help you find a physican you've always dreamed of. Latest features:<br><br>
<span style="font-style:italic;color:#000;font-size:18px;">
+ Search by specialty or gender.<br><br>
+ Detailed Doctor's Profiles<br><br>
+ See Doctor Availability<br><br>

</span>
 Take me to the new Find A Doctor Tool. 
 <a href="FindDoc.php">Continue</a>
</p>
</div>

<div class="special">
<video class="content-row-video" autoplay preload loop width="1348dp" >
<source src=" http://rttheme20.rtthemes.com/wp-content/uploads/sites/19/2016/01/dna-background-video.mp4" type="video/mp4">
</video>
<div style="position:absolute;top:3221px;width:100%;height:758px;background:rgba(220,220,220,0.9);">
<h1>What makes us special?</h1>
<ul>
<li><label>75</label><br>Professional Staffs</li>
<li><label>35</label><br>Experienced Doctors</li>
<li><label>27</label><br>Years of Excellence</li>
<li><label>5</label><br>Stars Comfort</li>

</ul>

</div>
</div>

<div class="ambulance">
<img src="Images/Ambulance.jpg" width="1348dp" height="700dp">
<div style="position:absolute;top:3988px;width:100%;height:700px;background:rgba(10,10,10,0.6);">
<h1>AMBULANCE <span style="color:#09F">ONLINE !</span></h1>
<p  style="font-size:25px;width:400px;margin-left:400px;" >We provide 24 X 7 X 365 ambulance facility.Apart from Critical Care Ambulance, another 2 ambulances are available in the hospital. Free Ambulance is provided to neighborhood as well as accidents patients</p>
<br>
<a href="BookAmbulance.php">Book Now</a>
</div>
</div>




<div class="contact">

	<p>Find our location<br> on google map.</p>
    
	<button onClick="location.href='ContactUs.php';">VIEW ON MAP</button>
			
	<ul class="map">
			<li class="l"><span class="s"></span></li>
		</ul>
			
		<h4 style="	margin:500px 600px">FOLLOW US ON.</h4>
		<ul id="link">
			<li><a href="#"><i class="fa fa-facebook" aria-hidden="true">&nbsp;</i> </a></li>
			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
		</ul>
</div>







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


	<script src="JQuery/Home.js"></script>
<script src="js/Script.js"></script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push([ '_setAccount', 'UA-36251023-1' ]);
		_gaq.push([ '_setDomainName', 'jqueryscript.net' ]);
		_gaq.push([ '_trackPageview' ]);

		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl'
					: 'http://www')
					+ '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
		
		
		$(document).ready(function(){
			   var amount1=1200;
			   var counter1 = 1000;
			   var interval1 = setInterval(function(){
			      $('#drives').text(counter1++);
			      if (counter1 > amount1){
			        clearInterval(interval1);
			      }
			   },5); // the value 100 is the time delay between increments to the counter
			   
			   var amount2=1000;
			   var counter2 = 800;
			   var interval2 = setInterval(function(){
			      $('#cust').text(counter2++);
			      if (counter2 > amount2){
			        clearInterval(interval2);
			      }
			   },5);
			   
			   var amount4=378;
			   var counter4 = 100;
			   var interval4 = setInterval(function(){
			      $('#driver').text(counter4++);
			      if (counter4 > amount4){
			        clearInterval(interval4);
			      }
			   },5);
			   
			   var amount3=145;
			   var counter3 = 0;
			   var interval3 = setInterval(function(){
			      $('#city').text(counter3++);
			      if (counter3 > amount3){
			        clearInterval(interval3);
			      }
			   },5);
			   
			   
			});
		
		$(window).scroll(function() {

			if ($(this).scrollTop() > 250) {
				$('.top-bottom').fadeIn();

			} else {
				$('.top-bottom').fadeOut();
			}
		});
		$('.back-to-top').click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop : 0
			}, 1000);
			return false;
		});
		
				$('.back-to-bottom').click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop : 5000
			}, 1000);
			return false;
		});
		
var clicked=false;
			$('.hamburger').click(function(){
				
				if(clicked==false){
					$('#menuScreen1').css({'width':'50%','left':'0'},300);
					$('#menuScreen2').css({'width':'50%','left':'50%'},300);
					$('.lst').addClass('active');
					clicked=true;
				}
				else if(clicked==true){
					$('#menuScreen1').css({'width':'0%','left':'50%'},300);
					$('#menuScreen2').css({'width':'0%','left':'100%'},300);
					$('.lst').removeClass('active');
					clicked=false;
				}
				});
			
			

	</script>

</body>
</html>
