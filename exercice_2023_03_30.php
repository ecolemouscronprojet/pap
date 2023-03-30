
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

function convert_celsius_to_fahrenheit($celsius) {
    $response = $celsius * (9/5) + 32;
    return $response;
}

echo convert_celsius_to_fahrenheit(10);
