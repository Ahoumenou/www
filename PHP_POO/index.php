<?php
// include("./User.php");
// include("./generic_function.php");

// fonction d'autoloading...
// permet de charger automatiquement les classes

spl_autoload_register(function ($class_name) {
    echo "A1";
    $file = $class_name . ".php";
    if (file_exists($file)) {
        # code...
        require($file);
    }

    // echo "Appel de la fonction d'autoloading... <br>";
    // echo "Tentative de chargement de la classe ". $class_name . "<br>";
    // require $class_name . ".php";
});


spl_autoload_register(function ($class_name) {
    echo "A3";
    $file = "models/". $class_name . ".php";
    if (file_exists($file)) {
        # code...
        require($file);
    }
});


$x = "User";
$u1 = new $x();

new model();

// dd($u1);

// opérateur d'objet (->)

// echo $u1->nom . " "; // John
// echo $u1->prenom; // Doe

$u1->nom = "Jasmin"; // changement de valeur
echo $u1->present();
// echo $u1->self::pieds;

// Namespace | Espace de noms

function array_split(string $str){
    echo "Bonjour $str";
}

array_split("Marthieu");



