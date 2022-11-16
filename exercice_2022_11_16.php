<?php

echo '<h1>Exercice n°1</h1>';

$prenom1 = 'Bob';
$prenom2 = 'Maurice';

if ($prenom1 == $prenom2) {
    echo 'OK';
} else {
    echo 'KO';
}

echo '<h1>Exercice n°2</h1>';


$nb1 = 100;

$nb2 = 3;

$operateur = '/'; // la valeur pourrait changer: + - /

if($operateur == '-') {
    echo $nb1 - $nb2;
} else if($operateur == '+') {
    echo $nb1 + $nb2;
} else if($operateur == '/') {
    echo $nb1 / $nb2;
}