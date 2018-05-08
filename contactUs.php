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
<div class="container">

            <h1 class="text-center">Want to Contact Us Directly?</h1>
            <hr class="rgba-white-light" style="margin: 2% 10%;">
            <h5 class="text-center"> Email - volumeincclothing@gmail.com</h5>
            <hr class="rgba-white-light" style="margin: 2% 10%;">
            <h5 class="text-center">Direct Help Line - 07511 9292 929</h5>


<hr class="rgba-white-light" style="margin: 2% 10%;">
<h5 class=" text-center">Find us At - Newcastle upon Tyne NE2 1XE</h5>
<link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
<script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>
<div id="map" class="map"></div>
<script type="text/javascript">
    var map = new ol.Map({
        target: 'map',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([-1.6046367, 54.975373]),
            zoom: 16
        })
    });
</script>
</div>


</body>
</html>