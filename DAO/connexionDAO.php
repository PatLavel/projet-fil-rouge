<?php
include_once("../DAO/CommonDAO.php");

function connexion($login)
{
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
    $stmt = $mysqli->prepare("SELECT hash FROM utilisateur WHERE login=?;");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $rs = $stmt->get_result();
    $tab = $rs->fetch_array(MYSQLI_ASSOC);
    $rs->free();
    $mysqli->close();
    return $tab;
}
