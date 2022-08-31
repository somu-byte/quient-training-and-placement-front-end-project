<?php
$name=$_POST['name'];

$email= $_POST['email'];
$sub= $_POST['subject'];
$me=$_POST['message'];


$con = new mysqli("localhost", "root", "", "bionic_engineers") or die("Failed to connect to MySQL: " . mysql_error());


	$login="insert into Students Values('$name','$email','$sub','$me');";
$check=mysqli_query($con,$login);
header("Location:index.html");


?>