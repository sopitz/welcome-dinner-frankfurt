<?php

/**
 * NoteModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class HostModel
{
    public static function getAllHosts()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, note_id, note_text FROM notes WHERE user_id = :user_id";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id')));

        return $query->fetchAll();
    }

    public static function getHost($note_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, note_id, note_text FROM notes WHERE user_id = :user_id AND note_id = :note_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id'), ':note_id' => $note_id));

        return $query->fetch();
    }

    public static function createHost($host)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "INSERT INTO hosts (
                                      host_gender,
                                      host_firstname,
                                      host_lastname,
                                      host_phone,
                                      host_mail,
                                      host_street,
                                      host_zipCode,
                                      host_city,
                                      host_languages,
                                      host_origin,
                                      host_cohosts,
                                      host_notes
                                   ) VALUES (
                                      :host_gender,
                                      :host_firstname,
                                      :host_lastname,
                                      :host_phone,
                                      :host_mail,
                                      :host_street,
                                      :host_zipCode,
                                      :host_city,
                                      :host_languages,
                                      :host_origin,
                                      :host_cohosts,
                                      :host_notes
                                   )";


        $query = $database->prepare($sql);
        $query->execute(array(
            ':host_gender' => $host->getGender(),
            ':host_firstname' => $host->getFirstname(),
            ':host_lastname' => $host->getLastname(),
            ':host_phone' => $host->getPhone(),
            ':host_mail' => $host->getMail(),
            ':host_street' => $host->getStreet(),
            ':host_zipCode' => $host->getZipCode(),
            ':host_city' => $host->getCity(),
            ':host_languages' => serialize($host->getLanguages()),
            ':host_origin' => $host->getWelcomeDinnerOrigin(),
            ':host_cohosts' => $host->getCoHosts(),
            ':host_notes' => $host->getNotes()
            )
        );

        if ($query->rowCount() == 1) {
            return true;
        }

        return false;
    }
}
