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
        $selectionStringArray = array();
        foreach($this->hosts as $host) {
            $postURL = '/host/update/';
            echo 'var HOSTinfowindow'.$hostCounter.' = new google.maps.InfoWindow({content: \'';
            echo '<div id="content">';
                echo '<h3 id="firstHeading" class="firstHeading">';
                    echo '<a href="#" id="host_firstname" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getFirstname().'</a> ';
                    echo '<a href="#" id="host_lastname" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getLastname().'</a> ';
                    echo '(<a href="#" id="host_gender" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getGender().'</a>)';
                echo '</h3>(Host)';
                echo '<div id="bodyContent">';
                    echo '<p>Dinner: <a href="#" id="host_dinner" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getDinner().'</a></p>';
                    echo '<p>Tel: <a href="#" id="host_phone" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getPhone().'</a></p>';
                    echo '<p>E-Mail: <a href="#" id="host_mail" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getMail().'</a></p>';
                    echo '<p>';
                        echo 'Adresse: <a href="#" id="host_street" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getStreet().'</a>, ';
                        echo '<a href="#" id="host_zipCode" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getZipCode().'</a> ';
                        echo '<a href="#" id="host_city" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getCity().'</a>';
                    echo '</p>';
                    echo '<p>Sprachen: <a href="#" id="host_languages" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getLanguages().'</a></p>';
                    echo '<p>weitere Sprachen: <a href="#" id="host_languagesnotes" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getLanguagesnotes().'</a></p>';
                    echo '<p>erlaubte Anzahl Kinder: <a href="#" id="host_children" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getChildren().'</a></p>';
                    echo '<p>Referrer: <a href="#" id="host_origin" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getWelcomeDinnerOrigin().'</a></p>';
                    echo '<p>Co-Hosts: <a href="#" id="host_cohosts" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getCoHosts().'</a></p>';
                    echo '<p>Anmerkungen: <a href="#" id="host_notes" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$host->getNotes().'</a></p>';
                echo '</div>';
            echo '</div>\'});';
            echo '
        ';


            if ($host->getMatched()) {
                echo 'var HOSTmarker'.$hostCounter.' = new google.maps.Marker({icon: \'http://maps.google.com/mapfiles/ms/icons/blue-dot.png\', position: {lat: '.$host->getLat().', lng: '.$host->getLong().'},map: map,title: \''.$host->getFirstname().' '.$host->getLastname().'\'});';
            } else {
                echo 'var HOSTmarker'.$hostCounter.' = new google.maps.Marker({icon: \'http://maps.google.com/mapfiles/ms/icons/red-dot.png\', position: {lat: '.$host->getLat().', lng: '.$host->getLong().'},map: map,title: \''.$host->getFirstname().' '.$host->getLastname().'\'});';
            }
            echo '
        ';
            echo 'HOSTmarker'.$hostCounter.'.addListener(\'click\', function() {HOSTinfowindow'.$hostCounter.'.open(map, HOSTmarker'.$hostCounter.');});';
            echo '
        ';
            $hostCounter++;
            if ($host->getMatched() != true) {
                $selectionStringArray[$host->getDinner()] = '<option name="dinnerId" value="'.$host->getId().'">'.$host->getFirstname().' '.$host->getLastname().', '.$host->getDinner().'</option>';
            }
        }

        ksort($selectionStringArray);
        foreach ($selectionStringArray as $entry) {
            $hostSelectionString = $hostSelectionString.$entry;
        }

        echo '
        ';

        $guestCounter = 0;
        $postURL = '/guest/update/';
        foreach($this->guests as $guest) {
            if ($guest->getMatched()) {
                echo 'var GUESTinfowindow'.$guestCounter.' = new google.maps.InfoWindow({content: \'';
                echo '<div id="content">';
                    echo '<div id="siteNotice"></div>';
                    echo '<h3 id="firstHeading" class="firstHeading">';
                    echo ' <a href="#" id="guest_firstname" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getFirstname().'</a>';
                    echo ' <a href="#" id="guest_lastname" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getLastname().'</a> (';
                    echo '<a href="#" id="guest_gender" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getGender().'</a>)';
                    echo '</h3>(Guest)';
                    echo '<div id="bodyContent">';
                        echo '<p>Alter: <a href="#" id="guest_age" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getAge().'</a></p>';
                        echo '<p>Tel: <a href="#" id="guest_phone" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getPhone().'</a></p>';
                        echo '<p>E-Mail: <a href="#" id="guest_mail" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getMail().'</a></p>';
                        echo '<p>Adresse: ';
                            echo '<a href="#" id="guest_street" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getStreet().'</a>, ';
                            echo '<a href="#" id="guest_zipCode" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getZipCode().'</a> ';
                            echo '<a href="#" id="guest_city" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getCity().'</a>';
                        echo '</p>';
                        echo '<p>Land: <a href="#" id="guest_country" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getCountry().'</a></p>';
                        echo '<p>Sprachen: <a href="#" id="guest_languages" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getLanguages().'</a></p>';
                        echo '<p>Essen: <a href="#" id="guest_foodspecials" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getFoodspecials().'</a></p>';
                        echo '<p>Essen Bemerkung: <a href="#" id="guest_foodspecialsnotes" data-type="text" data-pk="'.$host->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getFoodspecialsnotes().'</a></p>';
                        echo '<p>Referrer: <a href="#" id="guest_origin" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getWelcomeDinnerOrigin().'</a></p>';
                        echo '<p>Begleitung: <a href="#" id="guest_bringalongs" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getBringalongs().'</a></p>';
                        echo '<p>Anmerkungen: <a href="#" id="guest_notes" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getNotes().'</a></p>';
                        echo '<hr />';
                        echo '<p>Zugeordnet zu: <a href="#" id="guest_dinner" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getHost().'</a></p>';
                    echo '</div>';
                echo '</div>\'});';
                echo '
        ';
                echo 'var GUESTmarker'.$guestCounter.' = new google.maps.Marker({icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png", position: {lat: '.$guest->getLat().', lng: '.$guest->getLong().'}, map: map,title: "'.$guest->getFirstname().' '.$guest->getLastname().'"});';
                echo '
        ';
            } else {
                echo 'var GUESTinfowindow'.$guestCounter.' = new google.maps.InfoWindow({content: \'';
                echo '<div id="content">';
                    echo '<div id="siteNotice"></div>';
                    echo '<h3 id="firstHeading" class="firstHeading">';
                    echo ' <a href="#" id="guest_firstname" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getFirstname().'</a>';
                    echo ' <a href="#" id="guest_lastname" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getLastname().'</a> (';
                    echo '<a href="#" id="guest_gender" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getGender().'</a>)';
                    echo '</h3>(Guest)';
                    echo '<div id="bodyContent">';
                        echo '<p>Alter: <a href="#" id="guest_age" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getAge().'</a></p>';
                        echo '<p>Tel: <a href="#" id="guest_phone" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getPhone().'</a></p>';
                        echo '<p>E-Mail: <a href="#" id="guest_mail" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getMail().'</a></p>';
                        echo '<p>Adresse: ';
                            echo '<a href="#" id="guest_street" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getStreet().'</a>, ';
                            echo '<a href="#" id="guest_zipCode" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getZipCode().'</a> ';
                            echo '<a href="#" id="guest_city" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getCity().'</a>';
                        echo '</p>';
                        echo '<p>Land: <a href="#" id="guest_country" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getCountry().'</a></p>';
                        echo '<p>Sprachen: <a href="#" id="guest_languages" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getLanguages().'</a></p>';
                        echo '<p>Essen: <a href="#" id="guest_foodspecials" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getFoodspecials().'</a></p>';
                        echo '<p>Essen Bemerkung: <a href="#" id="guest_foodspecialsnotes" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getFoodspecialsnotes().'</a></p>';
                        echo '<p>Referrer: <a href="#" id="guest_origin" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getWelcomeDinnerOrigin().'</a></p>';
                        echo '<p>Begleitung: <a href="#" id="guest_bringalongs" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getBringalongs().'</a></p>';
                        echo '<p>Anmerkungen: <a href="#" id="guest_notes" data-type="text" data-pk="'.$guest->getId().'" data-url="'.$postURL.'" data-title="">'.$guest->getNotes().'</a></p>';
                        echo '<p><form action="'.Config::get('URL').'guest/match/'.$guest->getId().'" method="post">';
                            echo '<select name="dinnerId">'.$hostSelectionString.'</select>';
                            echo '<button type="submit">zuordnen</button>';
                        echo '</form></p>';
                    echo '</div>';
                echo '</div>\'});';
                echo '
        ';
                echo 'var GUESTmarker'.$guestCounter.' = new google.maps.Marker({icon: \'http://maps.google.com/mapfiles/ms/icons/green-dot.png\', position: {lat: '.$guest->getLat().', lng: '.$guest->getLong().'},map: map,title: \''.$guest->getFirstname().' '.$guest->getLastname().'\'});';
                echo '
        ';
            }

            echo 'GUESTmarker'.$guestCounter.'.addListener(\'click\', function() {GUESTinfowindow'.$guestCounter.'.open(map, GUESTmarker'.$guestCounter.');});';
            $guestCounter++;
        }
        ?>

    }

    $(window).mousemove(function( ) {
        $.fn.editable.defaults.mode = "inline";
        $("#host_firstname").editable();
        $("#host_lastname").editable();
        $("#host_gender").editable();
        $("#host_dinner").editable();
        $("#host_phone").editable();
        $("#host_mail").editable();
        $("#host_street").editable();
        $("#host_zipCode").editable();
        $("#host_city").editable();
        $("#host_languages").editable();
        $("#host_languagesnotes").editable();
        $("#host_children").editable();
        $("#host_origin").editable();
        $("#host_cohosts").editable();
        $("#host_notes").editable();


        $("#guest_firstname").editable();
        $("#guest_lastname").editable();
        $("#guest_gender").editable();
        $("#guest_age").editable();
        $("#guest_phone").editable();
        $("#guest_mail").editable();
        $("#guest_street").editable();
        $("#guest_zipCode").editable();
        $("#guest_city").editable();
        $("#guest_country").editable();
        $("#guest_languages").editable();
        $("#guest_languagesnotes").editable();
        $("#guest_foodspecials").editable();
        $("#guest_foodspecialsnotes").editable();
        $("#guest_origin").editable();
        $("#guest_bringalongs").editable();
        $("#guest_notes").editable();
        $("#guest_dinner").editable();
    });


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTvmx1dakeu0C95uGGmifv4v5C3B7iFk4&signed_in=true&callback=initMap"></script>
</body>
</html>