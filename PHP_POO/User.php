<?php

class User {
    // Constantes
    const pieds = 2;
    // membres | propriétés champs
    public $nom = "John";
    public $prenom = "Doe";
    public $age = 24;

    // méthodes
    public function present(){
        echo "Je m'appelle " . $this->nom . " "
         . $this->prenom . ". J'ai " . $this->age 
         . " ans et ". self::pieds . " pieds" ; // self : représente la classe
    }
}