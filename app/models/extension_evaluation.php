<?php
require_once('Database.php');

class extension_evaluation
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from extensions_evaluation";
        $resultat = $db->read($sql);
        return $resultat;
    }
}