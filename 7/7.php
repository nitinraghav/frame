<?php 

	$CSS = "7.css";
	$pageTitle = "Bid | Framework";
	$pageHeader = "Bid";

	include("../includes/header.php");

	//check if user is logged in
	if(!isset($_COOKIE['user_id'])){
		header("location: ../index.php");
	} else {
		//caching the user id from set cookie
		$user_id= $_COOKIE['user_id'];
		
		//connect to DB
		include("../includes/dbc.php");	
	}

?>

    	<div class="row ">

    		<form action="get_artwork.php" method="POST" id ="search">
    			<input class="form-control" name="artwork_id" type="text" placeholder= "Enter Artwork Code" id="artwork_search" required="required" />
    			<button type="submit" class="btn btn-block btn-primary" name="submit" value="" id="check_bid">Check Bid </button>
    		</form>
    		<div id="response1"></div>

    		

			<form action="update_bid.php" method="POST" id="bid" style="display: none">
				<p id="next_bid"> Next Bid </p> <br />
				<input class="form-control" type="text" name ="next_bid" id="new_bid" required> <br />
				<button type="submit" class="btn btn-block btn-primary" id ="bid_now" name="bid_now" >Bid Now </button>
			</form>
			<div id="response2"></div>
	


    	</div>
    </div> <!-- container ends -->


<!-- Latest compiled and minified JavaScript -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

	<!-- jquery google cdn -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			//---------------display artwork--------------------
			$("#search").submit(function(e){
				e.preventDefault();
				var url = $(this).attr("action");
				var formData = $(this).serialize();

				$.ajax(url, {
					data : formData,
					type: "POST",
					success: function(data){
						$("#response1").html(data);
						$("#current_bid").val()
						$("#artwork_search").val("");
						$("#bid").show();

					} // end success

				}) // end ajax
			}); //end submit

			//------------------------display bid hours---------------------------
			
			$("#bid").submit(function(evt){
				evt.preventDefault();
				var url2 = $(this).attr("action");
				var formData2 = $(this).serialize();
				$.ajax(url2, {
					data : formData2,
					type: "POST",
					success: function(data2){
						$("#response2").html(data2);
						$("#new_bid").val("");

					} // end success

				}) // end ajax
			}); //end submit   

		}); // end ready



	</script>

</body>
</html>