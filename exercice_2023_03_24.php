<?php

echo "<h1>Exercice n°1</h1>";

function tranche($nb1, $nb2)
{
    $values = [];
    for ($i = $nb1; $i <= $nb2; $i++) {
        $values[] = $i;
    }
    return $values;
}

$values = tranche(1, 10);

echo '<pre>';
print_r($values);



echo "<h1>Exercice n°1 bis</h1>";
function trancheBis($nb1, $nb2, $exclude)
{
    $values = [];
    for ($i = $nb1; $i <= $nb2; $i++) {
        if($i != $exclude) {
            $values[] = $i;
        }
    }
    return $values;
}


$values = trancheBis(6, 10, 10);

echo '<pre>';
print_r($values);


echo "<h1>Exercice n°2</h1>";

function multiplication($nb1)
{
    $values = [];
    for ($i = 1; $i <= 10; $i++) {
        $values[] = $i * $nb1;
    }
    return $values;
}

$values = multiplication(5);

echo '<pre>';
print_r($values);

echo "<h1>Exercice n°3</h1>";


$n = 20;

$num1 = 0; 
$num2 = 1; 

$i = 0; 
while ($i < $n) { 
    echo ' '.$num1.'<br>';
    $num3 = $num2 + $num1; 
    $num1 = $num2; 
    $num2 = $num3; 
    $i = $i + 1; 
}