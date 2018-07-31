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
<?php
include("header.php");
?>
<form method="post">

<table width="494" height="263" border="0" align="center">
  <tr>
    <td colspan="2" bgcolor="#666666"><div align="center"><span class="style10"> LOGIN</span> </div></td>
    </tr>
  <tr>
    <td><div align="center"><span class="style11">USER TYPE </span></div></td>
    <td>
      <div align="left">
        <select name="user_type" class="style11" >
          <option value="admin">ADMIN</option>
          <option value="student">STUDENT</option>
        </select>
        </div></td>
  </tr>
  <tr>
    <td width="172"><div align="center"><span class="style11">EMAIL_ID </span> </div></td>
    <td width="312"><input name="email_id" type="text" class="style11" id="email_id"></td>
  </tr>
  <tr>
    <td><div align="center"><span class="style11">PASSWORD</span> </div></td>
    <td><input name="password" type="text" class="style11" id="password"></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input name="login" type="submit" class="style11" id="login" value="LOGIN">
        </span> 
       
        <input name="Submit2" type="reset" class="style11" value="Reset">
        </span>        </div>    </td>
    </tr>
</table>
<?php
include("connection.php");
if(isset($_REQUEST["login"]))
   {?>
      <script> var error=alert("invalid user name and password");</script>
      <?php
      if($_REQUEST['user_type']=="student")
       {
         $email=$_REQUEST['email_id'];
         $pass=$_REQUEST['password'];
         $sql="select * from gate_pass.regestration";
         $result=mysql_query($sql);
         while($row=mysql_fetch_row($result))
           {
             if($email==$row[7]&&$pass==$row[8])
			  {
                session_start();
                $_SESSION['$session']=$row[0];
                header("location:index.php?name=$row[0]");
			  }
              else
			  {  ?>
                <script> var error;</script>
                <?php
              }
           }
		}
       elseif($_REQUEST['user_type']=="admin")
         {  
		   $email=$_REQUEST['email_id'];
           $pass=$_REQUEST['password'];
           $sql1="select * from gate_pass.admin";
           $result1=mysql_query($sql1);
           while($row1=mysql_fetch_row($result1))
            {
              if($email==$row1[1]&&$pass==$row1[2])
                {
                   header("location:admin/admin_index.php");
                }
            }
		  }
         else
         {
            echo"please select  user type";
         }
  
}

?>
<p>
<p align="center"><a href="forgot_password.php">Forget password ?</a>&nbsp;&nbsp; Change password&nbsp;&nbsp;&nbsp;<a href="regestration.php">New user </a></p>
<BR><BR><BR>

  
</p>
</form>
<?php
  
include("footer.php");
?>
</body>
</html>