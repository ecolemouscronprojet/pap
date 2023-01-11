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
    <input type="text" name="prenom">
    <button type="submit">Envoyer</button>
</form>
<?php
if(isset($_POST['prenom'])) {
    echo 'bonjour '. $_POST['prenom'];
}
?>

</body>
</html>