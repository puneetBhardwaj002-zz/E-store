<?php
        function check_if_added_to_cart($item_id){
         if(!isset($_SESSION['email'])){
             session_start();
         }
         $con= mysqli_connect("localhost", "root", "", "e-store");
        $email=$_SESSION['email'];  
        $user_id_find_query="select * from `users` where `email`='$email'";
        $user_id_find_query_result=mysqli_query($con,$user_id_find_query) or die(mysqli_error($con));
        $row=mysqli_fetch_array($user_id_find_query_result);
        $user_id=$row['id'];
        $order_search_query="select * from `orders` where `user_id`='$user_id' and `status_of_order`='Not Confirmed' order by `time_of_order` DESC limit 1";
        $order_search_query_result=mysqli_query($con,$order_search_query) or die(mysqli_error($con));
        $row= mysqli_fetch_array($order_search_query_result);
        $order_id=$row['id'];
        $item_search_query="SELECT * FROM `orders_items` oi inner join `orders` o on `o`.`id`=`oi`.`order_id` WHERE `oi`.`item_id`='$item_id' AND `o`.`user_id` ='$user_id' and `o`.`status_of_order`='Not Confirmed' and `o`.`id`='$order_id'";
        $item_search_result_query=mysqli_query($con,$item_search_query)or die(mysqli_error($con));
        //echo mysqli_num_rows($item_search_result_query);
        if(mysqli_num_rows($item_search_result_query) >= 1){
            return 1;
        }
        else{
            return 0;
        }
}
?>