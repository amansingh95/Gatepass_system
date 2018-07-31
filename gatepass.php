 <?php
include("header.php");

?>
<?php

if($_SESSION['$session']!="")
{?>

<html>
<head>
<title>gate_pass</title>

<style type="text/css">
<!--
.style11 {color:#00FFFF;
  text color:#FFFFFF;
  font-weight: bold;
}
-->
</style>
</head>
<body>


<form method="post" enctype="multipart/form-data">


<table width="1225" border="0">
  <tr>
    <td width="262"><?php include("sidepanel.php");?></td>
	
	
    <td width="947"><table width="573" height="346" border="0" align="center">
      <tr>
        <td colspan="2"></td>
        </tr>
      <tr>
        <td height="63"><?php
		include("connection.php");
		
		  $reg_id= $_SESSION['$session'];
		 $sql="select * from gate_pass.regestration";
 $result=mysql_query($sql);
  while($row=mysql_fetch_row($result))
  {
   if($row[0]== $reg_id)
   {    
    echo "<img src=uplode/$row[13] alt=no image width=150 height=150>";?></td>
        <td>DATE:        <?php $date= date("Y-m-d");
		     

		echo $date;
		?></td>
      </tr>
      <tr>
        <td><span class="style11">HOSTEL NAME</span></td>
        <td><?php
    echo $row[2];
   ?></td>
      </tr>
      <tr>
        <td><span class="style11">STUDENT NAME</span> </td>
        <td><?php echo $row[1];}
  }?></td>
      </tr>
      <tr>
        <td><span class="style11">LEAVING DATE</span> </td>
        <td><input name="ldate" type="DATE" class="style11" id="ldate"></td>
      </tr>
      
      <tr>
        <td><span class="style11">RETURNING DATE</span></td>
        <td><input name="rdate" type="DATE" class="style11" id="rdate"></td>
      </tr>
      <tr>
        <td><span class="style11">REASON FOR LEAVE</span></td>
        <td><textarea name="reason" class="style11" id="reason" required="required"></textarea></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input name="request" type="submit" class="style11" id="request" value="Submit">
          <input name="Submit2" type="reset" class="style11" value="Reset">
        </div></td>
        </tr>
    </table></td>
  </tr>
</table>
<?php
include("connection.php");
 $r_id=$_SESSION['$session'];
  $aa="select name from regestration where reg_id==$r_id";
   $rr=mysql_query($aa);
  if(isset($_REQUEST['request']))
   { 
       $e=$_REQUEST["ldate"];
       $f=$_REQUEST["rdate"];
	   $current_time= strtotime($date);
	   $leaving_time= strtotime($e); 
       $return_time= strtotime($f); 
	 
    if($current_time>$leaving_time || $leaving_time>$return_time)
	{ ?>
	<script> alert ("ENTER VALID DATE")</script>
	<?php }
		else
	{ $reson=strtoupper($_REQUEST['reason']);
		$sql2="insert into request_gatepass(regestered_id,reason,leaving_date,return_date,c_date)values(
         ".$r_id.",
		 '".$reson."',
		 '".$e."',
		 '".$f."', 
		 '".$date."'
		)";

   
	
	mysql_query($sql2) or die("not inserted");
	
	 }
	
	}
?>
 
</form>
<?php
include("footer.php");
?>
</body>
</html>
<?php
}
else
{
header("location:index.php");
}