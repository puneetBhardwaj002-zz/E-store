<footer>
    <div class="container-fluid">
        <div class="row  footer-content">
            <div class="col-xs-4">
                <ul>
                    <li><h4>Information</h4></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <ul>
                    <li><h4>My Account</h4></li>  
                    <li><?php if(!isset($_SESSION['email'])){ echo '<a href="/#" data-toggle="modal" data-target="#myModal">Login</a></li>';} else{    echo '<a href="/#" data-toggle="modal" data-target="#myModal" class="not-active">Login</a></li>';} ?> 
                    <li><a href="signup.php">Signup</a></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <ul>
                    <li><h4>Contact Us</h4></li>                
                    <li><p>Contact: +91-123-000000</p></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
