<?php include "functions.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php createHead("Home") ?>

</head>
<body>
<div id="mainWrapper">
    <header>
        <?php createNav() ?>
    </header>
    <!-- CAROUSEL -->
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <video class="video-fluid d-none d-lg-block" autoplay loop>
                        <source src="media/Tropical.mp4" type="video/mp4"/>
                    </video>
                    <img class="d-block d-lg-none w-100" src="media/nike_mobile.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-lg-block d-none w-100" src="media/Spirng_Style_web.jpg" alt="Second slide">
                    <img class="d-block d-lg-none w-100" src="media/logo_tee_mobile.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-lg-block d-none w-100" src="media/nike3.jpg" alt="Third slide">
                    <img class="d-block d-lg-none w-100" src="media/nike3_mobile.jpg" alt="Third slide">
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
            <hr class="rgba-white-light" style="margin: 2% 10%;">
            <br>
            <!--PRODUCTS GRID ONLY VISIBLE ON LARGE VIEWPORTS-->
            <div class="row" id="prodGrid">
                <?php
                getProductsGrid(500, 6, '');
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
                                <h1 class="display-3"> Mens</h1>
                            </div>
                            <a class="project-hover-shopBtn" href="mens.php">Shop Mens</a>
                        </div>
                    </a>
                </div>
                <div class="col project project-2">
                    <a href="#" style="text-decoration: none">
                        <div class="project-hover text-center">
                            <div class="project-hover-overlay">
                                <h2 class="display-3">Womens</h2>
                            </div>
                            <a class="project-hover-shopBtn" href="womens.php">Shop Womens</a>
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
<!-- SCRIPT FOR SWIPE ITEMS ON MOBILE -->
<script>
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        spaceBetween: -100,
        initialSlide: 0.8,
        freeMode: true,
        freeModeSticky: true,
        freeModeMomentumRatio: 0.5
    })
</script>
<script>
    function login() {
        var username = document.getElementById("userinput").value;
        var password = document.getElementById("passwordinput").value;

        $.ajax({
            type: 'post',
            url: 'loginProccess.php',
            data: {
                username: username,
                password:password
            },
            success: function (response) {
                document.getElementById("chk").innerHTML = response;
            }
        });

    }</script>

</body>
</html>