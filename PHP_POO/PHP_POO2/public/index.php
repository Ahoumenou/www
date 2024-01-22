<?php

declare(strict_types=1);



use App\User;
use App\Programmer;
use App\Rectangle;
use App\Programmeur;

require __DIR__ . "/../vendor/autoload.php";
throw new Exception("une erreur est survenue");
// Exception 
require("../src/generic_function.php");

// use app\controller\controllers;
// use app\string\Calulator;

// $math = new Calulator;
// $controller = new controllers;
$info = new User("John", "Doe", 24);
vd($info);

$programmeur = new Programmer("John", "Doe", 24, ["JavaScript", "PHP"]);
vd($programmeur);

class MaClass{
    public static int $proprieteStatique = 0;

    public static function increment(){
        echo "incrementation";
       self::$proprieteStatique++;
    }
}
MaClass::increment();
MaClass::increment();
MaClass::increment();
MaClass::increment();
MaClass::increment();
MaClass::increment();
echo MaClass::$proprieteStatique;


class connexionDB{
    //
    private static $instance = null;
    // 
    private $pdo;
    private static $id;
    private function __construct(){
       self::$id  = rand(1000,9999);
        // Initialisation de la connexion à la BDD
        $this->pdo = new PDO("mysql:host=localhost; dbname=album_app_mvc2;", "root", "");
    }
    public static function getInstance(){
        echo "Connexion Id = " . self::$id;
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
// $db = connexionDB::getInstance();

// new connexionDB();


$rect1 = new Rectangle();

$rect1->present();


class A{
}
class B{
}

trait MonTrait{
    public function methodA(){}
    public function methodB(){}
    
}
class sousClassC {
    use MonTrait; // Use dans une classe est un Trait
}

$programmeur = new Programmeur();

$programmeur->Code();
$programmeur->present("Emile");
$programmeur->work();