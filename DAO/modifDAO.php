<?php
include_once("../DAO/CommonDAO.php");

function updatablesData($login)
{
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
    $stmt = $mysqli->prepare('SELECT id, login, password, mail, id_evenement FROM utilisateur WHERE login=?;');
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $rs = $stmt->get_result();
    $tab = $rs->fetch_all(MYSQLI_ASSOC);
    $rs->free();
    $mysqli->close();
    return $tab;
}

function updateUser($mail, $password, $hash, $id)
{
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
    $stmt = $mysqli->prepare("UPDATE utilisateur SET mail = ?, password = ?, hash= ? WHERE id=?;");
    $stmt->bind_param("sssi", $mail, $password, $hash, $id);
    $stmt->execute();
    $mysqli->close();
}
