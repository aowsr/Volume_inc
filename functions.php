<?php
/**
 * Created by PhpStorm.
 * User: w16024005
 * Date: 15/03/2018
 * Time: 15:19
 */
ini_set("session.save_path", "/home/unn_w16024005/sessionData");
session_start();

if (isset($_POST['item_id'])) {
    showCart();
}
if (isset($_POST['total_cart_items'])) {
    showCart();
}
function createHead($pageName) {
    echo "    
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
    <meta name=\"viewport\" content=\"width=device-width\"/>
    <title>$pageName</title>

    <link href=\"stylesheet.css\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Bootstrap 4.0 Beta -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha256-m/h/cUDAhf6/iBRixTbuc8+Rg2cIETQtPcH9D3p2Kg0=\" crossorigin=\"anonymous\" />
    <!-- open-iconic-bootstrap (icon set for bootstrap) -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css\" integrity=\"sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=\" crossorigin=\"anonymous\" />

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/css/swiper.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/css/swiper.min.css\">

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/js/swiper.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/js/swiper.min.js\"></script>
    <script type=\"text/javascript\" src=\"functions.js\"></script>
    <link rel=\"shortcut icon\" href=\"media/favicon.ico\"/>";

}

function createNav() {
    echo "<header>
    <!-- Nav Bar -->
    <nav class=\"navbar navbar-expand-md navbar-fixed-top navbar-light bg-light main-nav\">
        <div class=\"container\">
            <div class=\"navbar-collapse collapse nav-content order-2 zindex-dropdown\">

                <ul class=\"nav navbar-nav \">
                    <li class=\"nav-item active mx-auto \">
                        <a class=\"nav-link\" href=\"index.php\">Home</a>
                    </li>
                    <li class=\"nav-item mx-auto\">
                        <a class=\"nav-link\" href=\"mens.php\">Men's</a>
                    </li>
                    <li class=\"nav-item mx-auto\">
                        <a class=\"nav-link\" href=\"womens.php\">Women's</a>
                    </li>
                </ul>
            </div>
            <ul class=\"nav navbar-nav text-nowrap flex-row  order-1 order-md-2 \" >

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".nav-content\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"nav navbar-nav mx-3 \">
                    <img src=\"media/volume_inc_md.png\" class=\"d-none d-sm-block\" alt=\"\">
                    <img src=\"media/volume_inc_sm.png\" class=\"d-block d-sm-none\" alt=\"\">
                </div>
            </ul>
            <div class=\"ml-auto navbar-collapse collapse nav-content order-3 order-md-3\">
                <ul class=\"ml-auto nav navbar-nav\">
                    <li class=\"nav-item mx-auto\">
                        <a class=\"nav-link\" href=\"help.php\">Help</a>
                    </li>
                    <li class=\"nav-item mx-auto\">
                        <a class=\"nav-link\" href=\"contactUs.php\">Contact</a>
                    </li>
                </ul>
                
                
                <ul class=\"nav navbar-nav \">
                    <li class=\"nav-item active mx-auto \">
                                                <!-- Button trigger modal -->
                        <button type=\"button\" class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#exampleModalCenter\">
                          <span class=\"oi oi-person\"></span>
                        </button>";
    if (isset($_SESSION['logged-in']) && $_SESSION['logged-in']) {
        echo"
<!-- Modal -->
        <div class=\"modal
             fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
              <div class=\"modal-content\" id='chk'>
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\"></h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\" >
                        <h1 class='text-center'>Welcome back!</h1>
                    
                    <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" name='logoutBtn' class=\"btn btn-warning\" onclick=\"logout()\">Logout</button>  
        ";
    }
    else {
        echo "
                        
                        <!-- Modal -->
                        <div class=\"modal
                             fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                        <div class=\"modal-content\" id='chk'>
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\">Login in Your Account</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\" >
                                <!-- Text input-->
                                <form>
                                    <div class=\"form-group\">
                        
                                        <div class=\"col\">
                                            <input id=\"userinput\" name=\"textinput\" type=\"text\" placeholder=\"Username\" class=\"form-control input-md\" value=''>
                                        </div>
                                    </div>
                        
                                    <!-- Password input-->
                                    <div class=\"form-group\">
                                        <div class=\"col\">
                                            <input id=\"passwordinput\" name=\"passwordinput\" type=\"password\" placeholder=\"Password\"
                                                   class=\"form-control input-md\" value=''>
                                        </div>
                                    </div>
                                </form>
                            
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                <button type=\"button\" name='loginBtn' class=\"btn btn-primary\" onclick=\"login()\">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
}
    echo"
        </li>
    </ul>
                
</div>
            <div class=\"d-flex flex-row order-4 order-sm-4 mx-1\">
                <div class =\"d-flex flex-row mx-1 \">
                    <a href=\"cartPage.php\">
                        <button class=\"btn btn-default\"  id=\"\" role=\"button\" value=\"\">
                                <span class=\"oi oi-cart\" title=\"icon name\" aria-hidden=\"true\"></span>
                                <span id=\"total_items\" class=\"dot\"></span>
                        </button>
                    </a>
                </div>
            </div>
            
        </div>
    </nav>
</header>";

}

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
    $total       = $queryResult->rowCount();
    echo $total;

}

function getProductsGrid($height, $limit, $Gender) {

    $dbConn = getConnection();

    if ($Gender == "") {
        $chkGen = null;
    }
    else {
        $chkGen = "WHERE Gender = '$Gender'";
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

function displayChosenProduct() {
    $dbConn      = getConnection();
    $productCode = filter_has_var(INPUT_GET, 'productCode') ? $_GET['productCode'] : null;

    $getCode = "SELECT productCode, imgSrc, productName, description, colour, price, Gender
                            FROM products
                            WHERE productCode = '$productCode'";

    $queryResult = $dbConn->query($getCode);
    $rowObj      = $queryResult->fetchObject();

    echo "<div class=\"container-fluid\" id =\"wrapper\">
    <input type=\"hidden\" name=\"code\"  id= '{$rowObj->productCode}' value=\"{$rowObj->productCode}\">
    
     
     <main>
        <div class=\"continer m-sm-5\" id=\"storeMain\">
            <div class = \"row m-sm-4\">
                <!-- Image Col -->
                <div class = \"col \">
                    <a href=\"#\"><img src=\"{$rowObj->imgSrc}\" class=\"img-fluid mx-auto d-block\"></a>
                 </div>
                <!-- Details Col -->
                <div class = \"col-sm mx-2\"> 
                <h1 class=\"font-weight-heavy text-center\">{$rowObj->productName}</h1>
                <h3 class=\"font-weight-light text-center\">{$rowObj->colour}</h3>
                <h4 class=\"text-center\">£{$rowObj->price}</h4>

                <form method=\"post\" action=\"cartPage.php?id={$rowObj->productCode}\">
                <div class=\"form-group p-5\">
                    
                    <select class=\"form-control mb-3 \" id=\"problemOption\">
                        <option value=\"\" selected disabled>Select Size</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    
                <button type=\"submit\" class=\"btn btn-dark btn-block mb-3\" name = \"quick_buy\">Quick Buy</button>
                <button type=\"button\" class=\"btn btn-secondary btn-block mb-3\"  name = \"add_to_cart\" onclick=\"cart('{$rowObj->productCode}')\">Add To Cart</button>
                
                </div>
                </form>
                
                <h4 class=\"m-3\">Description</h4>
                <p class=\"m-3\">{$rowObj->description}</p>
                <h4 class=\"m-3\">Shipping</h4>
                
            </div>
      </div>

     </main>";


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
    $mail->SMTPDebug   = 0;
    $mail->Debugoutput = 'html';
    $mail->Host        = "smtp.gmail.com";
    $mail->Port        = 587;
    $mail->SMTPSecure  = 'tls';
    $mail->SMTPAuth    = true;
    $mail->Username    = "volumeincclothing@gmail.com";
    $mail->Password    = "bostonred18";
    $mail->setFrom('volumeincclothing@gmail.com', 'Volume Inc');
    $mail->addAddress('aows-r@live.co.uk', 'To');

    $mail->Subject = "$name $problem";
    $mail->Body    = "$email $problem $message";

    if (!$mail->send()) {
        echo "Error sending message";
    }
    else {
        echo "Message sent!";
    }


}

function showCart() {
    $dbConn = getConnection();
    $total  = 0;
    if (empty($_SESSION['shopping_cart'])) {
        $_SESSION['shopping_cart'] = array();

    }
    if (isset($_POST['quick_buy'])) {
        array_push($_SESSION['shopping_cart'], $_GET['id']);
    }
    if (isset($_POST['item_id'])) {
        array_push($_SESSION['shopping_cart'], $_POST['item_id']);
        echo count($_SESSION['shopping_cart']);
        exit;
    }
    if (isset($_POST['total_cart_items'])) {
        echo count($_SESSION['shopping_cart']);
        exit;
    }

    if (isset($_POST['removeBtn'])) {
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
                    
                    <th scope=\"row\"><a href=\"#\"><img src=\"{$rowObj->imgSrc}\" class=\"img-responsive mx-sm d-block\" style=\"height:60px\"> </a></th>
                    <td><p class=\"font - weight - heavy text - center\">{$rowObj->productName}</p></td>
                    <td><p class=\"text - center\" >£{$rowObj->price}</p ></td>
                    <td><form action=\"cartPage.php\" method=\"post\">
                    <input type=\"hidden\" name=\"removeItm\" value=\"$productCode\">
                    <button type=\"submit\" class=\"btn btn-dark btn-block\" name='removeBtn'>Remove</button>
                    </form></td>
                    
                    </tr>
       
        ";
    }
    echo "                     
                     <tr>
                     <th scope=\"row\"><p class=\"font-weight-heavy text-center\">Total Price</p></th>
                     <td></td>
                     <td ><p class=\"text - center\" > £{$total} </p ></td>
                    </tr >";

}

function finalizeTransaction() {
    $dbConn = getConnection();
    $i      = 1;
    foreach ($_SESSION['shopping_cart'] as $value) {

        $productCode = $value;
        $getCode     = "SELECT productCode, imgSrc, productName, description, colour, price, Gender
                                                      FROM products
                                                      WHERE productCode = '$productCode'";

        $queryResult = $dbConn->query($getCode);
        $rowObj      = $queryResult->fetchObject();

        echo "
                <input type=\"hidden\" name=\"item_name_$i\" value=\"{$rowObj->productName}\">
                <input type=\"hidden\" name=\"quantity_$i\" value=\"1\">
                <input type=\"hidden\" name=\"amount_$i\" value=\"{$rowObj->price}\">
                                    
            ";
        $i++;

    }


}

function removeItemFromCart() {

    $valueRemove = $_POST['removeItm'];

    foreach ($_SESSION['shopping_cart'] as $key => $value) {
        if ($value == $valueRemove) {
            unset($_SESSION['shopping_cart'][$key]);
        }
    }

}