	<?php 

	$pageTitle = "Login | We Are Framework";

	include("includes/header.php"); ?>

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
			
			<a href="forgot_password.php"><button type="submit" class="btn btn-primary buttons" id ="" >Forgot Password</button></a><br />
			<a href="2/2.php"><button type="submit" class="btn btn-primary buttons" id ="" >Sign-up</button></a> <br />

		</div>			
	</div> <!-- end content -->

	<!-- Latest compiled and minified JavaScript -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
</html>