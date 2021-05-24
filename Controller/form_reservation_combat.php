<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <title>Nemelade : reservation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <?php
    if (!isset($_SESSION['user_login'])) {
        header('Location: Connexion.html');
    }
    ?>

    <header>
        <div class="header">
            <div class="h_left">
                <a href="accueil.html"><img class="logo_nemelade" title="logo_blanc" src="logo_blanc.png" alt="logo_nemelade" /></a>
            </div>
            <div class="h_middle">
                <a href="Projet_Forum.php" class="HeadText1">Forum</a>
                <a href="Zomvid.html" class="HeadText2">Actualités</a>
                <a href="Arene.html" class="HeadText3">Arène</a>
            </div>
            <div class="h_right1">
                <a href="modification_compte.html"><img class="logo_user" title="logo_blanc" src="user_pic.png" alt="logo_nemelade" /></a>
            </div>
            <div class="h_right2"><a href="Connexion.html" class="lien_co">Connexion</a><br><a href="creation_compte.html" class="lien_insc">Inscription</a>
            </div>
        </div>
    </header>

    <h1 class="myh1">Envie d'un peu d'action?</h1>
    <h2 class="myh2">Assistez à un des combats de l'arène!</h2>

    <?php
    $result = userEarnMoney($_SESSION['user_login']);

    function userEarnMoney($login)
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


    <div class="subscription">
        <div class="subscription_form">
            <p class="myp">Vous disposez actuellement de <?php echo $result['round(argent)'] ?> PO.</p>
            <p class="myp">Êtes vous certain de vouloir dépenser 10 PO pour assister à ce match?</p>
            <div class="validation">
            </div>
            <input type="submit" class="button" value="Je réserve ma place!" href="">

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
</body>

</html>