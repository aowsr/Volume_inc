<?php include "functions.php" ;

if (isset($_SESSION['logged-in']) && $_SESSION['logged-in']) {
    echo ' 

<!DOCTYPE html>
<html lang="en">
<head>
    createHead("Home")

</head>
<body>
<div id="mainWrapper">
    <header>
        createNav()
    </header>
    ';
}

