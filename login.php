<?php

$servername = "localhost";
$dbname = "framework";
$username = "root";
$password = "";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
 die("Error: " . mysqli_connect_error());
}

$myusername = $_POST['user'];
$mypassword = $_POST['pass'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);


$sql = "SELECT email, password FROM user WHERE BINARY email='$myusername' and BINARY password='$mypassword'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) {
	$seconds = 120 + time();
	setcookie(loggedin, date("F jS - g:i a"), $seconds);
  	header("location: 4paul/4.html");
} else {
 	echo '<div class= "error"> Incorrect username or Password <a href="index.php"> Retry </a> </div>';
}

mysqli_close($conn);

?>﻿