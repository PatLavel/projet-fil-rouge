<?php
session_start();
include_once(__DIR__ . "/../view/parisView.php");
include_once(__DIR__ . "/../service/evenementService.php");
include_once(__DIR__ . "/../service/UtilisateurService.php");


    if (!isset($_SESSION['user_login'])) {
        header('Location: Connexion.php');
    }

$EvenementServ = new EvenementService() ;

$UserServ = new UtilisateurService() ;

$dataevent = $EvenementServ->GetSingleEvent($_GET["id"]);
$datauser = $UserServ->SelectArgent($_SESSION['user_login']);



displayParis($dataevent,$datauser);
?>