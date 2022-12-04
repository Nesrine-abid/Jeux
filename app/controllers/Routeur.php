<?php
require "Home.php";

//On recupère l'action passée dans l'URL
$action = $_GET['action'];

$Home = new Home();
$Home->$action() 
?>