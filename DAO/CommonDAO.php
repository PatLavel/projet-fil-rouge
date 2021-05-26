<?php class Common
{
    function common()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $bdd = new mysqli("localhost", "root", "", "nemelade");
        return $bdd;
    }
}
