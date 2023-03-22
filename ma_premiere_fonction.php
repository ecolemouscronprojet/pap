<?php


function addition($nb1, $nb2)
{
    return $nb1 + $nb2;
}

// créer une fonction calcul qui prend 3 paramètres
// le nombre 1
// le nombre 2
// l'operateur
// cette fonction effecutre le bon calcul  en fonction de l'operateur


function calcul($nb1, $nb2, $operateur)
{
    if ($operateur === '+') {
        return $nb1 + $nb2;
    } else if ($operateur === '-') {
        return $nb1 - $nb2;
    } else if ($operateur === '/') {
        return $nb1 / $nb2;
    } else if ($operateur === '*') {
        return $nb1 * $nb2;
    } else {
        throw new Exception('Operator invalid');
    }
}

echo calcul(6,9,'-');



// echo addition(6, 7);
// echo '<br>';
// $result = addition(10, 7);
// echo $result;