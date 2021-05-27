<?php
class Evenement
{
    private $id;
    private $libelle;
    private $dateDebut;
    private $dateFin;
    private $combattant1;
    private $combattant2;
    private $imgMatch;


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
     * Get the value of libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of dateDebut
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set the value of dateDebut
     *
     * @return  self
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get the value of dateFin
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set the value of dateFin
     *
     * @return  self
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get the value of combattant1
     */
    public function getCombattant1()
    {
        return $this->combattant1;
    }

    /**
     * Set the value of combattant1
     *
     * @return  self
     */
    public function setCombattant1($combattant1)
    {
        $this->combattant1 = $combattant1;

        return $this;
    }

    /**
     * Get the value of combattant2
     */
    public function getCombattant2()
    {
        return $this->combattant2;
    }

    /**
     * Set the value of combattant2
     *
     * @return  self
     */
    public function setCombattant2($combattant2)
    {
        $this->combattant2 = $combattant2;

        return $this;
    }
    /**
     * Get the value of imgMatch
     */
    public function getImgMatch()
    {
        return $this->imgMatch;
    }

    /**
     * Set the value of imgMatch
     *
     * @return  self
     */
    public function setImgMatch($imgMatch)
    {
        $this->imgMatch = $imgMatch;

        return $this;
    }
}
