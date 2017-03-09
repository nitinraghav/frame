<?php

session_start();

//retreiving session email id from sign-up page
$email_id= $_SESSION['email'];

//making database connection
include("../includes/dbc.php");

//updating database with terms and conditions accepted by user 
$qry = "UPDATE user SET tnc_accepted = 'yes', date_time = NOW() WHERE email = '".$email_id."'";
$result = mysqli_query($conn, $qry);

if ($result){
	header("location: ../4paul/4.php");
} else {
	header("location: ../3/3.php");
}

session_destroy();







			