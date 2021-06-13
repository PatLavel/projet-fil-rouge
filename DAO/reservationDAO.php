<?php
include_once("../DAO/CommonDAO.php");

function addReservation($idCombat, $idUser)
{

    $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
    $stmt = $mysqli->prepare("INSERT INTO reservation (id, numero, date, nombrePlace, counterPlace, id_utilisateur, id_evenement) SELECT MAX(id)+1, MAX(numero)+1, sysdate(), 1, MAX(counterPlace)+1, ?, ? FROM reservation;");
    $stmt->bind_param("ii", $idUser, $idCombat);
    $stmt->execute();
    $mysqli->close();
}

function findIdFromLogin($login)
{
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
    $stmt = $mysqli->prepare('SELECT id, argent FROM utilisateur WHERE login=?;');
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $rs = $stmt->get_result();
    $tab = $rs->fetch_all(MYSQLI_ASSOC);
    $rs->free();
    $mysqli->close();
    return $tab;
}

function spendMoney($id, $money)
{
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
    $stat = $mysqli->prepare("UPDATE utilisateur SET argent = argent-?  WHERE id = ? ;");
    $stat->bind_param("ii", $money, $id);
    $stat->execute();
    $mysqli->close();
}

function addEventToUser($idUser, $idEvent)
{
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
    $stat = $mysqli->prepare("UPDATE utilisateur SET id_evenement = ?  WHERE id = ? ;");
    $stat->bind_param("ii", $idEvent, $idUser);
    $stat->execute();
    $mysqli->close();
}
