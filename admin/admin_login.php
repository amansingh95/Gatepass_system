<html>
<head>
<title>login</title>
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

<form method="post">

<table width="494" height="263" border="0" align="center">
  <tr>
    <td colspan="2" bgcolor="#666666"><div align="center"><span class="style10"> ADMIN LOGIN</span> </div></td>
    </tr>
  <tr>
    <td width="172"><div align="center"><span class="style11">EMAIL_ID </span> </div></td>
    <td width="312"><input name="admin_email_id" type="text" class="style11" id="admin_email_id"></td>
  </tr>
  <tr>
    <td><div align="center"><span class="style11">PASSWORD</span> </div></td>
    <td><input name="admin_password" type="text" class="style11" id="admin_password"></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input name="login" type="submit" class="style11" id="login" value="LOGIN">
        </span> 
       
        <input name="Submit2" type="reset" class="style11" value="Reset">
        </span>        
        </div>    
    </td>
    </tr>
</table>
<?php
include("admin_connection.php");
if(isset($_REQUEST["login"]))
{
$email=$_REQUEST['admin_email_id'];
$pass=$_REQUEST['admin_password'];
$sql="select * from gate_pass.admin";
$result=mysql_query($sql);
while($row=mysql_fetch_row($result))
{
if($email==$row[1]&&$pass==$row[2])
{
session_start();


$_SESSION['$admin_session']=$row[0];
header("location:admin_index.php");
}
else
{
echo"invalid user name and password";}
}
}

?>


  

</form>

</body>
</html>