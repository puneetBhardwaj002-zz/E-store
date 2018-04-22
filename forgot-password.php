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
$name=$email='';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=test_input($_POST['name']);
    $email=test_input($_POST['email']);
    $password_search_query="select * from `users` where `name`='$name' and `email`='$email'";
    $password_search_query_result= mysqli_query($con, $password_search_query) or die(mysqli_error($con));
    $row= mysqli_fetch_array($password_search_query_result);
    if(mysqli_num_rows($password_search_query_result) == 0){
        header('location:alert.php?error= No such user exist.&webpage=signup');
    }
    else if($name!=$row['name'] or $email!=$row['email']){
        header('location:forgot-password.php?return_error=Please check your inputs');
    }
    else{
        $token= bin2hex(openssl_random_pseudo_bytes(5));
        $token_update_query="update `users` set `token`='$token' where `email`='$email'";
        $token_update_query_result=mysqli_query($con,$token_update_query) or die(mysqli_error($con));
        $subject="PASSWORD RENEWAL";
        $message='Your activation link is: localhost/E-store/reset-password.php?email='.$email.'&token='.$token.'.'."\r\n".'Copy paste this link in your browser to reset password';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: <maddypuneet14031998@gmail.com>" . "\r\n";
        mail($email,$subject,$message,$headers);
        header('location:alert.php?error= Verification mail has been sent to e-mail prescribed by you. Kindly check your mail for future references.');
    }}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forgot Password | E-Store</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
            include  'includes/header.php';
        ?>
        <div class ="build" id="content">
            <div class="container-fluid " id="login-panel">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>Forgot Password ?</h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="User Name" name="name" required >
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required pattern="(?<identifiant>(?:[a-z0-9-_]+\.)*[a-z0-9]+)@(?<domaine>(?:[a-z0-9-_]+\.)*)(?<extension>[a-z]{2,6})">
                                    </div>
                                    <span><?php if(!empty($_GET['return_error'])){echo $_GET['return_error'];}?></span>
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
        ?>
    </body>
</html>