<html>
<head>
<title>change password</title>
<style type="text/css">
<!--
.style11 {
color:#00FFFF;
  text color:#FFFFFF;
  font-weight: bold;
}
.style10 {
	font-size: 24px;
	font-weight: bold;
	color: #FFFFFF;
}
.style13 {
	color:#FF0000;
	font-weight: bold;
}
-->
</style>

</head>
<body>
<?php
include("header.php");
?>
<form method="post">

<table width="494" height="263" border="0" align="center">
  <tr>
    <td colspan="2" bgcolor="#666666"><div align="center"><span class="style10"> FORGET PASSWORD </span></div></td>
    </tr>
	<tr>
    <td colspan="2">
 
  <?php
  include("connection.php");

 $id=$_REQUEST['u_id'];
  $sql="select * from gate_pass.regestration where reg_id=$id";
  $result=mysql_query($sql);?>
   <?php
   while($row=mysql_fetch_row($result))
  {  
     if(isset($_REQUEST['change']))
	  {  $new_password=$_REQUEST['new_pass'];
	   if($_REQUEST['new_pass']==$_REQUEST['re_pass'])
	   {
	   $sql1="update gate_pass.regestration set password='".$new_password."'where reg_id=$id";
	   $result1=mysql_query($sql1);
	   header("location:login.php");
	   session_start();
	   session_destroy($_SESSION['$session']);
	   }
	   else
	   {
	   ?> <span class="style13"> <CENTER> <?php echo "PASSWORD ARE NOT MATCHED";?></CENTER> </span> <?php
			
	   }
	  }
		 
   }
        ?>		 </td>
    </tr>
      <tr>
        <td><span class="style11">ENTER NEW PASSWORD </span></td>
        <td><input name="new_pass" type="text" class="style11" id="new_pass"></td>
      </tr>
      <tr>
        <td><span class="style11">RE-ENTER PASSWORD </span></td>
        <td><input name="re_pass" type="text" class="style11" id="femail_id"></td>
      </tr>
      <tr>
    <td colspan="2">
      <div align="center">
        <input name="change" type="submit" class="style11" id="login" value="SUBMIT">
        </span> 
       
        <input name="Submit2" type="reset" class="style11" value="Reset">
        </span>        </div>    </td>
    </tr>
</table>


</form><br><br><br><br><br><br><br><br>
<?php
  
include("footer.php");
?>
</body>
</html>