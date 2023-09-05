<?php
namespace App;


class Programmer extends User
{

    
    public function __construct(
        string $n,
        string $p,
        int $a,
        public array $languages
    )
    {
        echo "constructeur programmeur";
        //appel du constructeur parent
        parent::__construct($n, $p, $a);
        echo "fin constructeur programmeur";
    }

    public function  Code(){
        echo "Je suis un programmeur";
    }


}