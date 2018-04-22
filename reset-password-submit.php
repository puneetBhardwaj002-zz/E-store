<?php
    require 'includes/common.php';
    $email=$_GET['email'];
    echo $email;
    $new_password= mysqli_real_escape_string($con,$_POST['new-password']);
    $confirm_password= mysqli_real_escape_string($con,$_POST['confirm-password']);
    if($new_password==$confirm_password){
        $password=sha1($new_password.$email);
        $password_update_query="update `users` set `password`='$password' where `email`='$email'";
        $password_update_query_result= mysqli_query($con, $password_update_query) or die(mysqli_error($con));
        $token_delete_query="update `users` set `token`='NULL' where `email`='$email'";
        $token_delete_query_result=mysqli_query($con,$token_delete_query) or die(mysqli_error($con));
        session_start();
        $_SESSION['email']=$email;
        header('location:home.php');
    }
    else{
        header('location:reset-password.php?password_error=Passwords donot match.');
    }
?>

