<?php

session_start();

include("../../includes/dbc.php");

$email = $_POST['email'];
$password = $_POST['password'];

$email = stripslashes($email);
$password = stripslashes($password);


$query = "SELECT admin_email, admin_password FROM admin WHERE admin_email='$email' and BINARY admin_password='$password'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1) {
	$seconds = 120 + time();
	setcookie(loggedin, date("F jS - g:i a"), $seconds);
  	header("location:admin_2.html");
} else {
 	echo '<div class= "error"> Incorrect username or Password <a href="admin_1.html"> Retry </a> </div>';
}

mysqli_close($conn);
