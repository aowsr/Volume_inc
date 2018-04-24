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
  if (isset($_POST["submit"])) {
      $name    = $_POST['custName'];
      $email   = $_POST['inputEmail'];
      $problem = $_POST['problemOption'];
      $message = $_POST['problemText'];


      $from    = 'Demo Contact Form';
      $to      = 'aows-r@live.co.uk';
      $subject = 'Message from Contact Demo ';

      $body = "From: $name\n E-Mail: $email\n Problem-type:\n $problem Message:\n $message";

     mail($to, $subject, $body, $from);



  }

}
?>