<?php
session_start();
header('Location: Connexion.php');
unset($_SESSION);
unset($_COOKIE);
session_destroy();
