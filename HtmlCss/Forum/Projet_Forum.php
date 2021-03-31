<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Projet_Forum.css">
    <title>Forum</title>
</head>

<body>
    <header>
        <h1 class="nemelade">NEMELADE</h1>
    </header>
    
    <section>
        <div class="title_forum">
            <h3 class="forum_titre">Forum</h3>
        </div>

        <div class="nom_colonnes">
            <p><span class="sujet">Sujets</span><span class="reponses">Réponses</span><span class="vues">Vues</span><span class="notes">Notes</span><span class="activite">Activités</span></p>
        </div>

        <div class="filtres">
            <input class="forum_recherche" type="text" placeholder="Rechercher un créateur...">
            <label for=""></label>
            <select name="forum_trie" id="forum_trie" class="forum_trie">
                <option value="">Activités récentes</option>
                <option value="">Sujets récents</option>
                <option value="">Meilleurs notes</option>
                <option value="">Les + vues</option>
                <option value="">Les + populaires</option>
            </select>
            <a class="a_forum_creer_suj" href="Projet_Creation_Sujet.php"><button class="forum_creer_sujet">Créer un sujet +</button></a>
        </div>

        <table>
            <?php
            $a = 0;
            while ($a < 15) {
                echo '<tr>';
                echo '<td class="colonne_sujet"><span class="nom_sujet"><a href="Projet_Sujet.php">Sujet ceci est le nom du sujet</a></span><br><span class="nom_crea_date">Par nomCreateur le 15 Mars 2021</span></td>';
                echo '<td class="forum_reponses">482</td>';
                echo '<td class="forum_vues">1506</td>';
                echo '<td class="forum_notes">+48</td>';
                echo '<td class="forum_activite">19 Mars 2021</td>';
                echo '</tr>';
                $a++;
            }
            ?>
        </table>

        <div class="bouton">
            <a href="Projet_Forum.php"><img src="Button.jpg" alt="Vers le haut"></a>
        </div>
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
                    <span class="footer_link">Contact</span>
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