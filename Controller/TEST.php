<?php

$bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $bdd->prepare("UPDATE topic SET jaime = jaime + 1 WHERE id = ?");
$stmt->bindParam(1, $idTopic, PDO::PARAM_INT, 11);
$stmt->execute();

$bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $bdd->prepare("SELECT jaime FROM topic WHERE id = ?");
$stmt->bindParam(1, $idTopic, PDO::PARAM_INT, 11);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $data;



