<?php

if (isset($_POST['action']) && isset($_POST['artwork_name']) && isset($_POST['artist_name']) )
{
	$artwork_name = $_POST['artwork_name'];
	$artist_name = $_POST['artist_name'];

	$folder = "../images/";

	move_uploaded_file($_FILES["filep"]["tmp_name"] , "$folder".$_FILES["filep"]["name"]);

	echo "<p align=center>File ".$_FILES["filep"]["name"]." successfully uploaded";
	
	include("../includes/dbc.php");

	$query = "INSERT INTO `artwork`(`art_id`, `artwork_name`, `image_name`, `total_hours`, `highest_bid_hours`, `winner_user_id`) VALUES ('', '".$artwork_name."', '".$_FILES['filep']['name']."', '', '', '188')";

	$result = mysqli_query($conn, $query);
	

	if($result) { echo "<br /> Image name saved into database"; }
	else {

	//Gives and error if its not
	echo "<br /> Sorry, there was a problem uploading your file.";
	}
}
