<?php

$maVariable = 'MON message';
$maVariable2 = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry';

//ucfirst
//strtolower

$nom = 'LASSOIE';
$prenom = 'SAMUEL';

echo ucwords(strtolower($nom . ' ' . $prenom)) . '<br>';

echo ucfirst(strtolower($nom)) . ' ' . ucfirst(strtolower($prenom));

echo '<br>';

$nom = ' LASSOIE ';
$prenom = ' SAMUEL ';

echo trim($nom) . trim($prenom);

// echo strtoupper($maVariable) . '<br>';
// echo strtolower($maVariable) . '<br>';
// echo strlen($maVariable2) . '<br>';


echo '<h3>Exercice n°3</h3>';


$message = 'ma voiture est rouge';

echo str_replace('rouge', 'bleue',  $message);

