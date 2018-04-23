<?php include "functions.php"?>

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

        <nav class="navbar navbar-expand-md navbar-fixed-top navbar-light bg-light main-nav">
            <div class="container">

                <div class="navbar-collapse collapse nav-content order-2 zindex-dropdown">

                    <ul class="nav navbar-nav ">
                        <li class="nav-item active mx-auto ">
                            <a class="nav-link mx-auto" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown mx-auto">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Mens
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="mens.php">Teeeees</a>
                                <a class="dropdown-item" href="#">Bottoms</a>
                                <a class="dropdown-item" href="#">Accessories</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-auto ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Womens
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Teeeees</a>
                                <a class="dropdown-item" href="#">Bottoms</a>
                                <a class="dropdown-item" href="#">Accessories</a>
                            </div>
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
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="d-flex flex-row order-4 order-sm-4 mx-1">
                    <div class =" d-flex flex-row mx-1 ">
                        <button class="btn btn-default btn-sm" type="button" >
                            <span class="oi oi-person" title="icon name" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class ="d-flex flex-row mx-1 ">
                        <button class="btn btn-default btn-sm" type="button" >
                            <span class="oi oi-cart" title="icon name" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>


    </header>
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner " >
                <div class="carousel-item active">
                    <video class="video-fluid d-none d-lg-block" autoplay loop>
                        <source src="media/Tropical.mp4" type="video/mp4" />
                    </video>
                    <img class="d-block d-lg-none w-100" src="media/nike_mobile.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-lg-block d-none w-100" src="media/nike.jpg" alt="Second slide">
                    <img class="d-block d-lg-none w-100" src="media/nike_mobile.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-lg-block d-none w-100" src="media/nike.jpg" alt="Second slide">
                    <img class="d-block d-lg-none w-100" src="media/nike_mobile.jpg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--MAIN BODY 1-->
        <div class="container-fluid p-0">
            <h1 class="font-weight-light text-center ">LATEST PRODUCTS</h1>

            <!--PRODUCTS GRID ONLY VISIBLE ON LARGE VIEWPORTS-->
            <div class="row" id = "prodGrid">
                <?php
                 getProductsGrid(150);
                ?>
            </div>
            <!--END OF PRODUCTS GRID-->

            <!--SWIPE FEATURE FOR MOBILE-->
            <div class="swiper-container">
                <!-- Additional required wrapper -->

                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php
                    getProductsSwipe();
                    ?>
                </div>
            </div>
            <!--END OF SWIPE FEATURE FOR MOBILE-->

        </div>
        <!--END OF MAIN BODY 1-->
        <!--CONTENT DIVIDER-->
        <hr class="rgba-white-light" style="margin: 2% 10%;">
        <!-- END OF CONTENT DIVIDER-->
        <!--MAIN BODY 2-->
        <div class="container-fluid px-0 ">

            <h1 class="font-weight-light text-center mb-5">BROWSE CATEGORIES</h1>
            <div class="row mx-auto">
                <div class="col  project project-1">
                    <a href="#" style="text-decoration: none">
                        <div class="project-hover text-center">
                            <div class="project-hover-overlay">
                                <h1 class="display-3">Mens</h1>
                            </div>
                            <a class="project-hover-shopBtn" href="#">Shop Mens</a>
                        </div>
                    </a>
                </div>
                <div class="col project project-2">
                    <a href="#" style="text-decoration: none">
                        <div class="project-hover text-center">
                            <div class="project-hover-overlay">
                                <h2 class="display-3">Womens</h2>
                            </div>
                            <a class="project-hover-shopBtn" href="#">Shop Womens</a>
                        </div>
                    </a>


                </div>

            </div>
        </div>
        <!-- END OF MAIN BODY 2-->
    </main>
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