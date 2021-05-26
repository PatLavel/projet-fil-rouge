<?php
include_once(__DIR__ . "/../view/AreneView.php");
include_once(__DIR__ . "/../service/evenementService.php");
include_once(__DIR__ . "/../service/UtilisateurService.php");

$EvenementServ = new EvenementService() ;

$UserServ = new UtilisateurService() ;


$dataevent = $EvenementServ->GetFutureEvents();

$datauser = 5;// $UserServ->getSup();

displayArene($dataevent,$datauser);
?>