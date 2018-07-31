<?php 
include("admin_connection.php");
$n="y";
$requested_id=$_REQUEST['requested_id'];
echo $sql1="update gate_pass.request_gatepass set status='".$n."' where request_id=$requested_id";
$result1=mysql_query($sql1);
header("location:requested_gatepass.php");
?>
