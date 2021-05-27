<?php 
class CommonDAO
{
    function common()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $bdd = new mysqli("localhost", "root", "", "nemelade");
        return $bdd;
    }

    function connexionDatabase(): object
    {
        $bdd = new PDO("mysql:host=localhost;dbname=nemelade", "root", "");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    }

}
