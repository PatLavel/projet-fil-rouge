<?php
session_start();
include_once(__DIR__ . "/../view/CommonView.php");
?>

<!DOCTYPE html>
<html>

<?php
$title = "Connexion";
$hrefStyle = "../Style/Projet_Forum.css";
htmlhead($title, $hrefStyle);
?>

<body>

    <?php
    htmlheader();
    ?>

    <div class="all_content">
        <div class="connection">
            <form action="script_connexion.php" method="post">

                <div>
                    <img class="profile" title="logo" src="../Style/user_pic.png" alt="user_picture" /></a>
                </div>
                <div>
                    <input class="case" type="text" id="pseudo" name="user_login" placeholder="Pseudo" autofocus required>
                </div>
                <div>
                    <input class="case" type="password" id="password" name="user_password" placeholder="Mot de passe" required>
                </div>
                <button formaction="script_connexion.php" class="button">Se connecter</button>
                <p class="password_lost">Mot de passe oublié?</p>
            </form>
        </div>
        <div class="separation">
        </div>
        <div class="bloc_join">
            <h3 class="myh3">Vous n'êtes pas encore citoyen de Nemelade?</br>Rejoignez nous!</h3>
            <p class="join_us">Devenir citoyen de Nemelade, c'est rejoindre une communauté qui grandit sans cesse. Les citoyens de la ville ont accès à tout le contenu du site, y compris les forums de discussion.</p>
            <form><button formaction="creation_compte.html" class="button">J'en suis!</button></form>
        </div>
    </div>


    <?php
    htmlfooter();
    ?>

</body>

</html>