<?php
    require 'includes/common.php';
    if(empty($_GET['error'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Alert | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            include 'includes/header.php';
        ?>
        <div class="container-fluid build" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center"><?php echo $_GET['error']; ?></h3><hr>
                    <?php
                    if(!empty($_GET['webpage'])){
                        if($_GET['webpage'] == 'signup'){
                        echo '<p align="center">Click <a href="signup.php">here</a> to signup.</p>';  
                        }
                        else if($_GET['webpage'] == 'forgot'){
                         echo '<p align="center">Click <a href="forgot-password.php">here</a> to try again.</p>'; 
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';    
        ?>
    </body>
</html>