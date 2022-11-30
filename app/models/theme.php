<?php
require_once('Database.php');

class Theme
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from themes";
        $resultat = $db->read($sql);
        return $resultat;
    }
}