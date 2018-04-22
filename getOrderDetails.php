<!DOCTYPE html>
<html>
<body>

<?php
$q = intval($_GET['q']);

require 'includes/common.php';
$item_search_query="SELECT `i`.`id` as ID, `i`.`name` as Name, `i`.`price` as Price, `oi`.`Quantity` as Quantity FROM `orders_items` oi inner join `items` i on `oi`.`item_id`=`i`.`id` WHERE `order_id` = '$q'";
$result = mysqli_query($con,$item_search_query) or die(mysqli_error($con));
echo '<div class="row decor_bg build" id="content">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>S.NO.</th>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th></th>
                            </tr>
                        </thead>';
$sum=0;
        $counter=1;
        $no_of_items=0;

while($row = mysqli_fetch_array($result)) {
echo   '<tbody>
                            <tr>
                                <td>'.$counter.'</td><td>'.$row['ID'].'</td><td>'.$row['Name'].'</td><td> <span class="fa fa-inr"></span>'.$row['Price'].'/- </td><td>'.$row['Quantity'].'</td><td>';
if(item_confirmed($row['ID'],$q)){ echo '<a href="cart-remove.php?id='.$row['ID'].'" role="button" class=" btn btn-primary"> Remove</a></td>
                            </tr>';
}
else{
    echo '<a href="cart-remove.php" role="button" class="btn btn-success" disabled > Remove</a></td>
                            </tr>';
}
                    $sum+=$row['Price']*$row['Quantity'];
                    $counter++;
                    $no_of_items+=$row['Quantity'];   
}
 echo '<tr>
                            <td></td><td></td><td>Total</td><td><span class="fa fa-inr"></span>'; echo $sum; echo '/-</td><td>'.$no_of_items.'</td><td>';
                            if(check_if_confirmed($q)){
                                echo '<a href="success.php" class="btn btn-success" role="button" disabled>Confirm Order</a>'
                                . '<tr>
	<td colspan="5" style="text-align:center; font-weight:700;">Proceed to Payment</td><td><a href="payment.php" role="button" class="btn btn-primary">Pay</a></td>
</tr>';}else{echo '<a class="btn btn-primary" role="button" href="success.php?sum='.$sum.'">Confirm Order</a>';} echo '</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>';
?>
</body>
</html>
<?php
    function check_if_confirmed($data){
    $con= mysqli_connect("localhost","root","","e-store");
    $email = $_SESSION['email'];
    $user_id_find_query="select * from `users` where `email`='$email'";
    $user_id_find_query_result=mysqli_query($con,$user_id_find_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($user_id_find_query_result);
    $user_id=$row['id'];
    $confirmation_query="select * from `orders` where `user_id`='$user_id' and `id`='$data'";
    $confirmation_query_result= mysqli_query($con, $confirmation_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($confirmation_query_result);
    if($row['status_of_order'] == 'Not Confirmed'){
        return 0;
    }
    return 1;
} 
function item_confirmed($data1,$data2){
    $con= mysqli_connect("localhost","root","","e-store");
    $email = $_SESSION['email'];
    $user_id_find_query="select * from `users` where `email`='$email'";
    $user_id_find_query_result=mysqli_query($con,$user_id_find_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($user_id_find_query_result);
    $user_id=$row['id'];
    $item_confirm_query="select * from `orders_items` oi inner join `orders` o on `oi`.`order_id`=`o`.`id` where `oi`.`item_id`='$data1' and `o`.`user_id`='$user_id' and `o`.`id`='$data2'";
    $result=mysqli_query($con,$item_confirm_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($result);
    if($row['status'] == 'Confirmed'){
        return 0;
    }
    return 1;
}
?>