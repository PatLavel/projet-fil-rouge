<?php
include_once("../DAO/sousReponseDAO.php");

class SousReponseService
{
    public function addSousReponse(Reponse $sousReponse): void
    {
        (new SousReponseDAO())->addSousReponse($sousReponse);
    }

    public function displaySousReponse(): array
    {
        $data = (new SousReponseDAO())->displaySousReponse();
        return $data;
    }

}
