<?php 
include("admin_connection.php");

$requested_id=$_REQUEST['requested_id'];
echo $sql1="delete from gate_pass.request_gatepass  where request_id=$requested_id";
$result1=mysql_query($sql1);
header("location:requested_gatepass.php");
?>
