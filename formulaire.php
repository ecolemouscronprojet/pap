<?php
session_start();

if(isset($_SESSION['users']) === false){
    $_SESSION['users'] = [];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <button type="submit">Envoyer</button>
    </form>




    <?php

    if (isset($_POST['nom']) && isset($_POST['prenom'])) {
        echo 'Bonjour ' . $_POST['nom'] . ' ' . $_POST['prenom'];
        $_SESSION['users'][] = [
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
        ];
    }
    echo "<pre>";
    print_r($_SESSION);
    ?>

</body>

</html>