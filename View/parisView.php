<?php
include_once(__DIR__ . "/../view/CommonView.php");

function displayParis($event)
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



        <div>
            <h2 class="versus"><?php echo $event->getLibelle(); ?></h2>

            <div>
                <p><?php echo $event->getDateDebut(); ?>: <?php echo $event->getCombattant1(); ?> VS <?php echo $event->getCombattant2(); ?></p>
            </div>
            <div><input type="int">votre mise</div>
            <div><a class='button' href=''>Miser</a></div>
        </div>



        <?php
        htmlfooter();
        ?>
    </body>

    </html>



<?php } ?>