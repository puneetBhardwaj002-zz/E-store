<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            include 'includes/header.php';
            $email=$_SESSION['email'];
            $sum=$_GET['sum'];
            $user_id_find_query="select * from `users` where `email`='$email'";
            $user_id_find_query_result=mysqli_query($con,$user_id_find_query) or die(mysqli_error($con));
            $row=mysqli_fetch_array($user_id_find_query_result);
            $user_id=$row['id'];
            $order_search_query="select * from `orders` where `user_id`='$user_id' and `status_of_order`='Not Confirmed' order by `time_of_order` desc limit 1";
            $order_search_query_result=mysqli_query($con,$order_search_query) or die(mysqli_error($con));
            $row=mysqli_fetch_array($order_search_query_result);
            $order_id=$row['id'];
            $confirm_items_query="update `orders_items` set `status`='Confirmed' where `status`='Added to cart' and `order_id`='$order_id'";
            $confirm_items_query_result= mysqli_query($con, $confirm_items_query) or die(mysqli_error($con));
            $confirm_order_query="update `orders` set `status_of_order`='Confirmed',`amount`='$sum' where `user_id`='$user_id' and `status_of_order`='Not Confirmed' and `id`='$order_id'";
            $confirm_order_query_result= mysqli_query($con, $confirm_order_query) or die(mysqli_error($con));
        ?>  
        <div class="container-fluid build" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Thank you for ordering from E-store. The order shall be delivered to you shortly. </h3><hr>
                    <p align="center">Order some more electronic item <a href="home.php">here</a></p>
                    <p align="center">Click <a href="payment.php">here</a> to pay for your order now.</p>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>