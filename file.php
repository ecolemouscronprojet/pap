<?php

// Une application qui permet via un formulaire de pouvoir
// ajouter des prénoms dans un fichier
// supprimer des prénoms de ce même fichier
// faire une recherche dans le fichier
// intervertire des prénoms dans le fichier
// modifier les prénoms dans le fichier

if(isset($_GET["supp"])){
    // echo '<pre>';
    $index = $_GET["supp"];
    $file = file_get_contents('prenoms.txt');
    // echo $file;
    $fileExplode = explode(PHP_EOL, $file);
    unset($fileExplode[$index]);
    $implodedFile = implode(PHP_EOL, $fileExplode);
    file_put_contents('prenoms.txt', $implodedFile);
    header('location: file.php');
    exit;
}

// Modifier

// ajouter un lien [Modifer] a côté du bouton supprimer


// Quand vous cliquez sur le lien ça doit rediriger
// sur la même page en remplissant le formulaire avec
// le prénom de la personne à modifier

// enregistrer le prénom doit se mettre à jour et il ne
// faut pas qu'il crée un nouveau prénom





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

// Si dans l'url on passe le paramètre GET update
$prenom = '';
if(isset($_GET['update'])){
    $key = $_GET['update'];
    $prenom = $fileExplosed[$key];
}

// Alimenter votre formulaire avec ce prénom 




?>


<form action="" method="post">
    <input type="text" name="prenom" value="<?= $prenom ?>"/>
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
        echo "<li>
            $p  
            <a href='?supp=$key'>SUPPRIMER</a>&nbsp;
            <a href='?update=$key'>MODIFIER</a>
            </li>";
    }
}
echo '</ul>';
?>


<!-- Lister les prénoms qui sont dans le fichier
prenoms.txt -->