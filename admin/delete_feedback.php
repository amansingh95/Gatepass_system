<?php
include("admin_connection.php");
$feedback_id=$_REQUEST['feedback_id'];

$n="y";

echo $sql1="delete from gate_pass.feedback where feedback_id=$feedback_id";
$result1=mysql_query($sql1);
header("location:view_feedback.php");
?>