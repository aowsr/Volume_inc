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

    <script type='text/javascript' src='jq/js/libs/jquery-3.2.1.js'></script>
    <script type='text/javascript' src='jq/js/jq1.js'></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.esm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.esm.bundle.js"></script>

</head>
<body>

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
                                <a class="dropdown-item" href="#">Teeeees</a>
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
    <div class="container-fluid" id ="wrapper">
        <h1 class="text-center">CLOTHING</h1>


        <div id="sidebar-wrapper">
            <ul class="sidebar-nav list-unstyled">
                <a href="#" class="btn btn-light" id="menu-close">Close Menu</a>
                <li>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Gender
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Mens
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Womens
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div   >

                </li>
            </ul>
        </div>

        <div class="container-fluid" id ="page-content-wrapper">
            <div class="container">
                <a href="#" class="btn btn-light" id="menu-toggle">Show Filter</a>
                <p>Items Displayed:
                    <?php
                    getTotalItems();
                    ?>
                </p>
                <div class="row" >

                    <?php
                    getProductsGrid(300);
                    ?>
            </div>
        </div>

    </div>

    <script>
        $("#menu-toggle,#menu-close").click(function (e) {

            e.preventDefault();
            $("#wrapper").toggleClass("show");

            $("#menu-toggle").html("Hide Filter");

        });
    </script>




</div>
</body>
</html>