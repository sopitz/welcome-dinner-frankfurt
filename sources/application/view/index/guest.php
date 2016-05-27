<!DOCTYPE html>
<html lang="de"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">.pac-container{background-color:#fff;position:absolute!important;z-index:1000;border-radius:2px;border-top:1px solid #d9d9d9;font-family:Arial,sans-serif;box-shadow:0 2px 6px rgba(0,0,0,0.3);-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;overflow:hidden}.pac-logo:after{content:"";padding:1px 1px 1px 0;height:16px;text-align:right;display:block;background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3.png);background-position:right;background-repeat:no-repeat;background-size:120px 14px}.hdpi.pac-logo:after{background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3_hdpi.png)}.pac-item{cursor:default;padding:0 4px;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;line-height:30px;text-align:left;border-top:1px solid #e6e6e6;font-size:11px;color:#999}.pac-item:hover{background-color:#fafafa}.pac-item-selected,.pac-item-selected:hover{background-color:#ebf2fe}.pac-matched{font-weight:700}.pac-item-query{font-size:13px;padding-right:3px;color:#000}.pac-icon{width:15px;height:20px;margin-right:7px;margin-top:6px;display:inline-block;vertical-align:top;background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons.png);background-size:34px}.hdpi .pac-icon{background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons_hdpi.png)}.pac-icon-search{background-position:-1px -1px}.pac-item-selected .pac-icon-search{background-position:-18px -1px}.pac-icon-marker{background-position:-1px -161px}.pac-item-selected .pac-icon-marker{background-position:-18px -161px}.pac-placeholder{color:gray}</style>

    <title>WelcomeDinner</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" media="all" href="<?php echo Config::get('URL'); ?>public/css/plain.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h1>
                    Dieses Formular ist für Gäste.
                    <small>
                        <a href="<?php echo Config::get('URL') ?>guest/register/en">English version</a>
                    </small>
                </h1>
                <h3>
                    Gastgeber können sich <a href="<?php echo Config::get('URL') ?>host/register">hier</a> eintragen.
                </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <p>Du bist neu in Frankfurt am Main? Du möchtest dich gerne auf Deutsch, Englisch und auch mit Händen und Füßen austauschen?</p>
            <p>Dann möchten dich Frankfurter herzlich willkommen heißen mit einem Abendessen!</p>
            <p>Wie das geht?</p>
            <ol>
                <li>Trag dich einfach in das Formular unten ein.</li>
                <li>Wir rufen dich in den Wochen danach auf deinem Telefon an und besprechen mit dir, wer dich zu einem Welcome Dinner einlädt.</li>
                <li>Hab ein tolles Abendessen! Du fährst (mit deiner Familie oder Freunden) zu deinem Gastgeber und ihr esst zusammen und lernt euch kennen. Dabei könnt ihr miteinander reden, Spiele spielen oder euch Fotos zeigen oder was ihr möchtet.</li>
            </ol>
            <p>Für Fragen und Kommentare melde Dich bitte bei uns: <a href="https://www.facebook.com/welcomedinnerfrankfurt">https://www.facebook.com/welcomedinnerfrankfurt</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">

            <form action="<?php echo Config::get('URL'); ?>register/guest" method="post">
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="gender">Geschlecht*</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="radio" name="gender" value="male" required> männlich<br>
                        <input type="radio" name="gender" value="female"> weiblich
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="gender">Vorname*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="firstname" placeholder="Vorname" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="lastname">Nachname*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="lastname" placeholder="Nachname" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="lastname">Alter*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="age" placeholder="Alter" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="phone">Telefon*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="tel" name="phone" placeholder="Telefon" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="mail">E-Mail*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="email" name="mail" placeholder="E-Mail" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="street">Straße & Hausnummer*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="street" placeholder="Straße & Hausnummer" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="zipCode">Postleitzahl*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="zipCode" placeholder="Postleitzahl" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="city">Stadt*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="city" placeholder="Stadt" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="city">Aus welchem Land kommst du?*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="country" placeholder="Land" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="languages">Welche Sprachen sprichst du?</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="checkbox" name="languages[]" value="german"> deutsch<br>
                        <input type="checkbox" name="languages[]" value="english"> englisch<br>
                        <input type="checkbox" name="languages[]" value="french"> französisch<br>
                        <input type="checkbox" name="languages[]" value="spanish"> spanisch<br>
                        <input type="checkbox" name="languages[]" value="arabic"> arabisch<br>
                        <textarea name="languagesnotes" placeholder="weitere Sprachkenntnisse"></textarea>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="languages">Essen</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="checkbox" name="foodspecials[]" value="halal"> Halal<br>
                        <input type="checkbox" name="foodspecials[]" value="nopork"> kein Schweinefleisch<br>
                        <input type="checkbox" name="foodspecials[]" value="vegetarian"> vegetarisch<br>
                        <textarea class="col-sm-12 col-md-10" name="foodspecialsnotes" placeholder="sonstiges"></textarea><br />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="bringalongs">Begleitung</label>
                    <div class="col-sm-12 col-md-10">
                        <textarea class="col-sm-12 col-md-10" name="bringalongs" placeholder="Freund? Kinder? Ehepartner? (Alter? Sprachen?)"></textarea><br />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="welcomeDinnerOrigin">Woher kennst Du Welcome Dinner?</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="welcomeDinnerOrigin" placeholder="Woher kennst Du Welcome Dinner?" />
                    </div>
                </div>
                <br />
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="notes">Möchtest Du noch etwas sagen?</label>
                    <div class="col-sm-12 col-md-10">
                        <textarea class="col-sm-12 col-md-10" name="notes" placeholder="Anmerkungen/wichtige Hinweise"></textarea>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="date"></label>
                    <input type="submit" class="btn btn-primary" value="abschicken">
                </div>
            </form>
        </div>
    </div>

</div>