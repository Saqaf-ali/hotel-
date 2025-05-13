<?php

require_once('db_config.php'); // contains database connection details
$ro_id="";
$l_name="";
$f_name="";
$phone="";
$date_dep="";
$date_arr="";
if (isset($_POST['send_booking'])) {
$ro_id=$_POST['ro_id'];
$l_name=$_POST['l_name'];
$f_name=$_POST['f_name'];
$phone=$_POST['phone'];
$date_arr=$_POST['date_arr'];
$date_dep=$_POST['date_dep'];
$insert=mysqli_query($conn,"INSERT into booking (ro_id,l_name,f_name,phone,date_arr,date_dep) values($ro_id,'$l_name','$f_name','$phone','$date_arr','$date_dep')");

header("location: b.php");
    
}

?>