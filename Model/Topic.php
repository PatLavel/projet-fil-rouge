<?php
class Topic
{
    private $idTopic;
    private $titre;
    private $message;
    private $dateAjout;
    private $jaime;
    private $jaimepas;
    private $id_utilisateur;

    /**
     * Get the value of idTopic
     */
    public function getIdTopic()
    {
        return $this->idTopic;
    }

    /**
     * Set the value of idTopic
     *
     * @return  self
     */
    public function setIdTopic($idTopic)
    {
        $this->idTopic = $idTopic;

        return $this;
    }

    /**
     * Get the value of titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of dateAjout
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set the value of dateAjout
     *
     * @return  self
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get the value of jaime
     */
    public function getJaime()
    {
        return $this->jaime;
    }

    /**
     * Set the value of jaime
     *
     * @return  self
     */
    public function setJaime($jaime)
    {
        $this->jaime = $jaime;

        return $this;
    }

    /**
     * Get the value of jaimepas
     */
    public function getJaimepas()
    {
        return $this->jaimepas;
    }

    /**
     * Set the value of jaimepas
     *
     * @return  self
     */
    public function setJaimepas($jaimepas)
    {
        $this->jaimepas = $jaimepas;

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
}
