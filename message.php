
<html>
<head>
<title>message page</title>
<style>
        .container{
            position:relative;
            width:100%;
            height:300px;
            border-radius:5px;
            border:1px solid red;
            overflow:hidden;
        }
.style2 {
	color: #00FFFF;
	font-weight: bold;
	font-size: medium;
}
.style4 {
	color: #FF3366;
	font-weight: bold;
	font-size: medium;
}


}
</style>

</head>
<body>


<?php
include("header.php");

if($_SESSION['$session']!="")
{

?>
<form method="post">
<table width="1225" border="0">
  <tr>
    <td width="262"><?php include("sidepanel.php");?> </td>
	<?php include("connection.php");?>
	
    <td width="428" >
	 <?php 
	
	
	?>
	 <table width="480" height="85" border="0">
     <tr>
         <td>
	   <?PHP 
	     $sql="select * from  request_gatepass";
		 $result=mysql_query($sql);
		
		 while($row=mysql_fetch_row($result))
		  {
		  $requestedid=$_SESSION['$session'];
		  if( $requestedid==$row[1])
		  {
   echo"    <tr>
         
         <td><span class=style4> * </span> <span class=style2> YOUR REQUEST ON $row[5] FOR $row[2]</BR> FOR ";
		    $date1 =  $row[3];
      $date2 = $row[4];
      $diff = abs(strtotime($date2) - strtotime($date1));
      $years = floor($diff / (365*60*60*24));
      $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
      $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
      printf("%d MONTHS %d DAYS",  $months, $days);
		 
		 
		 
		 
		echo" </span> ";
		 /* if($row[6]=="y")
		  {
		   echo"<span class=style2>  WAS ACCEPTED  </span>";
		  }
		  elseif($row[6]=="r")
		  {
		  echo" <span class=style2>   WAS PENDING  </span>";
		  }
		 elseif($row[6]=="n")
		  {
		  echo"<span class=style2>   WAS REJECTED  </span>";
		  }
		  else
		  {
		    echo"<span class=style2>   NO MESSAGE </span>"; 
		  }
		  if($requestedid!=$row[1])
		  {
		  echo"<span class=style2>   NO MESSAGE </span>"; 
		  }*/
		  switch($row[6]){
		   case "y";
		          echo"<span class=style2>  WAS ACCEPTED  </span>";
				  break;
		 case "r";
		          echo" <span class=style2>   WAS PENDING  </span>";
				  break;
		case "n";
		         echo"<span class=style2>   WAS REJECTED  </span>";
				 break;
		 default:
		         echo"<span class=style2>   NO MESSAGE </span>"; 
		
		  
		  }
		  
		echo" <span class=style4> . </span> </td>
       </tr>
	   ";
	   }
	  }
	   ?></td> </table>
	 </td>
  </tr>
</table>
<?php
}
else
{header("location:index.php");}

include("footer.php");
?>
</form>
</body>
</html>