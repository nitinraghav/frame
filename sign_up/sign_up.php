<?php 
	$CSS = "sign_up.css";
	$pageTitle = "Sign-up | Framework";
	$pageHeader = "Sign-up";
	include("../includes/header.php");

?>
		<div id="form_container">
			<form action="sign_up_backend.php" method="POST" id="form">
	       		<input class="form-control" type="text" placeholder ="First Name" name="first_name" required> 
	        	<input class="form-control" type="text" value="" placeholder="Last Name" name="last_name" required> 

	           	<input class="form-control" type="email" value="" placeholder="email" name="email" required> 
	           	<div id="email_exists" ></div>

	           	<input class="form-control" type="password" value="" placeholder="password" name="password" id ="password" required> <span id="response1"></span>
		        <input class="form-control" type="password" value="" placeholder="Re-enter password" name="re_password" id="re_password" required> <span id="response2"></span>

				<h4>Optional:</h4> 
					
	  			<input class="form-control" type="text" value="" placeholder="Age" name="age"> 
	           	
	           	<select class="form-control" name="gender">
					<option hidden >Gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Decline to disclose</option>
				</select> 
				
				<input class="form-control" type="text" value="" placeholder="City" name="city"> 
				
				<select class="form-control" name="province">
					<option hidden >Province</option>
					<option>AB</option>
					<option>BC</option>
					<option>MB</option>
					<option>NB</option>
					<option>NL</option>
					<option>NS</option>
					<option>NT</option>
					<option>NU</option>
					<option>ON</option>
					<option>PE</option>
					<option>QC</option>
					<option>SK</option>
					<option>YT</option>
				</select> 

				<input class="form-control" type="text" value="" placeholder="Phone #" name="phone"> 
				<input class="form-control" type="text" value="" placeholder="Team Code" name= "team-code"> 
				<input class="form-control" type="text" value="" placeholder="12 Month Goal- Volunteer hours" name="volunteer-hours">
	       		
				<button type="submit" class="btn btn-primary" id ="sign_up_btn">Sign-up</button><br />
			</form>
			
		</div>
		
	</div> <!-- end content -->

	<!-- Latest compiled and minified JavaScript -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
	
	<script >
		
		$(document).ready(function () {

		//client-side password restrictions atleast 6 characters long
			$("#password").on("keyup", function (){

				if($("#password").val().length < 6){
					$("#response1").html("Password should be atleast 6 characters long");
					
				} else if($("#password").val().length >= 6){
					$("#response1").html("");
				}
			});//end password length

		// client-side check if both passwords match
		    $("#re_password").on("keyup", function () {	
		        var matched,
		            password = $("#password").val(),
		            confirm = $("#re_password").val();
		        matched = (password === confirm) ? true : false;

		        if(matched) { 
		            //Shows success message and prevents submission.  In production, comment out the next 2 lines.
		            $("#response2").html("Passwords Match !");   
			    }
			    else { 
			        $("#response2").html("Passwords don't match..");    
			    }
			})//end password match

		//ajax call to add details in DB
			$('#form').submit( function (e) {
	          	e.preventDefault();

	        	var url = $(this).attr("action");
				var formData = $(this).serialize();
				//console.log(formData);

	          	
	            $.ajax(url ,{
		            type: "POST",
		            data: formData,
		            dataType: "text", 

		            success: function(result) {
		            	switch(result){
		            		case "emailexists":
			            		$("#email_exists").html("Email id already exists<br/> Please try <a href='../password_forgot.php'>Forgot Password</a>");
			            		break;

			            	case "userupdated":
			            		window.location.replace("terms.php");
			            		break;

			            	case "dberror":
			            		$("#form_container").html("Database connection error try again later");
			            		break;

			            	default:
			            		window.location.replace("sign_up.php");
			            		break;
		            	}
	          		}
	          	})
	        });






		});//end ready
	</script>
</body>
</html>
