<?php

define("APP_ROOT", dirname(__DIR__));
require "../config/config.php";

// require '../app/models/AlbumModel.php';
require('../app/controllers/AlbumController.php');

// canstante qui sauvegarde le chemin de base de l'application

$controller = new AlbumController();
$controller->home();


$request = $_SERVER['REQUEST_URI'];
// p, vérifie qu'il y a une chaîne de requête
$queryString = strpos($request, "?"); // 
echo $queryString;

if ($queryString) {
    echo (strpos($request, "action=")); // trouver la première occurence de action=
}

exit();
if ($request === "/") {
    # code...
    $controller->home();
}elseif ($request === '/edit') {
    # code...
}elseif ($request === '/update') {
    # code...
}elseif ($request === '/add') {
    # code...
}elseif ($request === '/delete') {
    # code...
}elseif ($request === '/delete') {
    # code...
}
else {
    // echo " 404 Not Found";
    require(APP_ROOT . "/app/views/_404.phtml");
}

// constante magitique : constante prédéfinie ayant une signification 
//particulière
/**
 * utilisée pour fournir des informations de contexte
 * toutes les constantes magiques commecent par deux tirets de 8 ( __ )
 */
// echo __DIR__;




// $user = "smk";

// function get(){
//     global $user;
//     echo $user;
// }

// get();