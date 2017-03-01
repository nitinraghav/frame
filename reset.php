<?php

    session_start();

    $token= $_GET['token'];

    include("includes/dbc.php");

    if(!isset($_POST['password'])){
        
        $q="SELECT email FROM tokens where token='".$token."' and used=0";
        $r=mysqli_query($q);

        while($row = mysqli_fetch_array($r))
           {
                $email=$row['email'];
           }
        if ($email!=''){
                  $_SESSION['email']= $email;
        }
        else die("Invalid link or Password already changed");
    }

    $pass= $_POST['password'];
    $email= $_SESSION['email'];
    
    if(!isset($pass)){
        echo '<form method="post">
        enter your new password:<input type="password" name="password" />
        <input type="submit" value="Change Password">
        </form>
        ';
    }

    if(isset($_POST['password'])&&isset($_SESSION['email'])) {
        $q="update users set password='".md5($pass)."' where email='".$email."'";
        $r=mysql_query($q);

        if($r)mysql_query("update tokens set used=1 where token='".$token."'");
        echo "Your password is changed successfully";
        if(!$r)echo "An error occurred";
    }