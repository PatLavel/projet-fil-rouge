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
    public function GetSingleEvent($id)
    {
        $EvDAO = new EvenementDAO();
        $data = $EvDAO->GetSingleEvent($id);

        return $data;
    }
    public function GetPastEvents()
    {
        $EvDAO = new EvenementDAO();
        $data = $EvDAO->GetPastEvents();

        return $data;
    }
}
