<?php
/**
 * Created by PhpStorm.
 * User: w16024005
 * Date: 15/03/2018
 * Time: 15:19
 */
function getConnection() {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=unn_w16014111",
            "unn_w16014111", "Bostonred12");
        $connection->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (Exception $e) {
        /* We should log the error to a file so the developer can look at any logs. However, for now we won't */
        throw new Exception("Connection error " . $e->getMessage(), 0, $e);
    }
}
function getTotalItems($Gender) {

    $dbConn = getConnection();

    $sql = "SELECT *   /* this while statement will run until there are no more records in the database */
                            FROM products
                            WHERE Gender = '$Gender' ";

    $queryResult = $dbConn->query($sql);
    $total = $queryResult->rowCount();
    echo $total;

}
function getProductsGrid($height,$limit,$Gender) {

        $dbConn = getConnection();

        if ($Gender == ""){
            $chkGen=null;
        }
        else {
            $chkGen= "WHERE Gender = '$Gender'";
        }

        $sql = "SELECT productCode, imgSrc, productName, description, colour, price, Gender  /* this while statement will run until there are no more records in the database */
                            FROM products
                            $chkGen
                            LIMIT $limit ";

        $queryResult = $dbConn->query($sql);
        while ($rowObj = $queryResult->fetchObject()) {
            echo "<div class=\"col m-1 \">\n

                    <a href=\"storePage.php?productCode={$rowObj->productCode}\"><img src=\"{$rowObj->imgSrc}\" class=\"mx-auto d-block\"  style=\"height:{$height}px\"></a>
                    <h6 class=\"text-center m-0 \">{$rowObj->productName}</h6>
                    <p class=\"text-center text-muted m-0 \">{$rowObj->colour}</p>
                    <p class=\"text-center m-0 \">£{$rowObj->price}</p>

                      
                      </div>\n";

        }

}
function getProductsSwipe() {
    $dbConn = getConnection();

    $sql = "SELECT imgSrc, productName, description, colour, price   /* this while statement will run until there are no more records in the database */
                            FROM products";


    $queryResult = $dbConn->query($sql);

    while ($rowObj = $queryResult->fetchObject()) {
        echo " <div class=\"swiper-slide\">
                        <div class=\"col-5\">\n
                            <a href=\"#\"><img src=\"{$rowObj->imgSrc}\" class=\"img-fluid mx-auto d-block\"></a>
                            <h5 class=\"text-center\">{$rowObj->productName}</h5>
                            <h6 class=\"text-center\">{$rowObj->price}</h6>
                        </div>

                    </div>\n";
    }
}

function sendHelpEmail() {

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

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
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "volumeincclothing@gmail.com";
    $mail->Password = "bostonred18";
    $mail->setFrom('volumeincclothing@gmail.com', 'Volume Inc');
    $mail->addAddress('aows-r@live.co.uk', 'To');

    $mail->Subject = "$name $problem";
    $mail->Body    =  "$email $problem $message";

    if (!$mail->send()) {
        echo "Error sending message";
    } else {
        echo "Message sent!";
    }




}


function showCart() {
    $dbConn = getConnection();
    $total  = 0;
    if (empty($_SESSION['shopping_cart'])) {
        $_SESSION['shopping_cart'] = array();

    }
    if (isset($_POST['add_too_cart'])) {
        array_push($_SESSION['shopping_cart'], $_GET['id']);
    }
    if(isset($_POST['removeBtn']))
    {
        removeItemFromCart();
    }

        //Keeps track of number of items in cart
        // $count = count($_SESSION['shopping_cart']);
        // creating sequential array
        // $product_ids = array_column($_SESSION['shopping_cart'], 'id');

        //  print_r($product_ids);

        foreach ($_SESSION['shopping_cart'] as $value) {

            $productCode = $value;
            $getCode     = "SELECT productCode, imgSrc, productName, description, colour, price, Gender
                            FROM products
                            WHERE productCode = '$productCode'";

            $queryResult = $dbConn->query($getCode);
            $rowObj      = $queryResult->fetchObject();
            $total       = $total + $rowObj->price;
            echo "     
            <tbody>
                    <tr> 
                    <td><a href=\"#\"><img src=\"{$rowObj->imgSrc}\" class=\"img-responsive mx-sm d-block\" style=\"height:100px\"> </a></td>
                    <td><p class=\"font - weight - heavy text - center\">{$rowObj->productName}</p></td>
                    <td><p class=\"text - center\" >£{$rowObj->price}</p ></td>
                    <td><form action=\"cartPage.php\" method=\"post\">
                    <input type=\"hidden\" name=\"removeItm\" value=\"$productCode\">
                    <button type=\"submit\" class=\"btn btn-dark btn-block\" name='removeBtn'>Remove From Cart</button>
                    </form></td>
                    
                    </tr>
       
        ";
        }
        echo "                     
                     <tr>
                     <td><p class=\"font-weight-heavy text-center\">Total Price</p></td>
                     <td></td>
                     <td ><p class=\"text - center\" > £{$total} </p ></td>
                    </tr >";


}
function finalizeTransaction() {
    $dbConn = getConnection();
    $i = 1;
    foreach ($_SESSION['shopping_cart'] as $value) {

        $productCode = $value;
        $getCode     = "SELECT productCode, imgSrc, productName, description, colour, price, Gender
                                                      FROM products
                                                      WHERE productCode = '$productCode'";

        $queryResult = $dbConn->query($getCode);
        $rowObj= $queryResult->fetchObject();

        echo "
                <input type=\"hidden\" name=\"item_name_$i\" value=\"{$rowObj->productName}\">
                <input type=\"hidden\" name=\"quantity_$i\" value=\"1\">
                <input type=\"hidden\" name=\"amount_$i\" value=\"{$rowObj->price}\">
                                    
            ";
        $i ++;

    }


}
function removeItemFromCart(){

    $valueRemove = $_POST['removeItm'];

    foreach($_SESSION['shopping_cart'] as $key => $value) {
        if($value == $valueRemove)
            unset($_SESSION['shopping_cart'][$key]);
    }

}