<?php

/**
 * NoteModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class DinnerModel
{
    public static function getDinner($id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM dinners WHERE dinner_host_id = :dinner_host_id";
        $query = $database->prepare($sql);
        $query->execute(array(':dinner_host_id' => $id));

        $entry = $query->fetch();

        if ($entry) {
            $dinnerData['date'] = $entry->dinner_date;
            $dinnerData['hostId'] = $entry->dinner_host_id;
            $dinner = new Dinner($dinnerData);
            return $dinner;
        }

        return null;
    }


    public static function createDinner($dinner)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "INSERT INTO dinners (dinner_host_id, dinner_date) VALUES (:dinner_host_id, :dinner_date)";
        $query = $database->prepare($sql);
        $query->execute(array(':dinner_host_id' => $dinner->getHostId(), ':dinner_date' => $dinner->getDate()));

        if ($query->rowCount() == 1) {
            return true;
        }

        return false;
    }

    public static function updateDinner($id, $value) {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "UPDATE dinners set dinner_date = '$value' where dinner_host_id=$id";
        $query = $database->prepare($sql);
        $query->execute();
    }
}
