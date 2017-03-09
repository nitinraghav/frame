<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title><?php echo $pageTitle; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" type="text/css" href=<?php echo $CSS; ?> >
  

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
			    <a class="navbar-brand" href="#"><?php echo $pageHeader; ?></a>
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