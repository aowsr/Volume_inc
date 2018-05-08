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
    <div class="container-fluid my-5 " id="wrapper">
        <h1 class="font-weight-heavy text-center">Your Cart</h1>
    </div>
    <div class="container-fluid p-0">


            <table class="table ">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col"></th>
                    <th scope="col">Price</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <?php showCart(); ?>
            </table>
            <div class="mx-5">
                <form  action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="business" value="volumeincclothing@gmail.com">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="currency_code" value="GBP">
                    <input type="hidden" name="upload" value="1">
                    <?php finalizeTransaction() ?>
                    <button type="submit" class="btn btn-dark btn-default" id="PayPal">Pay Using PayPal</button>
                </form>
            </div>


    </div>

    <end>

        <br>
        <br>

    </end>
</div>


</body>
</html>