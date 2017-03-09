<?php

if (isset($_POST['user']) && isset($_POST['pass'])) {
	
	include("includes/dbc.php");

	$myusername = $_POST['user'];
	$mypassword = $_POST['pass'];

	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);

	//getting hashed pswd from Database 
	$sql = "SELECT * FROM user WHERE email='$myusername'";

	$result = mysqli_query($conn, $sql);
	$row = $result -> fetch_assoc();
	$hash_pswd = $row['password'];

	//hashing the pswd entered by user and comparing it with hashed pswd from DB
	$hash =password_verify($mypassword, $hash_pswd);

	if ($hash == 0){
		header("location: index.php");
		exit;

	} else {
		$sql = "SELECT * FROM user WHERE email='$myusername' and BINARY password='$hash_pswd'";
		$result = mysqli_query($conn, $sql);
		
		//fetching email & user id from resut row
		$row = $result -> fetch_assoc();
		$email_id = $row['email'];
		$user_id = $row['user_id'];

		if(mysqli_num_rows($result) == 1) {
			header("location: 4paul/4.php");
			/* Set cookie to last 1 year */
            setcookie('user_id', $user_id, time()+60*60*24*365);
            
		} else {
		 	header("location: index.php");
		}

		mysqli_close($conn);
	}

} else {
	echo 'You must supply a username and password.';
}

