<?php

class Home extends Controller

{
    public function index()
    {
        $this->view("home");
    }

    public function getAllJeux()
	{
        $jeu = $this->loadModel("Jeux");
        $jeux = $jeu->getAll();
        $data['jeux'] = $jeux;

        $theme = $this->loadModel("theme");
        $themes = $theme->getAll();
        $data['themes'] = $themes;

        $this->view("jeu", $data);
	}

    public function DeleteJeux()
	{
        $id = $_GET['id_jeu'];
        $jeu = $this->loadModel("Jeux");
        $jeux = $jeu->Delete($id);
        $jeux = $jeu->getAll();
        $data['jeux'] = $jeux;

        $this->view("jeu", $data);
	}

    public function FormAddJeux()
	{
        $theme = $this->loadModel("theme");
        $themes = $theme->getAll();

        $artiste = $this->loadModel("artiste");
        $artistes = $artiste->getAll();

        $jeu = $this->loadModel("Jeux");
        $jeux = $jeu->getAll();

        $data['jeux'] = $jeux;
        $data['themes'] = $themes;
        $data['artistes'] = $artistes;

        $this->view("add_jeu", $data);
	}

    public function AddJeux()
	{
        $editeur = $_GET['editeur'];
        $date_parution = $_GET['date_parution'];
        $type = $_GET['type'];
        $duree = $_GET['duree'];
        $nbr_joueurs_min = $_GET['nbr_joueurs_min'];
        $nbr_joueurs_max = $_GET['nbr_joueurs_max'];

        $jeu = $this->loadModel("Jeux");
        $jeux = $jeu->Add($editeur, $date_parution, $duree, $type, $nbr_joueurs_min, $nbr_joueurs_max);
        $jeux = $jeu->getAll();
        $data['jeux'] = $jeux;

        $this->view("jeu", $data);
	}

    public function getJeuPerTheme()
    {
        $nom_theme = $_GET['nom_theme'];
        $jeu = $this->loadModel("Jeux");
        $jeux = $jeu->JeuPerTheme($nom_theme);
        $data['jeux'] = $jeux;

        $theme = $this->loadModel("theme");
        $themes = $theme->getAll();
        $data['themes'] = $themes;

        $this->view("jeu_theme", $data);
    }


/*-----------------------------------------------------------------------------*/
    public function getAllJoueurs()
	{
        $joueur = $this->loadModel("joueur");
        $joueurs = $joueur->getAll();
        $data['joueurs'] = $joueurs;

        $this->view("joueur", $data);
	}

    public function DeleteJoueurs()
	{
        $id = $_GET['id_joueur'];
        $joueur = $this->loadModel("joueur");
        $joueurs = $joueur->Delete($id);
        $joueurs = $joueur->getAll();
        $data['joueurs'] = $joueurs;

        $this->view("joueur", $data);
	}

    public function FormAddJoueur()
	{
        $theme = $this->loadModel("theme");
        $themes = $theme->getAll();

        $mecanique = $this->loadModel("mecanique");
        $mecaniques = $mecanique->getAll();

        $data['themes'] = $themes;
        $data['mecaniques'] = $mecaniques;

        $this->view("add_joueur", $data);
	}

    public function AddJoueur()
	{
        $nom_joueur = $_GET['nom_joueur'];
        $prenom_joueur = $_GET['prenom_joueur'];
        $pseudo = $_GET['pseudo'];
        $adresse_mail = $_GET['adresse_mail'];

        $joueur = $this->loadModel("joueur");
        $joueurs = $joueur->Add($nom_joueur, $prenom_joueur, $pseudo, $adresse_mail);
        $joueurs = $joueur->getAll();
        $data['joueurs'] = $joueurs;

        $this->view("joueur", $data);
	}

    public function joueurOrderByCommentaire()
	{
        $joueur = $this->loadModel("joueur");
        $joueurs = $joueur->joueurOrderByCommentaire();
        $data['joueurs'] = $joueurs;
        $this->view("stat1", $data);
	}

/*-----------------------------------------------------------------------------*/

public function getAllEvaluations()
{
    $evaluation = $this->loadModel("evaluation");
    $evaluations = $evaluation->getAll();
    $data['evaluations'] = $evaluations;
    $this->view("evaluation", $data);
}
public function CommentairePlusRecents()
{
    $n = $_GET['n'];
    $evaluation = $this->loadModel("evaluation");
    $evaluations = $evaluation->CommentairePlusRecents($n);
    $data['evaluations'] = $evaluations;
    $this->view("stat2", $data);
}

public function MoinIndifferent()
{
    $evaluation = $this->loadModel("evaluation");
    $evaluations = $evaluation->MoinIndifferent();
    $data['evaluations'] = $evaluations;
    $this->view("stat3", $data);
}

public function JoueursQuiAppercie()
{
    $id_evaluation = $_GET['id_evaluation'];
    $joueur = $this->loadModel("evaluation");
    $joueurs = $joueur->JoueursQuiAppercie($id_evaluation);
    $data['joueurs'] = $joueurs;
    $this->view("appercie", $data);
}
}