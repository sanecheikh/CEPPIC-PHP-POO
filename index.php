<?php
spl_autoload_register(function($className) {
    require './classes/'.$className .'.php';
});


$voiture1 = new Voiture("vert",1200,"BMV");
var_dump($voiture1);
$voiture1->setCouleur('noir');
echo $voiture1->getCouleur();



//$voiture1 -> couleur= "vert";
//$voiture1->$masse = 1200;
//$voiture1->$vitesse=30;

//var_dump($voiture);


?>