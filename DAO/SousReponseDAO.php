<?php
include_once("../Model/SousReponse.php");
include_once("../DAO/CommonDAO.php");

class SousReponseDAO extends CommonDAO
{

    public function addSousReponse(Reponse $sousReponse): void
    {
        $message = $sousReponse->getMessage();
        $idReponse = $sousReponse->getIdReponse();

        $bdd = $this->connexionDatabase();
        $stmt = $bdd->prepare("INSERT INTO sous_reponse (message, dateAjout, id_reponse) VALUES (?, sysdate(), ?);");
        $stmt->bindParam(1, $message, PDO::PARAM_STR, 500);
        $stmt->bindParam(2, $idReponse, PDO::PARAM_INT, 11);
        $stmt->execute();
    }

    public function displaySousReponse(): array
    {
        $bdd = $this->connexionDatabase();
        $stmt = $bdd->prepare("SELECT id, message, DATE_FORMAT(dateAjout, '%d/%m/%Y à %H:%i:%s') as dateAjout, id_reponse FROM sous_reponse;");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $value) {
            $sousReponse[] = (new SousReponse())
                ->setIdSousReponse($value["id"])
                ->setMessage($value["message"])
                ->setDateAjout($value["dateAjout"])
                ->setIdReponse($value["id_reponse"]);
        }
        return $sousReponse;
    }
}