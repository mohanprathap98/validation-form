<?php
require("database_config.php");
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['mail'];
$fathername=$_POST['fathername'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$zip=$_POST['zip'];
$qualification=$_POST['qualification'];
$language=$_POST['language'];
$maritialstatus=$_POST['maritialstatus'];
$nationality=$_POST['nationality'];
$blood=$_POST['bloodgroup'];
 
$sql="INSERT INTO `info`(`firstname`,`lastname`,`dob`,`age`,`gender`,`phone`,`email`,`fathername`,`address`,`city`,`state`,`country`,`zip`,`qualification`,`language`,`maritialstatus`,`nationality`,`blood`)VALUES('$firstname','$lastname','$dob','$age','$gender','$phone','$email','$fathername','$address','$city','$state','$country','$zip','$qualification','$language','$maritialstatus','$nationality','$blood')";

  if (mysqli_query($con,$sql))
  {
  	
  	require("alldata.php");
  }
  else
  {
  	echo "insert failed";
  }

?>