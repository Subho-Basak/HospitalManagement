<?php
session_start();
include "./connect_db.inc";
$connection = db_connect();

if ( ! $connection )
{
    print( "cannot connect to database" );
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Criticare | Booking Confirmation Successful</title>
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
select{
	
}
ul li{
font-size:20px;	
padding:10px 60px;

margin:30px -30px;
display:inline-block;
}
</style>

</head>

<body>

<div class="header1">
    <?php
    $p_date=  $_SESSION['date'];

    $p_day= $_SESSION['day'];
    $p_slot= $_SESSION['slot'];
    $p_doc= $_SESSION['dname'];
    $p_specl= $_SESSION['specl'];
    ?>


		<a href="#" style="border:none;">BOOK AMBULANCE </a> <a href="CancelBooking.php">CANCELLATION </a> <a
			href="Login.php" id="login">LOGIN </a>
</div>

   <p style="margin:100px 600px;font-size:18px;"><i class="fa fa-home" aria-hidden="true"></i> <a href="Home.php" style="color:#000">Home</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true"></i>
   Book</p>
   
   <h2 style="margin:60px 550px;font-size:25px;">Great, You are booked!</h2>
   <p style="margin:-50px 460px;font-size:20px;">A confirmation mail has been sent to your Email ID.</p>

	<ul style="margin:100px 370px;height:220px;width:550px;border:1px solid #ccc;list-style:none;">
    <li style="border-right:1px solid #ccc;text-align:center;"><span style="font-size:55px;"><?php echo substr($p_date,4,2); ?></span><br /><?php echo substr($p_date,0,3); ?><br /><br /><?php echo $p_day; ?> <?php echo $p_slot; ?></li>
    <li style="margin:30px 0px;"><span style="font-size:35px;"><?php echo $p_specl; ?></span><br /><?php echo $p_doc; ?><br /><br /><br /></li>
    </ul>


</body>
</html>