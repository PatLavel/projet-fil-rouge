<!DOCTYPE html>
<html lang="en">

<?php
include_once("../View/CommonView.php");
$title = "Création de Sujet - Nemelade";
$hrefStyle = "../Style/Projet_Forum.css";
htmlhead($title, $hrefStyle);
?>


<body>
    <?php htmlheader(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="display:flex;justify-content:center">
                <div class="rounded block_crea_sujet">
                    <div class="rounded bar_title_forum">
                        <img class="petit_logo" src="../Style/logo_blanc_icone.png" alt="">
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