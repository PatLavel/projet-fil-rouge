<?php
include_once("../Model/Topic.php");

class TopicDAO
{
    public function addTopic(Topic $topic): void
    {
        $titre = $topic->getTitre();
        $message = $topic->getMessage();

        $bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
        $stmt = $bdd->prepare("INSERT INTO topic (titre, message, dateAjout ) VALUES (?, ?, sysdate());");
        $stmt->bindParam(1, $titre, PDO::PARAM_STR, 500);
        $stmt->bindParam(2, $message, PDO::PARAM_STR, 50);
        $stmt->execute();
    }

    public function displayTopic(): array
    {
        $bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
        $stmt = $bdd->prepare("SELECT id, titre, message, dateAjout, DATE_FORMAT(dateAjout, '%d/%m/%Y à %H:%i:%s') as dateAjout FROM topic;");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $value) {
            $employe[] = (new Topic())
                ->setIdTopic($value["id"])
                ->setTitre($value['titre'])
                ->setMessage($value['message'])
                ->setDateAjout($value['dateAjout']);
        }
        return $employe;
    }
}
