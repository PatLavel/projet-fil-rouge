<?php

use Topic as GlobalTopic;

class Topic
{
    function addTopic(Topic $topic): void
    {
        $id = $topic->getId();
        $titre = $topic->getTitre();
        $message = $topic->getMessage();

        $bdd = new PDO("127.0.0.1;dbname=nemelade", "admin", "admin");
        $stmt = $bdd->prepare("INSERT INTO topic (id, titre, message, dateAjout ) VALUES (?, ?, ?, sysdate();");
        $stmt->bindParam("iss", $id, $titre, $message);
        $stmt->execute();
    }
}
