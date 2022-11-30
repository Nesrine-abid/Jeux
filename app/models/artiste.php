<?php
require_once('Database.php');

class Artiste
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from artistes";
        $resultat = $db->read($sql);
        return $resultat;
    }
}