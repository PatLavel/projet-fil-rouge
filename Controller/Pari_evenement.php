<?php
include_once(__DIR__ . "/../view/AreneView.php");
include_once(__DIR__ . "/../service/evenementService.php");
include_once(__DIR__ . "/../service/UtilisateurService.php");

$EvenementServ = new EvenementService() ;

$UserServ = new UtilisateurService() ;


$dataevent = $EvenementServ->GetSingleEvent($_GET["id"]);

$datauser = 5;

displayParis($dataevent);
?>