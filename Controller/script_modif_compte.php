<?php
session_start();
include_once(__DIR__ . "/../DAO/modifDAO.php");

if (!isset($_SESSION['email'])) {
    header('Location:Connexion.php');
} else {
    header('Location:Modification_compte.php');
}

$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

updateUser($_POST['email'], $_POST['password'], $hash, $_POST['id']);

// function updateUser($mail, $password, $hash, $id)
// {
//     $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
//     $stmt = $mysqli->prepare("UPDATE utilisateur SET mail = ?, password = ?, hash= ? WHERE id=?;");
//     $stmt->bind_param("sssi", $mail, $password, $hash, $id);
//     $stmt->execute();
//     $mysqli->close();
// }
