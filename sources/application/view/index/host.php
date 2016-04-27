<form action="<?php echo Config::get('URL'); ?>register/host" method="post">
    <input type="radio" name="gender" value="male"> male<br>
    <input type="radio" name="gender" value="female"> female<br>

    <input type="text" name="firstname" placeholder="firstname" required /><br>
    <input type="text" name="lastname" placeholder="lastname" required /><br>
    <input type="tel" name="phone" placeholder="phone" required /><br>
    <input type="email" name="mail" placeholder="mail" required /><br>
    <input type="text" name="street" placeholder="street" required /><br>
    <input type="text" name="zipCode" placeholder="zipCode" required /><br>
    <input type="text" name="city" placeholder="city" required /><br>
    <input type="checkbox" name="languages[]" value="german">german<br>
    <input type="checkbox" name="languages[]" value="english">english<br>
    <input type="text" name="welcomeDinnerOrigin" placeholder="welcomeDinnerOrigin" required /><br>
    <input type="text" name="coHosts" placeholder="coHosts" required /><br>
    <textarea name="notes" placeholder="notes"></textarea>

    <input type="submit" value="Submit">

</form>