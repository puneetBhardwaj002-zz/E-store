<?php
    require  'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location: home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function()
        {
            $("tr:even").css("background-color", "#fff");
            $("tr:odd").css("background-color","#dedede")
        });
        function showOrder(str) {
            if (str=="") {
              document.getElementById("txtHint").innerHTML="";
              return;
            } 
            if (window.XMLHttpRequest) {
              // code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp=new XMLHttpRequest();
            } else { // code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
              if (this.readyState==4 && this.status==200) {
                document.getElementById("txtHint").innerHTML=this.responseText;
                document.getElementById("display").innerHTML="<h3><strong>Your order items are shown below!.</strong></h3>";
              }
            }
            xmlhttp.open("GET","getOrderDetails.php?q="+str,true);
            xmlhttp.send();
}
    </script>
    </head>
    <body>
        <?php
            include  'includes/header.php';
        ?>
        <?php
            $con=mysqli_connect("localhost","root","","e-store");
            $email=$_SESSION['email'];  
            $user_id_find_query="select * from `users` where `email`='$email'";
            $user_id_find_query_result=mysqli_query($con,$user_id_find_query) or die(mysqli_error($con));
            $row=mysqli_fetch_array($user_id_find_query_result);
            $user_id=$row['id'];
            $order_search_query="select * from `orders` where `user_id`='$user_id' and `status_of_order` in('Not Confirmed','Confirmed') order by `time_of_order` DESC";
            $order_search_query_result=mysqli_query($con,$order_search_query) or die(mysqli_error($con));
            $num_rows= mysqli_num_rows($order_search_query_result);
            if($num_rows==0){
                echo "<h1 style='text-align:center;' class='build'><strong>Add items to cart first!.</strong></h1>";
            } else{
                $counter=1;
        ?>
        <div class="container build">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <form>
                        <div class="form-group-lg">
                            <select name="orders" class="form-control" onchange="showOrder(this.value)">
                                <option value="">Select an Order:</option>
                                <?php
                                    while($counter <= $num_rows){
                                        $row=mysqli_fetch_array($order_search_query_result);
                                        echo '<option value="'.$row['id'].'">Order '.$row['id'].'</option>';
                                        $counter++;
                                }
                                ?>
                            </select>
                        </div>
                    </form>
                    <div id='display' style="text-align:center;"><h3><strong>Order items will be listed here!.</strong></h3></div>
                </div>
            </div>
        </div>
        <div id="txtHint"></div>
        <?php
            }
            include  'includes/footer.php';
        ?>
    </body>
</html>