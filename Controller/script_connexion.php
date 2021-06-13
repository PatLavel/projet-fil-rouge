    <?php
    include_once(__DIR__ . "/../DAO/connexionDAO.php");

    $login = $_POST['user_login'];
    $tab = connexion($login);

    for ($i = 0; $i < count($tab); $i++) {
        if (password_verify($_POST['user_password'], $tab['hash'])) {
            session_start();
            $_SESSION['user_login'] = $_POST['user_login'];
            header('Location:accueil.php');
        } else {
            echo "<div class='status_connexion'>
                <div><p>Informations invalides</p></div>
                <div><a class='btn btn-dark btn-sm' href='Connexion.php'>Retour</a></div>
                </div>";
        }
    }
