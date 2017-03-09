<?php 

	$CSS = "4.css";
	$pageTitle = "Home | Framework";
	$pageHeader = "Home";

	include("../includes/header.php");

	//check if user is logged in
	if(!isset($_COOKIE['user_id'])){
		header("location: ../index.php");
		
	} else {
		//caching the user id from set cookie
		$user_id= $_COOKIE['user_id'];
		
		//connect to DB
		include("../includes/dbc.php");

		//query DB for total hours for a user
		$query= "SELECT *, SUM(highest_bid_hours) AS highest_bid_hours FROM artwork WHERE winner_user_id = '".$user_id."'";
		$result = mysqli_query($conn, $query);
		$row = $result -> fetch_assoc();
		$hours = $row['highest_bid_hours'];


		//query DB for hours completed by a user
		$query2= "SELECT *, SUM(total_time) AS total_time FROM user_hour_log WHERE user_id = '".$user_id."'";
		$result2 = mysqli_query($conn, $query2);
		$row2 = $result2 -> fetch_assoc();
		$hours_completed = $row2['total_time'];
	}
?>


		<img class="image-responsive " style="width: 60vw; height: 40vh" src="https://img.clipartfest.com/5fc2b3ef5f76670d38c119212787572a_square-clip-art-small-square-outline-clipart_1024-1024.gif" alt="Pie chart"><br>
		
		<div class="row">
		
			<div class="col-md-12" >
				<p class="text-box" >
					<span id="hours_completed" >

					<?php
						if(!mysqli_num_rows($result)){
							echo "Bid for an Artwork Now !";
						} else {
							/*
							$hours="";
							while (mysqli_num_rows($result) > 0) {
								//query DB for total hours for a user
								$query= "SELECT * FROM artwork WHERE winner_user_id = '".$user_id."'";
								$result = mysqli_query($conn, $query);
								$row = $result -> fetch_assoc();
								$hours = $row['highest_bid_hours'];

								$hours .= $hours;

							}
							*/
							echo "<br />". $hours_completed." of ". $hours. " volunteer hours logged";
						}
					?>

					</span>

				</p><br>
			</div>

			<div class="col-md-12" >
				<p class="text-box"> 
					<span id ="percent">

					<?php 
						$x = $hours_completed;
						$y = $hours;

						$percent= number_format($x/$y * 100 , 0);
						echo $percent. " % of Goal achieved";

					 ?> 

					</span> 
				</p> <br>
			</div>

			<div class="col-md-12" >
				<a href="../5/5.php"> <button class="btn btn-primary all-buttons" id ="artwork">My Artwork</button></a> 
			</div>
			<div class="col-md-12" >
				<a href="../7/7.php"><button class="btn btn-primary all-buttons" id ="bid">Bid On Art</button></a> 
			</div>
			<div class="col-md-12" >
				<button class="btn btn-primary all-buttons" id ="log_hours">Log Hours</button>
			</div>
			<div class="col-md-12" >
				<button class="btn btn-primary all-buttons" id ="settings">Settings</button>
			</div>
		</div>
	</div>

	<!-- Latest compiled and minified JavaScript -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
</html>