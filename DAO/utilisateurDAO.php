<?php
include_once("../Model/utilisateur.php");

class UtilisateurDAO extends CommonDAO
{
    public function SelectArgent($id)
    {
        $bdd = parent::connexionDatabase();
        $stat = $bdd->prepare("SELECT argent FROM utilisateur  WHERE login = :id");
        $stat->execute(['id' => $id]);
        $row = $stat->fetch();
        //var_dump($row) ;
        $ev = $row[0];
        return $ev;
    }
    public function SubArgent($id, $mise)
    {

        $bdd = parent::connexionDatabase();
        $stat = $bdd->prepare("SELECT argent FROM utilisateur  WHERE login = :id");
        $stat->execute(['id' => $id]);
        $row = $stat->fetch();
        $argent = $row[0];
        $stat = $bdd->prepare("UPDATE utilisateur SET argent = :argent  WHERE login = :id ;");
        $stat->execute(['id' => $id, 'argent' => ($argent - $mise)]);
        
    }

    public function AddArgent($id, $somme)
    {
        $bdd = parent::connexionDatabase();
        $stat1 = $bdd->prepare("SELECT argent FROM utilisateur  WHERE login = :id");
        $stat1->execute(['id' => $id]);
        $row = $stat1->fetch();
        $argent = $row[0];
        $stat = $bdd->prepare("UPDATE utilisateur SET argent = :argent  WHERE login = :id ;");
        $stat->execute(['id' => $id, 'argent' => $argent + $somme]);
        
    }
}
