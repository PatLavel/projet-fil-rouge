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

    // if (!isset($_SESSION['email'])) {
    //     header('Location:Connexion.php');
    // } else {
    //     header('Location:Modification_compte.php');
    // }
    $hash = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

    Ajout_utilisateur($_POST['mail'], $_POST['user_password'], $hash, $_GET['id']);

    function Ajout_utilisateur($mail, $password, $hash, $login)
    {
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
        $stmt = $mysqli->prepare("UPDATE utilisateur SET mail = ?, password = ?, hash= ? WHERE id=?;");
        $stmt->bind_param("sssi", $mail, $password, $hash, $login);
        $stmt->execute();
        $mysqli->close();
    }



    ?>
</body>

</html>