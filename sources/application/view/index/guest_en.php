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
                    This form is for guests.
                    <small>
                        <a href="<?php echo Config::get('URL') ?>guest/register/de">Deutsche Version</a>
                    </small>
                </h1>
                <h3>
                    Hosts can register <a href="<?php echo Config::get('URL') ?>host/register">here</a>.
                </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <p>You are new in Frankfurt? You would like to communicate in German, English, and with your hands and feet?</p>
            <p>Then Frankfurt would like to give you a warm welcome with a nice dinner!</p>
            <p>How does this work?</p>
            <ol>
                <li>Fill out this form.</li>
                <li>We will call you sometime in the upcoming weeks, and discuss with you, who is going to invite you to a Welcome Dinner.</li>
                <li>Have a great meal! You go (with friends or family) to your host, and you have a nice dinner together, where you get to know each other. During the dinner, you can chat, play games, show each other pictures, or whatever else you guys want to do.</li>
            </ol>
            <p>For questions and comments feel free to contact us at: <a href="https://www.facebook.com/welcomedinnerfrankfurt">https://www.facebook.com/welcomedinnerfrankfurt</a></p>
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
                    <label class="control-label col-sm-2" for="gender">Gender*</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="radio" name="gender" value="male" required> male<br>
                        <input type="radio" name="gender" value="female"> female
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="gender">First name*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="firstname" placeholder="First name" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="lastname">Last name*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="lastname" placeholder="Last name" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="lastname">Age*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="age" placeholder="Age" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="phone">Phone number*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="tel" name="phone" placeholder="Phone number" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="mail">E-Mail*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="email" name="mail" placeholder="E-Mail" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="street">Address*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="street" placeholder="Address" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="zipCode">Postal Code*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="zipCode" placeholder="Postal Code" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="city">City*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="city" placeholder="City" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="city">What country are you from?*</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="country" placeholder="Country" required />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="languages">Which languages do you speak?*</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="checkbox" name="languages[]" value="german"> German<br>
                        <input type="checkbox" name="languages[]" value="english"> English<br>
                        <input type="checkbox" name="languages[]" value="french"> French<br>
                        <input type="checkbox" name="languages[]" value="spanish"> Spanish<br>
                        <input type="checkbox" name="languages[]" value="arabic"> Arabic<br>
                        <textarea name="languagesnotes" placeholder="other languages"></textarea>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="languages">Food*</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="checkbox" name="foodspecials[]" value="halal"> Halal<br>
                        <input type="checkbox" name="foodspecials[]" value="nopork"> no pork<br>
                        <input type="checkbox" name="foodspecials[]" value="vegetarian"> vegetarian<br>
                        <textarea class="col-sm-12 col-md-10" name="foodspecialsnotes" placeholder="other"></textarea><br />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="coHosts">Additional guests*</label>
                    <div class="col-sm-12 col-md-10">
                        <textarea class="col-sm-12 col-md-10" name="bringalongs" placeholder="Friend? Children? Spouse? (Age? Languages?)"></textarea><br />
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="welcomeDinnerOrigin">How did you find out about Welcome Dinner?</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="col-sm-12 col-md-10" type="text" name="welcomeDinnerOrigin" placeholder="How did you find out about Welcome Dinner?" />
                    </div>
                </div>
                <br />
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="notes">Would you like to say anything else?</label>
                    <div class="col-sm-12 col-md-10">
                        <textarea class="col-sm-12 col-md-10" name="notes" placeholder="comments/important information"></textarea>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label col-sm-2" for="date"></label>
                    <input type="submit" class="btn btn-primary" value="send">
                </div>
            </form>
        </div>
    </div>

</div>