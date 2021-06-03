<?php
session_start();
include_once(__DIR__ . "/../view/CommonView.php");
include_once(__DIR__ . "/../DAO/evenementDAO.php");


if (!isset($_SESSION['user_login'])) {
    header('Location: Connexion.php');
}
header('AreneView.php');

// $userMoney = new UtilisateurService();
// $result = $userMoney->SelectArgent($_SESSION['user_login']);

addReservation($_GET["id"], $_SESSION['user_login']);

function addReservation($idCombat, $idUser)
{

    $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
    $stmt = $mysqli->prepare("INSERT INTO reservation (id, numero, date, nombrePlace, counterPlace, id_utilisateur, id_evenement) SELECT MAX(id)+1, MAX(numero)+1, sysdate(), 1, MAX(counterPlace)+1, ?, ? FROM reservation;");
    $stmt->bind_param("ii", $idUser, $idCombat);
    $stmt->execute();
    $mysqli->close();
}
