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



