<?php
session_start();
include_once(__DIR__ . "/../view/CommonView.php");
?>

<!DOCTYPE html>
<html>

<?php
$title = "Arene";
$hrefStyle = "../Style/style.css";
htmlhead($title, $hrefStyle);
?>

<body>

    <?php
    htmlheader();

    ?>

    <div id="global">
        <div><img class="city" title="illustration_ville" src="../Style/illustration_ville.jpg" alt="image_ville_medievale" /></div>
        <h2 class="h2concept">Nemelade, qu'est-ce que c'est?</h2>

        <p class="pconcept">Nemelade est une ville fictive qui se trouve dans un univers de type médiéval fantastique. Les utilisateurs
            ont la possibilité de rejoindre une communauté de joueurs afin de s'adonner en ligne à la pratique du jeu de rôle
            à travers des échanges, la réalisation de quêtes, une participation active à la vie de Nemelade et sur son évolution.</p>

        <h2 class="h2concept">Pourquoi créer un compte?</h2>

        <p class="pconcept">Les utilsiatateurs qui créent un compte, les résidents, ont accés à un forum et à un chat afin de pouvoir y échanger.
            Ils peuvent créer des sujets et s'y regrouper, comme le feraient des habitants d'une ville de fantasy. Les résidents
            reçoivent un certificat de propriété et reçoivent une maison de base à leur installation. Ce statut leur confère également
            la possibilité de voter pour élire tous les mois le Roi de Nemelade et de participer à certaines décisions qui impacteront la ville.</p>

        <h2 class="h2concept">Nemelade est une ville vivante.</h2>

        <p class="pconcept">La ville évoluera en fonction des actions de ses joueurs. Pour le moment une paisible ville fortifiée, elle pourra évoluer
            pour devenir une puissance colonisatrice où un régime totalitaire et répressif. Pour cela, le rôle des soldats sera extrêmement
            important.
            Les résidents reçoivent à leur arrivée une certaine somme d'argent, et pourront occuper différents postes suivant qu'ils
            cherchent à s'enrichir, à accéder au pouvoir, à vivre de grandes aventures où à mener une vie paisible.
            Ils pourront ainsi devenir artisan, marchand, aventurier, soldat, mage, ministre, noble, assassin ou... Roi.</p>

        <p class="pconcept">Les Magistrats de Nemelade sont les administrateurs du site, mais aussi et surtout des Maitres de Jeu. Ce sont eux qui
            apportent à la ville son background, font vivre son lore créent du contenu, comme les actualités. Ils vous prépareront
            des quêtes épiques et se chargeront d'encadrer votre aventure.</p>

        <p class="pconcept">Votre progression vous permettra d'engranger des pièces d'or ainsi que de l'équipement qui vous permettront de débloquer
            du contenu et de nouvelles quêtes. Vous pourrez également miser votre argent lors des combats de l'Arène qui se tiennent toutes les semaines.</p>

        <h2 class="h2concept">Mais ce dont la ville a surtout besoin, c'est de vous!</h2>

        <span class="CTAconcept"><button formaction="creation_compte.html" class="button">Rejoignez-nous!</button></span>
        <div><img class="city" title="illustration_roi" src="../Style/king.jpg" alt="image_roi_trone" /></div>
    </div>
    <?php
    htmlfooter();

    ?>
</body>

</html>