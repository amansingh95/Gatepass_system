<html>
<head>
<title>requested page</title>
<style type="text/css">
<!--
.style14 {color: #009933; font-weight: bold; font-size: 24px; }
.style15 {
	color: #00FF00;
	font-weight: bold;
}
.style16 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<form method="post">
  
	<?PHP include("admin_header.php"); ?>
	<table width="1443" height="267" border="0">
      <tr>
        <td width="74"><?php include("admin_sidepanel.php");?></td>
        <td width="18">
        <td width="1323"><table width="1323" height="171" border="5" bordercolor="#009966">
          <tr>
            <td width="80"><div align="center" class="style14">NAME</div></td>
            <td width="107"><div align="center" class="style14">HOSTEL NAME </div></td>
            <td width="157"><div align="center" class="style14">REQUESTED DATE </div></td>
            <td width="119"><div align="center" class="style14">LEAVING DATE </div></td>
            <td width="136"><div align="center" class="style14">RETURING DATE </div></td>
            <td width="112"><div align="center" class="style14">REASON FOR LEAVE </div></td>
            <td width="96"><div align="center" class="style14">EMAIL </div></td>
            <td width="199"><div align="center" class="style14">DAYS</div></td>
          

			<td width="117"><div align="center" class="style14">PHOTOS</div></td>
          <td width="128"><div align="center" class="style14">ACTION</div>          </tr>
		  <?php 
		  include("admin_connection.php");
		
		
		 $sql=mysql_query("SELECT r.* , rg.* FROM regestration r, request_gatepass rg WHERE r.reg_id=rg.regestered_id");
while($row=mysql_fetch_array($sql))
{
 ?>
    <tr>
    <td><p><?php echo $row['name']; ?></p></td>
    <td><p><?php echo $row['hostel_name']; ?></p></td>
    <td><p><?php echo $row['c_date']; ?></p></td>
	<td><p><?php echo $row['leaving_date']; ?></p></td>
	<td><p><?php echo $row['return_date']; ?></p></td>
	<td><p><?php echo $row['reason']; ?></p></td>
	<td><p><?php echo $row['email_id']; ?></p></td>
	<td><p> <?php
      $date1 =  $row['leaving_date'];
      $date2 = $row['return_date'];
      $diff = abs(strtotime($date2) - strtotime($date1));
      $years = floor($diff / (365*60*60*24));
      $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
      $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
      printf("%d years</br> %d months</br> %d days\n", $years, $months, $days);?></p></td>
	  <td><p><?php echo "<img src=../uplode/$row[photo] alt=photo width=170 height=123> " ?></p></td>
    <td> <?php    
	             if($row['status']=="y")
				 {
	            echo"<a href=accept.php?requested_id=$row[request_id]><span class=style15>ACCEPT</span></a> ";
				}
				else
				{
				 echo"<a href=accept.php?requested_id=$row[request_id]><span class=style13>ACCEPT</span></a> ";
				
				}
				 if($row['status']=="n")
				 {
	                echo" <a href=reject.php?requested_id=$row[request_id]><span class=style16>REJECT</span></a> ";
				  } 
				  else
				  {
				  echo" <a href=reject.php?requested_id=$row[request_id]><span class=style13>REJECT</span></a> ";
				
				  }
	               echo" <a href=delete.php?requested_id=$row[request_id]><span class=style13>DELETE</span></a>";?>
            </td>
    </tr>
    <?php
}
		  ?>
        </table>
		  
          
          <table width="1069" height="171" border="5" bordercolor="#009966">
          </table>
          
          
        <td width="10"></td>
      </tr>
  </table>
    <p><?php include("admin_footer.php");?></p>
  <p>&nbsp;</p>
</form>
</body>
</html>