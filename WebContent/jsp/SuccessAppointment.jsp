<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Medicare || Successfull Registration</title>
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
.msgbox h2{
margin:50px 50px;
padding:10px 80px;
text-align:left;
font-weight:normal;
background:url("Images/yes.png") no-repeat;
}
.msgbox h5{
margin:50px 50px;
padding:10px 80px;
text-align:left;
font-weight:normal;

}
.msgbox hr{

margin:-40px 120px;
border:none;
height:1px;
background:#ddd;
}
.msgbox label{
margin:0px 130px;
padding:20px 160px;
text-align:left;
font-weight:normal;
background:#cdffb5;
font-size:12px;

}
</style>
</head>
<body bgcolor="#efefef">
<% Object obj=request.getAttribute("appointment");
String id="";

if(obj!=null)	
id=(String)obj;

%>
<div style="position:fixed;top:0px;left:0px;width:100%;height:80px;background:white;z-index:5;box-shadow:0px 5px 5px gray">
<a class="homeLink" href="Home.jsp">MEDI<span>CARE</span></a>
</div>
<div style="position:fixed;top:170px;left:250px;width:60%;height:400px;background:#fff;z-index:5;box-shadow:0px 2px 2px gray" class="msgbox">
<h2>You have successfully made an appointment</h2><hr>
<%if(id!=null){ %>
<h5>ID:<%= id %></h5>
<%} %>
<label>Please provide this ID to our receptionist.</label>
</div>

</body>
</html>