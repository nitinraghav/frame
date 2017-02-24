<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>Framework | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="style.css">


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
			    <a class="navbar-brand" href="#">Sign-In</a>
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
			
			<div class="col-md-12">
				<a href="fblogin.php"><img class="img-responsive fb-login-img" src="http://i.imgur.com/XHJ1R6s.png"></a>
			</div>

			<div class="col-md-12 txt">Or use your email:</div>
			
			<form action="login.php" method="POST">
				<input class="form-control" type="email" name ="user" placeholder="email" id="email" required> <br />
       			<input class="form-control" type="password" name="pass" placeholder="password" id="password" required> <br />
      			<button type="submit" class="btn btn-primary buttons" id ="" >Login</button> <br />
			</form>
			
			<button type="submit" class="btn btn-primary buttons" id ="" >Forgot Password</button> <br />
			<a href="2/2.php"><button type="submit" class="btn btn-primary buttons" id ="" >Sign-up</button></a> <br />

		</div>			
	</div>

	<!-- Latest compiled and minified JavaScript -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
</html>