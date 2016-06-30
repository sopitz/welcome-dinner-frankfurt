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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo Config::get("URL"); ?>public/backend/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get("URL"); ?>public/backend/css/bootstrap-theme.min.css"/>

    <script src="<?php echo Config::get("URL"); ?>public/backend/js/bootstrap.min.js" type="text/javascript"></script>

    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

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

        $hostSelectionString = "";
        $hostCounter = 0;
        foreach($this->hosts as $host) {
            $postURL = '/host/update/';
            echo 'var HOSTinfowindow'.$hostCounter.' = new google.maps.InfoWindow({content: \'<div id="content"><h3 id="firstHeading" class="firstHeading"><a href="#" id="host_firstname" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getFirstname().'</a> '.$host->getLastname().' ('.$host->getGender().')</h3>(Host)<div id="bodyContent"><p>Tel: '.$host->getPhone().'</p><p>E-Mail: '.$host->getMail().'</p><p>Adresse: '.$host->getStreet().', '.$host->getZipCode().' '.$host->getCity().'</p><p>Sprachen: '.$host->getLanguages().'</p><p>weitere Sprachen: '.$host->getLanguagesnotes().'</p><p>erlaubte Anzahl Kinder: '.$host->getChildren().'</p><p>Referrer: '.$host->getWelcomeDinnerOrigin().'</p><p>Co-Hosts: '.$host->getCoHosts().'</p><p>Anmerkungen: '.$host->getNotes().'</p></div></div>\'});';
            if ($host->getMatched()) {
                echo 'var HOSTmarker'.$hostCounter.' = new google.maps.Marker({icon: \'http://maps.google.com/mapfiles/ms/icons/blue-dot.png\', position: {lat: '.$host->getLat().', lng: '.$host->getLong().'},map: map,title: \''.$host->getFirstname().' '.$host->getLastname().'\'});';
            } else {
                echo 'var HOSTmarker'.$hostCounter.' = new google.maps.Marker({icon: \'http://maps.google.com/mapfiles/ms/icons/red-dot.png\', position: {lat: '.$host->getLat().', lng: '.$host->getLong().'},map: map,title: \''.$host->getFirstname().' '.$host->getLastname().'\'});';
            }

            echo 'HOSTmarker'.$hostCounter.'.addListener(\'click\', function() {HOSTinfowindow'.$hostCounter.'.open(map, HOSTmarker'.$hostCounter.');});';
            echo '
                    $.fn.editable.defaults.mode = "inline";
                       $("#HOST_firstname'.$hostCounter.'").editable({
                           type: "text",
                           pk: 1, url:
                           "/post",
                           title: "Enter username"
                       });';
            $hostCounter++;
            $hostSelectionString = $hostSelectionString.'<option name="dinnerId" value="'.$host->getId().'">'.$host->getFirstname().' '.$host->getLastname().', '.$host->getDinner().'</option>';


        }

        $guestCounter = 0;
        foreach($this->guests as $guest) {
            if ($guest->getMatched()) {
                echo 'var GUESTinfowindow'.$guestCounter.' = new google.maps.InfoWindow({content: \'<div id="content"><div id="siteNotice"></div><h3 id="firstHeading" class="firstHeading">'.$guest->getFirstname().' '.$guest->getLastname().' ('.$guest->getGender().')</h3>(Guest)<div id="bodyContent"><p>Alter: '.$guest->getAge().'</p><p>Tel: '.$guest->getPhone().'</p><p>E-Mail: '.$guest->getMail().'</p><p>Adresse: '.$guest->getStreet().', '.$guest->getZipCode().' '.$guest->getCity().'</p><p>Land: '.$guest->getCountry().'</p><p>Sprachen: '.$guest->getLanguages().'</p><p>Essen: '.$guest->getFoodspecials().'</p><p>Essen Bemerkung: '.$guest->getFoodspecialsnotes().'</p><p>Referrer: '.$guest->getWelcomeDinnerOrigin().'</p><p>Begleitung: '.$guest->getBringalongs().'</p><p>Anmerkungen: '.$guest->getNotes().'</p></div></div>\'});';
                echo 'var GUESTmarker'.$guestCounter.' = new google.maps.Marker({icon: \'http://maps.google.com/mapfiles/ms/icons/blue-dot.png\', position: {lat: '.$guest->getLat().', lng: '.$guest->getLong().'},map: map,title: \''.$guest->getFirstname().' '.$guest->getLastname().'\'});';
            } else {
                echo 'var GUESTinfowindow'.$guestCounter.' = new google.maps.InfoWindow({content: \'<div id="content"><div id="siteNotice"></div><h3 id="firstHeading" class="firstHeading">'.$guest->getFirstname().' '.$guest->getLastname().' ('.$guest->getGender().')</h3>(Guest)<div id="bodyContent"><p>Alter: '.$guest->getAge().'</p><p>Tel: '.$guest->getPhone().'</p><p>E-Mail: '.$guest->getMail().'</p><p>Adresse: '.$guest->getStreet().', '.$guest->getZipCode().' '.$guest->getCity().'</p><p>Land: '.$guest->getCountry().'</p><p>Sprachen: '.$guest->getLanguages().'</p><p>Essen: '.$guest->getFoodspecials().'</p><p>Essen Bemerkung: '.$guest->getFoodspecialsnotes().'</p><p>Referrer: '.$guest->getWelcomeDinnerOrigin().'</p><p>Begleitung: '.$guest->getBringalongs().'</p><p>Anmerkungen: '.$guest->getNotes().'</p><p><form action="'.Config::get('URL').'guest/match/'.$guest->getId().'" method="post"><select name="dinnerId">'.$hostSelectionString.'</select><button type="submit">zuordnen</button></form></p></div></div>\'});';
                echo 'var GUESTmarker'.$guestCounter.' = new google.maps.Marker({icon: \'http://maps.google.com/mapfiles/ms/icons/green-dot.png\', position: {lat: '.$guest->getLat().', lng: '.$guest->getLong().'},map: map,title: \''.$guest->getFirstname().' '.$guest->getLastname().'\'});';
            }

            echo 'GUESTmarker'.$guestCounter.'.addListener(\'click\', function() {GUESTinfowindow'.$guestCounter.'.open(map, GUESTmarker'.$guestCounter.');});';
            $guestCounter++;
        }
        ?>

    }

    $(window).mousemove(function( ) {
        $.fn.editable.defaults.mode = "inline";
        $("#host_firstname").editable();
    });


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTvmx1dakeu0C95uGGmifv4v5C3B7iFk4&signed_in=true&callback=initMap"></script>
</body>
</html>