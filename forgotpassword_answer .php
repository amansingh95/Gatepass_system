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
    ?><span class="style11"> <center><?php echo $row[10];?></center></span><?php
     if(isset($_REQUEST['answer']))
	  {
	   if($_REQUEST['fanswer']==$row[11])
	   {
	   header("location:change_password.php?u_id=$id");
	   }
	   else
	   {
	   ?> <span class="style13"> <CENTER> <?php echo "WRONG ANSWER";?></CENTER> </span> <?php
			
	   }
	  }
		 
   }
        ?>
		 </td>
    </tr>
      <tr>
        <td><span class="style11">ENTER ANSWER </span></td>
        <td><input name="fanswer" type="text" class="style11" id="femail_id"></td>
      </tr>
      <tr>
    <td colspan="2">
      <div align="center">
        <input name="answer" type="submit" class="style11" id="login" value="SUBMIT">
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