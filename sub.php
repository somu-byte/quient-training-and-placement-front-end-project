<?php


$email= $_POST['email'];



$con = new mysqli("localhost", "root", "", "bionic_engineers") or die("Failed to connect to MySQL: " . mysql_error());


$login="insert into Subscriber Values('$email');";
$check=mysqli_query($con,$login);
header("Location:index.html");


?>