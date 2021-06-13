<?php
include_once("../DAO/creationDAO.php");
header('Location:Connexion.php');

$hash = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

Ajout_utilisateur($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['login'], $_POST['user_password'], $hash);
