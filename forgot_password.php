<?php
		
	echo '<form action="forgot_password.php" method="POST">
		Enter Your Email Id:
		<input type="text" name="email" /> <br />
		<input type="submit" value="Reset My Password" />
		</form>';

		if(!isset($_POST['email'])){
            echo '<form action="forgot_password.php" method="POST">
			Enter Your Email Id:
			<input type="text" name="email" /> 
			<input type="submit" value="Reset My Password" />
			</form>';
            exit();
        } 
       
	$email=$_POST['email'];
	
	include("includes/dbc.php");

	$q="SELECT email FROM user WHERE email='".$email."'";
	
	$r=mysqli_query($conn, $q);

	$n=mysqli_num_rows($r);

	if($n==0){
		echo "Email id is not registered";
		die();
	}

	$token= getRandomString(10);

	$q= "INSERT INTO pswd_reset_token (token,email) VALUES ('".$token."','".$email."')";
	mysqli_query($conn, $q);
	
	function getRandomString($length) {
	    $validCharacters = "ABCDEFGHIJKLMNPQRSTUXYVWZ123456789";
	    $validCharNumber = strlen($validCharacters);
	    $result = "";

	    for ($i = 0; $i < $length; $i++) {
	        $index = mt_rand(0, $validCharNumber - 1);
	        $result .= $validCharacters[$index];
	    }
		return $result;
	}

	function mailresetlink($to,$token) {
		$subject = "Password reset link for WE Are Framework";
		$uri = 'http://'. $_SERVER['HTTP_HOST'] ;
		$message = '
		<html>
		<head>
		<title>Forgot Password For WE Are Framework</title>
		</head>
		<body>
		<p>Click on the given link to reset your password <a href="'.$uri.'/reset.php?token='.$token.'">Reset Password</a></p>

		</body>
		</html>
		';
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers .= 'From: Admin<webmaster@example.com>' . "\r\n";
		$headers .= 'Cc: Admin@example.com' . "\r\n";

		if(mail($to,$subject,$message,$headers)){
			echo "We have sent the password reset link to your  email id <b>".$to."</b>"; 
		}
	}

	if(isset($_GET['email'])) {
		mailresetlink($email,$token);	
	}
