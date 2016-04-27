<?php

/**
 * NoteModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class DinnerModel
{
    public static function getAllDinners()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, note_id, note_text FROM notes WHERE user_id = :user_id";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id')));

        return $query->fetchAll();
    }

    public static function getDinner($id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, note_id, note_text FROM notes WHERE user_id = :user_id AND note_id = :note_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id'), ':note_id' => $id));

        return $query->fetch();
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
}
