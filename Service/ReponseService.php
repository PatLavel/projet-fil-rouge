<?php
include_once("../DAO/ReponseDAO.php");
require_once("../Exception/ReponseDAOException.php");
require_once("../Exception/ReponseServiceException.php");

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

    public function counterReponse(): array
    {
        try {
            $data = (new ReponseDAO())->counterReponse();
        } catch (ReponseDAOException $e) {
            $message = $e->getMessage();
            $code = $e->getCode();
            throw new ReponseServiceException($message, $code);
        }
        return $data;
    }
}
