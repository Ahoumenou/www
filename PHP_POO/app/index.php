<?php

require("User/User.php");
// permet d'eviter de repeter les espaces de noms
use app\controller\User;
use app\admin\User as Admin;
 $client1 = new User();
 $admin1 = new Admin();
 $admin2 = new Admin();
 $client2 = new User();

app\controller\strrev("salut");
 echo "<br>";

echo app\controller\PI;