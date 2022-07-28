<?php
require("database_config.php");
if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$dob=$_POST['dob'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
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
	$blood=$_POST['blood'];




	$result=mysqli_query($con,"UPDATE info SET firstname='$firstname',lastname='$lastname',dob='$dob',age='$age',gender='$gender',phone='$phone',email='$email',fathername='$fathername',address='$address',city='$city',state='$state',country='$country',zip='$zip',qualification='$qualification',language='$language',maritialstatus='$maritialstatus',nationality='$nationality',blood='$blood'WHERE id='$id'");
	header("Location:alldata.php");


}
?>








<?php
$id=$_GET['id'];

$result=mysqli_query($con,"SELECT * FROM info WHERE id='$id'");

while($row=mysqli_fetch_assoc($result))
{
	$a=$row['firstname'];
	$b=$row['lastname'];
	$c=$row['dob'];
	$d=$row['age'];
	$e=$row['gender'];
	$f=$row['phone'];
	$g=$row['email'];
	$h=$row['fathername'];
	$i=$row['address'];
	$j=$row['city'];
	$k=$row['state'];
	$l=$row['country'];
	$m=$row['zip'];
	$n=$row['qualification'];
	$o=$row['language'];
	$p=$row['maritialstatus'];
	$q=$row['nationality'];
	$r=$row['blood'];

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<meta name="viewpointer" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src=" bootstrap.min.js"></script>
<style type="text/css">
	#body
	{
		background: linear-gradient(to right,#ACE985  ,#F9E79F );

	}
	.box
	{
		margin-left: 350px;
		padding: 10px;
		box-shadow: 2px 2px 7px 4px;
		width: 600px;
		height: 750px;
		border-radius: 10px;
		
	}
	input
	{
		border-radius: 5px;
		border-style: none;

	}
	textarea
	{
		border-radius: 5px;
		border-style: none;
	}
	select
	{
		border-radius: 5px;
		border-style: none;
	}
	input:hover
	{
		background: #D5DBDB;
	}
	textarea:hover
	{
		background: #F8C471 ;
	}
	select:hover
	{
		background: #85C1E9 ;
	}

</style>
</head>
<body id="body">
	<h1><center><font face="Batang"><b>Edit Your Data</b></font></center></h1>
	<form action="edit.php" method="POST">
		<div class="box">
<table>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> First name:</b></font></td>
		<td><input type="text" name="firstname" value="<?php echo $a?>"style="width: 200px;height: 30px;"></td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;">Last name:</font></b></td>
		<td><input type="text" name="lastname" value="<?php echo $b?>" style="width: 200px;height: 30px;"></td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> DOB:</font></b></td>
		<td><input type="text" name="dob" value="<?php echo $c?>" style="width: 200px;height: 30px;"></td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Age:</font></b></td>
		<td><input type="text" name="age" value="<?php echo $d?>" style="width: 200px;height: 30px;"></td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Gender:</font></b></td>
		<td><input type="radio" name="gender"  <?php if($e=="male")echo "checked"?> value="male" style="width: 20px;height: 15px">Male<input type="radio" name="gender"  <?php if($e=="female")echo "checked"?> value="female" style="width: 20px;height: 15px">Female</td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Phone number:</font></b></td>
		<td><input type="text" name="phone" value="<?php echo $f?>"style="width: 200px;height: 30px;"></td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Email:</font></b></td>
		<td><input type="text" name="email" value="<?php echo $g?>" style="width: 200px;height: 30px;"></td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Father name:</font></b></td>
		<td><input type="text" name="fathername" value="<?php echo $h?>" style="width: 200px;height: 30px;"></td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Address:</font></b></td>
		<td><textarea name="address" style="width: 300px;height: 100px;"><?php echo $i?></textarea></td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> City:</font></b></td>
		<td><input type="text" name="city" value="<?php echo $j?>" style="width: 200px;height: 30px;"></td>
	</tr>
		<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> State:</font></b></td>
		<td><input type="text" name="state" value="<?php echo $k?>" style="width: 200px;height: 30px;"></td>
	</tr>
		<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Country:</font></b></td>
		<td><input type="text" name="country" value="<?php echo $l?>" style="width: 200px;height: 30px;"></td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Zip code:</font></b></td>
		<td><input type="text" name="zip" value="<?php echo $m?>" style="width: 200px;height: 30px;"></td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Education qualification:</font></b></td>
		<td><select name="qualification" value="<?php echo $n?>" style="width: 200px;height: 30px;">
			<option>--select--</option>
	<option value="BE" <?php if($n=="BE")echo "selected"?>>BE</option>
	<option value="ME" <?php if($n=="ME")echo "selected"?>>ME</option>
	<option value="M.Tech" <?php if($n=="M.Tech")echo "selected"?>>M.Tech</option>
	<option value="IT" <?php if($n=="IT")echo "selected"?>>IT</option>
		</select></td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Language known:</font></b></td>
		<td><input type="checkbox" name="language" value="<?php echo $o?>"style="width: 20px;height: 20px;"" <?php if($o=="tamil")echo "checked"?>>Tamil<input type="checkbox" name="language" value="<?php echo $o?>"style="width: 20px;height: 20px;" <?php if($o=="english")echo "checked"?>>English</td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Maritial status:</font></b></td>
		<td><input type="radio" name="maritialstatus" <?php if($p=="married")echo "checked"?> value="married" style="width: 20px;height: 15px">Married<input type="radio" name="maritialstatus" <?php if($p=="unmarried")echo "checked"?> value="unmarried" style="width: 20px;height: 15px">Unmarried</td>
	</tr      	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Nationality:</font></b></td>
		<td><select name="nationality" value="<?php echo $q?>" style="width: 200px;height: 30px;">
	<option>--Select--</option>
	<option value="indians"  <?php if($q=="indians")echo "selected"?>>Indians</option>
	<option value="russian"  <?php if($q=="russian")echo "selected"?>>Russian</option>
	<option value="american"  <?php if($q=="american")echo "selected"?>>Americans</option>
	<option value="hong kongers"  <?php if($q=="hong kongers")echo "selected"?>>Hong Kongers</option>
	<option value="hungarians"  <?php if($q=="hungerians")echo "selected"?>>Hungarians</option>
</select></td>
	</tr>
	<tr>
		<td><b><font face="Mongolian Baiti" size="5px;"> Blood group:</font></b></td>
		<td><input type="radio" name="blood"  <?php if($r=="A+")echo "checked"?> value="A+" style="width: 20px;height: 15px">A+<input type="radio" name="blood" <?php if($r=="B+")echo "checked"?> value="B+" style="width: 20px;height: 15px">B+<input type="radio" name="blood" <?php if($r=="O+")echo "checked"?> value="O+" style="width: 20px;height: 15px">O+<input type="radio" name="blood" <?php if($r=="A-")echo "checked"?> value="A-" style="width: 20px;height: 15px">A-<input type="radio" name="blood" <?php if($r=="AB+")echo "checked"?> value="AB+" style="width: 20px;height: 15px">AB+<input type="radio" name="blood" <?php if($r=="O-")echo "checked"?> value="O-" style="width: 20px;height: 15px">O-</td>
	</tr>

	<tr>
				<td><input type="hidden" name="id" value="<?php echo $_GET['id']?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="Update" style="width: 100px;padding:10px; background: #82E0AA "></td>
			</tr>

</table>
</div>
</form>

</body>
</html>