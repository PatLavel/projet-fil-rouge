<?php

function displayActu()
{


?>
    <!doctype html>
    <html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Page d'actualités </title>
        <link rel="stylesheet" href="../style/style2.css">
        <link rel="stylesheet" href="../style/style.css">
    </head>

    <body>
        <div class="container-grille">
            <header>
                <div class="h_left">
                    <a href=""><img class="logo_nemelade" src="../Style/logo_blanc.png" alt="logo_nemelade" /></a>
                </div>
                <div class="h_middle">
                    <a href="" class="HeadText">Accueil</a>
                    <a href="../Controller/Projet_Forum.php" class="HeadText">Forum</a>
                    <a href="../Controller/Zomvid.php" class="HeadText">Actualités</a>
                    <a href="../Controller/arene.php" class="HeadText">Arène</a>
                </div>
                <div class="h_right1">
                    <a href="modification_compte.php"><img class="logo_user" title="logo_blanc" src="../Style/user_pic.png" alt="logo_nemelade" /></a>
                    <div class="h_right2">
                        <a href="../Controller/Connexion.php" class="lien_co">Connexion</a>
                        <a href="../Controller/creation_compte.php" class="lien_insc">Inscription</a>
                    </div>
                </div>
            </header>
            <div class=carrousel1>
                <br>
                <br>
                <br>
                <h1 class=titre>ACTUALITE MALADIE : </h1>
                <div class="container">
                    <div class="box">
                        <img src="https://source.unsplash.com/1000x800">
                        <span>Top actualité maladie #1</span>
                    </div>
                    <div class="box">
                        <img src="https://source.unsplash.com/1000x802">
                        <span>Top actualité maladie #2</span>
                    </div>
                    <div class="box">
                        <img src="https://source.unsplash.com/1000x804">
                        <span>Top actualité maladie #3</span>
                    </div>
                </div>
            </div>
            <div class=carrousel2>
                <br>
                <br>
                <br>
                <h1 class=titre>ACTUALITE GENERALE : </h1>
                <div class="container">
                    <div class="box">
                        <img src="https://source.unsplash.com/1000x800">
                        <span>Top actualité #1</span>
                    </div>
                    <div class="box">
                        <img src="https://source.unsplash.com/1000x802">
                        <span>Top actualité #2</span>
                    </div>
                    <div class="box">
                        <img src="https://source.unsplash.com/1000x804">
                        <span>Top actualité #3</span>
                    </div>
                    <div class="box">
                        <img src="https://source.unsplash.com/1000x806">
                        <span>Top actualité #4</span>
                    </div>
                </div>
            </div>
            <!-- https://mono.software/2020/07/29/equal-height-cards-with-flexbox/ -->
            <div id=news>
                <br>
                <br>
                <br>
                <h1 class=titre> ACTUALITE : </h1>
                <div class="container-cards">
                    <div class="card__wrap--outer">
                        <div class="card__wrap--inner">
                            <div class="card">
                                <img src="../style/New_1.jpg">
                                <div class="card__item">
                                    <h2>Evolution du virus</h2>
                                </div>
                                <div class="card__sub">
                                    <small>27/05/2021</small>
                                </div>
                                <div class="card__item flexible">
                                    <small>Les scientifiques ont découvert une évolution du virus. En effet, ce matin un enfant bwork agé de 203 ans n'a pas survécu à la maladie. Ses parents pleurent sa mort "Il était pourtant en parfaite santé" déclarent ils. C'est un tournant pour le virus qui touchait qu'alors que les adultes de la bourgade. Des examens plus approfondis nous en diront plus sur la manière dont a évolué le virus.</small>
                                </div>
                                <div class="card__item">
                                    <small>Reading Time: 4min</small>
                                </div>
                                <div class="card__footer">
                                </div>
                            </div>
                        </div>

                        <div class="card__wrap--inner">
                            <div class="card">
                                <img src="../style/New_1.jpg">
                                <div class="card__item">
                                    <h2>Second Card Title</h2>
                                </div>
                                <div class="card__sub">
                                    <small>26/05/2021</small>
                                </div>
                                <div class="card__item  flexible">
                                    <small>Celiac pour-over fanny pack, adaptogen yuccie trust fund tote bag man braid activated charcoal narwhal church-key crucifix. Farm-to-table sartorial retro snackwave mixtape, live-edge 8-bit activated charcoal art party succulents. Crucifix actually try-hard wayfarers echo park skateboard, street art shaman intelligentsia humblebrag celiac umami farm-to-table.</small>
                                </div>
                                <div class="card__item">
                                    <small>Reading Time: 2min</small>
                                </div>
                                <div class="card__footer">
                                </div>
                            </div>
                        </div>

                        <div class="card__wrap--inner">
                            <div class="card">
                                <img src="../style/New_3.jpg">
                                <div class="card__item">
                                    <h2>20 ans de NemeladeExpress !</h2>
                                </div>
                                <div class="card__sub">
                                    <small>25/05/2021</small>
                                </div>
                                <div class="card__item flexible">
                                    <small>NemeladeExpress fête ses 20 ans mais uniquement pendant 3 jours. L'occasion rêvée de réaliser de très bonnes affaires avec des prix imbattables sur des centaines de produits, y compris ceux expédiés de Nemelade et d'Horaport.</small>
                                </div>
                                <div class="card__item">
                                    <small>Reading Time: 8min</small>
                                </div>
                                <div class="card__footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <footer>
                <div class="left">
                    <img class="logo_footer" title="logo_blanc" src="../Style/logo_blanc.PNG" alt="logo_nemelade" />
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
        </div>
    </body>

    </html>

<?php } ?>