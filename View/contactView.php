<?php
include_once(__DIR__ . "/../view/CommonView.php");

function displayContact()
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <?php
    $title = "Contact";
    $hrefStyle = "../Style/Projet_Forum.css";
    htmlhead($title, $hrefStyle);
    ?>
    <?php
    htmlheader();
    ?>

    <body>


        <div class="row">
            <div class="container  col-md-6 offset-md-2">
                <h2 class="text-center map">Nous contacter:</h2>
                <form action="contactMail.php" method="POST">
                    <div class="container">
                        <h3 class="map">Informations de contact</h3>
                        <div class="row">
                            <div class="col-md-2  myp">Nom*</div>
                            <div class="col-md-8 myp">
                                <input class="form-control" type="Nom" name="Nom">
                            </div><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2 myp">Prenom*</div>
                            <div class="col-md-8 myp">
                                <input class="form-control" type="Prenom" name="Prenom">
                            </div><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2 myp">Mail*</div>
                            <div class="col-md-8 myp">
                                <input class="form-control" type="Mail" name="Mail">
                            </div><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2 myp">guilde*</div>
                            <div class="col-md-8 myp">
                                <select class="myp" name="Guilde" id="guilde">
                                    <option value="">-choisir votre guilde</option>
                                    <option value="forge">guilde des forgerons</option>
                                    <option value="barde">guilde des bardes</option>
                                    <option value="dev">guilde des webdev</option>
                                    <option value="magie">guilde de la magie</option>
                                    <option value="aventurier">guilde des aventuriers</option>
                                </select>
                            </div><br>
                        </div>
                        <div class="myp">(*): Information requise</div>
                    </div>
                    <div class="container">
                        <h3 class="map">Votre message</h3>
                        <div class="row">
                            <div class="col-md-2 myp">Sujet*</div>
                            <div class="col-md-8 myp">
                                <input class="form-control" type="Sujet" name="Sujet">
                            </div><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2 myp">Votre message*</div>
                            <div class="col-md-8 myp">
                                <textarea class="form-control" name="msg" id="msg" cols="40" rows="10"></textarea>
                            </div><br>
                        </div>
                        <div class="myp">(*): Information requise</div>
                        <input class="mop" type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
            <div class="container col-md-4">
                <img src="../Style/cartoon-owl.jpg" alt="Mail" class="container-fluid">
            </div>
        </div>


    </body>
    <?php
    htmlfooter();
    ?>

    </html>



<?php } ?>