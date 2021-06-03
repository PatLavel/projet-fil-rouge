<?php
session_start();
include_once(__DIR__ . "/../view/CommonView.php");
include_once(__DIR__ . "/../service/evenementService.php");
include_once(__DIR__ . "/../service/UtilisateurService.php");

?>

<!DOCTYPE html>
<html>

<?php
$title = "Arene";
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

    ?>


    <?php
    $userMoney = new UtilisateurService();
    $result = $userMoney->SelectArgent($_SESSION['user_login']);

    $EvenementServ = new EvenementService();
    $dataevent = $EvenementServ->GetSingleEvent($_GET["id"]);

    ?>

    <div class="reservation">
        <div class="subscription">
            <div class="subscription_form">
                <h1 class="myh1">Envie d'un peu d'action?</h1>
                <h2 class="myh2">Réservez votre place pour le combat entre</h2>
                <h2><?php echo $dataevent->getCombattant1() ?> et <?php echo $dataevent->getCombattant2() ?>!!</h2></br>
                <p class="myp">Vous disposez actuellement de <?php echo round($result) ?> PO.</p>
                <p class="myp">Êtes vous certain de vouloir dépenser 10 PO pour assister à ce match?</p>
                <div class="validation">
                </div>
                <form><button formaction="script_reservation.php" class="button">Je réserve ma place!</button></form>

            </div>
        </div>
    </div>

    <?php
    htmlfooter();

    ?>
</body>

</html>