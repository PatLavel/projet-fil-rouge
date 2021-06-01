<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <title>Nemelade : inscription</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/style.css" />

</head>

<body>
    <?php

    if (!isset($_SESSION['email'])) {
        header('Location:Connexion.php');
    }
    $hash = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

    Ajout_utilisateur($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['login'], $_POST['user_password'], $hash);

    function Ajout_utilisateur($nom, $prenom, $mail, $login, $password, $hash)
    {
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
        $stmt = $mysqli->prepare("INSERT INTO utilisateur (id, nom, prenom, mail, argent, login, password, hash)
        SELECT MAX(id)+1, ?, ?, ?, 100, ?, ?, ? FROM utilisateur;");
        $stmt->bind_param("ssssss", $nom, $prenom, $mail, $login, $password, $hash);
        $stmt->execute();
        $mysqli->close();
    }



    ?>
</body>

</html>