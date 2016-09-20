<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>

<style type="text/css">
label {
	margin-left: 450px;
}

input ,select{
padding-left:10px;
	margin-left: 450px;
	width: 300px;
	height: 20px;
	outline: none;
	margin-bottom: 50px;
}
</style>

</head>
<body>
	<form action="AddMedicine" method="post">
		<label>VMS NO</label> <br> <input type="text" name="vms" required> <br>

		<label>NOMENCLATURE:</label> <br> <input type="text" name="name"  required> <br>

		<label>TYPE OF MEDICINE:</label> <br> <select
			name="type">
			<option value="">Inhalation</option>
			<option value="">Injection</option>
			<option value="">Spray</option>
			<option value="">Gel</option>
			<option value="">Tablet</option>
			<option value="">Ointment</option>
			<option value="">Syrup</option>
			<option value="">Capsule</option>
			<option value="">Nasal Spray</option>
			<option value="">Powder</option>
			<option value="">Solution</option>
			<option value="">Suspension</option>
			<option value="">Cap</option>
			<option value="">Liquid</option>
			<option value="">Tab/cap</option>
			<option value="">Infusion</option>
			<option value="">Pessary</option>
			<option value="">Cream</option>
			<option value="">Lotion</option>
			<option value="">Vial</option>
			<option value="">2.5mg PFS</option>
			<option value="">10 Lit. Can</option>
			<option value="">Infusion</option>
			<option value="">Emulsion</option>
			<option value="">Mouth wash</option>
			<option value="">Eye Drop</option>
			<option value="">Tincture</option>
			<option value="">Crystal</option>
			<option value="">Suppositories</option>
			<option value="">Ear Drop</option>
			<option value="">Nasal Drop</option>
			<option value="">Drop</option>
			<option value="">Lubricant Eye Drop</option>
			<option value="">Fluid</option>
			<option value="">Inhaler</option>
			<option value="">Respules</option>
			<option value="">Rotacap</option>
			<option value="">Respirator</option>
			<option value="">Sachet</option>
			
			
		</select> <br> <label>STRENGTH</label> <br> <input type="text"  name="strength"required>
		<br> <label>COST/QUANTITY</label> <br> <input type="text" name="cost" required>
		<br> <label>QUANTITY</label> <br> <input type="text" name="qty" required>
		<br> <input type="submit" value="Save">
	</form>

</body>
</html>