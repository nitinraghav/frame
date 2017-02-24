<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>Terms &amp; Conditions</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" href="3.css">

</head>
<body>
	<div class="container">
		<!-- navbar starts -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			
			<div class="container-fluid">

			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span> 
			    </button>
			    <a class="navbar-brand" href="#">Terms &amp; Conditions</a>
			  </div>

			  <div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="#home">Home</a></li>
			      <li><a href="#about">About</a></li>
			      <li><a href="#contact">Contact</a></li>
			    </ul>
			  </div>

			</div>
		</nav>
		<!-- navbar ends -->

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

			<label>
				<input type="checkbox" value="" id="check" required> &nbsp;I agree to the terms of service
			</label>
			<br />

			<a href="sign_up_success.php"><button type="submit" class="btn btn-primary" id ="sign_up">Sign-up</button></a> <br />

		</div>
	</div>
<!-- Latest compiled and minified JavaScript -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
</html>