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

        $query = "insert into evaluations (id_joueur,id_jeu,note,commentaire,nbr_joueurs,date_evaluation) 
        values (:id_joueur,:id_jeu,:note,:commentaire,:nbr_joueurs,Sysdate()";
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

        $query = "update evaluations 
        set id_joueur = :id_joueur,id_jeu = :id_jeu,note = :note,commentaire = :commentaire,nbr_joueurs = :nbr_joueurs,
        WHERE id_evaluation = :id_evaluation";
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

// la liste des n commentaires les plus recents 
    public function CommentairePlusRecents($n)
    {
        $db = new Database();
        $query = "select * from evaluations order by date_evaluation  desc limit '$n';";
        $resultat = $db->read($query);
        return $resultat;
    }

//le commentaire qui laisse le moins indifferent (celui qui a recu le plus de jugements) 
public function MoinIndifferent()
{
    $db = new Database();
    $query = "select evaluations.* , count(id_juge) as nbr_jugements
    from evaluations
    left outer join jugements on (evaluations.id_evaluation = jugements.id_evaluation)
    group by evaluations.id_evaluation
    order by nbr_jugements  desc
    limit 1;";
    $resultat = $db->read($query);
    return $resultat;
}

//pour un commentaire (id_evaluation = X), la liste des joueurs qui l'ont apprecie.
public function JoueursQuiAppercie($id_evaluation)
{
    $db = new Database();
    $query = "select joueurs.* 
    from jugements
    inner join joueurs on (jugements.id_juge=joueurs.id_joueur)
    where jugements.est_pertinent
    and joueurs.existant and jugements.id_evaluation = '$id_evaluation';";
    $resultat = $db->read($query);
    return $resultat;
}
}