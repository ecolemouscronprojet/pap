<?php

// Une application qui permet via un formulaire de pouvoir
// ajouter des prénoms dans un fichier
// supprimer des prénoms de ce même fichier
// faire une recherche dans le fichier
// intervertire des prénoms dans le fichier
// modifier les prénoms dans le fichier

if(isset($_GET["supp"])){
    $index = $_GET["supp"];
    echo $index;
    //récupérer le contenu du fichier
    // le transformer en tableau
    // retirer dans le tableau l'element à supprimer
    // remplacer tout le contenue du fichier
}


if(file_exists('prenoms.txt') === false){
    $file = fopen("prenoms.txt","a");
    fclose($file);
} 

if(isset($_POST['prenom'])) {
    $file = fopen("prenoms.txt","a");
    fwrite($file, $_POST['prenom'] . PHP_EOL);
    fclose($file);
}
// récupérer le contenu du fichier
$file = file_get_contents("prenoms.txt");
// transformer la chaine de caractères en tableau php
$fileExplosed = explode(PHP_EOL, $file);
?>


<form action="" method="post">
    <input type="text" name="prenom"/>
    <input type="submit" name="envoyer" value="Envoyer">
</form>


<?php

echo '<ul>';
// $key permet de récupérer la position de l'elemennt dans le tableau
// $p permet de récupérer la valeur
foreach($fileExplosed as $key => $p){
    if(empty($p) === false){
        // on crée un lien supprimer où l'on passe
        // en paramètre supp contenant la position de l'element
        // que l'on souhaite supprimer
        echo '<li>'.$p.' <a href="?supp='.$key.'">SUPPRIMER</a></li>';
    }
}
echo '</ul>';
?>


<!-- Lister les prénoms qui sont dans le fichier
prenoms.txt -->