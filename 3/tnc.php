<?php

session_start();
$email_id= $_SESSION['email'];

include("../includes/dbc.php");

$qry = "UPDATE user SET tnc_accepted = 'yes', date_time = NOW() WHERE email = '".$email_id."'";
$result = mysqli_query($conn, $qry);
header("location: ../4paul/4.html");





			