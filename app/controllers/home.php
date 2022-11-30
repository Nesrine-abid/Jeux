<?php

class Home extends Controller

{
    function index(){
        $mecanique = $this->loadModel("Mecanique");
        $mecaniques = $mecanique->getAll();
        foreach ($mecaniques as $mecanique) {
            echo $mecanique->nom_mecanique;
        }
    }
}