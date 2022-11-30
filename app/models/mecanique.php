<?php
require_once('Database.php');

class Mecanique
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from mecaniques";
        $resultat = $db->read($sql);
        return $resultat;
    }
}