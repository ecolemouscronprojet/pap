
<?php


echo '<h1>Exercice n°1</h1>';
// Ecrivez une fonction qui permet de convertir des celsius en fahrenheit

// -----------SANS FONCTION---------
// $celsius = 10;

// echo $celsius;
// echo '<br>';


// $fahrenheit = $celsius * (9/5) + 32;

// echo $fahrenheit;

// -----------AVEC FONCTION--------

function convert_celsius_to_fahrenheit($celsius)
{
    $response = $celsius * (9 / 5) + 32;
    return $response;
}


echo convert_celsius_to_fahrenheit(10);


echo '<h1>Exercice n°2</h1>';
// créez une fonction qui permet de retourner la puissance de 2 d'un nombre

function puissanceDe2($nb)
{
    return $nb * $nb;
}


echo puissanceDe2(5);

echo '<h1>Exercice n°3</h1>';
// créez une fonction dans laquelle vous passez le tableau suivant et où la
//fonction doit retourner le nombre le plus grand du tableau

$nbs = [10, 22, 100, 33, 44, 2, 288, 6, 7];