<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <title>Nemelade : modifications</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <?php
    if (!isset($_SESSION['login'])) {
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

    <h1 class="myh1">Bienvenue chez vous.</h1>
    <h2 class="myh2">Vous pouvez modifier vos informations personnelles. </h2>

    <div class="subscription">
        <div class="picture">
            <img class="profile_pic" title="user_profile_pic" src="user_pic.PNG" alt="user_profile_pic" />
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