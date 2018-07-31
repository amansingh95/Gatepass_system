<html>
<head>
<title>view feed back</title>
<style type="text/css">
<!--
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
        <td width="966"><table width="966" height="123" border="1">
          <tr>
            
            <td width="225"><div align="center" class="style2">NAME</div></td>
            <td width="340"><div align="center" class="style2">EMAIL-ID</div></td>
            <td><div align="center" class="style2">FEED BACK </div></td>
            <td><div align="center" class="style2">ACTION</div></td>
          </tr><?php
		   include("admin_connection.php");
		  $sql1=mysql_query("SELECT r.* , f.* FROM regestration r, feedback f WHERE r.email_id=f.s_email");
while($row1=mysql_fetch_array($sql1))
{
 ?>
   
	<tr> 
    
    <td align="center"><p><?php echo $row1['name']; ?></p></td>
    <td align="center"><p><?php echo $row1['email_id']; ?></p></td>
    <td width="94" align="center"><p><?php echo $row1['feedback']; ?></p></td> 
	 <td width="279" align="center"><p><?php echo"<a href=accept_feedback.php?feedback_id=$row1[feedback_id]><span class=style13 style=text-decoration:none>ACCEPT</span></a> 
	                                             <a href=reject_feedback.php?feedback_id=$row1[feedback_id]><span class=style13>REJECT</span></a> 
												 <a href=delete_feedback.php?feedback_id=$row1[feedback_id]><span class=style13>DELETE</span></a> ";?></p></td>
	</tr><?php }?>
        </table></td>
      </tr>
    </table>
    <p><?php include("admin_footer.php");?></p>
  <p>&nbsp;</p>
</form>
</body>
</html>