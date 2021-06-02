<?php
include_once(__DIR__ . "/../view/CommonView.php");
?>

<!DOCTYPE html>
<html>

<?php
$title = "modification_compte";
$hrefStyle = "../Style/style.css";
htmlhead($title, $hrefStyle);
?>

<body>
    <?php
    htmlheader();
    ?>


    <div class="subscription">
        <!-- <div class="picture">
            <img class="profile_pic" title="../Style/user_profile_pic" src="user_pic.PNG" alt="user_profile_pic" />
            <input type="submit" class="button2" value="Modifier photo">
        </div> -->

        <div class="subscription_form">
            <h1 class="myh1">Bienvenue à Nemelade!</h1>
            <h2 class="myh2">Le Bureau Fédéral Magique a besoin de quelques informations pour valider votre inscription dans le Grand Registre des Citoyens. </h2>

            <form action="script_ajout_compte.php" method="POST">

                <p class="myp">Entrez votre nom et votre prénom. Ils ne seront pas visibles sur Nemelade. *</p>
                <input class="case" type="penom" name="prenom" placeholder="Prénom" autofocus required>
                <input class="case" type="nom" name="nom" placeholder="Nom" required>

                <p class="myp">Entrez votre adresse email. Vous y recevrez votre certificat de citoyen de Nemelade. *</p>
                <input class="case" type="email" name="mail" placeholder="Email" required>
                <input class="case" type="email" name="confirm_email" placeholder="Confirmer email" required>

                <p class="myp">Choisissez un pseudo. Il servira à vous identifier en tant que citoyen de Nemelade, alors choisissez bien! *</p>
                <input class="case" type="text" name="login" placeholder="Pseudo" required>

                <p class="myp">Choisissez un mot de passe, il permettra à notre Brigade du Protectorat Magique de protéger vos informations personnelles. *</p>
                <input class="case" type="password" name="user_password" placeholder="Mot de passe" required>
                <input class="case" type="password" name="confirm_password" placeholder="Confirmer mot de passe" required>

                <div class="validation">
                    <span>
                        <input type="checkbox" id="cgu" name="cgu">
                        <label class="check" for="cgu">J'ai lu et j'accepte les conditions générales d'utilisation</label>
                    </span>
                    <span>
                        <input type="checkbox" id="newsletter" name="newsletter">
                        <label class="check" for="newsletter">J'accepte de recevoir la Gazette de Nemelade par email</label>
                    </span>
                </div>
                <button formaction="script_ajout_compte.php" class="button">M'inscrire</button>

            </form>

        </div>

    </div>


    <div class="bottom">
        <p class="line">* Informations obligatoires</p>
    </div>

    <?php
    htmlfooter();
    ?>

</body>

</html>