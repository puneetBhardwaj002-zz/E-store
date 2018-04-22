<?php
    $name=$_POST['name'];
    $regex_name="/^[A-Za-z]{5,255}$/";
    if(!preg_match($regex_name, $name)){
        header('location: signup.php?name_error=Please enter valid name!');
    }
    $email=$_POST['email'];
    $regex_email="/(?<identifiant>(?:[a-z0-9-_]+\.)*[a-z0-9]+)@(?<domaine>(?:[a-z0-9-_]+\.)*)(?<extension>[a-z]{2,6})/";
    if(!preg_match($regex_email, $email)){
        header('location: signup.php?email_error=Please enter valid E-mail!');
    }
    $password=$_POST['password'];
    $regex_password="/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/";
    if(!preg_match($regex_password,$password)){
        header('location: signup.php?password_error=Password should match pattern!');
    }
    $contact=$_POST['contact'];
    $regex_contact="/^(\+91|\+91\-|0)?[789]\d{9}$/";
    if(!preg_match($regex_contact, $contact)){
        header('location: signup.php?contact_error=Please enter valid contact!');
    }
    $city=$_POST['city'];
    $regex_city="/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/";
    if(!preg_match($regex_city, $city)){
        header('location: signup.php?city_error=Please enter valid city name!');
    }
    $address=$_POST['address'];
    $regex_address="/[0-9]+\s*([a-zA-Z]+\s*[a-zA-Z]+\s)+\s*([A-Za-z]*-[0-9]*)/";
    if(!preg_match($regex_address, $address)){
        header('location:signup.php?address_error=Please enter valid address!');
    }
    else{
            
    }
    $con= mysqli_connect("localhost","root","","e-store");
    $name= mysqli_real_escape_string($con,$_POST['name']);        
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $password= mysqli_real_escape_string($con,$_POST['password']);
    $password= sha1($password.$email);
    $contact=$_POST['contact'];
    $city= mysqli_real_escape_string($con,$_POST['city']);
    $address= mysqli_real_escape_string($con,$_POST['address']);
    
    $user_fetch_query="select id from `users` where `email`='$email'";
    $user_fetch_query_result=mysqli_query($con,$user_fetch_query)or die(mysqli_error($con));
    if(mysqli_num_rows($user_fetch_query_result) > 0){
        header('location:alert.php?error= E-mail ID already exist.&webpage=signup');
    }
    else{
        $user_insert_query="INSERT INTO `USERS` (`name`,`email`,`password`,`contact`,`city`,`address`) VALUES('$name','$email','$password','$contact','$city','$address')";
        $user_insert_submit=mysqli_query($con,$user_insert_query) or die(mysqli_error($con));
        header('location:index.php?key=wrong');
    }    
?>