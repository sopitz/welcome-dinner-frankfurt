<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Info windows</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map {
            height: 100%;
        }
    </style>


    <link rel="stylesheet" type="text/css" href="<?php echo Config::get("URL"); ?>public/backend/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get("URL"); ?>public/backend/css/bootstrap-theme.min.css"/>

    <script src="<?php echo Config::get("URL"); ?>public/backend/js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>
<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Hosts</h1>

            </div>
        </div>
    </div>

</div>
<div id="map"></div>


<script>

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: {lat: 50.104824, lng: 8.675119}
        });

        <?php

        $counter = 0;

        foreach($this->hosts as $host) {
            echo 'var infowindow'.$counter.' = new google.maps.InfoWindow({content: \'<div id="content"><div id="siteNotice"></div><h3 id="firstHeading" class="firstHeading">'.$host->getFirstname().' '.$host->getLastname().'</h3><div id="bodyContent"><p>Tel: '.$host->getPhone().'</p></div></div>\'});';
            echo 'var marker'.$counter.' = new google.maps.Marker({position: {lat: '.$host->getLat().', lng: '.$host->getLong().'},map: map,title: \''.$host->getFirstname().' '.$host->getLastname().'\'});';
            echo 'marker'.$counter.'.addListener(\'click\', function() {infowindow'.$counter.'.open(map, marker'.$counter.');});';
            $counter++;
        }
        ?>
    }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTvmx1dakeu0C95uGGmifv4v5C3B7iFk4&signed_in=true&callback=initMap"></script>
