<?php
session_start();
include_once(__DIR__ . "/../view/CommonView.php");
include_once(__DIR__ . "/../service/evenementService.php");
include_once(__DIR__ . "/../service/UtilisateurService.php");

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
        header('Location: Connexion.php');
    }
    ?>
    <?php
    htmlheader();

    $userMoney = new UtilisateurService();

    $result = $userMoney->SelectArgent($_SESSION['user_login']);
    ?>

    <div class="subscription">
        <div class="subscription_form">
            <div>
                <h1 class="myh1">Bienvenue chez vous.</h1>
                <p class="myp">Votre solde est de <?php echo round($result) ?> PO.
                <p></br>
                <h2 class="myh2">Vous pouvez modifier vos informations personnelles. </h2>
            </div>
            <form method="POST">
                <p class="myp">Modifiez votre adresse email.</p>
                <input class="case" type="email" name="confirm_email" placeholder="Adresse email">
                <p class="myp">Vous pouvez renouveler le sort de protection de votre compte en changeant de mot de
                    passe.</p>
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



    <?php
    htmlfooter();
    ?>

</body>

</html>