
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Medicare || Online registration</title>
<link href="css/demo.css" rel="stylesheet">
<style type="text/css">
.homeLink{
position:relative;
top:20px;
left:50px;
width:250px;
height:40px;
font-family:arial;
font-weight:bold;
color:gray;
text-decoration:none;
font-size:2em;
background: url("Images/logo.png") no-repeat left center;
padding-left:60px;
}
</style>


</head>
<body>
<div style="position:fixed;top:0px;left:0px;width:100%;height:80px;background:white;z-index:5;">
<a class="homeLink" href="Home.php">MEDI<span>CARE</span></a>
</div>


<div style="position:fixed;top:-400px;left:-350px;width:800px;height:700px;background:gray;z-index:1;-webkit-transform:rotateZ(55deg)">
<h1 style="position:fixed;top:400px;left:680px;width:100px;height:70px;color:white;font-weight:normal;-webkit-transform:rotateZ(-55deg)">Appointment</h1>
</div>
<h1 style="position:fixed;top:248px;left:275px;width:100px;height:70px;color:#2593E5;font-weight:normal;">Form</h1>

<ul class="navigation">

<li></li>
<li></li>
<li></li>
<li></li>
</ul>


<form action="makeAppointment" method="post" id="myform">

<!-- personal details -->
<fieldset>

<input type="text" placeholder="First Name" name="fname" id="1" size="25" required >
<input type="text" placeholder="Midle Name" name="mname" size="20">
<input type="text" placeholder="Last Name" name="lname" id="2" size="25" required >
<br>
 
<input type="checkbox" name="sex" class="gender"  ><label>Male</label>
<input type="checkbox" name="sex" class="gender"  ><label>Female</label>
 <br>
<select name="marritalstatus"  >
  <option value="">Marrital Status</option>
  <option value="">Single</option>
  <option value="">Married</option>
  <option value="">Unmarried</option>
  <option value="">Widow</option>
  <option value="">Divorsed</option>
  <option value="">Seperated</option>
  
</select>
<input type="text" name="spouce" placeholder="Spouce(s)" size="41">
<br>
 
<label style="margin-left:50px;">D.O.B:</label><input type="date" name="dob" required >
<label style="margin-left:50px;">Age:</label><input type="text" placeholder="Year" maxlength="3" class="age" name="y" size="3" required >
<input type="text" placeholder="Month" maxlength="2" class="age" name="m" size="3" required >
<input type="text" placeholder="Days" maxlength="2" class="age" name="d" size="3" required >
 
<input type="text" placeholder="Guardian's full name" name="grd_name" size="61" required >
<select name="relation"  >
  <option value="">Relation with patient</option>
  <option value="">father</option>
  <option value="">son</option>
  <option value="">husband</option>
  <option value="">brother</option>
  <option value="">grandfather</option>
  <option value="">grandson</option>
  <option value="">uncle</option>
  <option value="">nephew</option>
  <option value="">cousin</option>
  <option value="">mother</option>
  <option value="">daughter</option>
  <option value="">wife</option>
  <option value="">sister</option>
  <option value="">	grandmother</option>
  <option value="">	granddaughter</option>
  <option value="">	aunt</option>
  <option value="">	niece</option>
  

</select>

<select name="religion" required >
  <option selected value="">Religion</option>
  <option value="">Hindu</option>
  <option value="">Muslim</option>
</select>
<select name="nationality" required >
  <option selected value="">Nationality</option>
  <option value="">Indian</option>
  
</select>

<select name="bloodgroup" required >
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
      
</select>
<br>

</select>


</fieldset>




<!--patient's residence details division -->

<fieldset >

<input type="text" name="cadd1" placeholder="Residential Address Line 1" style="width:630px;" required ><br>
<input type="text" name="cadd2" placeholder="Residential Address Line 2" style="width:630px;"  ><br>

<input type="text" placeholder="City/Village" name="c_city" size="24" required >
<input type="text" placeholder="Post Office" name="c_po" size="23" required >
<input type="text" placeholder="Police Station" name="c_ps" size="24" required >
<input type="text" placeholder="Municipilaty/Block" name="c_municipality" size="62" required >
<input type="text" placeholder="Zip Code" name="c_zip" size="24" required >
<br>

<select name="country" required>

  <option selected value="">Select Country</option>
  <option>Afghanistan
<option>Armenia
<option>Azerbaijan
<option>Bahrain
<option>Bangladesh
<option>Bhutan
<option>Brunei
<option>Cambodia
<option>China
<option>Cyprus
<option>Georgia
<option>India
<option>Indonesia
<option>Iran
<option>Iraq
<option>Israel
<option>Japan
<option>Jordan
<option>Kazakhstan
<option>Kuwait
<option>Kyrgyzstan
<option>Laos
<option>Lebanon
<option>Malaysia
<option>Maldives
<option>Mongolia
<option>Myanmar (Burma)
<option>Nepal
<option>North Korea
<option>Oman
<option>Pakistan
<option>Palestine
<option>Philippines
<option>Qatar
<option>Russia
<option>Saudi Arabia
<option>Singapore
<option>South Korea
<option>SriLanka
<option>Syria
<option>Taiwan
<option>Tajikistan
<option>Thailand
<option>Timor-Leste
<option>Turkey
<option>Turkmenistan
<option>United Arab Emirates
<option>Uzbekistan
<option>Vietnam
<option>Yemen
</select>

<select name="state" required>
  <option value="">Select State</option>
</select>

<select name="district" required>
  <option value="">Select District</option>
</select>
<br>
<input type="text" placeholder="Email ID" name="email1" size="43" required >
<input type="text" placeholder="Alternate Email ID" name="email2" size="43" required ><br>
<input type="text" placeholder="Telephone with STD code" name="tel" required >
<input type="text" placeholder="Mobile" maxlength="10" name="mob" size="26" required >
<input type="text" placeholder="Guardian Contact no" maxlength="10" name="grd_cont" size="25" required >
<br>

</fieldset>


<!-- patient's relative address details division  -->

<fieldset >

<input type="checkbox" class="sp"> Same as current address.
<br>
<input type="text" placeholder="Residential Address Line 1" style="width:680px;" name="padd1"  ><br>
<input type="text" placeholder="Residential Address Line 2" style="width:680px;" name="padd2"><br>

<input type="text" placeholder="City/Village" name="p_city" size="26"  >
<input type="text" placeholder="Post Office" name="p_po" size="26"  >
<input type="text" placeholder="Police Station" name="p_ps" size="27"  >
<input type="text" placeholder="Municipilaty/Block" name="p_municipality" size="70"  >
<input type="text" placeholder="Zip Code" name="p_zip" size="24"  >
<br>

<select name="pcountry"  >

  <option selected value="">Select Country</option>

<option>Afghanistan
<option>Armenia
<option>Azerbaijan
<option>Bahrain
<option>Bangladesh
<option>Bhutan
<option>Brunei
<option>Cambodia
<option>China
<option>Cyprus
<option>Georgia
<option>India
<option>Indonesia
<option>Iran
<option>Iraq
<option>Israel
<option>Japan
<option>Jordan
<option>Kazakhstan
<option>Kuwait
<option>Kyrgyzstan
<option>Laos
<option>Lebanon
<option>Malaysia
<option>Maldives
<option>Mongolia
<option>Myanmar (Burma)
<option>Nepal
<option>North Korea
<option>Oman
<option>Pakistan
<option>Palestine
<option>Philippines
<option>Qatar
<option>Russia
<option>Saudi Arabia
<option>Singapore
<option>South Korea
<option>Sri Lanka
<option>Syria
<option>Taiwan
<option>Tajikistan
<option>Thailand
<option>Timor-Leste
<option>Turkey
<option>Turkmenistan
<option>United Arab Emirates
<option>Uzbekistan
<option>Vietnam
<option>Yemen
</select>

<select name="pstate"  >
  <option value="">Select State</option>
  <option>
</select>

<select name="pdistrict"  >
  <option value="">Select District</option>
</select>
<br>
<input type="text" placeholder="Telephone with STD code" name="ptel">
<input type="text" placeholder="Mobile" maxlength="10" name="pmob" size="30">
<input type="text" placeholder="Guardian Contact no" maxlength="10" name="pgrd_cont" size="30">
<br>

</fieldset>



<!--patient's admission division -->
<fieldset>
<label>Admission Date : </label><input type="date" >
<label>Admission Time : </label><input type="time" placeholder="Time" style="width:80px;">
<hr>
<select name="patcategory">
  <option selected value="">Patient Category</option>
  <option>PAYING</option>
  <option>CABIN</option>
  <option>GENERAL</option>
</select>
<select name="pattype">
  <option selected value="">Patient Type</option>
  <option>OPD</option>
  <option>ER</option>
</select>
<hr>
<input type="text" placeholder="Preferred By">
<input type="text" placeholder="Doctor">
<input type="checkbox" style="width:10px;height:10px;left:5px;">
<label style="left:5px;">Hospital Reference</label>
<input type="text" placeholder="Hospital Name">
<hr>
<select name="unit">
  <option selected value="">Unit</option>
</select>

<select name="word">
  <option selected value="">Word</option>
</select>
<input type="text" placeholder="Bed No">
<hr>
<label style="top: 5px;">Dsease Description</label>
<label style="top: 5px;">Provisional Diagnosis</label><br>
<textarea rows="8" cols="40"></textarea>
<textarea rows="8" cols="40" style=""></textarea>
<button class="next">Submit</button>
</fieldset>

</form>
<script
		src="JQuery/Jquery.js"></script>
		<script type="text/javascript">
		$(".gender").change(function()
                {
                    $(".gender").prop('checked',false);
                    $(this).prop('checked',true);
                });
		$(".status").change(function()
                {
                    $(".status").prop('checked',false);
                    $(this).prop('checked',true);
                });
		$(".sp").change(function()
                {
                    $(".sp").prop('checked',false);
                    $(this).prop('checked',true);
                });
		
		if (jQuery(this).scrollTop() > 20)
			$('.navigation li:nth-child(1)').addClass('active');
		else
			$('.navigation li:nth-child(1)').removeClass('active');
		
	
		</script>
		
<script LANGUAGE="JavaScript">
function ValidateForm(myform){
ErrorText= "";
if ( ( form.sex[0].checked == false ) && ( form.sex[1].checked == false ) ) 
{
alert ( "Please choose your Gender: Male or Female" ); 
return false;
}
if ( ( form.maritalstatus[0].checked == false ) && ( form.maritalstatus[1].checked == false ) ) {
alert ( "Please choose your Status: Married or Unmarried" ); 
ErrorText= "";
return false;
}

if (ErrorText= "") { form.submit() }
}
</script>
</body>
</html>