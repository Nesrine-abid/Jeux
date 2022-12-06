
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

    public function Add($editeur, $date_parution, $duree, $type, $nbr_joueurs_min, $nbr_joueurs_max)
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

    public function Delete($id)
    {
        $data = array();
        $db = new Database();
        $data['id_jeu'] = $id;

        $query = "delete from jeux where id_jeu = :id_jeu";
        $db->write($query, $data);
    }

    public function update($id_jeu, $editeur, $date_parution, $duree, $type, $nbr_joueurs_min, $nbr_joueurs_max)
    {
        $data = array();
        $db = new Database();
        $data['id_jeu'] = $id_jeu;
        $data['editeur'] = $editeur;
        $data['date_parution'] = $date_parution;
        $data['type'] = $type;
        $data['duree'] = $duree;
        $data['nbr_joueurs_min'] = $nbr_joueurs_min;
        $data['nbr_joueurs_max'] = $nbr_joueurs_max;

        $query = "update jeux set editeur = :editeur, date_parution = :date_parution,type = :type, duree = :duree, nbr_joueurs_min = :nbr_joueurs_min, nbr_joueurs_max = :nbr_joueurs_max WHERE id_jeu = :id_jeu";
        $db->write($query, $data);
    }

//cette méthode renvoie les extensions du jeu ayant id = $id
    public function getExtensions($id)
    {
        $data = array();
        $db = new Database();
        $data['id'] = $id;

        $query = "select id_extension, jeux.* from extensions, jeux where id_base= :id and id_extension=id_jeu;";
        $db->write($query, $data);
    }
//recuperer les jeu étendu par x
    public function ExtendedBy($id)
    {
        $data = array();
        $db = new Database();
        $data['id'] = $id;

        $query = "select id_base, jeux.* from extensions, jeux where id_extension= :id and id_base=id_jeu;";
        $db->write($query, $data);
    }
    
}