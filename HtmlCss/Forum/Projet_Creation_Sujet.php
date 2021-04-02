<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Projet_Forum.css">
    <title>Création de Sujet</title>
</head>

<body>
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

    <section>
        <div class="title_forum">
            <h3 class="forum_titre">Création de Sujet</h3>
        </div>

        <article class="article_formulaire_sujet">
            <div class="div_formulaire_sujet">
                <label for="titre_sujet">Titre du sujet :</label>
                <br>
                <input id="titre_sujet" class="saisie_titre_sujet" type="text" placeholder="Saisissez le titre de votre sujet..." required>
                <br><br>
                <label for="contenu_sujet">Contenu du sujet :</label>
                <br>
                <textarea id="contenu_sujet" class="saisie_contenu_sujet" type="text" placeholder="Saisissez le contenu de votre sujet..." required></textarea>
                <br>
                <button class="poster">POSTER</button>
            </div>
        </article>
    </section>

    <footer>
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
                    <a class="footer_contact" href="contact.html">Contact</a>

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
    </footer>

</body>

</html>