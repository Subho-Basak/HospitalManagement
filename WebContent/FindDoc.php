<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Medicare | Diagnostics</title>
<link href="Style/Home.css" rel="stylesheet">
<style>
@font-face {
    font-family: ZagReg;
    src: url(ZagRegular.woff);
}
@font-face {
    font-family: ZagLight;
    src: url(ZagLight.woff);
}
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
<body >

<ul class="top-bottom">
	<li><a href="#" class="back-to-top"><i class="fa fa-caret-up" aria-hidden="true"></i></a></li>
    <li><a href="#" class="back-to-bottom"><i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
</ul>
	
	<div class="header1">



		<a href="#" style="border:none;">BOOK AMBULANCE </a> <a href="CancelBooking.php">CANCELLATION </a> <a
			href="Enquiry.php">LOGIN </a>
	</div>
 <div class="findADoc"> 
<img src="Images/doc.jpg" width="1348dp" height="580dp" />
    <h1>find a doctor.</h1>
   <div>
    <form action="DocSearch_Script.php" method="post">
       <ul>
        <li>
            <br /><br /> <label>Doctor Name</label><br />
            <input type="text" placeholder="Enter Doctor Name"/>
        </li>
    <li>
   <br /> <label>Specialisation</label><br />
    <select>
        <option>Any</option>
    <option>Cardiologist</option>
    <option>ENT</option>
	<option>Neurologist</option>
    
    </select>
    </li>
    
    <li>
       <br /> <label>Gender</label><br />
    <select>
        <option>Any</option>
    <option>Male</option>
    <option>Female</option>
    </select>
    </li>
    
    <li>
       <br /> <label>Experience</label><br />
    <select>
        <option>Any</option>
    <option>0-5 Years</option>
    <option>5-15 Years</option>
    <option>15-20 Years</option>
    <option>20-30 Years</option>
    <option>Above 30 Years</option>

    </select>
    </li>
        <li><input type="submit" value="Search" id="srcDoc"> </li>
    

    </ul>
        </form>
    </div>
<p align="center" style="margin-top:300px;font-size: 22px;">Results Found</p>
     <ul class="srcResult">
         <li><form action="ViewSingleGame.php" method="post"><input type="hidden" name="getName" value="<?php echo "$g_name";?>" > <?php echo "<button type='submit' id='getLink'><img src='image/$gposter' width='220dp' height='300dp'></button>"; ?><br><label ><?php echo "$g_name";?><br><span><?php echo "$gyr";?></span><button><?php echo "$grate";?></button></label> </form></li>
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
</body>
</html>