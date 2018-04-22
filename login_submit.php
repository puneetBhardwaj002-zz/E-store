<?php
    require  'includes/common.php';
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $password= mysqli_real_escape_string($con,$_POST['password']);
    $password=sha1($password.$email);
    $users_search_query="select *from `users` where `email`='$email'";
    $search_query_result=mysqli_query($con,$users_search_query) or die(mysqli_error($con));
    $count= mysqli_num_rows($search_query_result);
    if($count==0){
        header('location:index.php?email_error=Please enter valid e-mail or SIGNUP.&key=wrong');
    }
    else{
        $row= mysqli_fetch_array($search_query_result);
        if($password==$row['password']){
        $_SESSION['email']=$email;
        header('location:home.php');
    }
    else{
        header('location:index.php?password_error=Incorrect Password&key=wrong');
    }
}
?>