<html>
<head>
<title>forgot password</title>
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
    <td width="172"><div align="center"><span class="style11">EMAIL_ID </span> </div></td>
    <td width="312"><input name="femail_id" type="text" class="style11" id="femail_id"></td>
  </tr>
  <?php
  include("connection.php");

  if(isset($_REQUEST['login']))
  {
  $sql="select * from gate_pass.regestration";
  $result=mysql_query($sql);?>
 <script> var error= alert("please enter valid email");</script>
  <?php
   while($row=mysql_fetch_row($result))
  {
    if($row[7]==$_REQUEST['femail_id'])
	{ 
	  $id=$_SESSION['$session']=$row[0];
      header("location:forgotpassword_answer .php?u_id=$id");
	 }
	 else
	 {
	  ?> <script> alert(var error);</script><?php
	 }
		 
   }
   }
         ?>
      <tr>
    <td colspan="2">
      <div align="center">
        <input name="login" type="submit" class="style11" id="login" value="SUBMIT">
        </span> 
       
        <input name="Submit2" type="reset" class="style11" value="Reset">
        </span>        
        </div>    
    </td>
    </tr>
</table>


</form><br><br><br><br><br><br><br><br>
<?php
 
include("footer.php");
?>
</body>
</html>