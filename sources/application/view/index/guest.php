<form action="<?php echo Config::get('URL'); ?>register/guest" method="post">
    <input type="radio" name="gender" value="male"> male<br>
    <input type="radio" name="gender" value="female"> female<br>

    <input type="text" name="firstname" placeholder="firstname" required /><br>
    <input type="text" name="lastname" placeholder="lastname" required /><br>
    <input type="number" name="age" placeholder="age" required /><br>
    <input type="tel" name="phone" placeholder="phone" required /><br>
    <input type="email" name="mail" placeholder="mail" required /><br>
    <input type="text" name="street" placeholder="street" required /><br>
    <input type="text" name="zipCode" placeholder="zipCode" required /><br>
    <input type="text" name="city" placeholder="city" required /><br>




    <input type="text" name="country" placeholder="country" required /><br>
    <input type="checkbox" name="languages[]" value="german">german<br>
    <input type="checkbox" name="languages[]" value="english">english<br>

    <input type="checkbox" name="foodspecials[]" value="halal">Halal<br>
    <input type="checkbox" name="foodspecials[]" value="nopork">kein Schweinefleisch<br>
    <input type="checkbox" name="foodspecials[]" value="vegetarian">vegetarisch<br>
    <textarea name="foodspecialsnotes" placeholder="sonstiges"></textarea><br />
    <textarea name="bringalongs" placeholder="Freund? Kinder? Ehepartner? (Alter? Sprachen?)"></textarea><br />
    <input type="text" name="welcomeDinnerOrigin" placeholder="welcomeDinnerOrigin" required /><br>
    <textarea name="notes" placeholder="notes"></textarea><br />
    <input type="submit" value="Submit">

</form>