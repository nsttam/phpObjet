<?php
include 'include.php';

$audiRS1 = new Audi('Audi', 'RS1', 100000, 5, 1, 1, 0);
$z900 = new Kawasaki('Z900', 9200, true);


var_dump($audiRS1);
$audiRS1->isQuatro = 10; //pour __set //j'essaie de donner valuer 10 a attribut isQuatro mais lui il est privée, donc j'ai message
                         //"l'attribute n'existe pas ou est prive" que j'ai mis dans function __set
$z900->topCase=1;//pour __set
$z900->isJaponaise=1;//pour __set
var_dump($z900);
echo ($z900->isJaponaise); //Impossible d'afficher la valeur car is japonaise is private. Message grace a function __get
$isJaponnaise = $z900->isJaponaise;
?>
