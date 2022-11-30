<?php

class Home extends Controller

{
    function index(){

        $jeu = $this->loadModel("Jeux");
        $jeux = $jeu->Add('imen','2022-01-01', 2, 'jeu de societe', 1, 4);
        $list_jeux = $jeu->getAll();
        foreach ($list_jeux as $jeu) {
            echo $jeu->editeur;
        }
    }
}