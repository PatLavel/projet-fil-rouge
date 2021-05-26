<?php
include_once("../Model/Reponse.php");
require_once("../Exception/ReponseDAOException.php");

class ReponseDAO
{

    public function addReponse(Reponse $reponse): void
    {
        $message = $reponse->getMessage();
        $idTopic = $reponse->getIdTopic();

        $bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
        $stmt = $bdd->prepare("INSERT INTO reponse (message, dateAjout, id_topic) VALUES (?, sysdate(), ?);");
        $stmt->bindParam(1, $message, PDO::PARAM_STR, 500);
        $stmt->bindParam(2, $idTopic, PDO::PARAM_INT, 11);
        $stmt->execute();
    }

    public function displayReponse(): array
    {
        $bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
        $stmt = $bdd->prepare("SELECT id, message, DATE_FORMAT(dateAjout, '%d/%m/%Y à %H:%i:%s') as dateAjout, id_topic FROM reponse;");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $value) {
            $reponse[] = (new Reponse())
                ->setIdReponse($value["id"])
                ->setMessage($value["message"])
                ->setDateAjout($value["dateAjout"])
                ->setIdTopic($value["id_topic"]);
        }
        return $reponse;
    }

    public function counterReponse(): array
    {
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $bdd->prepare("SELECT COUNT(*) as counterReponse, id_Topic FROM reponse GROUP BY id_topic;");
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $message = $e->getMessage();
            $code = $e->getCode();
            throw new ReponseDAOException($message, $code);
        }

        foreach ($data as $value) {
            $counterByIdTopic[] = (new Reponse())
                ->setCounterReponse($value["counterReponse"])
                ->setIdTopic($value["id_Topic"]);
        }
        return $counterByIdTopic;
    }
}
