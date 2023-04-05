<?php

echo "<h1>Exercice n°1</h1>";

// function nombre_pair(int $nb) {
//     return $nb % 2 === 0;
// }

function nombre_pair(int $nb): bool
{
    if ($nb % 2 === 0) {
        return true;
    } else {
        return false;
    }
}

var_dump(nombre_pair(1));
var_dump(nombre_pair(2));
var_dump(nombre_pair(3));

echo "<h1>Exercice n°2</h1>";

function aire_rectangle(float $longueur, float $largeur): float
{
    return $longueur * $largeur;
}

echo aire_rectangle(5, 5);


echo "<h1>Exercice n°3</h1>";


// ... permet de passer 1 à X paramètres qui vont être stockés dans un 
// tableau $nbs
function plusPetit(int $nb1, ...$nbs): int
{
    $min = $nb1;
    foreach($nbs as $n) {
        if($n < $min){
            $min = $n;
        }
    }
    return $min;
}

echo plusPetit(7, 10, 17, 4, 10, 8, 2, 1, 0).'<br>';

