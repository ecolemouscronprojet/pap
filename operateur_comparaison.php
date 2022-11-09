<?php

echo '<h1>Opérateurs de comparaison</h1>';

$nb1 = 10;
$nb2 = 11;


echo '<h2>est égal</h2>';

var_dump($nb1 == $nb2);
var_dump($nb1 == 10);

echo '<h2>est strictement égal</h2>';

var_dump($nb1 === $nb2);
var_dump($nb1 === '10');


echo '<h2>est différent</h2>';
var_dump($nb1 != $nb2);
var_dump($nb1 <> $nb2);


echo '<h2>est plus grand</h2>';
var_dump($nb1 > $nb2);


echo '<h2>est plus petit</h2>';
var_dump($nb1 < $nb2);


echo '<h2>est plus grand ou égal</h2>';
var_dump($nb1 >= $nb2);


echo '<h2>est plus petit ou égal</h2>';
var_dump($nb1 <= $nb2);