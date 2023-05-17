<?php

if(file_exists('prenoms.txt') === false){
    $file = fopen("prenoms.txt","x");
    fclose($file);
} 

if(isset($_POST['prenom'])) {
    $file = fopen("prenoms.txt","a");
    fwrite($file, $_POST['prenom'] . PHP_EOL);
    fclose($file);
}

// else {
//     $prenoms = fopen("prenoms.txt","a");
//     fwrite($prenoms, 'toto'. PHP_EOL);
//     fclose($prenoms);
// }

?>


<form action="" method="post">
    <input type="text" name="prenom"/>
    <input type="submit" name="envoyer" value="Envoyer">
</form>



<!-- Lister les prénoms qui sont dans le fichier
prenoms.txt -->