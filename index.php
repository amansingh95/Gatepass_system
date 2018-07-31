<html>
<head>
<title>home page</title>
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
    </style>

</head>
<body>


<?php
include("header.php");
?>
<form method="post">
<table width="1225" border="0">
  <tr>
    <td width="262"><?php include("sidepanel.php");?></td>
	<?php include("connection.php");?>
	
    <td width="428" ><?php if(isset($_SESSION['$session'])) 
	{
	$name= $_SESSION['$session'];
	
 $sql="select * from gate_pass.regestration";
 $result=mysql_query($sql);
  while($row=mysql_fetch_row($result))
  {
   if($row[0]==$name)
   {
  echo  "<span class=style2><marquee scrolldelay=61><center><h1>WELCOME TO GATEPASS SYSTEM, $row[1]!</h1></center></marquee></span> ";
   
  
   }
  }
}
	?>
<div id="imgGallary" class="container">
  
    <img src="image/HeaderLogo15_07_11_01_00_34.jpg" alt="images" width="1103" height="332">
	<img src="image/hqdefault.jpg" alt="images" width="1103" height="332">
<img src="image/ParulCampus2-1024x493.jpg" alt="images" width="1103" height="332">
<img src="image/pic9.jpg" alt="images" width="1101" height="332"></td>

<script>
(function(){
        var imgLen = document.getElementById('imgGallary');
        var images = imgLen.getElementsByTagName('img');
        var counter = 1;

        if(counter <= images.length){
            setInterval(function(){
                images[0].src = images[counter].src;
                console.log(images[counter].src);
                counter++;

                if(counter === images.length){
                    counter = 1;
                }
            },2000);
        }
})();
</script>
</div>
  </tr>
</table>
<?php
include("footer.php");
?>
</form>
</body>
</html>