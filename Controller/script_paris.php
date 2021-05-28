<?php
session_start();
include_once(__DIR__ . "/../view/parisView.php");
include_once(__DIR__ . "/../service/evenementService.php");
include_once(__DIR__ . "/../service/UtilisateurService.php");

if (!isset($_SESSION['user_login'])) {
    header('Location: Connexion.php');
}

$UserServ = new UtilisateurService();

$id = $_SESSION['user_login'];
$mise = $_POST["mise"];

$rando = rand(1,99);

if ($rando >= 50) {
    
$UserServ->AddArgent($id, $mise);


displaywin();

} else {
    
$UserServ->SubArgent($id, $mise);

displayloss();
}

?>

