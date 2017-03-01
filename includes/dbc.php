<?php


$servername = "localhost";
$dbname = "framework";
$username = "root";
$password = "";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
 die("Error: " . mysqli_connect_error());
}