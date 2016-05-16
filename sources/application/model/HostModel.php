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

        $sql = "SELECT * FROM hosts";
        $query = $database->prepare($sql);
        $query->execute();
        $hostsData = $query->fetchAll();

        $hosts = array();
        foreach($hostsData as $entry) {
            $hostData['gender'] = $entry->host_gender;
            $hostData['firstname'] = $entry->host_firstname;
            $hostData['lastname'] = $entry->host_lastname;
            $hostData['phone'] = $entry->host_phone;
            $hostData['mail'] = $entry->host_mail;
            $hostData['street'] = $entry->host_street;
            $hostData['zipCode'] = $entry->host_zipCode;
            $hostData['city'] = $entry->host_city;
            $hostData['languages'] = unserialize($entry->host_languages);
            $hostData['languagesnotes'] = $entry->host_languagesnotes;
            $hostData['welcomeDinnerOrigin'] = $entry->host_origin;
            $hostData['coHosts'] = $entry->host_cohosts;
            $hostData['notes'] = $entry->host_notes;
            $hostData['lat'] = $entry->host_geo_lat;
            $hostData['long'] = $entry->host_geo_long;
            $host = new Host($hostData);
            $host->setId($entry->host_id);

            $dinner = DinnerModel::getDinner($entry->host_id);
            $host->setDinner($dinner->getDate());
            array_push($hosts, $host);
        }


        return $hosts;
    }

    public static function getHost($note_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM hosts WHERE user_id = :user_id AND note_id = :note_id LIMIT 1";
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
                                      host_languagesnotes,
                                      host_origin,
                                      host_cohosts,
                                      host_notes,
                                      host_geo_lat,
                                      host_geo_long
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
                                      :host_languagesnotes,
                                      :host_origin,
                                      :host_cohosts,
                                      :host_notes,
                                      :host_geo_lat,
                                      :host_geo_long
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
            ':host_languagesnotes' => $host->getLanguagesnotes(),
            ':host_origin' => $host->getWelcomeDinnerOrigin(),
            ':host_cohosts' => $host->getCoHosts(),
            ':host_notes' => $host->getNotes(),
            ':host_geo_lat' => $host->getLat(),
            ':host_geo_long' => $host->getLong()
            )
        );
        $id = $database->lastInsertId();
        if ($query->rowCount() == 1) {
            return $id;
        }

        return false;
    }
}
