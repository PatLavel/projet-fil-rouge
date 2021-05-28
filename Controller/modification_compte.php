<?php
session_start();
include_once(__DIR__ . "/../view/CommonView.php");
?>

<!DOCTYPE html>
<html>

<?php
$title = "modification_compte";
$hrefStyle = "../Style/style.css";
htmlhead($title, $hrefStyle);
?>

<body>
    <?php
    if (!isset($_SESSION['user_login'])) {
        header('Location: Connexion.html');
    }
    ?>
    <?php
    htmlheader();

    ?>

    <h1 class="myh1">Bienvenue chez vous.</h1>
    <h2 class="myh2">Vous pouvez modifier vos informations personnelles. </h2>

    <div class="subscription">
        <div class="picture">
            <img class="profile_pic" title="user_profile_pic" src="../Style/user_pic.png" alt="user_profile_pic" />
            <input type="submit" class="button2" value="Modifier photo">
        </div>
        <div class="subscription_form">
            <form method="POST">
                <p class="myp">Entrez votre nouvelle adresse email. Vous recevrez un email de confirmation sur votre
                    nouvelle adresse.</p>
                <input class="case" type="email" name="email" placeholder="Nouvelle adresse email">
                <input class="case" type="email" name="confirm_email" placeholder="Confirmer nouvelle adresse email">
                <p class="myp">Vous pouvez changer de pseudo mais attention, les autres citoyens pourraient ne pas vous
                    reconnaitre!</p>
                <input class="case" type="text" name="pseudo" placeholder="Nouveau pseudo">
                <p class="myp">Vous pouvez renouveler le sort de protection de votre compte en changeant de mot de
                    passe.</p>
                <input class="case" type="password" name="password" placeholder="Mot de passe actuel"><br>
                <input class="case" type="password" name="password" placeholder="Nouveau mot de passe">
                <input class="case" type="password" name="confirm_password" placeholder="Confirmer nouveau mot de passe">
                <div>
                    <input type="checkbox" id="newsletter" name="newsletter">
                    <label for="newsletter">Je veux recevoir la Gazette de Nemelade par email</label>
                </div>
                <div>
                    <input type="submit" class="button" value="Enregistrer">
                </div>
            </form>
        </div>
    </div>


    <div class="bottom">

        <?php
        htmlfooter();
        ?>

</html>