<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/Projet_Forum.css">
    <title>Forums - Nemelade</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="h_left">
                <a href="accueil.html"><img class="logo_nemelade" src="../Style/logo_blanc.png" alt="logo_nemelade" /></a>
            </div>
            <div class="h_middle">
                <a href="accueil.html" class="HeadText">Accueil</a>
                <a href="Projet_Forum.php" class="HeadText">Forum</a>
                <a href="Zomvid.html" class="HeadText">Actualités</a>
                <a href="Arene.html" class="HeadText">Arène</a>
            </div>
            <div class="h_right1">
                <a href="modification_compte.html"><img class="logo_user" title="logo_blanc" src="../Style/user_pic.png" alt="logo_nemelade" /></a>
                <div class="h_right2">
                    <a href="../Connexion.html" class="lien_co">Connexion</a>
                    <a href="../creation_compte.html" class="lien_insc">Inscription</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
            </div>
            
            <div class="col-lg-8">
                <div class="rounded block_forum">
                    <div class="rounded bar_title_forum">
                        <img class="petit_logo" src="../Style/logo_blanc_icone.png" alt="">
                        <h1 class="title_forum">Forums</h1>
                    </div>

                    <div class="row">
                        <div class="container-fluid">
                            <div class="rounded bar_nav">
                                <div class="col-lg-4 tri">
                                    <select class="form-select form-select-sm tri">
                                        <option value="1">Activités récentes</option>
                                        <option value="2">Sujets récents</option>
                                        <option value="3">Meilleurs notes</option>
                                        <option value="4">Les + vues</option>
                                        <option value="5">Les + populaires</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 button_creer_suj">
                                    <a class="button_creer_suj" href="Projet_Creation_Sujet.php">
                                        <button class="btn btn-outline-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                            </svg>
                                            Créer un sujet
                                        </button>
                                    </a>
                                </div>
                                <div class="col-lg-4 search">
                                    <form class="d-flex search">
                                        <input class="form-control me-2" type="search" placeholder="Recherche..." aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-borderless table-striped table-hover table_sujet">
                        <thead class="table_head">
                            <tr>
                                <th class="colonne_sujet">
                                    <h3>Sujets</h3>
                                </th>
                                <th>
                                    <h3>Réponses</h3>
                                </th>
                                <th>
                                    <h3>Vues</h3>
                                </th>
                                <th>
                                    <h3>Notes</h3>
                                </th>
                                <th>
                                    <h3>Activités</h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = 0;
                            while ($a < 15) {
                                echo '<tr>';
                                echo '<td class="colonne_sujet">
                                <span class="nom_sujet"><a class="lien_sujet" href="Projet_Sujet.php">Sujet ceci est le nom du sujet</a></span>
                                <br>
                                <span class="nom_crea_date">Par nomCreateur le 15 Mars 2021</span></td>';
                                echo '<td class="forum_reponses">482</td>';
                                echo '<td class="forum_vues">1506</td>';
                                echo '<td class="forum_notes">+48</td>';
                                echo '<td class="forum_activite">19 Mars 2021</td>';
                                echo '</tr>';
                                $a++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="block_button_top">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#485154" class="bi bi-arrow-up-circle-fill button_top" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="left">
                <img class="logo_footer" title="logo_blanc" src="../Style/logo_blanc.PNG" alt="logo_nemelade" />
            </div>
            <div class="middle">
                <div>
                    <a class="a_footer_link" href="../explication_concept.html">A propos</a>
                    <span class="footer_link">-</span>
                    <span class="footer_link">Mentions légales</span>
                    <span class="footer_link">-</span>
                    <a class="a_footer_link" href="../contact.html">Contact</a>

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
        </div>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>