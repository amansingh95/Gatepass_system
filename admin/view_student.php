<html>
<head>
<title>header</title>
<style type="text/css">
<!--
.style1 {
	font-size: xx-large;
	font-weight: bold;
	color: #FFFFCC;
}
.style10 {
	font-size: 24px;
	font-weight: bold;
	color: #FFFFCC;
	background-color:#000000;
}
.style2 {color: #003300; font-weight: bold; }
-->



</style>
</head>
<body>
<form method="post">
  
	<?PHP include("admin_header.php"); ?>
    <table width="1232" height="267" border="0">
      <tr>
        <td width="250"><?php include("admin_sidepanel.php");?></td>
        <td width="966"><table width="1232" height="267" border="0">
      <tr>
        
        <td width="966"><table width="966" height="123" border="1">
          <tr>
            
            <td width="225"><div align="center" class="style2">NAME</div></td>
            <td width="340"><div align="center" class="style2">EMAIL-ID</div></td>
             <td width="340"><div align="center" class="style2">HOSTEL NAME</div></td>
            <td width="340"><div align="center" class="style2">GENDER</div></td>
            <td width="340"><div align="center" class="style2">ADDRESS</div></td>
           </tr><?php
		   include("admin_connection.php");
		  $sql1=mysql_query("SELECT * FROM regestration");
while($row1=mysql_fetch_array($sql1))
{
 ?>
   
	<tr> 
    
    <td align="center"><p><?php echo $row1['name']; ?></p></td>
    <td align="center"><p><?php echo $row1['email_id']; ?></p></td>
   <td align="center"><p><?php echo $row1['hostel_name']; ?></p></td>
	<td align="center"><p><?php echo $row1['gender']; ?></p></td>
	<td align="center"><p><?php echo $row1['address']; ?></p></td>
	
        </table></td>
      </tr>
    </table>
    <p><?php include("admin_footer.php");?></p>
  <p>&nbsp;</p>
</form>
</body>
</html>