<?php
/**
 * Created by PhpStorm.
 * User: w16024005
 * Date: 21/03/2018
 * Time: 13:01
 */
require_once('functions.php');
$dbConn = getConnection();
$search = $_POST['search'];
$sql2 = "SELECT * FROM products WHERE productName LIKE '".$search."%'";
$result = $dbConn->query($sql2);
$output = '';
if($result->fetchColumn() > 0)
{
    while ($rowObj = $result->fetchObject()) {
        $output .= "<div class=\"col \">\n

                    <a href=\"#\"><img src=\"{$rowObj->imgSrc}\" class=\"mx-auto d-block\"  style=\"height:200px\"></a>
                    <h4 class=\"text-center\">{$rowObj->productName}</h4>
                    <h6 class=\"text-center\">{$rowObj->colour}</h6>
                    <h6 class=\"text-center\">£{$rowObj->price}</h6>

                      
                      </div>\n";
        echo $output;
    }
}