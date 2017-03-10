<?php 

session_start();
//making database connection 
include("../includes/dbc.php");

// getting user entered values from sign-up form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
//storing session email id for use in tnc.php
$_SESSION['email'] = $email;

$password = $_POST['password'];
$re_password = $_POST['re_password'];

$age = $_POST['age'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$province = $_POST['province'];
$phone = $_POST['phone'];
$team_code = $_POST['team-code'];
$volunteer_hours = $_POST['volunteer-hours'];

//error handling for empty required fields
if(empty($first_name)) {
	header("location: sign_up.php");
	exit;
}

if(empty($last_name)) {
	header("location: sign_up.php");
	exit;
}

if(empty($email)) {
	header("location: sign_up.php");
	exit;
}

if(empty($password) || strlen($password) < 6) {
	header("location: sign_up.php");
	exit;
}

if(!($re_password == $password)) {
	header("location: sign_up.php");
	exit;
}

//check if email id exists in DB(user table)
$query= "SELECT * FROM user WHERE email= '".$email."'";
$result = mysqli_query($conn, $query);
$row = $result -> fetch_assoc();

if($row){
	echo "emailexists";
	exit;
	
} else {

	// hash password before storing it in database
	$hash_pswd = password_hash($password, PASSWORD_DEFAULT);
	
	//adding user to database
	$q = "INSERT INTO user (first_name, last_name, email, password, age, gender, city, province, phone, team_code) VALUES ('$first_name', '$last_name', '$email', '$hash_pswd', '$age', '$gender', '$city', '$province', '$phone', '$team_code')";
	$r = mysqli_query($conn, $q);

	if ($r){
		echo "userupdated";
		exit;

	} else{
		echo "dberror";
		exit;
	}
} 



