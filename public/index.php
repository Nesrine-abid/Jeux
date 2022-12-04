<?php 
session_start();

require "../app/init.php";

if (!isset($_GET['action'])) {
    $_GET['action'] = "index";
}
require('../app/controllers/Routeur.php');

//$app = new App();