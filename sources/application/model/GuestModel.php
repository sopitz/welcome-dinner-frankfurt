<?php

/**
 * NoteModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class guestModel
{
    public static function getAllGuests()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM guests";
        $query = $database->prepare($sql);
        $query->execute();
        $guestsData = $query->fetchAll();

        $guests = array();
        foreach($guestsData as $entry) {
            $guestData['gender'] = $entry->guest_gender;
            $guestData['firstname'] = $entry->guest_firstname;
            $guestData['lastname'] = $entry->guest_lastname;
            $guestData['age'] = $entry->guest_age;
            $guestData['phone'] = $entry->guest_phone;
            $guestData['mail'] = $entry->guest_mail;
            $guestData['street'] = $entry->guest_street;
            $guestData['zipCode'] = $entry->guest_zipCode;
            $guestData['city'] = $entry->guest_city;
            $guestData['country'] = $entry->guest_country;
            $guestData['languages'] = unserialize($entry->guest_languages);
            $guestData['foodspecials'] = unserialize($entry->guest_foodspecials);
            $guestData['foodspecialsnotes'] = $entry->guest_foodspecialsnotes;
            $guestData['welcomeDinnerOrigin'] = $entry->guest_origin;
            $guestData['bringalongs'] = $entry->guest_bringalongs;
            $guestData['notes'] = $entry->guest_notes;
            $guestData['lat'] = $entry->guest_geo_lat;
            $guestData['long'] = $entry->guest_geo_long;
            $guest = new Guest($guestData);
            array_push($guests, $guest);
        }
        return $guests;
    }

    public static function getguest($note_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, note_id, note_text FROM notes WHERE user_id = :user_id AND note_id = :note_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id'), ':note_id' => $note_id));

        return $query->fetch();
    }

    public static function createGuest($guest)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "INSERT INTO guests (
                                      guest_gender,
                                      guest_firstname,
                                      guest_lastname,
                                      guest_age,
                                      guest_phone,
                                      guest_mail,
                                      guest_street,
                                      guest_zipCode,
                                      guest_city,
                                      guest_country,
                                      guest_languages,
                                      guest_foodspecials,
                                      guest_foodspecialsnotes,
                                      guest_origin,
                                      guest_bringalongs,
                                      guest_notes,
                                      guest_geo_lat,
                                      guest_geo_long
                                   ) VALUES (
                                      :guest_gender,
                                      :guest_firstname,
                                      :guest_lastname,
                                      :guest_age,
                                      :guest_phone,
                                      :guest_mail,
                                      :guest_street,
                                      :guest_zipCode,
                                      :guest_city,
                                      :guest_country,
                                      :guest_languages,
                                      :guest_foodspecials,
                                      :guest_foodspecialsnotes,
                                      :guest_origin,
                                      :guest_bringalongs,
                                      :guest_notes,
                                      :guest_geo_lat,
                                      :guest_geo_long
                                   )";


        $query = $database->prepare($sql);
        $query->execute(array(
            ':guest_gender' => $guest->getGender(),
            ':guest_firstname' => $guest->getFirstname(),
            ':guest_lastname' => $guest->getLastname(),
            ':guest_age' => $guest->getAge(),
            ':guest_phone' => $guest->getPhone(),
            ':guest_mail' => $guest->getMail(),
            ':guest_street' => $guest->getStreet(),
            ':guest_zipCode' => $guest->getZipCode(),
            ':guest_city' => $guest->getCity(),
            ':guest_country' => $guest->getCountry(),
            ':guest_languages' => serialize($guest->getLanguages()),
            ':guest_foodspecials' => serialize($guest->getFoodspecials()),
            ':guest_foodspecialsnotes' => $guest->getFoodspecialsnotes(),
            ':guest_origin' => $guest->getWelcomeDinnerOrigin(),
            ':guest_bringalongs' => $guest->getBringalongs(),
            ':guest_notes' => $guest->getNotes(),
            ':guest_geo_lat' => $guest->getLat(),
            ':guest_geo_long' => $guest->getLong()
            )
        );
        $id = $database->lastInsertId();
        if ($query->rowCount() == 1) {
            return $id;
        }

        return false;
    }
}
