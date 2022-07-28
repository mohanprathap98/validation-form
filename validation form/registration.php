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
		background: linear-gradient(to right,#ABEBC6 ,#F9E79F );

	}
	.box
	{
		margin-left: 20px;
		padding: 10px;
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
	button:hover
	{
		border-style: dotted;
		border-radius: 5px;
		background: #D2B4DE;

	}



	



</style>
</head>
<body id="body">
	<h1><font face="Mongolian Baiti"><b><u>Registration Form</u></b></font></h1>
	<form action="registration_config.php" method="POST">
		<div class="box">
<b><font face="Mongolian Baiti" size="5px;">First name</font></b><font color="red" size="5px">*</font><br>
<input type="text" name="firstname" placeholder="First name" style="width: 800px;height: 40px;"></style><br>
<font face="Mongolian Baiti" size="5px"><b>Last name</b></font><font color="red" size="5px;">*</font><br>
<input type="text" name="lastname"style="width: 800px;height: 40px;" placeholder="Last name"><br>
<font face="Mongolian Baiti" size="5px"><b>DOB</b></font><font color="red" size="5px">*</font><br>
<input type="date" name="dob" id="date" onchange="calculate()"style="width: 800px;height: 40px;"><br>
<script type="text/javascript">
	function calculate()
	{

	var dob=document.getElementById('date').value;

	var d = new Date();

var n = d.getFullYear()-new Date(dob).getFullYear();

 document.getElementById('age').value=n;
}
</script>
<font face="Mongolian Baiti" size="5px"><b>Age</b></font><br>
<input type="text" name="age" id="age" style="width: 800px;height: 40px;" placeholder="Age"><br>
<font face="Mongolian Baiti" size="5px"><b>Gender</b></font><br>
<input type="radio" name="gender" value="male" style="width: 20px;height: 15px"><font size="4px">Male</font><input type="radio" name="gender" value="female" style="width: 20px;height: 15px"><font size="4px">Female</font><br>
<font face="Mongolian Baiti" size="5px"><b>Phone number</b></font><font color="red" size="5px">*</font><br>
<input type="number" name="phone" style="width: 800px;height: 40px;" placeholder="Phone number"><br>
<font face="Mongolian Baiti" size="5px"><b>Email</b></font><font color="red" size="5px">*</font><br>
<input type="text" name="mail" style="width: 800px;height: 40px;" placeholder="Mail Id"><br>
<font face="Mongolian Baiti" size="5px"><b>Father name</b></font><br>
<input type="text" name="fathername" style="width: 800px;height: 40px;" placeholder="Father name"><br>
<font face="Mongolian Baiti" size="5px"><b>Address</b></font><font color="red" size="5px">*</font><br>
<textarea name="address"style="width: 800px;height: 100px;" placeholder="write your current address"></textarea><br>
<font face="Mongolian Baiti" size="5px"><b>City</b></font><br>
<input type="text" name="city" style="width: 800px;height: 40px;" placeholder="Write your city"><br>
<font face="Mongolian Baiti" size="5px"><b>State</b></font><br>
<input type="text" name="state" style="width: 800px;height: 40px;" placeholder="write your state"><br>
<font face="Mongolian Baiti" size="5px"><b>Country</b></font><br>
<input type="text" name="country" style="width: 800px;height: 40px;" placeholder="write your country"><br>
<font face="Mongolian Baiti" size="5px"><b>Zip code</b></font><font color="red" size="5px">*</font><br>
<input type="text" name="zip" style="width: 800px;height: 40px;" placeholder="write your zip code"><br>
<font face="Mongolian Baiti" size="5px"><b>Educational qualification</b></font><br>
<select name="qualification" style="width: 800px;height: 40px;">
	<option>--select--</option>
	<option value="BE">BE</option>
	<option value="ME">ME</option>
	<option value="M.Tech">M.Tech</option>
	<option value="IT">IT</option>
</select><br>
<font face="Mongolian Baiti" size="5px"><b>Languages known</b></font><br>
<input type="checkbox" name="language" value="tamil" style="width: 20px;height: 20px;"><font size="4px">Tamil<br>
<input type="checkbox" name="language" value="english" style="width: 20px;height: 20px;" placeholder="Last name">English</font><br>
<font face="Mongolian Baiti" size="5px"><b>Maritial status</b></font><br>
<input type="radio" name="maritialstatus" value="married" style="width: 20px;height: 15px";><font size="4px">Married<br>
<input type="radio" name="maritialstatus" value="unmarried" style="width: 20px;height: 15px">Unmarried</font><br>
<font face="Mongolian Baiti" size="5px"><b>Nationality</b></font><br>
<select name="nationality" style="width: 800px;height: 40px;">
	<option>--Select--</option>
	<option value="indians">Indians</option>
	<option value="russian">Russian</option>
	<option value="american">Americans</option>
	<option value="hong kongers">Hong Kongers</option>
	<option value="hungarians">Hungarians</option>
</select><br>

<font face="Mongolian Baiti" size="5px"><b>Blood group</b></font><br>
<input type="radio" name="bloodgroup" value="A+" style="width: 20px;height: 15px"><font size="4px">A+	
<input type="radio" name="bloodgroup" value="B+" style="width: 20px;height: 15px">B+
<input type="radio" name="bloodgroup" value="O+" style="width: 20px;height: 15px">O+
<input type="radio" name="bloodgroup" value="A-" style="width: 20px;height: 15px">A-
<input type="radio" name="bloodgroup" value="AB+" style="width: 20px;height: 15px">AB+
<input type="radio" name="bloodgroup" value="O-" style="width: 20px;height: 15px">O-</font><br>
<button value="submit"style="width: 130px;height:30px ;border-style:none;border-radius: 5px;">submit</button>
</form>
</div>
</body>
</html>