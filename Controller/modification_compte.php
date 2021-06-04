<?php
session_start();
include_once(__DIR__ . "/../view/CommonView.php");
include_once(__DIR__ . "/../service/evenementService.php");
include_once(__DIR__ . "/../service/UtilisateurService.php");

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
    if (!isset($_SESSION['user_login'])) {
        header('Location: Connexion.php');
    }
    ?>
    <?php
    htmlheader();

    $userlogin = $_SESSION['user_login'];

    $array = updatablesData($_SESSION['user_login']);
    foreach ($array as $dataUser) {
    }

    $userMoney = new UtilisateurService();
    $result = $userMoney->SelectArgent($userlogin);

    ?>

    <div class="subscription">
        <div class="subscription_form">
            <div>
                <h1 class="myh1">Bienvenue chez vous, <?php echo $userlogin ?>.</h1>
                <p class="myp">Votre solde est de <?php echo round($result) ?> PO.</p>
                <?php
                if ($dataUser['id_evenement'] == NULL) {
                    echo "<p class='myp'>Vous n'avez aucune réservation pour un combat.</p>";
                } else {
                    $EvenementServ = new EvenementService();
                    $dataevent = $EvenementServ->GetSingleEvent($dataUser['id_evenement']);
                    echo "<p class='myp'>Le prochain combat auquel vous allez assister : " . $dataevent->getCombattant1() . " VS " . $dataevent->getCombattant2() . "!!</p>";
                    echo "<p class='myp'>Ce combat se déroulera le : " . $dataevent->getDateDebut() . "</p>";
                }
                ?>
                </br>

                <h2 class="myh2">Vous pouvez modifier vos informations personnelles. </h2>
            </div>
            <form method="POST">
                <p class="myp">Modifiez votre adresse email.</p>
                <input class="case" type="email" name="confirm_email" value="<?php echo $dataUser['mail'] ?>">
                <p class="myp">Vous pouvez renouveler le sort de protection de votre compte en changeant de mot de
                    passe.</p>
                <input class="case" type="password" name="password" value="<?php echo $dataUser['password'] ?>">
                <input class="case" type="password" name="confirm_password" value="<?php echo $dataUser['password'] ?>">
                <div>
                    <input type="checkbox" id="newsletter" name="newsletter">
                    <label for="newsletter">Je veux recevoir la Gazette de Nemelade par email</label>
                </div>
                <div>
                    <button formaction="script_modif_compte.php?id=" class="button">Enregistrer</button>
                    <?php echo "<button class='button' formaction='script_modif_compte.php?id=$userlogin'>Enregistrer</button>"; ?>

                </div>
            </form>
        </div>
    </div>



    <?php
    htmlfooter();

    function updatablesData($login)
    {
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
        $stmt = $mysqli->prepare('SELECT login, password, mail, id_evenement FROM utilisateur WHERE login=?;');
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $rs = $stmt->get_result();
        $tab = $rs->fetch_all(MYSQLI_ASSOC);
        $rs->free();
        $mysqli->close();
        return $tab;
    }



    ?>

</body>

</html>