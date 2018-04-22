<?php
    require 'includes/common.php';
    function test_input($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }
    $order_id= test_input($_POST['order-id']);
    $card_number= test_input($_POST['card-number']);
    $expiry_month= test_input($_POST['expiry-month']);
    $expiry_year= test_input($_POST['expiry-year']);
    $card_cvc= test_input($_POST['card-cvc']);
    $card_cvc= sha1($card_cvc);
    $coupon_code= test_input($_POST['coupon-code']);
    $email=$_SESSION['email'];
    $user_id_find_query="select * from `users` where `email`='$email'";
    $user_id_find_query_result=mysqli_query($con,$user_id_find_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($user_id_find_query_result);
    $user_id=$row['id'];
    if(!empty($coupon_code)){        
        $coupon_search_query="select * from `coupon` where `code`='$coupon_code'";
        $coupon_search_query_result= mysqli_query($con, $coupon_search_query) or die(mysqli_error($con));        
        $coupon_applied_query="select * from `credit_detail` where `coupon_code`='$coupon_code' and `user_id`='$user_id'";
        $coupon_applied_query_result=mysqli_query($con,$coupon_applied_query) or die(mysqli_error($con));
        if(mysqli_num_rows($coupon_search_query_result) == 0){
            header('location:payment.php?coupon_error=Invalid Coupon Code');
        }else if(mysqli_num_rows($coupon_applied_query_result) > 0){
                header('location:payment.php?coupon_error=Coupon Code Already Used');    
        }
        else{
            $row= mysqli_fetch_array($coupon_search_query_result);
            $discount=$row['discount'];
            $amount_search_query="select `amount` as Amount from `orders` where `id`='$order_id'";
            $amount_search_query_result=mysqli_query($con,$amount_search_query) or die(mysqli_error($con));
            $row= mysqli_fetch_array($amount_search_query_result);
            $amount=$row['Amount'];
            $diff=($amount * $discount)/100;
            $amount-=$diff;
            $amount_update_query="update `orders` set `status_of_order`='Paid and Delivered',`amount`='$amount' where `user_id`='$user_id' and `status_of_order`='Confirmed' and `id`='$order_id'";
            $amount_update_query_result= mysqli_query($con, $amount_update_query) or die(mysqli_error($con));        
            $payment_complete_query="insert into `credit_detail` (`user_id`,`order_id`,`amount`,`card_number`,`expiry_month`,`expiry_year`,`coupon_code`,`cvc`) values ('$user_id','$order_id','$amount','$card_number','$expiry_month','$expiry_year','$coupon_code','$card_cvc')";
            $payment_complete_query_result=mysqli_query($con,$payment_complete_query) or die(mysqli_error($con));
            header('location:alert.php?error=Your payment of <span class="fa fa-inr"></span> '.$amount.' has been done successfully. Your order will reach to you shortly.');
        }
    }
    else{
            $amount_search_query="select `amount` as Amount from `orders` where `id`='$order_id'";
            $amount_search_query_result=mysqli_query($con,$amount_search_query) or die(mysqli_error($con));
            $row= mysqli_fetch_array($amount_search_query_result);
            $amount=$row['Amount'];
            $amount_update_query="update `orders` set `status_of_order`='Paid and Delivered' where `user_id`='$user_id' and `status_of_order`='Confirmed' and `id`='$order_id'";
            $amount_update_query_result= mysqli_query($con, $amount_update_query) or die(mysqli_error($con)); 
            $payment_complete_query="insert into `credit_detail` (`user_id`,`order_id`,`amount`,`card_number`,`expiry_month`,`expiry_year`,`cvc`) values ('$user_id','$order_id','$amount','$card_number','$expiry_month','$expiry_year','$card_cvc')";
            $payment_complete_query_result=mysqli_query($con,$payment_complete_query) or die(mysqli_error($con));
            $am=$amount;
            header('location:alert.php?error=Your payment of <span class="fa fa-inr"></span> '.$amount.' has been done successfully. Your order will reach to you shortly.');
    }
?>