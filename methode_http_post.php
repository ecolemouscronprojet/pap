

<form action="" method="post">
    <label for="login">Login :</label>
    <input type="text" id="login" name="login" required>
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Se connecter">
</form>

<?php

if (isset($_POST['login']) && isset($_POST['password'])) {
    // $nom = INPUT_POST, 'nom', FILTER_SANITIZE_STRING);

    $login = htmlspecialchars($_POST['login']);

    $password = htmlspecialchars($_POST['password']);
    // echo $login;
    echo $password;
}

