<?php
require_once('Database.php');

class Joueur
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from joueurs";
        $resultat = $db->read($sql);
        return $resultat;
    }
}