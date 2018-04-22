<?php
    require 'includes/common.php';
    $item_id=$_GET['id'];
    $quantity=$_GET['quantity'];
    $email=$_SESSION['email'];
    $user_id_find_query="select * from `users` where `email`='$email'";
    $user_id_find_query_result=mysqli_query($con,$user_id_find_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($user_id_find_query_result);
    $user_id=$row['id'];
    $order_search_query="select * from `orders` where `user_id`='$user_id' and `status_of_order`='Not Confirmed' limit 1";
    $order_search_query_result=mysqli_query($con,$order_search_query) or die(mysqli_error($con));
    if(mysqli_num_rows($order_search_query_result) > 0){
        $row= mysqli_fetch_array($order_search_query_result);
        $order_id=$row['id'];
        $item_insert_query="insert into `orders_items` (`order_id`,`item_id`,`status`,`quantity`) values ('$order_id','$item_id','Added to Cart','$quantity')";
        $item_insert_query_result= mysqli_query($con, $item_insert_query) or die(mysqli_error($con));
        header('location:home.php');
    }
    else{
        $order_insert_query="Insert into `orders` (`user_id`,`status_of_order`) values ('$user_id','Not Confirmed')";
        $order_insert_query_result= mysqli_query($con, $order_insert_query) or die(mysqli_error($con));
        $order_id_search="select `id` as ID from `orders` where `user_id`='$user_id' order by `time_of_order` DESC limit 1";
        $order_id_search_result=mysqli_query($con,$order_id_search) or die(mysqli_error($con));
        $row= mysqli_fetch_array($order_id_search_result);
        $order_id=$row['ID'];
        $item_insert_query="insert into `orders_items` (`order_id`,`item_id`,`status`,`quantity`) values ('$order_id','$item_id','Added to Cart','$quantity')";
        $item_insert_query_result= mysqli_query($con, $item_insert_query) or die(mysqli_error($con));
        header('location:home.php');
    }
?>