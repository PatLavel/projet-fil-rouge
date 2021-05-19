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
}
