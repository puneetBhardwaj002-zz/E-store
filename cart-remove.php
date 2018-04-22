<?php
        require "includes/common.php";
        $item_id=$_GET['id'];
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
            $item_count_query="select count(`item_id`) as Number_of_items from `orders_items` where `order_id`='$order_id'";
            $item_count_query_result=mysqli_query($con,$item_count_query) or die(mysqli_error($con));
            $row= mysqli_fetch_array($item_count_query_result);
            $count=$row['Number_of_items'];
            if($count == 1 ){
                $delete_product_query="delete from `orders_items` where `item_id`='$item_id' and `status`='Added to cart' and `order_id`='$order_id'";
                $delete_product_query_result= mysqli_query($con,$delete_product_query) or die(mysqli_error($con));   
                $delete_order_query="delete from `orders` where `status_of_order`='Not Confirmed' and `id`='$order_id' and `user_id`='$user_id'";
                $delete_order_query_result= mysqli_query($con,$delete_order_query) or die(mysqli_error($con));
                header('location:cart.php');
            }
            else{
                $delete_product_query="delete from `orders_items` where `item_id`='$item_id' and `status`='Added to cart' and `order_id`='$order_id'";
                $delete_product_query_result= mysqli_query($con,$delete_product_query) or die(mysqli_error($con));
                header('location:cart.php');
            }
        }
?>