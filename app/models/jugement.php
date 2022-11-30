<?php
require_once('Database.php');

class Jugement
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from jugements";
        $resultat = $db->read($sql);
        return $resultat;
    }
}