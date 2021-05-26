<?php
include_once(__DIR__ . "/../DAO/evenementDAO.php");



class EvenementService
{
    public function GetFutureEvents()
    {
        $EvDAO = new EvenementDAO();
        $data = $EvDAO->GetFutureEvents();

        return $data;
    }
}
