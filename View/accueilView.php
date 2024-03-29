<?php

function displayActu()
{


?>
  <!doctype html>
  <html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>Page d'accueil </title>
    <link rel="stylesheet" href="../style/style3.css">
  </head>

  <body>
    <div class="container-grille">
      <header>
        <div class="h_left">
          <a href=""><img class="logo_nemelade" src="../Style/logo_blanc.png" alt="logo_nemelade" /></a>
        </div>
        <div class="h_middle">
          <a href="../Controller/Accueil.php" class="HeadText">Accueil</a>
          <a href="../Controller/Projet_Forum.php" class="HeadText">Forum</a>
          <a href="../Controller/actu.php" class="HeadText">Actualités</a>
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
      </header>

      <div id=troisième-partie>
        <br>
        <br>
        <br>
        <h1 class=titre> TOP ACTUALITES : </h1>
        <div class="container">
          <div class="box">
            <img src="../Style/New_1.jpg">
            <span>ALERTE ZOMVID</span>
          </div>
          <div class="box">
            <img src="../Style/king.jpg">
            <span>Elections Nemelade</span>
          </div>
          <div class="box">
            <img src="../Style/illustration_ville.jpg">
            <span>La ville prospère</span>
          </div>
          <div class="box">
            <img src="../Style/clerc.webp">
            <span>Contactez-nous!</span>
          </div>
        </div>

      </div>
      <div id=quatrième-partie>
        <br>
        <br>
        <br>
        <h1 class=titre> PROCHAINS COMBATS : </h1>
        <div class="container">
          <div class="box">
            <img src="../Style/vs1.png">
            <span>STARATEGOS vs WEREWOLF</span>
          </div>
          <div class="box">
            <img src="../Style/vs2.png">
            <span>GORILLA vs DEATHBRINGER</span>
          </div>
        </div>

      </div>
      <footer>
        <div class="left">
          <a href="../Controller/accueil.php"><img class="logo_footer" title="logo_blanc" src="../Style/logo_blanc.PNG" alt="logo_nemelade" />
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
          <img class="logo_social" title="logo_twitter" src="../Style/logo_twitter.PNG" alt="logo_twitter" />
          <img class="logo_social" title="logo_facebook" src="../Style/logo_facebook.PNG" alt="logo_facebook" />
          <img class="logo_social" title="logo_discord" src="../Style/logo_discord.PNG" alt="logo_discord" />
          <img class="logo_social" title="logo_whatsapp" src="../Style/logo_whatsapp.PNG" alt="logo_whatsapp" />
        </div>
      </footer>
      <img id=imageville src="../style/ville.jpg" alt="Impossible de charger l'image" width=725 height=500>
      <div id=forme_verte>
        <br>
        <br>
        <p>
          <br>
          <br>
          Bienvenue au sein de la bourgade NEMELADE! <br>
          Ici vous trouverez sur ce site l'ensemble des informations <br>
          dont vous avez besoin: <br>
          - Les actualités en vogue.<br>
          - Reserver vos places pour l'Arène.<br>
          - Participez aux combats virtuels au sein de l'Arène.<br>
          Nous avons mis à votre disposition un forum afin que vous puissiez<br>
          nous écrire et intérargir avec les autres membres.<br>
          N'hésitez pas à vous créer un compte, c'est totalement gratuit<br>
          et cela vous permettra d'accèder à l'ensemble des fonctionnalités!<br>
          Bonne visite et Enjoy!<br>


        </p>
      </div>
    </div>
  </body>

  </html>

<?php } ?>