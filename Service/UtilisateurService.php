<?php
include_once(__DIR__ . "/../DAO/utilisateurDAO.php");



class UtilisateurService
{
    public function SelectArgent($id)
    {
        $EvDAO = new UtilisateurDAO();
        $data = $EvDAO->SelectArgent($id);

        return $data;
    }
    public function SubArgent($id, $mise)
    {
        $EvDAO = new UtilisateurDAO();
        $data = $EvDAO->SubArgent($id, $mise);

        return $data;
    }
    public function AddArgent($id, $mise)
    {
        $EvDAO = new UtilisateurDAO();
        $data = $EvDAO->AddArgent($id, $mise);

        return $data;
    }
}
