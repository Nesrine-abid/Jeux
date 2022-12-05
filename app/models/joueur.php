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

    public function Delete($id)
    {
        $data = array();
        $db = new Database();
        $data['id_joueur'] = $id;

        $query = "delete from joueurs where id_joueur = :id_joueur";
        $db->write($query, $data);
    }
}