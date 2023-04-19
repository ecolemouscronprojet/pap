
<?php

if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
    echo 'Bonjour ' . $nom;
} else {
    echo 'Bonjour visiteur';
}
