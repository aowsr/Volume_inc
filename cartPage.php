<?php include "functions.php";
$dbConn = getConnection();
ini_set("session.save_path", "/home/unn_w16015149/sessionData");
session_start();
//$product_ids = array();
// Variable to be used later to calculate total cost of items
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title>Volume Inc</title>

    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap 4.0 Beta -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha256-m/h/cUDAhf6/iBRixTbuc8+Rg2cIETQtPcH9D3p2Kg0=" crossorigin="anonymous" />
    <!-- open-iconic-bootstrap (icon set for bootstrap) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.esm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.esm.bundle.js"></script>

</head>
<body>

<div id="mainWrapper">

    <header>
        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-md navbar-fixed-top navbar-light bg-light main-nav">
            <div class="container">
                <div class="navbar-collapse collapse nav-content order-2 zindex-dropdown">

                    <ul class="nav navbar-nav ">
                        <li class="nav-item active mx-auto ">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="mens.php">Men's</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="womens.php">Women's</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav text-nowrap flex-row  order-1 order-md-2 " >

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".nav-content" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="nav navbar-nav mx-3 ">
                        <img src="media/volume_inc_md.png" class="d-none d-sm-block" alt="">
                        <img src="media/volume_inc_sm.png" class="d-block d-sm-none" alt="">
                    </div>
                </ul>
                <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3">
                    <ul class="ml-auto nav navbar-nav">
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="help.php">Help</a>
                        </li>
                    </ul>
                </div>

                <div class="d-flex flex-row order-4 order-sm-4 mx-1">
                    <div class ="d-flex flex-row mx-1 ">
                        <button class="btn btn-default btn-sm" type="button" >
                            <span class="oi oi-cart" title="icon name" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<div class="container-fluid" id ="wrapper">
     <h1 class="font-weight-heavy text-center">Your Cart</h1>
</div>
<br>
<br>
<br>
    <div class="continaer-fluid">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col"></th>
                        <th scope="col">Price</th>
                    </tr>
                    </thead>
    <?php
    if(empty($_SESSION['shopping_cart'])){
        $_SESSION['shopping_cart']= array();

    }
    array_push($_SESSION['shopping_cart'],$_GET['id']);
    //Keeps track of number of items in cart
   // $count = count($_SESSION['shopping_cart']);
    // creating sequential array
   // $product_ids = array_column($_SESSION['shopping_cart'], 'id');

  //  print_r($product_ids);

    foreach($_SESSION['shopping_cart'] as $value) {

        $productCode = $value;
        $getCode     = "SELECT productCode, imgSrc, productName, description, colour, price, Gender
                            FROM products
                            WHERE productCode = '$productCode'";

        $queryResult = $dbConn->query($getCode);
        $rowObj      = $queryResult->fetchObject();
        $total = $total + $rowObj->price;
        echo"     
            <tbody>
                    <tr> 
                    <td><a href=\"#\"><img src=\"{$rowObj->imgSrc}\" class=\"img-responsive mx-sm d-block\" style=\"height:100px\"> </a></td>
                    <td><p class=\"font - weight - heavy text - center\">{$rowObj->productName}</p></td>
                    <td><p class=\"text - center\" >£{$rowObj->price}</p ></td>
                    </tr>
       
    ";


    }
?>
                     <tr>
                     <td><p class="font-weight-heavy text-center">Total Price</p></td>
                     <td></td>
                     <td ><p class=\"text-center\" ><?php echo"£$total"?></p ></td >
                    </tr >
                    </table >
                     <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="business" value="volumeincclothing@gmail.com">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="currency_code" value="GBP">
                            <input type="hidden" name="upload" value="1">
                            <?php
                                foreach ($_SESSION['shopping_cart'] as $value) {
                                    $i = 1;
                                    echo "
                                    <input type=\"hidden\" name=\"item_name_$i\" value=\"{$rowObj->productName}\">
                                    <input type=\"hidden\" name=\"quantity_$i\" value=\"1\">
                                    <input type=\"hidden\" name=\"amount_$i\" value=\"{$rowObj->price}\"> 
                                    ";
                                    $i++;
                                }
                            ?>
                                <input type="submit" value="PayPal">
                     </form>
            </div>
            <div class="col">
            </div>
        </div>

    <end>

        <br>
        <br>

    </end>
</div>


<script>
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        spaceBetween: -100,
        initialSlide:0.8,
        freeMode: true,
        freeModeSticky: true,
        freeModeMomentumRatio: 0.5,
    })
</script>

</body>
</html>