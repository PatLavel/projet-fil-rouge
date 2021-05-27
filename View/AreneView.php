<?php
include_once(__DIR__ . "/../view/CommonView.php");

function displayArene($events)
{


?>
    <!DOCTYPE html>
    <html lang="en">

    <?php
    $title = "Arene";
    $hrefStyle = "../Style/Projet_Forum.css";
    htmlhead($title, $hrefStyle);
    ?>

    <body>
        <?php
        htmlheader();

        ?>

        <div class="arena_content">

            <div><img class="arena" title="arena" src="/style/Arena.png" alt="image_arene" />
                <div>
                    <h1 class="myh1">Bienvenue dans l'Arène!</h1>
                </div>
                <div>
                    <h2 class="myh2">Découvrez ici les prochains combats. </h2>
                </div>
                <p class="myp">L'arène est un espace où s'affrontent les champions de Nemelade. Chaque semaine, un nouveau combat est organisé entre deux champions...
                    <br>Jusqu'à ce qu'il n'en reste qu'un! N'oubliez pas de réserver votre place pour assister au combat de votre choix.
                </p>
            </div>
            <?php
            for ($i = 0; $i < sizeof($events); $i++) {



            ?>
                <div>
                    <h2 class="versus"><?php echo $events[$i]->getLibelle(); ?></h2>

                    <!-- <div><img class="arena" title="vs2" src="vs2.png" alt="image_versus_2" /></div> -->
                    <div>
                        <p><?php echo $events[$i]->getDateDebut(); ?>: <?php echo $events[$i]->getCombattant1(); ?> AFFRONTE <?php echo $events[$i]->getCombattant2(); ?></p>
                    </div>
                    <?php $idMatch = $events[$i]->getId();  ?>
                    <div><a class='button' href='form_reservation_combat.php?id=$idMatch'>Réserver</a></div>
                    <div><a class='button' href='Pari_evenement.php?id=$idMatch'>Parier</a></div>
                </div>



            <?php
            }
            ?>


        </div>


        <?php
        htmlfooter();
        ?>
    </body>

    </html>



<?php } ?>