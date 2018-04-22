<?php
    require  'includes/common.php';
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
            include  'includes/header.php';
            include 'includes/check-if-added.php';
        ?>
        <div class="container-fluid build" id="content" >
            <div class="row">
                <div class="col-sm-4 panel_height">
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
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="1">
                                    <?php
                                    if(check_if_added_to_cart(1)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 panel_height">
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
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="2">
                                    <?php
                                    if(check_if_added_to_cart(2)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Lenovo K6 Power</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/e3.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul class="index-image">
                                    <li>3 GB RAM | 32 GB ROM | Expandable Upto 128 GB </li> 
                                    <li>5 inch Full HD Display</li>
                                    <li>13MP Rear Camera | 8MP Front Camera</li>
                                    <li>4000 mAh Li-ion Battery
                                    <li>Qualcomm Snapdragon 430 Processor</li>
                                </ul>
                                <p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>9999/-</p>
                            </div>
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="3">
                                    <?php
                                    if(check_if_added_to_cart(3)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 panel_height">
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
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="4">
                                    <?php
                                    if(check_if_added_to_cart(4)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>   
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 panel_height">
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
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="5">
                                    <?php
                                    if(check_if_added_to_cart(5)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Micromax Bolt Q339</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/e6.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul class="index-image">
                                    <li>512 MB RAM | 4 GB ROM| Expandable Upto 32 GB </li> 
                                    <li>4.5 FWVGA Display</li>
                                    <li>5MP Rear Camera | 2MP Front Camera</li>
                                    <li>1650 mAh Li-ion Polymer Battery
                                    <li>Spreadtrum SC7731 Processor</li>
                                </ul>
                                <p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>5000/-</p>
                            </div>
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="6">
                                    <?php
                                    if(check_if_added_to_cart(6)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Asus Zenfone Max</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/e7.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul class="index-image">
                                    <li>2 GB RAM | 32 GB ROM| Expandable Upto 64 GB </li> 
                                    <li>5.5 inch  HD Display</li>
                                    <li>13MP Rear Camera | 5MP Front Camera</li>
                                    <li>5000 mAh Li-ion Polymer Battery
                                    <li>Qualcomm Snapdragon 615 Processor</li>
                                </ul>
                                <p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>9499/-</p>
                            </div>
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="7">
                                    <?php
                                    if(check_if_added_to_cart(7)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Micromax Canvas Spark 3</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/e8.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul class="index-image">
                                    <li>1 GB RAM | 8 GB ROM| Expandable Upto 32 GB </li> 
                                    <li>5.5 inch  HD Display</li>
                                    <li>8MP Rear Camera | 5MP Front Camera</li>
                                    <li>2500 mAh Li-ion Polymer Battery
                                    <li>Spreadtrum SC7731 Processor</li>
				</ul>
                            <p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>5999/-</p>
                            </div>
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="8">
                                    <?php
                                    if(check_if_added_to_cart(8)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mi 3</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/e9.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                            <ul class="index-image">
				<li>2 GB RAM | 16 GB ROM| Expandable Upto 64 GB </li> 
				<li>5 inch Full HD Display</li>
				<li>13MP Rear Camera | 2MP Front Camera</li>
				<li>3050 mAh Li-ion Polymer Battery
			 	<li>Qualcomm Snapdragon 800 8274AB Processor</li>
                            </ul>
			    <p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>13999/-</p>
                            </div>
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="9">
                                    <?php
                                    if(check_if_added_to_cart(9)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mi 4i</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/e10.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul class="index-image">
                                    <li>2 GB RAM | 16 GB ROM| Expandable Upto 64 GB </li> 
                                    <li>5 inch Full HD Display</li>
                                    <li>13MP Rear Camera | 5MP Front Camera</li>
                                    <li>3030 mAh Li-ion Polymer Battery
                                    <li>2nd Gen Snapdragon 615 64-bit Octa core Processor</li>
                                </ul>
                                <p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>11999/-</p>
                            </div>
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="10">
                                    <?php
                                    if(check_if_added_to_cart(10)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mi 5</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/e11.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul class="index-image">
                                    <li>3 GB RAM | 32 GB ROM| Expandable Upto 128 GB </li> 
                                    <li>5.15 inch Full HD Display</li>
                                    <li>16MP Rear Camera | 4MP Front Camera</li>
                                    <li>3000 mAh Li-ion Polymer Battery
                                    <li>Snapdragon 820 Kyro Processor</li>
                                </ul>
				<p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>22999/-</p>
                            </div>
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="11">
                                    <?php
                                    if(check_if_added_to_cart(11)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 panel_height">
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
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="12">
                                    <?php
                                    if(check_if_added_to_cart(12)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 panel_height">
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
                                <p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>11027/-</p>
                            </div>
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="13">
                                    <?php
                                    if(check_if_added_to_cart(13)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>WD 1 TB Wired External Hard Drive</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/h2.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul>
                                    <li>Portable Hard Drive</li>
                                    <li>Capacity: 1 TB</li>
                                    <li>Connectivity: USB 3.0, USB 2.0 </li>
                                    <li>2 years warranty</li>
                                </ul>
                            <p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>4399/-</p>
                            </div>
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="14">
                                    <?php
                                    if(check_if_added_to_cart(14)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 panel_height">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Maxtor 2 TB Wired External Hard Drive</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/h3.jpg" alt="" class="img-responsive center-block">
                            <div class="caption"><br>
                                <ul>
                                    <li>Portable Hard Drive</li>
                                    <li>Capacity: 2 TB</li>
                                    <li>Connectivity: USB 3.0, USB 2.0 </li>
                                    <li>3 years warranty</li>
                                </ul>
                                <p style="text-align: center; font-weight: 900;">Price: <span class="fa fa-inr"></span>6649/-</p>
                            </div>
                            <form action="cart-add.php" method="GET">
                                <div class="form-group">
                                    <p><strong>Quantity:</strong></p><input type="number" class="form-control" name="quantity" required min="1" max="5" ><br>
                                    <input type="hidden" name="id" value="15">
                                    <?php
                                    if(check_if_added_to_cart(15)){
                                    echo '<button class="btn btn-success btn-block" type="submit" disabled>Add to cart</button>';
                                    }
                                    else{
                                    echo '<button class="btn btn-primary btn-block" type="submit">Add to cart</button>';    
                                    }                            
                                    ?>   
                                </div>
                            </form>    
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