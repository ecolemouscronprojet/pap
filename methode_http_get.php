<?php
//?fruit1=pomme&fruit2=poire

// echo $_GET["fruit1"] ?? '';
// echo '<br>';
// echo $_GET["fruit2"] ?? '';

// if (isset($_GET['fruit1'])) {
//     $f1 = $_GET['fruit1'];
//     echo $f1;
// }

// echo '<br>';
// if (isset($_GET['fruit2'])) {
//     $f2 = $_GET['fruit2'];
//     echo $f2;
// }

echo '<h2>Exercice N°2</h2>';


if( isset($_GET['nb1'], $_GET['nb2']) ){
    echo $_GET['nb1'] + $_GET['nb2'];
}


echo '<h2>Exercice N°3</h2>';

//http://localhost:3000/methode_http_get.php?msg=yo&test=10&fruit=pomme


echo '<ul>';
foreach($_GET as $key => $value) {
    echo "<li><b>$key</b>:  $value</li>";
}
echo '</ul>';