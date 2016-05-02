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
<div id="map"></div>
<script>

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: {lat: 50.104824, lng: 8.675119}
        });

        <?php

        $hostCounter = 0;
        foreach($this->hosts as $host) {
            echo 'var HOSTinfowindow'.$hostCounter.' = new google.maps.InfoWindow({content: \'<div id="content"><div id="siteNotice"></div><h3 id="firstHeading" class="firstHeading">'.$host->getFirstname().' '.$host->getLastname().'</h3>(Host)<div id="bodyContent"><p>Tel: '.$host->getPhone().'</p></div></div>\'});';
            echo 'var HOSTmarker'.$hostCounter.' = new google.maps.Marker({position: {lat: '.$host->getLat().', lng: '.$host->getLong().'},map: map,title: \''.$host->getFirstname().' '.$host->getLastname().'\'});';
            echo 'HOSTmarker'.$hostCounter.'.addListener(\'click\', function() {HOSTinfowindow'.$hostCounter.'.open(map, HOSTmarker'.$hostCounter.');});';
            $hostCounter++;
        }

        $guestCounter = 0;
        foreach($this->guests as $guest) {
            echo 'var GUESTinfowindow'.$guestCounter.' = new google.maps.InfoWindow({content: \'<div id="content"><div id="siteNotice"></div><h3 id="firstHeading" class="firstHeading">'.$guest->getFirstname().' '.$guest->getLastname().'</h3>(Guest)<div id="bodyContent"><p>Tel: '.$guest->getPhone().'</p></div></div>\'});';
            echo 'var GUESTmarker'.$guestCounter.' = new google.maps.Marker({icon: \'http://maps.google.com/mapfiles/ms/icons/green-dot.png\', position: {lat: '.$guest->getLat().', lng: '.$guest->getLong().'},map: map,title: \''.$guest->getFirstname().' '.$guest->getLastname().'\'});';
            echo 'GUESTmarker'.$guestCounter.'.addListener(\'click\', function() {GUESTinfowindow'.$guestCounter.'.open(map, GUESTmarker'.$guestCounter.');});';
            $guestCounter++;
        }



        ?>
    }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTvmx1dakeu0C95uGGmifv4v5C3B7iFk4&signed_in=true&callback=initMap"></script>
