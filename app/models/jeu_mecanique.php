<?php
require_once('Database.php');

class jeu_mecanique
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from jeu_mecanique";
        $resultat = $db->read($sql);
        return $resultat;
    }
}