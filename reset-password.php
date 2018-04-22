<?php
    require  'includes/common.php';
    if (isset($_SESSION['email'])) {
        header('location: products.php');
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$email=$token='';
if(!empty($_GET['email'])){
    $email= test_input($_GET['email']);
}
if(!empty($_GET['token'])){
    $token= test_input($_GET['token']);
}
$token_search_query="select * from `users` where `email`='$email' and `token`='$token' and `token` IS NOT NULL";
$token_search_query_result=mysqli_query($con,$token_search_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($token_search_query_result);
if(mysqli_num_rows($token_search_query_result) == 0 && empty($_GET['password_error'])){
    header('location:alert.php?error= Please check credentials you are providing.&webpage=forgot');
}
else{
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reset Password | E-Store</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
            include  'includes/header.php';
        ?>
        <div id="content" class="build">
            <div class="container-fluid " id="login-panel">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>Reset Password</h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" action='reset-password-submit.php?email=<?php echo $email;?>' method="POST">
                                    <div class="form-group">
                                        <input type="password" class="form-control"  placeholder="New Password" name="new-password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm-password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                        <span class="error"><?php if(!empty($_GET['password_error'])){ echo $_GET['password_error'];} ?> </span>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include  'includes/footer.php';
}
        ?>
    </body>
</html>