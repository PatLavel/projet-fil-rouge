<?php
include_once("../Model/Reponse.php");

if (isset($_GET['tri'])) {
    if ($_GET['tri'] == 1) {
        $bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
        $stmt = $bdd->prepare("SELECT id, titre, message, DATE_FORMAT(dateAjout, '%d/%m/%Y à %H:%i:%s') as dateAjout FROM topic;");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $value) {
            $employe[] = (new Topic())
                ->setIdTopic($value["id"])
                ->setTitre($value['titre'])
                ->setMessage($value['message'])
                ->setDateAjout($value['dateAjout']);
        }
        echo json_encode($employe);
    }
    if ($_GET['tri'] == 2) {
        $bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
        $stmt = $bdd->prepare("SELECT id, titre, message, dateAjout, DATE_FORMAT(dateAjout, '%d/%m/%Y à %H:%i:%s') as formatDate FROM topic ORDER BY dateAjout DESC;");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $value) {
            $employe[] = (new Topic())
                ->setIdTopic($value["id"])
                ->setTitre($value['titre'])
                ->setMessage($value['message'])
                ->setDateAjout($value['formatDate']);
        }
        echo json_encode($employe);
    }
    if ($_GET['tri'] == 3) {
        $bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
        $stmt = $bdd->prepare("SELECT * FROM reponse INNER JOIN topic on reponse.id_topic = topic.id ORDER BY reponse.dateAjout DESC;");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $value) {
            $employe[] = (new Topic())
                ->setIdTopic($value["id"])
                ->setTitre($value['titre'])
                ->setMessage($value['message'])
                ->setDateAjout($value['dateAjout']);
        }
        echo json_encode($employe);
    }
}