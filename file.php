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
foreach($fileExplosed as $p){
    echo '<li>'.$p.'</li>';
}
echo '</ul>';
?>


<!-- Lister les prénoms qui sont dans le fichier
prenoms.txt -->