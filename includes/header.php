<div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">E-Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if (isset($_SESSION['email'])) {
                        $email=$_SESSION['email'];
                        $user_id_find_query="select * from `users` where `email`='$email'";
                        $user_id_find_query_result=mysqli_query($con,$user_id_find_query) or die(mysqli_error($con));
                        $row=mysqli_fetch_array($user_id_find_query_result);
                        $name=$row['name'];
                ?>
                <li><a href = "home.php" class="not-active"><span class = "glyphicon glyphicon-user"></span> Hi <strong><?php echo $name; ?></strong></a></li>
                <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                <li><a href = "settings.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li>
                <li><a href = "logout.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>
                <?php
                } else {
                ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" role="dialog" style="margin-top:100px;">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">LOGIN</h4>
            </div>
        <div class="modal-body">
            <div><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                <form role="form" action="login_submit.php" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control"  placeholder="Email" name="email" required pattern="(?<identifiant>(?:[a-z0-9-_]+\.)*[a-z0-9]+)@(?<domaine>(?:[a-z0-9-_]+\.)*)(?<extension>[a-z]{2,6})">
                    <span class="error"><?php if(!empty($_GET['email_error'])){echo "*".$_GET['email_error'];} ?></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=
                       "Password should be of minimum 8 length containing one lowercase,one uppercase,one special character and one digit atleaset">
                    <span class="error"><?php if(!empty($_GET['password_error'])){echo "*".$_GET['password_error'];} ?></span>    
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
        </div>
        <div class="modal-footer">
          <p style="float:left;"><a href="forgot-password.php"> Forgot password?</a></p>
        </div>
        </div>
    </div>
</div>