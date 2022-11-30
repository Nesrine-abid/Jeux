<?php
require_once('Database.php');

class joueur_mecanique
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from joueur_mecanique";
        $resultat = $db->read($sql);
        return $resultat;
    }
}