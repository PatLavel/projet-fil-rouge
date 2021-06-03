<?php
function htmlhead(string $title, string $hrefStyle): void
{
?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href=<?php echo $hrefStyle ?>>
        <title><?php echo $title ?></title>
    </head>

<?php
}

function htmlheader(): void
{
?>
    <header>
        <div class="header">
            <div class="h_left">
                <a href="../Controller/accueil.php"><img class="logo_nemelade" src="../Style/logo_blanc.png" alt="logo_nemelade" /></a>
            </div>
            <div class="h_middle">
                <a href="../Controller/accueil.php" class="HeadText">Accueil</a>
                <a href="../Controller/Projet_Forum.php" class="HeadText">Forum</a>
                <a href="../Controller/Zomvid.php" class="HeadText">Actualités</a>
                <a href="../Controller/arene.php" class="HeadText">Arène</a>
            </div>
            <div class="h_right1">
                <?php if (!isset($_SESSION['user_login'])) {    ?>
                    <a href="modification_compte.php"><img class="logo_user" title="logo_blanc" src="../Style/user_pic.png" alt="logo_nemelade" /></a>
                    <div class="h_right2">
                        <a href="../Controller/Connexion.php" class="lien_co">Connexion</a>
                        <a href="../Controller/creation_compte.php" class="lien_insc">Inscription</a>
                    </div>

                <?php   } else {
                    //var_dump($_SESSION); 
                ?>
                    <a href="modification_compte.php"><img class="logo_user" title="logo_blanc" src="../Style/user_pic.png" alt="logo_nemelade" /></a>
                    <div class="h_right2">
                        <a href="../Controller/modification_compte.php" class="lien_insc"><?php echo $_SESSION['user_login']; ?></a>
                        <a href="../Controller/script_deconnexion.php" class="lien_insc">Deconnexion</a>
                    </div>

                <?php     }    ?>

            </div>
        </div>
    </header>

<?php
}


function htmlfooter(): void
{
    //phpinfo();
?>
    <footer>
        <div class="footer">
            <div class="left">
                <a href="../Controller/accueil.php"><img class="logo_footer" title="logo_blanc" src="../Style/logo_blanc.PNG" alt="logo_nemelade" /> </a>
            </div>
            <div class="middle">
                <div>
                    <a class="a_footer_link" href="../Controller/explication_concept.php">A propos</a>
                    <span class="footer_link">-</span>
                    <span class="footer_link">Mentions légales</span>
                    <span class="footer_link">-</span>
                    <a class="a_footer_link" href="../Controller/contact.php">Contact</a>
                </div>
                <div>
                    <p>Copyright ©2021 Nemelade Inc. Tous droits réservés.</p>
                </div>
            </div>
            <div class="right">
                <a target="_blank" href="https://twitter.com/Kaamelott_tweet"><img class="logo_social" title="logo_twitter" src="../Style/logo_twitter.PNG" alt="logo_twitter" /></a>
                <a target="_blank" href="https://fr-fr.facebook.com/LesMurmuresDuDonjon"><img class="logo_social" title="logo_facebook" src="../Style/logo_facebook.PNG" alt="logo_facebook" /></a>
                <a target="_blank" href="https://discord.gg/yVmCy5js"><img class="logo_social" title="logo_discord" src="../Style/logo_discord.PNG" alt="logo_discord" /></a>
                <a target="_blank" href="https://warhammerfantasy.fandom.com/wiki/Warhammer_Wiki"><img class="logo_social" title="logo_whatsapp" src="../Style/logo_whatsapp.PNG" alt="logo_whatsapp" /></a>
            </div>
        </div>
    </footer>



<?php
}
?>