<?php
    require  'includes/common.php';
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Payment | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
            include  'includes/header.php';
        ?>
        <div class="container-fluid build" id="content" >
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>PAYMENT</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="payment-submit.php">
                                <div class="form-group">
                                <label for="order_id">Order:</label>
                                <select  name="order-id" id="order_id" class="form-control" required>
                                <?php
                                            $email=$_SESSION['email'];
                                            $user_id_find_query="select * from `users` where `email`='$email'";
                                            $user_id_find_query_result=mysqli_query($con,$user_id_find_query) or die(mysqli_error($con));
                                            $row=mysqli_fetch_array($user_id_find_query_result);
                                            $user_id=$row['id'];
                                            $orders_search="select `id` as ID,`amount` as Amount from `orders` where `user_id`='$user_id' and `status_of_order`='Confirmed'";
                                            $orders_search_result=mysqli_query($con,$orders_search) or die(mysqli_query($con));
                                            $count=mysqli_num_rows($orders_search_result);
                                            $counter=1;
                                            if($count == 0){
                                                  header('location:home.php');  
                                            }
                                            else{
                                                while($counter <= $count){
                                                    $row=mysqli_fetch_array($orders_search_result);
                                                    $id=$row['ID'];
                                                    $amount=$row['Amount'];
                                                    echo '<option value="'.$id.'">Order '.$id.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
                                                            . 'Amount = &#8377;'.$amount.'</option>';
                                                $counter++;}
                                                    echo '
                                                        </select>
                                            </div>';
                                                }
                                                ?>
                                    
                                <div class="form-group">
                                    <label for="card_number">Card Number:</label>
                                    <input type="text" id="card_number" class="form-control" name="card-number" maxlength="19" placeholder="****-****-****-****" required pattern="^[4-9][0-9]{3}-[0-9]{4}-[0-9]{4}-[0-9]{4}$">
                                </div>
                                <div class="form-group">
                                    <label for="expiry_month">Expiry-Month:</label>
                                    <input type="number" id="expiry_month" class="form-control" name="expiry-month" placeholder="MM"  min="1" max="12" required>
                                </div>
                                <div class="form-group">
                                    <label for="expiry_year">Expiry-Year:</label>
                                    <input type="number" id="expiry_year" class="form-control" name="expiry-year" placeholder="YYYY" min="2017" max="2099" required>
                                </div>
                                <div class="form-group">
                                    <label for="card_cvc">CVC:</label>
                                    <input type="password" id="card_cvc" class="form-control" name="card-cvc" placeholder="***" required maxlength="3" pattern="^[1-9]{3}$">
                                </div>
                                <div class="form-group">
                                    <label for="coupon_code">Coupon Code:</label>
                                    <input type="text" class="form-control" id="coupon_code" name="coupon-code" maxlength="7" placeholder="Coupon Code" pattern="^[A-Z1-9]{7}$">
                                    <span class="error"><?php if(!empty($_GET['coupon_error'])){ echo $_GET['coupon_error'];} ?></span>
                                </div>
                                <button type="submit" name="submit" class="btn btn-block btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
