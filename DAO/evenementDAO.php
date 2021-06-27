<?php
include_once(__DIR__ . "/../DAO/CommonDAO.php");
include_once(__DIR__ . "/../Model/Evenement.php");

class EvenementDAO extends CommonDAO
{
    public function GetFutureEvents()
    {

        $bdd = parent::connexionDatabase();
        $stat = $bdd->prepare("SELECT * FROM evenement  WHERE dateDebut > CURDATE();");
        $stat->execute();
        //$result = $stat->get_result();
        $row = $stat->fetchAll(PDO::FETCH_ASSOC);
        $tabEv = [];
        //var_dump($result) ;
        foreach ($row as $value) {

            //var_dump($value["id"]) ;
            $evenement = (new Evenement())->setId($value["id"])->setLibelle($value["libelle"])->setDateDebut($value["dateDebut"])
                ->setDateFin($value["dateFin"])->setCombattant1($value["combattant1"])->setCombattant2($value["combattant2"])->setImgMatch($value["img"]);
            $tabEv[] = $evenement;
        }
        //$result->free();
        //$bdd->close();
        return $tabEv;
    }

    public function GetSingleEvent($id)
    {

        $bdd = parent::connexionDatabase();
        $stat = $bdd->prepare("SELECT * FROM evenement  WHERE id = :id");
        $stat->execute(['id' => $id]);
        $row = $stat->fetch();
        //var_dump($row) ;
        $ev = (new Evenement())->setId($row["id"])->setLibelle($row["libelle"])->setDateDebut($row["dateDebut"])
            ->setDateFin($row["dateFin"])->setCombattant1($row["combattant1"])->setCombattant2($row["combattant2"]);

        return $ev;
    }
    public function GetPastEvents()
    {
    }

    public function addReservation($idCombat, $idUser)
    {

        $mysqli = new mysqli('127.0.0.1', 'root', '', 'nemelade');
        $stmt = $mysqli->prepare("INSERT INTO reservation (id, numero, date, nombrePlace, counterPlace, id_utilisateur, id_evenement) SELECT MAX(id)+1, 
        MAX(numero)+1, sysdate(), 1, MAX(counterPlace)+1, ?, ? FROM reservation;");
        $stmt->bind_param("ii", $idUser, $idCombat);
        $stmt->execute();
        $mysqli->close();
    }
}
