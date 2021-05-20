<?php
include_once("../Model/Reponse.php");

class ReponseDAO {

    public function addReponse(Reponse $reponse): void 
    {
        $message = $reponse->getMessage();

        $bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
        $stmt = $bdd->prepare("INSERT INTO reponse (message, dateAjout) VALUES (?, sysdate());");
        $stmt->bindParam(1, $message, PDO::PARAM_STR, 500);
        $stmt->execute();
    }

    public function displayReponse(): array
    {
        $bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
        $stmt = $bdd->prepare("SELECT id, message, DATE_FORMAT(dateAjout, '%d/%m/%Y à %H:%i:%s') as dateAjout FROM reponse;");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $value) {
            $employe[] = (new Topic())
                ->setId($value["id"])
                ->setMessage($value['message'])
                ->setDateAjout($value['dateAjout']);
        }
        return $employe;
    }
}