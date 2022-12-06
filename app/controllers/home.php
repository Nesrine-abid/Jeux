<?php

class Home extends Controller

{
    public function index()
    {
        $this->view("header");
    }

    public function getAllJeux()
	{
        $jeu = $this->loadModel("Jeux");
        $jeux = $jeu->getAll();
        $data['jeux'] = $jeux;

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

        $this->view("ajout_jeu", $data);
	}

    public function AddJeux()
	{
        $editeur = $_GET['id_jeu'];
        $jeu = $this->loadModel("Jeux");
        $jeux = $jeu->Add($editeur, $date_parution, $duree, $type, $nbr_joueurs_min, $nbr_joueurs_max);
        $jeux = $jeu->getAll();
        $data['jeux'] = $jeux;

        $this->view("jeu", $data);
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
}