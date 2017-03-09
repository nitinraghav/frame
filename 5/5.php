<?php 

	$CSS = "5.css";
	$pageTitle = "Artwork | Framework";
	$pageHeader = "Artwork";

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
		$query= "SELECT * FROM artwork WHERE winner_user_id = '".$user_id."'";
		$result = mysqli_query($conn, $query);
		$row = $result -> fetch_assoc();
		$art_name = $row['artwork_name'];
		$art_id = $row['art_id'];
		$highest_bid_hours = $row['highest_bid_hours'];


		$query2= "SELECT *, SUM(total_time) AS total_time FROM user_hour_log WHERE user_id = '".$user_id."' && art_id = '".$art_id."'";
		$result2 = mysqli_query($conn, $query2);

		$row2 = $result2 -> fetch_assoc();

		$hours_completed_artwork = $row2['total_time'];
		
	}


?>

	<!-- main content -->
	
		<div class="row headings">
			<div class=" col-md-12" id="">
	    		<h5> On Going</h5>
	    	</div>
	   	</div>

	 
	   	<div class="row box1" >
	       	<div class="col-xs-4 col-sm-4 col-md-4" id="">
	    		<img class="img-responsive" src="http://i.imgur.com/jYea7Id.jpg?1">
	       	</div>

	       	<div class="col-xs-8 col-sm-8 col-md-8" id="">
	    		<h6 > <?php echo $art_name; ?> <span id="percent"> <?php echo number_format($hours_completed_artwork/ $highest_bid_hours *100,0) ."%"; ?></span> </h6>  
	       	</div>
		</div>

		<div class="row box2" id="">
	       	<div class="col-xs-4 col-sm-4 col-md-4" id="">
	    		<img class="img-responsive" src="http://i.imgur.com/jYea7Id.jpg?1">
	       	</div>

	       	<div class="col-xs-8 col-sm-8 col-md-8" >
	    		<h6 >Sam Jam <span id="percent">80%</span></h6>
	       	</div>
		</div>

	

		<div class="row headings" >
			<div class="col-xs-12 col-sm-12 col-md-12" >
	    		<h5> Completed </h5>
	    	</div>
	   	</div>

	 
	   	<div class="row box1" id ="">
	       	<div class="col-xs-4 col-sm-4 col-md-4" id="">
	    		<img class="img-responsive" src="http://i.imgur.com/jYea7Id.jpg?1">
	       	</div>

	       	<div class="col-xs-8 col-sm-8 col-md-8" id="john">
	    		<h6>Mel Bell <span id="percent">100%</span></h6>
	       	</div>
		</div>

		<div class="row box2 " id="blue_box">
	       	<div class="col-xs-4" id="">
	    		<img class="img-responsive" src="http://i.imgur.com/jYea7Id.jpg?1">
	       	</div>

	       	<div class="col-xs-8" id="dustin">
	    		<h6 class="blue_box_text">Dustin Dufman <span id="percent">100%</span></h6>
	       	</div>
		</div>

	</div> <!-- end container -->

	
	<!-- content ends  -->


	<!-- Latest compiled and minified JavaScript -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
</html>