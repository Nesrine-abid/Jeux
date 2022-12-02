<?php

class Home extends Controller

{
    function index(){

        $jeu = $this->loadModel("Jeux");
        $id = 4;
        $jeu->update($id,'ichrak','2020-07-01', 3, 'jeux de dés', 1, 4);
        //$jeu->Delete($id);
        //$jeux = $jeu->Add('nour','2022-01-01', 3, 'jeu de societe', 1, 4);
        $list_jeux = $jeu->getAll();
        foreach ($list_jeux as $jeu) {
            echo $jeu->editeur;
        }
        /*$data['jeux'] = $jeux;
        $this->view("index", $data);*/

    }
}