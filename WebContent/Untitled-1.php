<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Medicare | Make Your OPD Appointment</title>

<style>
* {
	font-family: calibri light;
}
a{
text-decoration:none;
color:#FFF;	
}
.header1 {
	position: absolute;
	top: 0px;
	left: 0;
	width: 100%;
	height: 80px;
	background: #222;
	z-index:10;
}

.header1 a {
	color: #fff;
	text-decoration: none;
	padding-left:25px;
	padding-right: 30px;
	margin-right: 20px;
	margin-left:-10px;
	margin-top:27px;
	border-right:1px solid white;
	float: right;
	font-size: 18px;
}
.header2{
	position: absolute;
	top: 80px;
	left: 0;
	width: 100%;
	height: 200px;
	background: #ccc;
	
}

.header2 h1{
margin:20px ;
margin-left:660px;
font-size:40px;
font-weight:normal;
padding:50px;
border-left:1px solid #000;	
color:#FFF;
border-left:1px solid #FFF;
}
.header2 p{
margin:-100px 420px;	
padding:50px;
}
.departPanel p,.visitHour p{
font-family:calibri light;
font-size:20px;
position:relative;
top:50px;
margin-left:50px;
	
}
.departPanel hr,.visitHour hr{
background:#999;
margin:50px;
margin-top:55px;
}
hr{
border:none;
height:1px;	
}


body {
	margin: 0;

}
</style>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Style/calendar.css">
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/ajSlider.min.js"></script>

</head>
<body bgcolor="#efefef">

<ul class="top-bottom">
	<li><a href="#" class="back-to-top"><i class="fa fa-caret-up" aria-hidden="true"></i></a></li>
    <li><a href="#" class="back-to-bottom"><i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
</ul>
	
	<div class="header1">



		<a href="#" style="border:none;">BOOK AMBULANCE </a> <a href="CancelBooking.php">CANCELLATION </a> <a
			href="Enquiry.php">LOGIN </a>
	</div>
    
    <div class="header2">
     <h1>OPD Appointment</h1>
   <p><i class="fa fa-home" aria-hidden="true"></i> <a href="Home.php">Home</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true"></i> Diagnostics</p>
    </div>
    
    <div class="departPanel" style="height:700px;margin:300px 80px;background:#FFF">
   
    <p>Visit To  &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></p><hr />
    
    
 <div id="demo">
      
        <div id="ca"></div>

      
    </div>



    </div>
    
    
    
    
   <script src="js/calendar.js"></script>
   <script>
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
	 $('#ca').calendar({
        // view: 'month',
		
        width: 720,
        height: 420,
        // startWeek: 0,
        // selectedRang: [new Date(), null],
        data: [
    {
      date: '2015/12/24',
      value: 'Christmas Eve'
    },
    {
      date: '2015/12/25',
      value: 'Merry Christmas'
    },
    {
      date: '2016/01/01',
      value: 'Happy New Year'
    }
  ],
        onSelected: function (view, date, data) {
            console.log('view:' + view)
            alert('date:' + date)
            console.log('data:' + (data || 'None'));
        }
    });

		
		
		</script> 
</body>
</html>