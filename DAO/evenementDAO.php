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
            $evenement = (new Evenement())->setId($value["id"])->setLibelle($value["libelle"])->setDateDebut($value["dateDebut"])->setDateFin($value["dateFin"])->setCombattant1($value["combattant1"])->setCombattant2($value["combattant2"])->setImgMatch($value["img"]);
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
        $ev = (new Evenement())->setId($row["id"])->setLibelle($row["libelle"])->setDateDebut($row["dateDebut"])->setDateFin($row["dateFin"])->setCombattant1($row["combattant1"])->setCombattant2($row["combattant2"]);

        return $ev;
    }
    public function GetPastEvents()
    {
    }
}
