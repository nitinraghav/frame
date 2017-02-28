<?php 

$pageTitle ="Terms &amp; Conditions | We Are Framework";
include("../includes/header.php"); ?>

		<div class="row">
		
			<textarea class="form-control" id ="text_area" rows="15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in lacus tincidunt, mattis massa a, tempor tellus. Proin viverra condimentum velit, a ultricies massa mattis in. Sed ipsum risus, gravida in dapibus in, ornare in neque. Etiam gravida nisi leo, sit amet laoreet velit lobortis quis. Nam nec consectetur ligula, in blandit magna. Donec commodo euismod suscipit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut ultricies purus nec enim bibendum sagittis. Etiam varius ex tortor, vel iaculis nulla volutpat in. Phasellus enim magna, cursus at rhoncus sed, mattis vel eros. Ut lobortis quam sed rutrum commodo. Mauris eget tortor in leo efficitur scelerisque id eu eros.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in lacus tincidunt, mattis massa a, tempor tellus. Proin viverra condimentum velit, a ultricies massa mattis in. Sed ipsum risus, gravida in dapibus in, ornare in neque. Etiam gravida nisi leo, sit amet laoreet velit lobortis quis. Nam nec consectetur ligula, in blandit magna. Donec commodo euismod suscipit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut ultricies purus nec enim bibendum sagittis. Etiam varius ex tortor, vel iaculis nulla volutpat in. Phasellus enim magna, cursus at rhoncus sed, mattis vel eros. Ut lobortis quam sed rutrum commodo. Mauris eget tortor in leo efficitur scelerisque id eu eros</textarea>
			<br />
			
			

			<!-- add user to Database-->
			<?php

				$servername = "localhost";
				$dbname = "framework";
				$username = "root";
				$password = "";
				
				$conn = mysqli_connect($servername,$username,$password,$dbname);

				if (!$conn) {
				 die("Error: " . mysqli_connect_error());
				}

				$first_name = $_POST['first_name'];
				$last_name = $_POST['last_name'];
				$email = $_POST['email'];
				$password = $_POST['password'];

				$age = $_POST['age'];
				$gender = $_POST['gender'];
				$city = $_POST['city'];
				$province = $_POST['province'];
				$phone = $_POST['phone'];
				$team_code = $_POST['team-code'];
				$volunteer_hours = $_POST['volunteer-hours'];
				

				$query = "INSERT INTO user (first_name, last_name, email, password, age, gender, city, province, phone, team_code) VALUES ('$first_name', '$last_name', '$email', '$password', '$age', '$gender', '$city', '$province', '$phone', '$team_code')";
				$result = mysqli_query($conn, $query);

				if (!$result){
					header("location: ../2/2.php");
				} 
			?>

			
				<input type="checkbox" name="checkbox" id="check" required> &nbsp;I agree to the terms of service
				<br />
				<a href="../4paul/4.html"><button type="submit" class="btn btn-primary" id ="sign_up">Sign-up</button></a>
			

		</div>
	</div> <!-- end content -->
	<!-- Latest compiled and minified JavaScript -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
</html>