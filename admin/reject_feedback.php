<?php
include("admin_connection.php");
$feedback_id=$_REQUEST['feedback_id'];

$n="n";

echo $sql1="update gate_pass.feedback set accept='".$n."' where feedback_id=$feedback_id";
$result1=mysql_query($sql1);
header("location:view_feedback.php");
?>