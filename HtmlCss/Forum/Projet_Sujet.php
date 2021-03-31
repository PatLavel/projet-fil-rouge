<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Projet_Forum.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1 class="nemelade">NEMELADE</h1>
    </header>

    <section>
        <article>
            <div class="sujet_titre">
                <h3 class="sujet_nom_sujet">Sujet ceci est le nom du sujet</h3>
                <p class="sujet_nomCreateur">Par nomCreateur le 15 Mars 2021</p>
            </div>

            <div class="sujet_contenu">
                <p class="sujet_contenu_texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet,
                    adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor,
                    orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in,
                    pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede.
                    Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
                    Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus
                    aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet
                    pellentesque diam. Integer quis metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris
                    convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat.
                    Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna.
                    Aliquam convallis sollicitudin purus. Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus.
                    Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit nulla in justo.
                    Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus, felis magna fermentum augue, et ultricies
                    lacus lorem varius purus. Curabitur eu amet.</p>
                <hr class="sujet_ligne_separation">
                <p class="sujet_contenu_footer">
                    <span class="sujet_repondre"><input class="bouton_repondre" type="image" alt="Rep" src="Icone_repondre2.jpg"> Répondre</span>
                    <span class="sujet_jaime"><input class="bouton_jaime" type="image" alt="j'aime" src="Icone_jaime2.jpg"> 17</span>
                    <span class="sujet_jaimepas"><input class="bouton_jaimepas" type="image" alt="j'aime pas" src="Icone_jaimepas2.jpg"> 4</span>
                </p>
            </div>
        </article>

        <article>
            <div class="sujet_nb_rep_tri">
                <p>
                    <select name="sujet_trie" id="sujet_trie" class="sujet_tri">
                        <option value="">Dernières</option>
                        <option value="">Premières</option>
                        <option value="">Meilleurs</option>
                    </select>
                    <span class="sujet_reponses">Réponses</span>
                    <span class="sujet_nb_rep">203</span>
                </p>
            </div>

            <div class="sujet_rep_contenu">
                <p class="suj_rep_nom_date_heure"><span class="suj_rep_nomcrea">NomCreateur</span> - le 15 Mars 2021 - <span class="suj_rep_heure">15:34:59</span></p>
                <p class="sujet_contenu_texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet,
                    adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor,
                    orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in,
                    pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede.
                    Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
                    Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus
                    aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet
                    pellentesque diam. Integer quis metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris
                    convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat.
                    Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna.</p>
                <hr class="sujet_ligne_separation">
                <p class="sujet_contenu_footer">
                    <span class="sujet_repondre"><input class="bouton_repondre" type="image" alt="Rep" src="Icone_repondre2.jpg"> Répondre</span>
                    <span class="sujet_jaime"><input class="bouton_jaime" type="image" alt="j'aime" src="Icone_jaime2.jpg"> 17</span>
                    <span class="sujet_jaimepas"><input class="bouton_jaimepas" type="image" alt="j'aime pas" src="Icone_jaimepas2.jpg"> 4</span>
                </p>
            </div>

            <div class="sujet_rep_contenu">
                <p class="suj_rep_rep_nom_date_heure"><span class="suj_rep_nomcrea">NomCreateur</span> - le 15 Mars 2021 - <span class="suj_rep_heure">15:34:59</span></p>
                <p class="sujet_rep_rep_texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet,
                    adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor,
                    orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in,
                    pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede.
                    Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.</p>
                <!--<hr class="sujet_rep_ligne_separation">-->
                <p class="sujet_contenu_footer2">
                    <span class="sujet_repondre"><input class="bouton_repondre" type="image" alt="Rep" src="Icone_repondre2.jpg"> Répondre</span>
                    <span class="sujet_jaime"><input class="bouton_jaime" type="image" alt="j'aime" src="Icone_jaime2.jpg"> 17</span>
                    <span class="sujet_jaimepas"><input class="bouton_jaimepas" type="image" alt="j'aime pas" src="Icone_jaimepas2.jpg"> 4</span>
                </p>
            </div>

            <div class="sujet_rep_contenu">
                <p class="suj_rep_rep_nom_date_heure"><span class="suj_rep_nomcrea">NomCreateur</span> - le 15 Mars 2021 - <span class="suj_rep_heure">15:34:59</span></p>
                <p class="sujet_rep_rep_texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet,
                    adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor,
                    orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in,
                    pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede.
                    Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.</p>
                <!--<hr class="sujet_rep_ligne_separation">-->
                <p class="sujet_contenu_footer2">
                    <span class="sujet_repondre"><input class="bouton_repondre" type="image" alt="Rep" src="Icone_repondre2.jpg"> Répondre</span>
                    <span class="sujet_jaime"><input class="bouton_jaime" type="image" alt="j'aime" src="Icone_jaime2.jpg"> 17</span>
                    <span class="sujet_jaimepas"><input class="bouton_jaimepas" type="image" alt="j'aime pas" src="Icone_jaimepas2.jpg"> 4</span>
                </p>
            </div>

            <div class="sujet_rep_contenu">
                <p class="suj_rep_nom_date_heure"><span class="suj_rep_nomcrea">NomCreateur</span> - le 15 Mars 2021 - <span class="suj_rep_heure">15:34:59</span></p>
                <p class="sujet_contenu_texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet,
                    adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor,
                    orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in,
                    pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede.
                    Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
                    Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus
                    aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet
                    pellentesque diam. Integer quis metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris
                    convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat.
                    Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna.</p>
                <hr class="sujet_ligne_separation">
                <p class="sujet_contenu_footer">
                    <span class="sujet_repondre"><input class="bouton_repondre" type="image" alt="Rep" src="Icone_repondre2.jpg"> Répondre</span>
                    <span class="sujet_jaime"><input class="bouton_jaime" type="image" alt="j'aime" src="Icone_jaime2.jpg"> 17</span>
                    <span class="sujet_jaimepas"><input class="bouton_jaimepas" type="image" alt="j'aime pas" src="Icone_jaimepas2.jpg"> 4</span>
                </p>
            </div>
        </article>

        <nav class="nav_pagination">
            <div class="pagination">
                <a href="">«</a>
                <a href="">‹</a>
                <select class="pag_select_option">
                    <option selected="" disabled="" value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option disabled="">...</option>
                    <option value="">1649</option>
                </select>
                <a href="">›</a>
                <a href="">»</a>
            </div>
        </nav>

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