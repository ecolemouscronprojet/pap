<?php

$nb1 = 10;
$nb2 = 15;

$temp = $nb1;
$nb1 = $nb2;
$nb2 = $temp;

// RESULTAT
echo $nb1;
echo '<br>';
echo $nb2;


$prenom = 'Bob';


echo '<br>';
echo "Hello comment ça va $prenom ?<br>";
echo 'Hello comment ça va ' . $prenom . ' ?<br>';
echo 'Hello comment ça va ' , $prenom . ' ?<br>';


echo '<h1>Exercice 2</h1>';

// echo "j\"ai acheté une maison à Mouscron";

$mot1 = 'acheté';
$mot2 = 'maison';
$mot3 = 'une';
$mot4 = 'j\'ai';
$mot5 = 'Mouscron';
$mot6 = 'à';


echo $mot4 . ' ' . $mot1 . ' ' . $mot3 . ' ' . $mot2 . ' ' . $mot6 . ' ' . $mot5;


echo 'ma voiture est rouge, ma voiture est noire, ma voiture est verte,
ma voiture est orange';


