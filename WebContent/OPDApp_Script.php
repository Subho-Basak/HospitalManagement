<?php session_start(); ?>
<?php
include_once( "./connect_db.inc");
$connection = db_connect();

if ( ! $connection )
{
    print( "cannot connect to database" );
    exit;
}

$opdid="1025689";
$p_fname = $_POST['fname'];
$p_mname = $_POST['mname'];
$p_lname = $_POST['lname'];
$p_gender = $_POST['mySelect'];//$_POST['check'];
$p_age = $_POST['age'];
$p_addr = $_POST['addr'];
$p_zip = $_POST['zip'];
$p_emid = $_POST['email'];
$p_mob = $_POST['cont'];
$p_date=$_POST['date'];
$p_specl=$_POST['specl'];
$p_doc=$_POST['dname'];
$p_day=$_POST['day'];
$p_slot=$_POST['slot'];


$sql = "insert into opd_app(Ap_id,Ap_Date,Doc_name,p_day,p_slot,f_name,m_name,l_name,age,p_add,zip,p_eid,p_cnct,p_gender) values('$opdid','$p_date','$p_doc','$p_day','$p_slot','$p_fname', '$p_mname', '$p_lname', '$p_age', '$p_addr', '$p_zip', '$p_emid', '$p_mob', '$p_gender')";
//$sql1 = "insert into profile(email,picture) values('$email', 'avatar.jpg')";
//echo $sql;
$result=mysql_query($sql,$connection);
//$result1=mysql_query($sql1,$connection);
if($result)
{
    $_SESSION['date']=$p_date;
    $_SESSION['day']=$p_day;
    $_SESSION['slot']=$p_slot;
    $_SESSION['dname']=$p_doc;
    $_SESSION['specl']=$p_specl;


    header("location:SuccessAppointment.php");

}
else
{
    header("location:Failed.php");
}

?>
