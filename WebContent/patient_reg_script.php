<?php session_start(); ?>
<?php
include_once( "./connect_db.inc");
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}

$phid="1258";
$p_fname = $_POST['fname'];
$p_mname = $_POST['mname'];
$p_lname = $_POST['lname'];
$p_gender = "M";//$_POST['check'];
$p_mstatus = $_POST['maritalstatus'];
$p_spousename = $_POST['spouce'];
$p_dob = $_POST['dob'];
$p_age = $_POST['y'];
$p_grdname = $_POST['grd_name'];
$p_relatn = $_POST['relation'];
$p_blood = $_POST['bld'];
$p_add = $_POST['cadd1'];
$p_altadd = $_POST['cadd2'];
$p_city = $_POST['c_city'];
$p_zip = $_POST['c_zip'];
$p_cntry = $_POST['country'];
$p_st = $_POST['state'];
$p_po = $_POST['c_po'];
$p_emid = $_POST['email1'];
$p_alteml = $_POST['email2'];
$p_muni = $_POST['c_municipality'];
$p_ps = $_POST['c_ps'];
$p_teleph = $_POST['tel'];
$p_mob = $_POST['mob'];
$p_gurdcnct = $_POST['grd_cont'];


$sql = "insert into patient_reg(p_id,p_fname,p_mname,p_lname,p_gender,p_mstatus,p_spousename,p_dob,p_age,p_grdname,p_relatn,p_blood,p_add,p_altadd,p_city,p_zip,p_cntry,p_st,p_po,p_emid,p_alteml,p_muni,p_ps,p_teleph,p_mob,p_gurdcnct) values('$phid','$fname', '$mname', '$lname', '$check', '$maritalstatus', '$spouce', '$dob', '$y', '$grd_name', '$relation', '$p_blood', '$cadd1', '$cadd2', '$c_city', '$c_zip', '$country', '$state', '$c_po', '$email1', '$email2', '$c_municipality', '$c_ps', '$tel', '$mob', '$grd_cont')";
//$sql1 = "insert into profile(email,picture) values('$email', 'avatar.jpg')";
//echo $sql;
$result=mysql_query($sql,$connection);
//$result1=mysql_query($sql1,$connection);
if($result)
{
	//$_SESSION['uid']=$p_age;
	header("location:SuccessAppointment.php");
	
}
else
{
	header("location:Failed.php");
}
	
?>