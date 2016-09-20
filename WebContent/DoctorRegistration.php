
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Medicare || New Doctor Registration</title>

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
.headderlbl{

position: absolute;
	left: 0px;
	width: 100%;
	height: 35px;
	cursor: pointer;
	background: gray;
	font-family: arial;
	font-style:italic;
	text-decoration:underline;
	border: none;
	color: white;
	font-size: 30px;

}


input {
	margin-top: 40px;
	margin-left: 60px;
	margin-bottom: 15px;
	
	height: 25px;
	left: 50px;
	outline: none;
	border: none;
	border-left:1px solid cyan;
	border-bottom: 1px solid cyan;
	padding-left: 10px;
	font-size: 12px;
	padding-left: 10px;
	font-size: 12px;
	padding-left: 10px;
	font-size: 12px;
}


select {
	width: 250px;
	height: 35px;
	left: 50px;
	margin-top: 40px;
	margin-left: 50px;
	border: none;
	outline: none;
	background: #b7c2af;
	appearance: none;
	text-indent: 1px;
}

legend {
background: #CCA383;
padding: 6px;
font-weight: bold;

}


.submit {
	position: absolute;
	bottom: 100px;
	left: 350px;
	width: 120px;
	height: 35px;
	cursor: pointer;
	background: #555a51;
	font-family: arial;
	transition: all 0.3s ease-in-out 0s;
	border: none;
	color: white;
	outline: none;
}

.submit:hover {
	background: #2c2f2a;

}

</style>
</head>
<body bgcolor="#efefef">

	<div
		style="position: fixed; top: 0px; left: 0px; width: 100%; height: 80px; background: white; z-index: 4;">
		<a class="homeLink" href="Home.php">MEDI<span
			style="color: #3ab4b0;">CARE</span></a>

	</div>
	
  <div style="position:absolute;top:90px;left:150px;width:1070px;height:3000px;background:white;box-shadow:5px 10px 10px gray;">

		<label class="headderlbl">Personal Details</label>
		<hr>
<select name="designation"  >
  <option selected value="">Select Your Designation</option>
  <option value="">Superintendent</option>
  <option value="">Incharge</option>
  <option value="">Staff Doctor</option>
  
</select>
<br>
<input type="text" placeholder="First Name" name="fname"  size="25" required >
<input type="text" placeholder="Midle Name" name="mname" size="20">
<input type="text" placeholder="Last Name" name="lname"  size="25" required >
<hr>
<input type="checkbox" name="sex" class="gender"  ><label>Male</label>
<input type="checkbox" name="sex" class="gender"  ><label>Female</label>
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
<hr>
 
<label style="margin-left:50px;">D.O.B:</label><input type="date" name="dob" required >
<input type="text" placeholder="Religion" name="religion" required >
<input type="text" placeholder="Nationality" name="nationality" required >
<hr>
<input type="text" placeholder="Registration Number" name="mdregistrationnumber"  required >
<input type="text" placeholder="Year Of Info" name="yearinfo" required>
<input type="text" placeholder="Date of Registration" name="schoolname" required >
<input type="text" placeholder="State Medical Council" name="stmdcouncil" required >
<hr>


<!--patient's residence details division -->


<label class="headderlbl">Current Residential Details</label>
<hr>
<input type="text" name="cadd1" placeholder="Residential Address Line 1" style="width:630px;" required ><br>
<input type="text" name="cadd2" placeholder="Residential Address Line 2" style="width:630px;"  ><br>
<hr>
<input type="text" placeholder="City/Village" name="c_city" size="24" required >
<input type="text" placeholder="Post Office" name="c_po" size="23" required >
<input type="text" placeholder="Police Station" name="c_ps" size="24" required >
<hr>
<input type="text" placeholder="Municipilaty/Block" name="c_municipality" size="62" required >
<input type="text" placeholder="Zip Code" name="c_zip" size="24" required >
<hr>

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

<input type="text" placeholder="State" name="state" required >
<input type="text" placeholder="District" name="district" required >
<hr>
<input type="text" placeholder="Email ID" name="email1" size="43" required >
<input type="text" placeholder="Alternate Email ID" name="email2" size="43" required >
<hr>
<input type="text" placeholder="Telephone with STD code" name="tel" required >
<input type="text" placeholder="Mobile" maxlength="10" name="mob" size="26" required >
<input type="text" placeholder="Guardian Contact no" maxlength="10" name="grd_cont" size="25" required >
<hr>

<!-- Permanent residential Division -->


<label class="headderlbl">Permanent Residential Details</label>
<hr>
<input type="checkbox" class="sp"> Same as current address.
<hr>
<input type="text" placeholder="Residential Address Line 1" style="width:680px;" name="padd1"  ><br>
<input type="text" placeholder="Residential Address Line 2" style="width:680px;" name="padd2"><hr>

<input type="text" placeholder="City/Village" name="p_city" size="26"  >
<input type="text" placeholder="Post Office" name="p_po" size="26"  >
<input type="text" placeholder="Police Station" name="p_ps" size="27"  >
<hr>
<input type="text" placeholder="Municipilaty/Block" name="p_municipality" size="70"  >
<input type="text" placeholder="Zip Code" name="p_zip" size="24"  >
<hr>

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
<hr>
<input type="text" placeholder="Telephone with STD code" name="ptel">
<input type="text" placeholder="Mobile" maxlength="10" name="pmob" size="30">
<input type="text" placeholder="Guardian Contact no" maxlength="10" name="pgrd_cont" size="30">
<hr>
<label class="headderlbl">Secondary Examination Details</label>
<hr>
<input type="text" placeholder="Roll Number" name="rollno"  required >
<input type="text" placeholder="Registration Number" name="Registrationno" required>
<input type="text" placeholder="School Name" name="schoolname" required >
<input type="text" placeholder="Board Name" name="boardname" required >
<hr>
<input type="text" placeholder="School Address" style="width:680px;" name="padd1"  ><br>
<input type="text" placeholder="Country of Board" name="countryofboard" required >
<input type="text" placeholder="State of Board" name="stateofboard" required >
<hr>
<input type="text" placeholder="Total Marks" name="totalmarks" required >
<input type="text" placeholder="Your Marks" name="yourmarks" required >
<input type="text" placeholder="Percentage" name="percentage" required >
<select name="passyear"  >

  <option selected value="">Year Of Passing</option>
</select>
<hr>
<label class="headderlbl">Higher-Secondary Examination Details</label>
<hr>
<input type="text" placeholder="Roll Number" name="rollno"  required >
<input type="text" placeholder="Registration Number" name="Registrationno" required>
<input type="text" placeholder="School Name" name="schoolname" required >
<input type="text" placeholder="Board Name" name="boardname" required >
<hr>
<input type="text" placeholder="School Address" style="width:680px;" name="padd1"  ><br>
<input type="text" placeholder="Country of Board" name="countryofboard" required >
<input type="text" placeholder="State of Board" name="stateofboard" required >
<hr>
<input type="text" placeholder="Total Marks" name="totalmarks" required >
<input type="text" placeholder="Your Marks" name="yourmarks" required >
<input type="text" placeholder="Percentage" name="percentage" required >
<select name="passyear"  >

  <option selected value="">Year Of Passing</option>
</select>
<hr>
<label class="headderlbl">Degree Details</label>
<hr>	
<br>
<br>
<br><hr>	

<input type="submit" class="submit" value="Submit">
  </div>
</body>
</html>