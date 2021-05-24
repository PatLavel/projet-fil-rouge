<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
    <title>BDD personnel</title>
</head>

<body>

    <?php
    if (!isset($_SESSION['login'])) {
        header('Location: Connexion.html');
    }
    logOut();

    function logOut()
    {
        unset($_SESSION);
        unset($_COOKIE);
        session_destroy();
    }

    echo "<div class='fail_connexion'>
                <div><p>Vous vous êtes déconnecté avec succès.</p></div>
                <div><a class='btn btn-dark btn-sm' href='Connexion.html'>Retour</a></div>
                </div>";
    ?>
</body>