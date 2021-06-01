<?php
session_start();
include_once(__DIR__ . "/../view/CommonView.php");
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

    <h1 class="myh1">Envie d'un peu d'action?</h1>
    <h2 class="myh2">Assistez à un des combats de l'arène!</h2>

    <?php
    $result = userEarnedMoney($_SESSION['user_login']);

    function userEarnedMoney($login)
    {

        $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
        $stmt = $mysqli->prepare("SELECT round(argent) FROM utilisateur WHERE login=?;");
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $rs = $stmt->get_result();
        $tab = $rs->fetch_array(MYSQLI_ASSOC);
        $rs->free();
        $mysqli->close();
        return $tab;
    }
    ?>

    <div class="reservation">
        <div class="subscription">
            <div class="subscription_form">
                <p class="myp">Vous disposez actuellement de <?php echo $result['round(argent)'] ?> PO.</p>
                <p class="myp">Êtes vous certain de vouloir dépenser 10 PO pour assister à ce match?</p>
                <div class="validation">
                </div>
                <form><button formaction="arene.php" class="button">Je réserve ma place!</button></form>

            </div>
        </div>
    </div>

    <?php
    htmlfooter();

    ?>
</body>

</html>