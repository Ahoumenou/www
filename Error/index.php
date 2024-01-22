<?php
// // Ne plus afficher d'erreur
// // error_reporting(0);

// // Afficher toutes les erreurs 
// // error_reportin(E_ALL);


// /**
//  * E_ERROR : Les erreurs sont affichées par défaut
//  * E_WARNING : Les avertissements sont affichés par défaut
//  * E_ALL : toutes les erreurs et alertes sont affichés
//  */
// echo "<pre>";

// function inverser(int $num){
//     if ($num === 0) {
//         # code...
//         throw new Exception("Division par 0");
//     }
//     return 1 / $num;
// }

// // try... catch...finally
// try {
//     //code...
//     echo inverser(5) . "\n";
//     echo inverser(10) . "\n";
//     echo inverser(15) . "\n";
//     echo inverser(0) . "\n";
// } catch (\Exception $e) {
//    echo "Impossible de diviser un nombre par 0" . "<br>";
// }finally{
//     echo "Finally...";
// }
$user = [
    'firstname' => 'John',
    'lastname' => 'Doe',
    'age'=>  24
];

var_dump($user);
// phpinfo();


var_dump("Bonjour");

function add(int $x, int $y){
    echo (string)$x +(string) $y;
}

add(25, 66);

$values = ['msg' => 'Salut', 'question' => 'ça va ?'];
foreach($values as $k => $v) {
 print_r($k) ;
}
