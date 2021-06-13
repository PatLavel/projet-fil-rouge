<?php
session_start();
include_once(__DIR__ . "/../view/CommonView.php");
include_once(__DIR__ . "/../view/reservationView.php");
include_once(__DIR__ . "/../service/evenementService.php");
include_once(__DIR__ . "/../service/UtilisateurService.php");

displayReservation();
