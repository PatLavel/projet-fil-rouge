<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <title>Nemelade : inscription</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="projet-fil-rouge\Style\style.css" />

</head>

<body>
    <?php

    $login = $_POST['user_login'];
    // $employeDAO = new EmployeDAO();
    $tab = connexion($login);

    for ($i = 0; $i < count($tab); $i++) {
        if (password_verify($_POST['user_password'], $tab['hash'])) {
            session_start();
            $_SESSION['user_login'] = $_POST['user_login'];
            header('Location:arene.php');
        } else {
            echo "<div class='status_connexion'>
                <div><p>Informations invalides</p></div>
                <div><a class='btn btn-dark btn-sm' href='Connexion.php'>Retour</a></div>
                </div>";
        }
    }

    function connexion($login)
    {
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
        $stmt = $mysqli->prepare("SELECT hash FROM utilisateur WHERE login=?;");
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $rs = $stmt->get_result();
        $tab = $rs->fetch_array(MYSQLI_ASSOC);
        $rs->free();
        $mysqli->close();
        return $tab;
    }

    ?>
</body>

</html>