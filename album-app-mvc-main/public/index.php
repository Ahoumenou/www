<?php

define("APP_ROOT", dirname(__DIR__));
require "../config/config.php";

// require '../app/models/AlbumModel.php';
require('../app/controllers/AlbumController.php');

// canstante qui sauvegarde le chemin de base de l'application
$controller = new AlbumController();
// $controller->home();

$request = $_SERVER['REQUEST_URI'];
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
$debutChaineDeRequete = strpos($request, "?");
// echo $debutChaineDeRequete;
if ($debutChaineDeRequete !== false) {
    $request = substr($request, 0, $debutChaineDeRequete);
    echo $request;
}

// p, vérifie qu'il y a une chaîne de requête
$queryString = strpos($request, "?"); // 



if ($queryString) {
    $request = substr($request, 0, $queryString); // Trouver la première occurence de action 
    echo (strpos($request, "action=")); // trouver la première occurence de action=
}


if ($request === "/home" || $request === "/") {
    # code...
    $controller->home();
}elseif ($request === '/add') {
    $controller->store($_POST['title'], $_POST['artiste']);

    echo "Albm ajouté";

    // 301: redirection permanente
    // 302 : redirection temporaire
    header("HTTP/1.1 302 Found");
    header('Location :/');
}
elseif ($request === '/edit') {
    # code...
    $id = (int) $_GET['id'];
    $controller->edit($id);
        echo "Edition du formulaire";
}elseif ($request === '/update') {
    # code...
    $id = $_POST['id'];
    $title = $_POST['title'];
    $artiste = $_POST['artiste'];
    $controller->update($id, $title, $artiste);
}elseif ($request === '/delete') {
    # code...
    $id = $_GET["id"]; // identifiant à supprimer
    $controller->destroy($id);
    echo "En cours de suppression de l'album";

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