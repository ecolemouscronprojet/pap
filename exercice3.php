<?php

echo "<h1>Exercice 1</h1>";

// Créez une varibale, affectez une valeur de 10
$nb = 10;

// Modifiez la variable pour que sa valeur soit divisée par deux
$nb = $nb / 2;
//$nb /= 2;

// Modifiez la variable pour ajouter 20 à sa valeur
$nb = $nb + 20;
//$nb += 20;


// afficher le contenu de la variable a l'écran
echo $nb;


echo "<h1>Exercice 2</h1>";

// nb1: Créez une variable et lui affecter la valeur 103 
$nb1 = 103;

// nb2: appliquer un module 2 sur la variable précédente et stocker 
// son contenu dans une nouvelle variable
$nb2 = $nb1 % 2;

// sur nb2 modifier sa valeur pour la multiplier par 5
$nb2 *= 5;

// imprimer le resultat à l'écran de nb2
echo $nb2;


echo "<h1>Exercice 3</h1>";

$nb1 = 3;
$nb2 = 5;
$nb3 = 2;

$myNumber = 80;


// RESULTAT 50;

$myNumber = $myNumber / $nb2;

$myNumber = $myNumber * $nb1;

$myNumber = $myNumber + $nb3;

echo $myNumber;


echo "<h1>Exercice 4</h1>";

$nb1 = 1;

// echo ($nb1 . $nb1) + $nb1;

echo $nb1. ($nb1+$nb1);
















