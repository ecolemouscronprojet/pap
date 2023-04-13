<?php
session_start();

//unset($_SESSION['todo']);
//$_SESSION['todo'] = [];



if (isset($_GET['supp_all'])) {
    $_SESSION['todo'] = [];
    header('location: index.php');
    exit;
}

if (isset($_GET['supp_key'])) {
    $key = $_GET['supp_key'];
    unset($_SESSION['todo'][$key]);
    header('location: index.php');
    exit;
}


//condition si la variable $_GET['supp_key'] existe
//recupere la valeur de la variable $_GET['supp_key']
// supprimer la ligne du tableau $_SESSION['todo']



// creation du tableau todo en session
if (isset($_SESSION['todo']) === false) {
    $_SESSION['todo'] = [];
}

// si le formulaire est envoyé, je stocke le résultat 
// dans mon tableau todo

if (isset($_POST['tache']) && empty($_POST['tache']) === false) {
    $_SESSION['todo'][] = $_POST['tache'];
}

?>

<h1>Formulaire</h1>
<!-- http://localhost:3000/todo/index.php?affiche=1-->
<?php

if (isset($_GET['affiche']) && $_GET['affiche'] == 1) {
    echo "MESSAGE 1";
} else if (isset($_GET['affiche']) && $_GET['affiche'] == 2) {
    echo "MESSAGE 2";
}


// http://localhost:3000/todo/index.php?age=18
if (isset($_GET['age'])) {
    if ($_GET['age'] >= 18) {
        echo 'vous êtes majeur';
    } else {
        echo 'vous êtes mineur';

    }
}
?>
<p>
    <a href="index.php?supp_all">RESET ALL</a>
</p>
<div>
    <form action="" method="post">
        <input type="text" name="tache" value="" placeholder="Tâche à réaliser">
        <input type="submit" value="Envoyer">
    </form>
</div>

<?php

$todos = $_SESSION['todo'];



echo '<ul>';
foreach ($todos as $key => $value) {
    // mettre en place un lien hypertext valeur [SUPPRIMER] qui va rediriger vers la page
    // index.php?supp_key=la position de l'element dfans le tableau 
    echo "<li>";
    echo $value;
    echo " <a href='index.php?supp_key=$key'>SUPPRIMER</a>";
    echo "</li>";
}
echo '</ul>';
