<?php
include_once("../Model/Actualite.php");

class ActualiteDAO extends CommonDAO
{
    public function selectActualite()
    {
        $bdd = parent::connexionDatabase();
        $stat = $bdd->prepare("SELECT FROM actualite");
        $stat->execute();
        $actualites = $stat->fetch();
        var_dump($actualites);
    }
}
