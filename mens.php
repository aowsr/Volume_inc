<?php include "functions.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php createHead("Home") ?>

</head>
<body>

<header>
    <?php createNav() ?>
</header>

<main>
    <!-- TITLE -->
    <div class="container-fluid" id="title-wrapper">
        <h1 class="font-weight-heavy text-center">MEN'S</h1>
    </div>
    <hr class="rgba-white-light" style="margin: 2% 10%;">
    <!-- MAIN CONTENT -->
    <div class="container-fluid" id="page-content-wrapper">
        <div class="container">
            <p>Items Displayed:
                <!-- DISPLAYS TOTAL NUMBER OF ITEMS -->
                <?php
                getTotalItems("Male");
                ?>
            </p>
            <div class="row">
                <!-- DISPLAYS PRODUCTS IN GRID -->
                <?php
                getProductsGrid(300, 100, "Male");
                ?>
            </div>
        </div>
    </div>
</main>
</body>
</html>