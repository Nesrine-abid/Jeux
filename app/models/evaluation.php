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

    public function Add($id_joueur, $id_jeu, $note, $commentaire, $nbr_joueurs)
    {
        $data = array();
        $db = new Database();
        $data['id_joueur'] = $id_joueur;
        $data['id_jeu'] = $id_jeu;
        $data['note'] = $note;
        $data['commentaire'] = $commentaire;
        $data['nbr_joueurs'] = $nbr_joueurs;

        $query = "insert into evaluations (id_joueur,id_jeu,note,commentaire,nbr_joueurs,date_evaluation) values (:id_joueur,:id_jeu,:note,:commentaire,:nbr_joueurs,Sysdate()";
        $db->write($query, $data);
    }

    public function update($id_evaluation, $id_joueur, $id_jeu, $note, $commentaire, $nbr_joueurs)
    {
        $data = array();
        $db = new Database();
        $data['id_evaluation'] = $id_evaluation;
        $data['id_joueur'] = $id_joueur;
        $data['id_jeu'] = $id_jeu;
        $data['note'] = $note;
        $data['commentaire'] = $commentaire;
        $data['nbr_joueurs'] = $nbr_joueurs;

        $query = "update evaluations set id_joueur = :id_joueur,id_jeu = :id_jeu,note = :note,commentaire = :commentaire,nbr_joueurs = :nbr_joueurs,WHERE id_evaluation = :id_evaluation";
        $db->write($query, $data);
    }

    public function Delete($id)
    {
        $data = array();
        $db = new Database();
        $data['id_evaluation'] = $id;

        $query = "delete from evaluations where id_evaluation = :id_evaluation";
        $db->write($query, $data);
    }
}