<?php 

include_once(__DIR__ . "/../view/CommonView.php");
 ?>

<!DOCTYPE html>
    <html lang="en">

    <?php
    $title = "Parier";
    $hrefStyle = "../Style/style.css";
    htmlhead($title, $hrefStyle);
    ?>

    <body>
        <?php
        htmlheader();
        ?>
    <img src="/../style/zombie-warning-260nw-154781906.webp" alt="" class="container-fluid">
    <div class="container myp">
        <h1 class="text-center map">
            Zomvid : mesures grand public
        </h1><br>
        <p class="text-center">Retrouvez dans cette page les mesures prises par le Roi et la guilde ainsi que les
            informations utiles. 
            Pour toute question, un golem de service est disponible 7 jours sur 7, 24 heures sur 24.</p>
    </div><br>
    <section class="container myp">
        <h1 class="text-center map">
            Cas connus sur Nemelade
        </h1><br>
        <div class="row">
            <div class=" col-md-4 offset-md-2">
                <div class="counter-wrap text-center">
                    <div class="counter-text border border-primary" id="ctn">28,225</div>
                    <div>Mort*</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-wrap text-center">
                    <div class="counter-text border border-primary" id="ctn">8,831</div>
                    <div>Mort-vivant</div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <p>*inclut Mort-vivants</p>
            </div>
        </div>
    </section><br>
    <div class="container doc">
        <h1 class="text-center rappel">
            RAPPEL!
        </h1><br>
        <p>Les documents accepte pour les déplacements entre 6h et 19h sont :</p>
        <p>- Attestation de la guilde pour travail dangereux</p>
        <p>- Pacte de protection divine</p>
        <p>-Certification de necromantien de rang 2 ou plus</p>
    </div><br>
    <div class="container signe">
        <p>Si vous présentez des premiers signes d’infections (fièvre, migraine, pustules, envie de chair humaine,
            demenbrement, hemoragie spontane, nez qui coule)
            restez chez vous et appelez votre paladin de quartier. Si les signes s’aggravent, appelez l'exterminateur
            pour les personnes ayant des difficultés à ne pas manger
            leur proches</p>
    </div><br>
    <div class="container geste">Gestes simples à respecter :<br>
        Lavage régulier des mains <br>
        Port du charme obligatoire dans les lieux publics clôs<br>
        On tousse et on éternue dans son coude<br>
        On utilise de l'eau benite à usage unique<br>
        On ne se serre plus la main<br>
        On appelle le paladin si symptômes<br>
        On reste chez soi si on est mort<br>
        On Brule les corps<br>
    </div><br>
    <?php
        htmlfooter();
        ?>

</body>

</html>
