<?php


require("math_operator.php");
require("string_operator.php");
require(dirname(__DIR__). "/../vendor/autoload.php");
echo dirname(__DIR__);

use math\Calulator as Calulator;
use string\Calulator as concat;
use Ramsey\Uuid;

$uuid = Uuid::uuid4();

printf("UUID: %s", $uuid->toString());


$x = 5;
$y = 10;

$d = "Bonjour";
$e = "Mathieu";


 $mathoperation = new Calulator();
 $stringoperation = new concat();

echo $mathoperation->add($x, $y);
echo $stringoperation->concatenate($d, $e);

