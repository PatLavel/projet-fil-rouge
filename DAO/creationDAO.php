<?php
include_once("../DAO/CommonDAO.php");

function Ajout_utilisateur($nom, $prenom, $mail, $login, $password, $hash)
{
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
    $stmt = $mysqli->prepare("INSERT INTO utilisateur (id, nom, prenom, mail, argent, login, password, hash)
        SELECT MAX(id)+1, ?, ?, ?, 100, ?, ?, ? FROM utilisateur;");
    $stmt->bind_param("ssssss", $nom, $prenom, $mail, $login, $password, $hash);
    $stmt->execute();
    $mysqli->close();
}
