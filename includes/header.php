<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title><?php  echo $pageTitle; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="style.css">
<style >
	
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700');
* {
	margin: 0;
	padding: 0;
}

body {
	font-family: 'Source Sans Pro', sans-serif;
	font-weight: 600;
	text-align: center;
	padding-top: 70px; /* it clears:both for navbar*/
}
/* navbar starts */
.navbar {
	background-color: #000 !important;
}

.navbar-header, .navbar-collapse{
	background-color: #000 !important;
}

#myNavbar {
	background-size:cover;
}

.navbar-brand {
	font-size: 1.4em;
	color: #fff !important;
	font-weight: bold;
	text-transform: uppercase;
	padding: 4vh 5vh 6vh 4vh;
	float: right;
}

.navbar-toggle {
	float: left;
	margin-left: 2vh;
}

.navbar-brand:hover {
	text-decoration: underline;
}

.nav a {
  	font-size: 1.4em;
	color: #fff !important;
	text-align: center;
	padding-top: 6vh;
	margin-top: 1.5vh;
}

ul.nav a:hover {
	text-decoration: underline;
}
</style>

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