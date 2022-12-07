<?php
require_once('Database.php');

class Joueur
{
    public function getAll()
    {
        $db = new Database();
        $sql = "SELECT * from joueurs where existant = TRUE";
        $resultat = $db->read($sql);
        return $resultat;
    }

    public function Delete($id)
    {
        $data = array();
        $db = new Database();
        $data['id_joueur'] = $id;

        $query = "update joueurs set existant= false WHERE id_joueur = :id_joueur";
        $db->write($query, $data);
    }

    public function Add($nom_joueur, $prenom_joueur, $pseudo, $adresse_mail)
    {
        $data = array();
        $db = new Database();
        $data['nom_joueur'] = $nom_joueur;
        $data['prenom_joueur'] = $prenom_joueur;
        $data['pseudo'] = $pseudo;
        $data['adresse_mail'] = $adresse_mail;
        $query = "insert into joueurs (nom_joueur,prenom_joueur,pseudo,adresse_mail,existant) values (:nom_joueur,:prenom_joueur,:pseudo,:adresse_mail,true)";
        $db->write($query, $data);
    }

    public function update($id_joueur, $nom_joueur, $prenom_joueur, $pseudo, $adresse_mail,$nbr_joueurs_max)
    {
        $data = array();
        $db = new Database();
        $data['id_joueur'] = $id_joueur;
        $data['nom_joueur'] = $nom_joueur;
        $data['prenom_joueur'] = $prenom_joueur;
        $data['pseudo'] = $pseudo;
        $data['adresse_mail'] = $adresse_mail;

        $query = "update joueurs set nom_joueur = :nom_joueur, prenom_joueur = :prenom_joueur,pseudo = :pseudo, adresse_mail = :adresse_mail WHERE id_joueur = :id_joueur";
        $db->write($query, $data);
    }


    //les joueurs, classes selon le nombre de jeux qu'ils ont notes
    public function joueurOrderByCommentaire()
    {
        $db = new Database();
        $query = "select joueurs.id_joueur,joueurs.nom_joueur, count(id_evaluation) as nbr_commentaires 
        from joueurs 
        left outer join  evaluations on (joueurs.id_joueur = evaluations.id_joueur) 
        where joueurs.existant 
        group by joueurs.id_joueur 
        order by nbr_commentaires desc;";
        $resultat = $db->read($query);
        return $resultat;
    }
}