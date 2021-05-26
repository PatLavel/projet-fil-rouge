<!DOCTYPE html>
<html lang="en">

<?php
include_once("../Service/ReponseService.php");
include_once("../Service/TopicService.php");
include_once("../View/CommonView.php");

session_start();
$title = "Forums - Nemelade";
$hrefStyle = "../Style/Projet_Forum.css";
htmlhead($title, $hrefStyle);
?>

<body>
    <?php htmlheader(); ?>

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
                            $data = (new TopicService())->displayTopic();
                            $dateCounterReponse = (new ReponseService())->counterReponse();
                            $counterReponse = 0;

                            foreach ($data as $value) {
                                $_SESSION['id'] = $value->getIdTopic();
                                $id = $value->getIdTopic();
                            ?>
                                <tr>
                                    <td class="colonne_sujet">
                                        <span class="nom_sujet"><a class="lien_sujet" href="Projet_Sujet.php?id=<?php echo $id ?>"><?php echo $value->getTitre() ?></a></span>
                                        <br>
                                        <span class="nom_crea_date">Par nomCreateur le <?php $value->getDateAjout() ?></span>
                                    </td>
                                    <td class="forum_reponses">
                                        <?php
                                        foreach ($dateCounterReponse as $value) {
                                            $id2 = $value->getIdTopic();
                                            if ($id2 == $id) {
                                                $counterReponse = $value->getCounterReponse();
                                                echo $counterReponse;
                                            }
                                        }
                                        if ($counterReponse == 0) {
                                            echo $counterReponse;
                                        }
                                        ?>
                                    </td>
                                    <td class="forum_vues">1506</td>
                                    <td class="forum_notes">+48</td>
                                    <td class="forum_activite">19 Mars 2021</td>
                                </tr>
                            <?php
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

    <?php htmlfooter(); ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>