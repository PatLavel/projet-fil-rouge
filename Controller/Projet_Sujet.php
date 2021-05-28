<!DOCTYPE html>
<html lang="en">

<?php
include_once("../Service/SousReponseService.php");
include_once("../Service/ReponseService.php");
include_once("../Service/TopicService.php");
include_once("../View/CommonView.php");
require_once("../Exception/ReponseServiceException.php");

$title = "Sujet - Nemelade";
$hrefStyle = "../Style/style.css";
htmlhead($title, $hrefStyle);
?>

<body>
    <?php
    session_start();
    $idSession = $_GET['id'];

    htmlheader();

    $dataDisplayTopic = (new TopicService())->displayTopic();
    foreach ($dataDisplayTopic as $value) {
        $id = $value->getIdTopic();
        if ($id == $idSession) {
            $titre = $value->getTitre();
            $message = $value->getMessage();
            $dateAjout = $value->getDateAjout();
        }
    }

    try {
        $dateCounterReponse = (new ReponseService())->counterReponse();
    } catch (ReponseServiceException $e) {
        $codeError = $e->getCode();
        $messageError = $e->getMessage();
    }
    if (!isset($messageError)) {
        $counterReponse = 0;
        foreach ($dateCounterReponse as $value) {
            $id2 = $value->getIdTopic();
            if ($id2 == $idSession) {
                $counterReponse = $value->getCounterReponse();
            }
        }
    }

    if (isset($_POST["envoyer"])) {
        $reponse = (new Reponse())->setMessage($_POST["message"])->setIdTopic($_GET["id"]);
        (new ReponseService())->addReponse($reponse);
    }

    if (isset($_POST["envoyerSousReponse"])) {
        $sousReponse = (new SousReponse())->setMessage($_POST["message"])->setIdReponse($_POST["idReponse"]);
        (new SousReponseService())->addSousReponse($sousReponse);
    }
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
            </div>

            <div class="col-lg-8">
                <div class="rounded block_suj">
                    <div class="block_sujet">
                        <div class="rounded bar_title_suj">
                            <a href="modification_compte.html"><img class="logo_user" title="logo_blanc" src="../Style/user_pic.png" alt="logo_nemelade" /></a>
                            <div class="suj_title_nom">
                                <h3 class="suj_title_nom"><?php echo $titre ?></h3>
                                <p class="suj_title_nom">Par nomCreateur le <?php echo $dateAjout ?></p>
                            </div>
                        </div>

                        <div class="rounded sujet_contenu">
                            <p style="word-wrap: break-word"><?php echo $message ?></p>
                            <hr>
                            <div class="footer_suj">
                                <div>

                                    <button type="button" class="repondre_footer_suj" data-bs-toggle="modal" data-bs-target="#reponseModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-reply-fill" viewBox="0 0 16 16">
                                            <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z" />
                                        </svg><span style="color: orange;">Répondre</span>
                                    </button>

                                    <div class="modal fade" id="reponseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Réponse</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="" method="POST">
                                                    <div class="modal-body">
                                                        <textarea class="form-control" class="reponseMessage" name="message" placeholder="Entrer votre réponse..." rows="5" autofocus required></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-success" name="envoyer" value="Envoyer">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="button_footer_suj">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#006eff" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                        </svg>
                                        <span style="color: #006eff;">17</span>
                                    </button>
                                    <button class="button_footer_suj">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                                            <path d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
                                        </svg>
                                        <span style="color: red;">4</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded block_rep">
                    <div class="bar_info_rep">
                        <div class="nb_rep">
                            <?php if (isset($messageError)) { ?>
                                <p>
                                <?php
                                echo $messageError;
                            } else {
                                echo $counterReponse;
                            } ?> Réponses</p>
                        </div>
                        <select class="form-select form-select-sm tri">
                            <option value="1">Dernières</option>
                            <option value="2">Premières</option>
                            <option value="3">Meilleurs</option>
                        </select>
                    </div>

                    <div class="block_sujet_rep">

                        <?php
                        $datadisplayReponse = (new ReponseService())->displayReponse();
                        $datadisplaySousReponse = (new SousReponseService())->displaySousReponse();

                        foreach ($datadisplayReponse as $value) {
                            $getId = $_GET["id"];
                            $idTopic = $value->getIdTopic();
                            $idReponse1 = $value->getIdReponse();
                            if ($getId == $idTopic) {
                        ?>
                                <div class="sujet_rep">
                                    <div class="rounded bar_title_rep">
                                        <a href="modification_compte.html"><img class="logo_user" title="logo_blanc" src="../Style/user_pic.png" alt="logo_nemelade" /></a>
                                        <div class="suj_title_nom">
                                            <p class="suj_title_nom">Par nomCreateur le <?php echo $value->getDateAjout() ?></p>
                                        </div>
                                    </div>
                                    <p class="sujet_contenu_texte"><?php echo $value->getMessage() ?></p>
                                    <hr>
                                    <div class="footer_suj">
                                        <div>
                                            <button type="button" class="repondre_footer_suj" data-bs-toggle="modal" data-bs-target="#sousReponseModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-reply-fill" viewBox="0 0 16 16">
                                                    <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z" />
                                                </svg><span style="color: orange;">Répondre</span>
                                            </button>

                                            <div class="modal fade" id="sousReponseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Réponse</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="" method="POST">
                                                            <div class="modal-body">
                                                                <input type="text" name="idReponse" value="<?php echo $value->getIdReponse() ?>" hidden>
                                                                <textarea class="form-control" class="reponseMessage" name="message" placeholder="Entrer votre réponse..." rows="5" autofocus required></textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="submit" class="btn btn-success" name="envoyerSousReponse" value="Envoyer">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="button_footer_suj">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#006eff" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                                    <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                                </svg>
                                                <span style="color: #006eff;">17</span>
                                            </button>
                                            <button class="button_footer_suj">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                                                    <path d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
                                                </svg>
                                                <span style="color: red;">4</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                foreach ($datadisplaySousReponse as $value2) {
                                    $idReponse2 = $value2->getIdReponse();
                                    if ($idReponse1 == $idReponse2) {
                                ?>
                                        <div class="sujet_rep_rep">
                                            <div class="rounded bar_title_rep">
                                                <a href="modification_compte.html"><img class="logo_user" title="logo_blanc" src="../Style/user_pic.png" alt="logo_nemelade" /></a>
                                                <div class="suj_title_nom">
                                                    <p class="suj_title_nom">Par nomCreateur le 15 Mars 2021 - 15:34:59</p>
                                                </div>
                                            </div>
                                            <p class="sujet_rep_rep_texte"><?php echo $value2->getMessage() ?></p>
                                            <hr>
                                            <div class="footer_suj_sousRep">
                                                <div>
                                                    <button class="button_footer_suj">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#006eff" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                                        </svg>
                                                        <span style="color: #006eff;">17</span>
                                                    </button>
                                                    <button class="button_footer_suj">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                                                            <path d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
                                                        </svg>
                                                        <span style="color: red;">4</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                        <?php
                                    }
                                }
                            }
                        }
                        ?>

                        <!--<nav class="suj_nav" aria-label="Page navigation">
                            <ul class="pagination justify-content-center pagination-sm">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>-->
                    </div>
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

    <script src="jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="ForumScript.js"></script>
</body>

</html>