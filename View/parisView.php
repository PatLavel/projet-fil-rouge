<?php
include_once(__DIR__ . "/../view/CommonView.php");

function displayParis($event)
{


?>
    <!DOCTYPE html>
    <html lang="en">

    <?php
    $title = "Parier";
    $hrefStyle = "../Style/Projet_Forum.css";
    htmlhead($title, $hrefStyle);
    ?>

    <body>
        <?php
        htmlheader();
        ?>

        <div class="container-fluid">
            <h2 class="versus"><?php echo $event->getLibelle(); ?></h2>

            <div>
                <p><?php echo $event->getDateDebut(); ?>: <?php echo $event->getCombattant1(); ?> VS <?php echo $event->getCombattant2(); ?></p>
            </div>
            <form action="script_paris.php" method="POST">
                <div>votre mise: <input class="form-control" type="number" name="mise"></div>
                <div><input type="submit" class="button" value="Miser"> </div>
            </form>
        </div>



        <?php
        htmlfooter();
        ?>
    </body>

    </html>

<?php }
function displaywin()
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <?php
    $title = "Parier";
    $hrefStyle = "../Style/Projet_Forum.css";
    htmlhead($title, $hrefStyle);
    ?>

    <body>
        <?php
        htmlheader();
        ?>

        <div class="container-fluid">
            <h2 class="versus">VOUS ETES GAGNANT!</h2>
            <div><a href='arene.php'><button class='btn btn-warning'>Retour</button></a></div>
        </div>

        <?php
        htmlfooter();
        ?>
    </body>

    </html>

<?php }
function displayloss()
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <?php
    $title = "Parier";
    $hrefStyle = "../Style/Projet_Forum.css";
    htmlhead($title, $hrefStyle);
    ?>

    <body>
        <?php
        htmlheader();
        ?>

        <div class="container-fluid">
            <h2 class="versus">VOUS ETES PERDANT!</h2>
            <div><a href='arene.php'><button class='btn btn-warning'>retour</button></a></div>
        </div>



        <?php
        htmlfooter();
        ?>
    </body>

    </html>

<?php } ?>