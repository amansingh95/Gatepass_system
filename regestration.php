
<html>
<head>
<title>reg</title>
<style type="text/css">
.style11 {
color:#00FFFF;
  text color:#FFFFFF;
  font-weight: bold;
}
.style20 {
	color: #00FFFF;
	font-weight: bold;
}
</style>
</head>
<body>
 
    <?php
include("header.php");
 

?>
<form method="post" enctype="multipart/form-data">

 
 
  
  <table width="1225" border="0">
  <tr>
    <td><table width="649" height="437" border="0" align="center">
      <tr>
        <td colspan="2" bgcolor="#666666"><div align="center"><span class="style10"> REGISTRATION</span> </div></td>
        </tr>
      <tr>
        <td><span class="style20">NAME</span></td>
        <td><input name="reg_name" type="text" class="style20" id="reg_name" required="required"></td>
      </tr>
      <tr>
        <td><span class="style20">HOSTEL NAME </span></td>
        <td><input name="hostel_name" type="text" class="style20" id="hostel_name" required="required"></td>
      </tr>
      <tr>
        <td><span class="style20">DEPARTMENT NAME </span></td>
        <td><input name="department_name" type="text" class="style20" id="department_name" required="required"></td>
      </tr>
      <tr>
        <td><span class="style20">ENROLLMENT NO </span></td>
        <td><input name="en_no" type="text" class="style20" id="en_no" required="required"></td>
      </tr>
      <tr>
        <td><span class="style20">GENDER</span></td>
        <td><span class="style20">MALE</span>
          <input name="radio" type="radio" class="style20" value="male">
          <span class="style20"> FEMALE                    </span>
          <input name="radio" type="radio" class="style20" value="female"></td>
      </tr>
      <tr>
        <td><span class="style20">PARENTS' PHONE NO </span></td>
        <td><input name="parent_no" type="text" class="style20" id="parent_no" required="required"></td>
      </tr>
      <tr>
        <td><span class="style20">EMAIL-ID</span></td>
        <td><input name="email" type="text" class="style20" id="email" required="required"></td>
      </tr>
      <tr>
        <td><span class="style20">PASSWORD</span></td>
        <td><input name="password" type="text" class="style20" id="password" required="required"></td>
      </tr>
      <tr>
        <td><span class="style20">PHONE NO </span></td>
        <td><input name="phone_no" type="text" class="style20" id="phone_no" > </td>
      </tr>
      <tr>
        <td><span class="style20">CHOOSE QUESTIONS </span></td>
        <td><select name="question" class="style20">   
          <option value="EMAIL PASSWORD">EMAIL PASSWORD </option>
          <option value="FRIEND NAME">FRIEND NAME</option>
          <option value="BEST SONG NAME">BEST SONG NAME</option>
          <option value="BEST FILM NAME"> BEST FILM NAME</option>
          <option value="BEST ACTOR">BEST ACTOR</option>
        </select>
        </td>
      </tr>
      <tr>
        <td><span class="style20">ENTER ANSWER </span></td>
        <td><input name="ans" type="text" class="style20" id="ans" required="required"></td>
      </tr>
      <tr>
        <td><span class="style20">ADDRESS</span></td>
        <td><textarea name="address" class="style20" id="address"></textarea></td>
      </tr>
      <tr>
        <td><span class="style20">PHOTO</span></td>
        <td><input name="img" type="file" class="style11" id="img" required="required"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input  type="submit" name="reg"  class="style11" value="REGISTER">
          <input name="Submit2" type="reset" class="style11" value="RESET">        </td>
        </tr>
    </table></td>
    </tr>
</table>

<?php

 include("connection.php");
if(isset($_REQUEST['reg']))
{ 
	
	 $img=$_FILES['img']['name'];
		$path='uplode/';
		if($_FILES['img']['name']!="")
		{
		move_uploaded_file($_FILES['img']['tmp_name'],$path.$img);
		
		}
		else
		{?>
			<script>
alert('INSERT PHOTO');

</script>";
<?PHP }
	
$reg_name=strtoupper($_REQUEST['reg_name']);
$hostel_name=strtoupper($_REQUEST['hostel_name']);
$dept_name=strtoupper($_REQUEST['department_name']);
$address=strtoupper($_REQUEST['address']);


$sql="insert into gate_pass. regestration(name,hostel_name,department_name,rollno,gender,parent_no,email_id,password,phone_no,address,photo,question,ans) values(
'".$reg_name."',
'".$hostel_name."',
'".$dept_name."',
'".$_REQUEST['en_no']."',
'".$_REQUEST['radio']."',
'".$_REQUEST['parent_no']."',
'".$_REQUEST['email']."',
'".$_REQUEST['password']."',
'".$_REQUEST['phone_no']."',
'".$address."',
'".$img."',
'".$_REQUEST['question']."',
'".$_REQUEST['ans']."'
)";
 $result=mysql_query($sql);

header("location:login.php");
}

?>

<?php
include("footer.php");
?>
</form>
</body>
</html>