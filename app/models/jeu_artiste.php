<?php
require_once('Database.php');

class jeu_artiste
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from jeu_artiste";
        $resultat = $db->read($sql);
        return $resultat;
    }
}