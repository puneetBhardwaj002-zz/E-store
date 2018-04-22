<?php
    require  'includes/common.php';
?>
<?php
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
  return $data;
}
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=test_input($_POST['name']);
        $email=test_input($_POST['email']);
        $message= test_input($_POST['message']);
        $contact_insert_query="Insert into `contact`(`name`,`e-mail`,`message`) values('$name','$email','$message')";
        $contact_insert_query_result=mysqli_query($con,$contact_insert_query) or die(mysqli_error($con));
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact | E-Store </title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
            include  'includes/header.php';
        ?>
        <div class="container build" id="content" >
            <div class="row">
                <div class="col-md-9">
                    <h2>LIVE SUPPORT</h2>
                    <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
                    <p>
                        Thanks for showing your interest in our E-store's services. We here, do our best
                        to provide our customer with the awesome experience of online shopping.
                        If you need any kind of help regarding any of our services feel free to contact us.
                        
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="img/contact.png" alt="contact" class="img-responsive" >
                </div>
                <div class="col-md-9">
                    <h2>CONTACT US</h2>
                    <form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea  id="message" class="form-control" rows="5" name="message" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <h2>Company Information:</h2>
                    <p>500 Lorem Ipsum Dolor Sit</p>
                    <p>22-56-2-9 Sit Amet, Lorem </p>
                    <p>India</p>
                    <p>Phone:+91-123-000000</p>
                    <p>Fax:(000)000 00 0 </p>
                    <p>E-mail:info@e-store.com</p>
                    <p>Follow us on: Facebook, Twitter</p>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
