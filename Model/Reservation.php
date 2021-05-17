<?php
class Reservation
{
    private $id;
    private $numero;
    private $date;
    private $nombrePlace;
    private $emplacementPlace;
    private $counterPlace;
    private $id_utilisateur;
    private $id_evenement;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of nombrePlace
     */
    public function getNombrePlace()
    {
        return $this->nombrePlace;
    }

    /**
     * Set the value of nombrePlace
     *
     * @return  self
     */
    public function setNombrePlace($nombrePlace)
    {
        $this->nombrePlace = $nombrePlace;

        return $this;
    }

    /**
     * Get the value of emplacementPlace
     */
    public function getEmplacementPlace()
    {
        return $this->emplacementPlace;
    }

    /**
     * Set the value of emplacementPlace
     *
     * @return  self
     */
    public function setEmplacementPlace($emplacementPlace)
    {
        $this->emplacementPlace = $emplacementPlace;

        return $this;
    }

    /**
     * Get the value of counterPlace
     */
    public function getCounterPlace()
    {
        return $this->counterPlace;
    }

    /**
     * Set the value of counterPlace
     *
     * @return  self
     */
    public function setCounterPlace($counterPlace)
    {
        $this->counterPlace = $counterPlace;

        return $this;
    }

    /**
     * Get the value of id_utilisateur
     */
    public function getId_utilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * Set the value of id_utilisateur
     *
     * @return  self
     */
    public function setId_utilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    /**
     * Get the value of id_evenement
     */
    public function getId_evenement()
    {
        return $this->id_evenement;
    }

    /**
     * Set the value of id_evenement
     *
     * @return  self
     */
    public function setId_evenement($id_evenement)
    {
        $this->id_evenement = $id_evenement;

        return $this;
    }
}
