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
	 background: linear-gradient(to right ,#CCCCFF,#9FE2BF);
	}
</style>	
</head>
<body id="body">
	<h1><font face="Mongolian Baiti">Chech Your Data Any Mistake Click Edit<font color="red">*</font></font></h1>
<table class="table table-bordered table-striped">
	<tr>
		
		<th><center>First name</center></th>
		<th><center>Last name</center></th>
		<th><center>DOB</center></th>
		<th><center>Age</center></th>
		<th><center>Gender</center></th>
		<th><center>Phone number</center></th>
		<th><center>Email</center></th>
		<th><center>Fathers name</center></th>
		<th><center>Address</center></th>
		<th><center>City</center></th>
		<th><center>State</center></th>
		<th><center>Country</center></th>
		<th><center>Zip code</center></th>
		<th><center>Educational qualification</center></th>
		<th><center>Languages known</center></th>
		<th><center>Maritial status</center></th>
		<th><center>Nationality</center></th>
		<th><center>Blood group</center></th>
		<th><center>Edit</center></th>
		<th><center>Delete</center></th>

	</tr>
	<?php
	require("database_config.php");
	$sql="SELECT * FROM info";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result))
	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td><center>".$row['firstname']."</center></td><td><center>".$row['lastname']."</center></td><td><center>".$row['dob']."</td><td>".$row['age']."</center></td><td><center>".$row['gender']."</center></td><td><center>".$row['phone']."</center></td><td><center>".$row['email']."</center></td><td><center>".$row['fathername']."</center></td><td><center>".$row['address']."</center></td><td><center>".$row['city']."</center></td><td><center>".$row['state']."</center></td><td><center>".$row['country']."</center></td><td><center>".$row['zip']."</center></td><td><center>".$row['qualification']."</center></td><td><center>".$row['language']."</center></td><td><center>".$row['maritialstatus']."</center></td><td><center>".$row['nationality']."</center></td><td><center>".$row['blood']."</center></td>";

			echo "<td>
		
			<a href=\"edit.php?id=$row[id]\">Edit</a>
			
			</td>";
			echo "<td>
			<a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure want to delete')\">Delete</a>
			</td>";

			echo "<tr>";

		}
	}
	else
	{
		echo "doesnt support";
	}
	?>
</table>
</body>
</html>