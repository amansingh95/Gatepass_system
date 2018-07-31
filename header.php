<html>
<head>
<title>header</title>
<style type="text/css">
<!--
.style1 {
	font-size: xx-large;
	font-weight: bold;
	color: #00FFFF;
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
  <table width="1398" height="100" border="0">
    <tr>
      <td height="96" colspan="5" bgcolor="#999999"><img src="parul.jpg" alt="logo" width="179" height="91"></td>
      <td width="1191" height="96" bgcolor="#999999"><div align="center" class="style1">GATE PASS SYSTEM </div></td>
    </tr>
  </table>
	<table width="1355" height="52" border="0">
    <tr>
      <td width="131" height="48"bgcolor="#666666"><div align="center"><a href="index.php" class="style10" style="text-decoration:none">HOME</a></div></td>
      <td width="218" bgcolor="#666666"><div align="center"><a href="gatepass.php" class="style10" style="text-decoration:none">APPLY GATE PASS </a></div></td>
      <td width="194" bgcolor="#666666"><div align="center"><a href="message.php" class="style10" style="text-decoration:none">MESSAGE</a></div></td>
      <td width="214" bgcolor="#666666"><div align="center"><a href="feedback.php" class="style10" style="text-decoration:none">FEED BACK </a></div></td>
      <td width="221" bgcolor="#666666"><div align="center"><span class="style10">CONTACT US </span></div></td>
	  <?php
	    
		 session_start();
		 
	  if(isset($_SESSION['$session']))
	  {
	  ?>
      <td width="131" bgcolor="#666666"><div align="center"><a href="logout.php" class="style10" style="text-decoration:none">LOGOUT</a></div></td>
	 <?php }else{?>
 <td width="216" bgcolor="#666666"><div align="center"><a href="login.php" class="style10" style="text-decoration:none">LOGIN</a></div></td>
 <?php }?>

   </tr>
  </table>
</form>
</body>
</html>