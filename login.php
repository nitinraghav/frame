
<?php 
	$CSS = "style.css";
	$pageTitle = "Sign-in | Framework";
	$pageHeader = "Sign-in";
	include("includes/header.php");
?>

		<div class="row">
			
			<div class="col-md-12">
				<a href="fb_login.php"><img class="img-responsive fb-login-img" src="http://i.imgur.com/XHJ1R6s.png"></a>
			</div>

			<div class="col-md-12 txt">Or use your email:</div>

			<div id="response"></div>

			<form action="login_validation.php" method="POST" id="form">
				<input class="form-control" type="email" name ="user" placeholder="email" id="email" required> <br />
       			<input class="form-control" type="password" name="pass" placeholder="password" id="password" required> <div class="eror"></div><br />
      			<button type="submit" class="btn btn-primary buttons" name="login" value="" id ="" >Login </button><br />
			</form>
			
			<a href="password_forgot.php"><button type="submit" class="btn btn-primary buttons" id ="" >Forgot Password</button></a><br />

			<a href="sign_up/sign_up.php"><button type="submit" class="btn btn-primary buttons" id ="" >Sign-up</button></a> <br />

		</div>			
	</div> <!-- end content -->

	<!-- Latest compiled and minified JavaScript -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

	<!-- jquery google cdn -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript">
     	$(document).ready(function(){

	        $('#form').submit( function (e) {
	          	e.preventDefault();

	        	var url = $(this).attr("action");
				var formData = $(this).serialize();
				//console.log(formData);

	          	$.ajax(url ,{
	            type: "POST",
	            data: formData,
	            dataType: "JSON",

	            success: function (result) {
	              if (result.return){
	              	window.location.replace("index.php");

	              } else {
	              	$("#response").html("Incorrect Email or Password");
	              } 

	            }//end success
	          });//end ajax
	        });//end submit
      	});// end ready
    </script>

</body>
</html>