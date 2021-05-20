<?php
include_once("../DAO/ReponseDAO.php");

class ReponseService 
{
    public function addReponse(Reponse $reponse): void
    {
        (new ReponseDAO())->addReponse($reponse);
    }

    public function displayReponse(): array
    {
        $data = (new ReponseDAO())->displayReponse();
        return $data;
    }
}