<?php
session_start();
include_once(__DIR__ . "/../view/CommonView.php");
?>

<!DOCTYPE html>
<html>

<?php
$title = "Arene";
$hrefStyle = "../Style/Projet_Forum.css";
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
                <input type="submit" class="button" value="Je réserve ma place!" href="">
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="left">
            <img class="logo_footer" title="logo_blanc" src="logo_blanc.PNG" alt="logo_nemelade" />
        </div>
        <div class="middle">
            <div>
                <span class="footer_link">A propos</span>
                <span class="footer_link">-</span>
                <span class="footer_link">Mentions légales</span>
                <span class="footer_link">-</span>
                <a class="footer_link" href="contact.html">Contact</a>
            </div>
            <div>
                <p>Copyright ©2021 Nemelade Inc. Tous droits réservés.</p>
            </div>
        </div>
        <div class="right">
            <img class="logo_social" title="logo_twitter" src="logo_twitter.PNG" alt="logo_twitter" />
            <img class="logo_social" title="logo_facebook" src="logo_facebook.PNG" alt="logo_facebook" />
            <img class="logo_social" title="logo_discord" src="logo_discord.PNG" alt="logo_discord" />
            <img class="logo_social" title="logo_whatsapp" src="logo_whatsapp.PNG" alt="logo_whatsapp" />
        </div>
    </div>
    <?php
    htmlfooter();

    ?>
</body>

</html>