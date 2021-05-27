<?php
include_once(__DIR__ . "/../DAO/CommonDAO.php");
include_once(__DIR__ . "/../Model/Evenement.php");

class EvenementDAO extends CommonDAO
{
    public function GetFutureEvents()
    {

        $bdd = parent::common();
        $stat = $bdd->prepare("SELECT * FROM evenement  WHERE dateDebut > CURDATE();");
        $stat->execute();
        $result = $stat->get_result();
        $row = $result->fetch_all(MYSQLI_ASSOC);
        $tabEv = [];
        //var_dump($result) ;
        foreach ($row as $value) {
            
        //var_dump($value["id"]) ;
            $evenement = (new Evenement())->setId($value["id"])->setLibelle($value["libelle"])->setDateDebut($value["dateDebut"])->setDateFin($value["dateFin"])->setCombattant1($value["combattant1"])->setCombattant2($value["combattant2"]);
            $tabEv[] = $evenement;
        }
        $result->free();
        $bdd->close();
        return $tabEv;
    }

    public function GetSingleEvent()
    {
    }
    public function GetPastEvents()
    {
    }
}
