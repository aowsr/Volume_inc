<?php
include "functions.php";
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$name    = $_POST['custName'];
$email   = $_POST['inputEmail'];
$problem = $_POST['problemOption'];
$message = $_POST['problemText'];


$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug   = 0;
$mail->Debugoutput = 'html';
$mail->Host        = "smtp.gmail.com";
$mail->Port        = 587;
$mail->SMTPSecure  = 'tls';
$mail->SMTPAuth    = true;
$mail->Username    = "volumeincclothing@gmail.com";
$mail->Password    = "bostonred18";
$mail->setFrom('volumeincclothing@gmail.com', 'Volume Inc');
$mail->addAddress('aows-r@live.co.uk', 'Aows');

$mail->Subject = "$name $problem";
$mail->Body    = "$email $problem $message";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title>Volume Inc</title>

    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap 4.0 Beta -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha256-m/h/cUDAhf6/iBRixTbuc8+Rg2cIETQtPcH9D3p2Kg0=" crossorigin="anonymous"/>
    <!-- open-iconic-bootstrap (icon set for bootstrap) -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css"
          integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">

    <script type='text/javascript' src='jq/js/libs/jquery-3.2.1.js'></script>
    <script type='text/javascript' src='jq/js/jq1.js'></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.esm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.esm.bundle.js"></script>

    <link rel="shortcut icon" href="media/favicon.ico"/>

</head>
<body>

<header>
    <!--NAV BAR -->
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
            <ul class="nav navbar-nav text-nowrap flex-row  order-1 order-md-2 ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".nav-content"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="nav navbar-nav mx-3 center ">
                    <img src="media/volume_inc_md.png" class="d-none d-sm-block" alt="">
                    <img src="media/volume_inc_sm.png" class="d-block d-sm-none" alt="">
                </div>
            </ul>
            <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3">
                <ul class="ml-auto nav navbar-nav">
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="help.php">Help</a>
                    </li>
                    <!-- for formatting -->
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href=""></a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href=""></a>
                    </li>
                </ul>
            </div>
            <div class="d-flex flex-row order-4 order-sm-4 mx-1">
                <div class="d-flex flex-row mx-1 ">
                    <button class="btn btn-default btn-sm" type="button">
                        <span class="oi oi-cart" title="icon name" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php
// if email fails to send
if (!$mail->send()) {
    echo "<div class=\"container-fluid\" id =\"title-wrapper\">
            <h1 class=\"font-weight-heavy text-center\">There was an error with your email</h1>
          </div>";
}
// if email sends successfully
else {
    echo "<div class=\"container-fluid\" id =\"title-wrapper\">
            <h1 class=\"font-weight-heavy text-center\">Your message has been sent!</h1>
            <br>
            <br>
            <br>
            <h2 class=\" text-center\">Want to Contact Us Directly?</h2>
            <hr class=\"rgba-white-light\" style=\"margin: 2% 10%;\">
            <h3 class=\" text-center\"> Email - volumeincclothing@gmail.com</h3>
            <hr class=\"rgba-white-light\" style=\"margin: 2% 10%;\">
            <h3 class=\" text-center\">Direct Help Line - 07511 9292 929</h3>
            
         </div>";
}
?>
<hr class="rgba-white-light" style="margin: 2% 10%;">
<h3 class=" text-center">Find us At - Newcastle upon Tyne NE2 1XE</h3>
<link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
<script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>
<div id="map" class="map"></div>
<script type="text/javascript">
    var map = new ol.Map({
        target: 'map',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([-1.6046367, 54.975373]),
            zoom: 16
        })
    });
</script>

</body>
</html>


