<?php
require_once('Database.php');

class Jeux
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from jeux";
        $resultat = $db->read($sql);
        return $resultat;
    }
}