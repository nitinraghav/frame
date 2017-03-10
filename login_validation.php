<?php

include("includes/dbc.php");

$myusername = $_POST['user'];
$mypassword = $_POST['pass'];

if(isset($_POST['user']) && isset($_POST['pass'])) {
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);

	//getting hashed pswd from Database 
	$sql = "SELECT * FROM user WHERE email='".$myusername."'";

	$result = mysqli_query($conn, $sql);
	$row = $result -> fetch_assoc();
	$hash_pswd = $row['password'];
	$email_id = $row['email'];
	$user_id = $row['user_id'];

	//hashing the pswd entered by user and comparing it with hashed pswd from DB
	$hash =password_verify($mypassword, $hash_pswd);

	if ($hash){

		// Set cookie to last 1 year 
        setcookie('user_id', $user_id, time()+60*60*24*365);
		$return = true;
		
	} else {
		$return = false;
		
	} die(json_encode(array('return' => $return)));

} else {
	echo 'Please enter username and password';
}

