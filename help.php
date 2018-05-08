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
<!-- TITLE -->
<div class="container-fluid" id="wrapper">
    <h1 class="font-weight-heavy text-center">Help</h1>
</div>
<!-- Form container -->
<div class="container" id="form-wrapper">
    <div class="row ">
        <div class="col-12 col-md-auto" id="help-form">
            <!-- FORM -->
            <form method="post" name="volHelpFrm" action="sendEmail.php">
                <!-- EMAIL INPUT -->
                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" name="inputEmail" aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                    </small>
                </div>
                <!-- NAME INPUT -->
                <div class="form-group">
                    <label for="custName">Your Name</label>
                    <input class="form-control" type="text" value="Enter Name" name="custName">
                </div>
                <!-- PROBLEM SELECTOR -->
                <div class="form-group">
                    <label for="helpSelection">How can We Help?</label>
                    <select class="form-control" name="problemOption">
                        <option>Payment</option>
                        <option>Order</option>
                        <option>Returns</option>
                        <option>Delivery</option>
                        <option>Product Information</option>
                        <option>Other</option>
                    </select>
                </div>
                <!-- DESCRIPTION TEXT AREA -->
                <div class="form-group">
                    <label for="problemText">Tell Us About The Issue</label>
                    <textarea class="form-control" name="problemText" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-light">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>