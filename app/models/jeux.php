<?php
require_once('Database.php');

class Jeux
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from jeux";
        $resultat = $db->read($sql);
        return $resultat;
    }

    public function Add($editeur,$date_parution, $duree, $type, $nbr_joueurs_min, $nbr_joueurs_max)
    {
        $data = array();
        $db = new Database();
        $data['editeur'] = $editeur;
        $data['date_parution'] = $date_parution;
        $data['type'] = $type;
        $data['duree'] = $duree;
        $data['nbr_joueurs_min'] = $nbr_joueurs_min;
        $data['nbr_joueurs_max'] = $nbr_joueurs_max;

        $query = "insert into jeux (editeur,date_parution,type,duree,nbr_joueurs_min,nbr_joueurs_max) values (:editeur,:date_parution,:type,:duree,:nbr_joueurs_min,:nbr_joueurs_max)";
        $db->write($query, $data);
    }
}