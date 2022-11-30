<?php
require_once('Database.php');

class Extension
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from extensions";
        $resultat = $db->read($sql);
        return $resultat;
    }
}