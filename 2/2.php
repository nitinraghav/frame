<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>Framework | Sign-up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" href="2.css">

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
			    <a class="navbar-brand" href="#">Sign-up</a>
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



		<form action="../3/3.php" method="POST">
       		<input class="form-control" type="text" placeholder ="First Name" name="first_name" required> <br />
        	<input class="form-control" type="text" value="" placeholder="Last Name" name="last_name" required> <br />
           	<input class="form-control" type="email" value="" placeholder="email" name="email" required> <br />
           	<input class="form-control" type="password" value="" placeholder="password" name="password" required> <br />
	        <input class="form-control" type="password" value="" placeholder="Re-enter password"  required> <br />

			<h4>Optional:</h4> <br />
				
  			<input class="form-control" type="text" value="" placeholder="Age" name="age"> <br />
           	
           	<select class="form-control" name="gender">
				<option hidden >Gender</option>
				<option>Male</option>
				<option>Female</option>
				<option>Decline to disclose</option>
			</select> <br />
			
			<input class="form-control" type="text" value="" placeholder="City" name="city"> <br />
			
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
			</select> <br />

			<input class="form-control" type="text" value="" placeholder="Phone #" name="phone"> <br />
			<input class="form-control" type="text" value="" placeholder="Team Code" name= "team-code"> <br />
			<input class="form-control" type="text" value="" placeholder="12 Month Goal- Volunteer hours" name="volunteer-hours"><br />
       		
			<button type="submit" class="btn btn-primary" id ="sign_up_btn">Sign-up</button><br />
			
		</form>
	</div>

	<!-- Latest compiled and minified JavaScript -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
</html>
