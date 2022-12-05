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

    public function addJeux()
	{
        $jeu = $this->loadModel("Jeux");
        $jeux = $jeu->Add('nour','2022-01-01', 3, 'jeu de societe', 1, 4);
	}

    public function save()
	{
        $this->view("ajout_jeu");
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