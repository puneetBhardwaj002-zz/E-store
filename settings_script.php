<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
    $old_password=$_POST['old_password'];
    $regex_password="/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/";
    if(!preg_match($regex_password,$old_password)){
        header('location: settings.php?old_password_error=Incorrect format');
    }
    $new_password=$_POST['new_password'];
    //$regex_password="/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=.\-_*])([a-zA-Z0-9@#$%^&+=*.\-_]){8,}$/";
    if(!preg_match($regex_password,$new_password)){
        header('location: settings.php?new_password_error=Incorrect format');
    }
    $retype_password=$_POST['retype_password'];
    //$regex_password="/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=.\-_*])([a-zA-Z0-9@#$%^&+=*.\-_]){8,}$/";
    if(!preg_match($regex_password,$retype_password)){
        header('location: settings.php?retype_password_error=Incorrect format');
    }
    $email=$_SESSION['email'];
    $old_password= mysqli_real_escape_string($con,$_POST['old_password']);
    $old_password=sha1($old_password.$email);
    $old_password_search_query="select `password` from `users` where `email`='$email' and `password`='$old_password'";
    $old_password_search_query_result=mysqli_query($con,$old_password_search_query) or die(mysqli_error($con));
    if(mysqli_num_rows($old_password_search_query_result) == 0){
        header('location:settings.php?password_match_error=Old Password doesnot match');
    } else {
        $new_password= mysqli_real_escape_string($con,$_POST['new_password']);
        $retype_password= mysqli_real_escape_string($con,$_POST['retype_password']);
        if($new_password===$retype_password){
            $new_password=sha1($new_password.$email);
            $new_password_update_query="update `users` set `password`='$new_password' where `email`='$email'";
            $new_password_update_query_result=mysqli_query($con,$new_password_update_query) or die(mysqli_error($con));
            header('location:home.php');
        }
        else{
            header('location:settings.php?new_password_match_error= New Password doesnot match');
    }
}
?>