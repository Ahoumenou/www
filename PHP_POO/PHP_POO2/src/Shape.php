<?php

namespace App;

abstract class Shape { // Une classe qui a une méthode abstraict est abstraite elle-même
    // Force les sous-classes à définir la méthode area()
    abstract protected function area();
    public function present(){
        echo "Je suis une forme";
    }
}