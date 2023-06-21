<?php

// function switchPrenom($key, $action) {
//     // 1. récuperer le contenu du fichier
//     $file = file_get_contents('prenoms.txt');
//     // 2. convertir ce contenu en tableau
//     $fileExplosed = explode(PHP_EOL, $file);

//     // 3. venir switcher l'element vers le bas 
//     // du tableau 
    
//     if($action === 'down'){
//         $switch = 1;
//     } else if($action === 'up'){
//         $switch = -1;
//     } else {
//         $switch = 0;
//     }
    
    
//     $tmp1 = $fileExplosed[$key];
//     $tmp2 = $fileExplosed[$key+$switch];
//     $fileExplosed[$key] = $tmp2;
//     $fileExplosed[$key+$switch] = $tmp1;

//     // convertir le tableau en chaine
//     $implodedFile = implode(PHP_EOL, $fileExplosed);
//     // enregistrer le resultat dans le fichier
//     file_put_contents('prenoms.txt', $implodedFile);
//     // rediriger sur la page sans les paramètres
//     header('location: file.php');
//     exit;
// }

// Une application qui permet via un formulaire de pouvoir
// ajouter des prénoms dans un fichier
// supprimer des prénoms de ce même fichier
// faire une recherche dans le fichier
// intervertire des prénoms dans le fichier
// modifier les prénoms dans le fichier

// créer le fichier s'il n'existe pas
if(file_exists('prenoms.txt') === false) {
    $file = fopen("prenoms.txt","a");
    fclose($file);
} 


if(isset($_GET['action'], $_GET['key'])){
    $action = $_GET['action'];
    if($action === 'up') {
        // 1. récuperer le contenu du fichier
        $file = file_get_contents('prenoms.txt');
        // 2. convertir ce contenu en tableau
        $fileExplosed = explode(PHP_EOL, $file);
        $key = $_GET['key'];

        // 3. venir switcher l'element vers le haut 
        // du tableau 
        $tmp1 = $fileExplosed[$key];
        $tmp2 = $fileExplosed[$key-1];
        $fileExplosed[$key] = $tmp2;
        $fileExplosed[$key-1] = $tmp1;
      
        // convertir le tableau en chaine
        $implodedFile = implode(PHP_EOL, $fileExplosed);
        // enregistrer le resultat dans le fichier
        file_put_contents('prenoms.txt', $implodedFile);
        // rediriger sur la page sans les paramètres
        header('location: file.php');
        exit;
    } else if($action === 'down') {
        // 1. récuperer le contenu du fichier
        $file = file_get_contents('prenoms.txt');
        // 2. convertir ce contenu en tableau
        $fileExplosed = explode(PHP_EOL, $file);
        $key = $_GET['key'];

        // 3. venir switcher l'element vers le bas 
        // du tableau 
        $tmp1 = $fileExplosed[$key];
        $tmp2 = $fileExplosed[$key+1];
        $fileExplosed[$key] = $tmp2;
        $fileExplosed[$key+1] = $tmp1;

        // convertir le tableau en chaine
        $implodedFile = implode(PHP_EOL, $fileExplosed);
        // enregistrer le resultat dans le fichier
        file_put_contents('prenoms.txt', $implodedFile);
        // rediriger sur la page sans les paramètres
        header('location: file.php');
        exit;
    }
}


if(isset($_POST['prenom'])) {
    if(isset($_GET['update'])) {
        // Ouvrir le fichier et récupérer son contenu
        $file = file_get_contents('prenoms.txt');
        // convertir le contenu en tableau
        $fileExplosed = explode(PHP_EOL, $file);
        // récupérer la position de l'element à mettre à jour 
        // dans le tableau
        $key = $_GET['update'];
        // remplacer dans le tableau l'ancien prénom par le nouveau
        $fileExplosed[$key] = $_POST['prenom'];
        // convertir le tableau en chaine
        $implodedFile = implode(PHP_EOL, $fileExplosed);
        // enregistrer le resultat dans le fichier
        file_put_contents('prenoms.txt', $implodedFile);
        // rediriger sur la page sans les paramètres
        header('location: file.php');
        // on exit pour ne pas executer le reste de la page
        exit;
    } else {
        $file = fopen("prenoms.txt","a");
        fwrite($file, $_POST['prenom'] . PHP_EOL);
        fclose($file);
    }
}


if(isset($_GET["supp"])){
    // récupération de la position de l'element 
    // à supprimer dans le tableau
    $index = $_GET["supp"];
    // on récupère le contenu du fichier
    $file = file_get_contents('prenoms.txt');
    // on convertit le contenu du fichier en tableau
    $fileExplosed = explode(PHP_EOL, $file);
    // on supprime l'element du tableau à supprim
    unset($fileExplosed[$index]);
    $implodedFile = implode(PHP_EOL, $fileExplosed);
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

$keyLastElement = count($fileExplosed) -1;
foreach($fileExplosed as $key => $p){
    if(empty($p) === false){
        // on crée un lien supprimer où l'on passe
        // en paramètre supp contenant la position de l'element
        // que l'on souhaite supprimer

        echo "<li>
            <a href='?action=up&key=$key' style='text-decoration: none;font-weight: bold;color: blue'>&#8593;</a>
            <a href='?action=down&key=$key' style='text-decoration: none;font-weight: bold;color: blue'>&#8595;</a>
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