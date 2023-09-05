<?php

namespace App;
use App\Traits\EmployeeTrait;
use App\Traits\PersonneTrait;


class Programmeur 
{
    use EmployeeTrait, PersonneTrait;

    public function  Code(){
        echo "Je suis un programmeur";
    }

}
