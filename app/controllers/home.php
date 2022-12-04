<?php

class Home extends Controller

{
    public function index(){
        //$jeu->update($id,'ichrak','2020-07-01', 3, 'jeux de dés', 1, 4);
        //$jeu->Delete($id);
        //$jeux = $jeu->Add('nour','2022-01-01', 3, 'jeu de societe', 1, 4);

        $this->view("header");
    }

    public function getAllJeux()
	{
        $jeu = $this->loadModel("Jeux");
        $jeux = $jeu->getAll();
        $data['jeux'] = $jeux;

        $this->view("jeu", $data);
	}

    public function addJeux()
	{
        $jeu = $this->loadModel("Jeux");
        $jeux = $jeu->Add('nour','2022-01-01', 3, 'jeu de societe', 1, 4);
	}

    public function getAllJoueurs()
	{
        $joueur = $this->loadModel("joueur");
        $joueurs = $joueur->getAll();
        $data['joueurs'] = $joueurs;

        $this->view("joueur", $data);
	}
}