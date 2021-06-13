<?php
session_start();
include_once(__DIR__ . "/../DAO/evenementDAO.php");
include_once(__DIR__ . "/../DAO/reservationDAO.php");


if (!isset($_SESSION['user_login'])) {
    header('Location: Connexion.php');
} else {
    header('Location: Arene.php');
}

$arrayUserId = findIdFromLogin($_SESSION['user_login']);
foreach ($arrayUserId as $userId) {
}
addReservation($_GET["id"], $userId['id']);
spendMoney($userId['id'], 10);
addEventToUser($userId['id'], $_GET['id']);
