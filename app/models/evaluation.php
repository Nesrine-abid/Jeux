<?php
require_once('Database.php');

class Evaluation
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from evaluations";
        $resultat = $db->read($sql);
        return $resultat;
    }
}