<?php
include_once(__DIR__ . "/../view/CommonView.php");

function displayArene()
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
        <div><img class="arena" title="arena" src="arena.png" alt="image_arene" /></div>
        <div><h1 class="myh1">Bienvenue dans l'Arène!</h1></div>
        <div><h2 class="myh2">Découvrez ici les prochains combats. </h2></div>
        <p class="myp">L'arène est un espace où s'affrontent les champions de Nemelade. Chaque semaine, un nouveau combat est organisé entre deux champions... 
            <br>Jusqu'à ce qu'il n'en reste qu'un! N'oubliez pas de réserver votre place pour assister au combat de votre choix.</p>
        
        <div><h2 class="versus">SAMEDI 3 JUILLET : STARATEGOS AFFRONTE WEREWOLF</h2></div>
        <div><img class="arena" title="vs1" src="vs1.png" alt="image_versus_1" /></div>
        <div><a class='button' href='form_reservation_combat.php'>Réserver</a></div>


        <div><h2 class="versus">SAMEDI 10 JUILLET : GORILLA AFFRONTE DEATHBRINGER</h2></div>
        <div><img class="arena" title="vs2" src="vs2.png" alt="image_versus_2" /></div>
        <div><a class='button' href='form_reservation_combat.php'>Réserver</a></div>

        <div><h2 class="versus">SAMEDI 17 JUILLET : DEMON'S KATANA AFFRONTE REVOLVER</h2></div>
        <div><img class="arena" title="vs3" src="vs3.png" alt="image_versus_3" /></div>
        <div><a class='button' href='form_reservation_combat.php'>Réserver</a></div>

        <div><h2 class="versus">SAMEDI 21 JUILLET : HANNYADEMON AFFRONTE HOUND of HADES</h2></div>
        <div><img class="arena" title="vs4" src="vs4.png" alt="image_versus_4" /></div>
        <div><a class='button' href='form_reservation_combat.php'>Réserver</a></div>
    </div>

        
        <?php
        htmlfooter();
        ?>
    </body>

    </html>



<?php } ?>