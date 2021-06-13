<?php
session_start();
include_once(__DIR__ . "/../view/CommonView.php");
include_once(__DIR__ . "/../view/modifView.php");
include_once(__DIR__ . "/../service/evenementService.php");
include_once(__DIR__ . "/../service/UtilisateurService.php");
include_once(__DIR__ . "/../DAO/modifDAO.php");

displayModif();
