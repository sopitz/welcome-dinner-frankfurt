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

        //$sql = "INSERT INTO notes (note_text, user_id) VALUES (:note_text, :user_id)";
        //$query = $database->prepare($sql);
        //$query->execute(array(':note_text' => $note_text, ':user_id' => Session::get('user_id')));

        //if ($query->rowCount() == 1) {
        //    return true;
        //}

        var_dump($host);

        //return false;
    }
}
