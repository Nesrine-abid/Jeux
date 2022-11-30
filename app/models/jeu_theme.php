<?php
require_once('Database.php');

class jeu_theme
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from jeu_theme";
        $resultat = $db->read($sql);
        return $resultat;
    }
}