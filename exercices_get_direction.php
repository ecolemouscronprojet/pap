<?php
// http://localhost:3000/exercices_get.php?direction=droite
$direction = $_GET['direction'] ?? '';


if($direction == 'droite') {
    echo "Vous tournez à droite";
}
else if($direction == 'gauche'){
    echo "Vous tourner à gauche";
}
else if($direction == 'avant'){
    echo "Vous allez de l'avant";
}
else if($direction == 'arrière'){
    echo "Vous allez en arrière";
}

