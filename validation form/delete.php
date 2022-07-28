<?php
require("database_config.php");
$id=$_GET['id'];
$result=mysqli_query($con,"DELETE FROM info WHERE id='$id'");

header("Location:alldata.php");

?>