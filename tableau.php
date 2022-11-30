<?php

echo '<h1>Tableau</h1>';

$fruits1 = ['pomme'];
$fruits2 = array('poire');

$fruits1[] = 'banane';

array_push($fruits2, 'fraise');


$fruits1[1] = 'poire';

unset($fruits1[0]);


$fruits1[0] = 'citron';

echo '<pre>';
var_dump($fruits1);
// var_dump($fruits2);