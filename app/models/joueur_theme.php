<?php
require_once('Database.php');

class joueur_theme
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from joueur_theme";
        $resultat = $db->read($sql);
        return $resultat;
    }
}