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
        <title>Welcome | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
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
                <div class="col-sm-4   panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Iphone 6</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/e1.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul class="index-image">
                                    <li>16 GB ROM</li> 
                                    <li>4.7 inch Retina HD Display</li>
                                    <li>8MP Rear Camera | 1.2MP Front Camera</li>
                                    <li>A8 Chip with 64-bit Architecture and M8 Motion Co-processor Processor</li>
                                </ul>
                                <p style="text-align: center;font-weight: 900;">Price: <span class="fa fa-inr"></span>22999/-</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#myModal"  class="btn btn-block btn-primary" role="button"> Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4   panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Moto C Plus</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/e2.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul class="index-image">
                                    <li>2 GB RAM | 16 GB ROM | Expandable Upto 32 GB </li> 
                                    <li>5 inch  HD Display</li>
                                    <li>8MP Rear Camera | 2MP Front Camera</li>
                                    <li>4000 mAh Battery
                                    <li>Mediatek MTK6737 Quad Core 1.3Ghz Processor</li>
                                </ul>
                                <p style="text-align: center;font-weight: 900;">Price: <span class="fa fa-inr"></span>6999/-</p>
                            </div>
                            <a href="#"  data-toggle="modal" data-target="#myModal"  class="btn btn-block btn-primary" role="button"> Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4   panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Redmi Note 3</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/e12.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul class="index-image">
                                    <li>3 GB RAM | 32 GB ROM| Expandable Upto 128 GB </li> 
                                    <li>5.5 inch Full HD Display</li>
                                    <li>16MP Rear Camera | 5MP Front Camera</li>
                                    <li>4050 mAh Li-ion Polymer Battery
                                    <li>Qualcomm Snapdragon 650 64-bit Processor</li>
                                </ul>
				<p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>11999/-</p>
                            </div>
                            <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-block btn-primary" role="button"> Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4   panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Lenovo Vibe K5 Note</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/e4.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul class="index-image">
                                    <li>4 GB RAM | 32 GB ROM | Expandable Upto 128 GB </li> 
                                    <li>5.5 inch Full HD Display</li>
                                    <li>13MP Rear Camera | 8MP Front Camera</li>
                                    <li>3500 mAh Li-ion Polymer Battery
                                    <li>Mediatek Helip P10 64-bit Processor</li>
                                </ul>
                                <p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>11499/-</p>
                            </div>
                            <a href="#"  data-toggle="modal" data-target="#myModal"   class="btn btn-block btn-primary" role="button"> Order Now </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4   panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>YU Yureka Black</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/e5.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul class="index-image">
                                    <li>4 GB RAM | 32 GB ROM| Expandable Upto 64 GB </li> 
                                    <li>5 inch Full HD Display</li>
                                    <li>13MP Rear Camera | 8MP Front Camera</li>
                                    <li>3000 mAh Li-ion Polymer Battery
                                    <li>Qualcomm Snapdragon 430 Processor</li>
                                </ul>
                                <p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>8999/-</p>
                            </div>
                            <a href="#"  data-toggle="modal" data-target="#myModal"  class="btn btn-block btn-primary" role="button"> Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4   panel_height">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Seagate Backup Plus 4 TB External Hard Drive</h4>
                            </div>
                            <div class="panel-body">
                                <img src="img/h1.jpg" alt="" class="img-responsive center-block">
                                <div class="caption"><br>
                                    <ul>
                                        <li>Portable Hard Drive</li>
                                        <li>Capacity: 4 TB</li>
                                        <li>Connectivity: USB 3.0, USB 2.0 </li>
                                        <li>3 years warranty</li>
                                    </ul>
                                    <br>
                                    <p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>11027/-</p>
                                </div>
                                <a href="#"  data-toggle="modal" data-target="#myModal"  class="btn btn-block btn-primary" role="button"> Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            include  'includes/footer.php';
            if(!empty($_GET['key']) && $_GET['key'] == "wrong"){
                echo "<script>$('#myModal').modal('toggle')</script>";
            }
        ?>
    </body> 
</html>