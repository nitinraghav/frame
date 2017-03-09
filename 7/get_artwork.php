<?php 

	/*error display

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	*/

	//check if user is logged in
	if(!isset($_COOKIE['user_id'])){
		header("location: ../index.php");
	} else {
		//caching the user id from set cookie
		$user_id= $_COOKIE['user_id'];
		
		//connect to DB
		include("../includes/dbc.php");


		//--------------display artwork-------------------------
		$artwork_id='';

		//check if artwork id entered
		if(isset($_POST['artwork_id'])){

			//caching artwork id 
			$artwork_id= $_POST['artwork_id'];

			//artwork id stored in session global to use in update_bid.php
			session_start();
			$_SESSION['artwork_id'] = $artwork_id;
			
			//query to BD (artwork table)
	 		$query= "SELECT * FROM artwork WHERE art_id = '".$artwork_id."'";
			$result = mysqli_query($conn, $query);
			$row = $result -> fetch_assoc();

			//if array received from DB
			if ($row) {

				//getting info from table row for particular art id 
				$winner_user_id = $row['winner_user_id'];
				$artwork_name = $row['artwork_name'];
				$image_name = $row['image_name'];

				//if there is a winner for that artwork display winner details
				if ($winner_user_id){
					echo "<h3> Winner: ".$winner_user_id."</h3>";
				} else {
					echo "<h3>Bid Now !</h3>";
				}

				echo "<h2 id = 'artwork_name'>".$artwork_name."</h2>";

				//setting source of image from image folder
				$file_path = 'http://localhost/frameworkApp/images/';
				$src = $file_path.$image_name;

				//display image
				echo '<img src="'.$src.'" id= "pic" class= "img-responsive">';

				//query to DB(bids table)
				$query2 = "SELECT * FROM bids WHERE art_id = '".$artwork_id."'";
				$result2 = mysqli_query($conn, $query2);
				$row2 = $result2 -> fetch_assoc();
				$bid_amount_hours = $row2['bid_amount_hours'];

				//saving bid_amount_hours to be used in update_bid.php
				$_SESSION['bid_amount_hours'] = $bid_amount_hours;

				//display Current bid
				echo '<label style: "float: left">Current Bid</label>';
				echo '<input class="form-control" type="text" name="current_bid" value="'.$bid_amount_hours.'" id ="current_bid" readonly/>';

			} else {
			echo "<h3>Artwork id does not exist</h3><br /> <br />";
			}

		} else {
			echo "<h3>Please enter Artwork id</h3> <br /> <br />";
		}


	}

