<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="Projet_Forum.css">
    <title>Création de Sujet</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="h_left">
                <a href="accueil.html"><img class="logo_nemelade" src="../logo_blanc.png" alt="logo_nemelade" /></a>
            </div>
            <div class="h_middle">
                <a href="accueil.html" class="HeadText">Accueil</a>
                <a href="Projet_Forum.php" class="HeadText">Forum</a>
                <a href="Zomvid.html" class="HeadText">Actualités</a>
                <a href="Arene.html" class="HeadText">Arène</a>
            </div>
            <div class="h_right1">
                <a href="modification_compte.html"><img class="logo_user" title="logo_blanc" src="../user_pic.png" alt="logo_nemelade" /></a>
                <div class="h_right2"><a href="Connexion.html" class="lien_co">Connexion</a><a href="creation_compte.html" class="lien_insc">Inscription</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="display:flex;justify-content:center">
                <div class="rounded block_crea_sujet">
                    <div class="rounded bar_title_forum">
                        <img class="petit_logo" src="logo_blanc_icone.png" alt="">
                        <h1 class="title_forum">Création de sujet</h1>
                    </div>

                    <div class="rounded formulaire_sujet">
                        <div class="div_formulaire_sujet">
                            <div class="mb-4">
                                <label for="titre_sujet" class="form-label">Titre du sujet :</label>
                                <br>
                                <input id="titre_sujet" class="form-control" type="text" placeholder="Saisissez le titre de votre sujet..." required>
                            </div>
                            <div class="mb-4">
                                <label for="contenu_sujet" class="form-label">Contenu du sujet :</label>
                                <textarea class="form-control" id="contenu_sujet" placeholder="Saisissez le contenu de votre sujet..." rows="16" required></textarea>
                            </div>
                            <div class="mb-2">
                                <button class="btn button_creer">POSTER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>