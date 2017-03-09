<?php 
	
	session_start();
	//caching variables from get_artwork.php
	$artwork_id = $_SESSION['artwork_id'];
	$bid_amount_hours = $_SESSION['bid_amount_hours'];

	//check if user is logged in
	if(!isset($_COOKIE['user_id'])){
		header("location: ../index.php");
	} else {
		//caching the user id from set cookie
		$user_id= $_COOKIE['user_id'];

		//connect to DB
		include("../includes/dbc.php");

		//------------------------display bid hours---------------------------
		if(isset($_POST['next_bid'])) {

			//caching next_bid from user input in get_artwork.php
			$next_bid = $_POST['next_bid'];

			//check if new bid is greater than existing bid and less/equal to 100
			if( $next_bid > $bid_amount_hours && $next_bid <= 100 )  {
			
			//query to bids table
			$query = "UPDATE bids SET bid_amount_hours='".$next_bid."' WHERE user_id = '".$user_id."' AND art_id='".$artwork_id."'";

			$result = mysqli_query($conn, $query);

				if ($result) {
					echo "<h3> Bid updated Successfully !</h3>";
				} else {
					echo "<h3>Error updating your Bid <br />Please try again</h3>";
				}
			} else {
				echo "<h3>Please enter a valid bid amount</h3>";
			}

		}
	}

