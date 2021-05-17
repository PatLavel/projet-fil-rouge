<?php
class Liaison_Reponse
{
    private $id_reponse;
    private $id_sous_reponse;

    /**
     * Get the value of id_reponse
     */
    public function getId_reponse()
    {
        return $this->id_reponse;
    }

    /**
     * Set the value of id_reponse
     *
     * @return  self
     */
    public function setId_reponse($id_reponse)
    {
        $this->id_reponse = $id_reponse;

        return $this;
    }

    /**
     * Get the value of id_sous_reponse
     */
    public function getId_sous_reponse()
    {
        return $this->id_sous_reponse;
    }

    /**
     * Set the value of id_sous_reponse
     *
     * @return  self
     */
    public function setId_sous_reponse($id_sous_reponse)
    {
        $this->id_sous_reponse = $id_sous_reponse;

        return $this;
    }
}
