<?php
    require  'includes/common.php';
    if (isset($_SESSION['email'])) {
        header('location: home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include  'includes/header.php';
        ?>
        <div class="container-fluid decor_bg build" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-sm-6 col-lg-4">
                        <img src="img/yess.jpg" alt="signup" class="img-responsive center-block">
                    </div>
                    <div class="col-sm-6 col-lg-4 col-lg-offset-4">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name"  required pattern="^[A-Za-z]{2,}$">
                                <span class="error"><?php if(!empty($_GET['name_error'])){ echo $_GET['name_error']; }?></span>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required pattern="(?<identifiant>(?:[a-z0-9-_]+\.)*[a-z0-9]+)@(?<domaine>(?:[a-z0-9-_]+\.)*)(?<extension>[a-z]{2,6})">
                                <span><?php if(!empty($_GET['email_error'])){echo $_GET['email_error']; }?></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                <span><?php if(!empty($_GET['password_error'])){echo $_GET['password_error']; }?></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required pattern="^(\+91|\+91\-|0)?[789]\d{9}$">
                                <span><?php if(!empty($_GET['contact_error'])){ echo $_GET['contact_error']; }?></span>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required pattern="^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$">
                                <span><?php if(!empty($_GET['city_error'])){echo $_GET['city_error'];} ?> </span>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required pattern="[0-9]+\s*([a-zA-Z]+\s*[a-zA-Z]+\s)+\s*([A-Za-z]*-[0-9]*)">
                                <span><?php if(!empty($_GET['address_error'])){ echo $_GET['address_error']; }?></span>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include  'includes/footer.php';
        ?>
    </body>
</html>