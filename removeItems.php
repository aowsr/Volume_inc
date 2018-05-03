<?php include "functions.php";

ini_set("session.save_path", "/home/unn_w16024005/sessionData");
session_start();
//$product_ids = array();
// Variable to be used later to calculate total cost of items
$dbConn = getConnection();

echo $_POST['removeItm'];
$valueRemove = $_POST['removeItm'];

foreach($_SESSION['shopping_cart'] as $key => $value) {
    if($value == $valueRemove)
        unset($_SESSION['shopping_cart'][$key]);
}

?>

<a href="cartPage.php">RETURN</a>
