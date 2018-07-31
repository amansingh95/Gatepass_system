<html>
<head>
<title>feedback</title>
<style type="text/css">
<!--
.style11 {
color:#00FFFF;
  text color:#FFFFFF;
  font-weight: bold;
}
.style13 {
	color:#FF0000;
	font-weight: bold;
}
.style15 {
	color: #00FF00;
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
  <table width="1293" height="132" border="0" align="center">
    <tr>
      <td width="406"><span class="style11">ENTER YOUR EMAIL FOR GIVING FEED-BACK </span></td>
      <td width="202"><input name="femail" type="text" placeholder=" Email " class="style11" id="femail"></td>
      <td width="663">&nbsp;</td>
    </tr>
	
	<tr>
	  <td colspan="2" align="center"><textarea name="feedback" cols="100" rows="5" placeholder=" ENTER FEED-BACK " class="style11"></textarea></td>
	  <td >&nbsp;</td>
    </tr>
	<tr>
      <td colspan="2" align="center"><input name="feedback_submit" type="submit" class="style11" value="Submit"></td>
      <td >&nbsp;</td>
    </tr><?php 
	include("connection.php");
	 ?>
	 <?php
	 $flg=0;
	  if(isset($_REQUEST['feedback_submit']))
	    {
	     
	      $sql="select * from gate_pass.regestration";
	      $result=mysql_query($sql);
	      $feed_box=$_REQUEST['feedback'];
	      $femail= $_REQUEST['femail'];
	      while($row=mysql_fetch_row($result))
	        {
	          if($femail==$row[7])
	           {
	                $sql5="insert into gate_pass.feedback(feedback,s_email) values('". $feed_box."','".$femail."')";
		            $result5=mysql_query($sql5) or die('not inserted');
					$flg=1;
	            }
		     }
			 if($flg==0)
			 {
			?> <span class="style13"> <CENTER> <?php echo "PLEASE ENTER VALID EMAIL";?></CENTER> </span> <?php
			 }		
		}
    	?>
  </table>
  <table width="1249" height="188" border="0" align="center">
    <tr>
      <td width="177">&nbsp;</td>
     
      <td align="center" width="203"><span class="style11">NAME</span></td>
      <td align="center" width="381"><span class="style11">EMAIL-ID</span></td>
      <td align="left" width="449"><span class="style11">FEED-BACK</span></td>
    </tr>
	<?PHP
	include("connection.php");
	
	  $sql1=mysql_query("SELECT r.* , f.* FROM regestration r, feedback f WHERE r.email_id=f.s_email");
while($row1=mysql_fetch_array($sql1))
{
 ?>
   
	<tr> <td >
     <?php 
	 if( $row1['accept']=="y")
	 {
	 ?>
    <td align="center"><p><?php echo  $row1['name']; ?></p></td>
    <td align="center"><p><?php echo $row1['email_id']; ?></p></td>
    <td align="left"><p><?php echo $row1['feedback']; ?></p></td>
	<?php }?>
    </tr>
	 
<?php }
?>  
</table>
  </br></br></br></br></br></br>
    <?php
	
include("footer.php");
?>
 </p> 
</form>
</body>
</html>