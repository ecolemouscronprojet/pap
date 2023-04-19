<?php
//calculatrice.php?num1=10&num2=5&operateur=plus

$allOperateurs = ['plus', 'moins', 'divise', 'multiplier'];

if(isset($_GET["num1"], $_GET["num2"], $_GET["operateur"])){
    $num1 = (int) $_GET["num1"];
    $num2 = (int) $_GET["num2"];
    $operateur = $_GET["operateur"];
    if(in_array($operateur, $allOperateurs)) {
        if($operateur === 'plus'){
            echo $num1 + $num2 .'<br>';
        } elseif($operateur === 'moins'){
            echo $num1 - $num2 .'<br>';
        } elseif($operateur === 'divise'){
            echo $num1 / $num2 .'<br>';
        } elseif($operateur === 'multiplier'){
            echo $num1 * $num2 .'<br>';
        }

    } else {
        echo "l'opérateur que vous avez saisi n'est pas valide !";
    }

    // , num2, operateur

} else {
    echo 'Vous devez définir ces 3 paramètres dans l\'url [num1, num2, operateur]';
}