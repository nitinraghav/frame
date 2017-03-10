<?php 

$CSS = "sign_up.css";
$pageTitle = "Terms &amp; Conditions | Framework";
$pageHeader = "Terms &amp; Conditions";

include("../includes/header.php");

session_start();
//retreiving session email id from sign_up_backend page
$email_id= $_SESSION['email'];

?>

<div class="row">

		<textarea class="form-control" id ="text_area" rows="15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in lacus tincidunt, mattis massa a, tempor tellus. Proin viverra condimentum velit, a ultricies massa mattis in. Sed ipsum risus, gravida in dapibus in, ornare in neque. Etiam gravida nisi leo, sit amet laoreet velit lobortis quis. Nam nec consectetur ligula, in blandit magna. Donec commodo euismod suscipit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut ultricies purus nec enim bibendum sagittis. Etiam varius ex tortor, vel iaculis nulla volutpat in. Phasellus enim magna, cursus at rhoncus sed, mattis vel eros. Ut lobortis quam sed rutrum commodo. Mauris eget tortor in leo efficitur scelerisque id eu eros.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in lacus tincidunt, mattis massa a, tempor tellus. Proin viverra condimentum velit, a ultricies massa mattis in. Sed ipsum risus, gravida in dapibus in, ornare in neque. Etiam gravida nisi leo, sit amet laoreet velit lobortis quis. Nam nec consectetur ligula, in blandit magna. Donec commodo euismod suscipit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut ultricies purus nec enim bibendum sagittis. Etiam varius ex tortor, vel iaculis nulla volutpat in. Phasellus enim magna, cursus at rhoncus sed, mattis vel eros. Ut lobortis quam sed rutrum commodo. Mauris eget tortor in leo efficitur scelerisque id eu eros</textarea>
		<br />
		
		
		<form action="terms.php" method="POST">
			<input type="checkbox" name="checkbox" id="checkbox" required> I agree to the terms of service <br />
			<button type="submit" class="btn btn-primary" id ="sign_up">Sign-up</button>
		</form>
<!-- *******************************************ADD CAPTCHA*******************************************   -->
		<?php 


		if(isset($_POST['checkbox'])){
			include("../includes/dbc.php");

			//updating database with terms and conditions accepted by user 
			$qry = "UPDATE user SET tnc_accepted = 'yes', date_time = NOW() WHERE email = '".$email_id."'";
			$result = mysqli_query($conn, $qry);

			if ($result){
				header("location: ../volunteer_home/volunteer_home.php");
			} else {
				header("location: ../3/3.php");
			}

			session_destroy();

		}
		
		 ?>

	</div>
</div> <!-- end content -->

<!-- Latest compiled and minified JavaScript -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
</html>