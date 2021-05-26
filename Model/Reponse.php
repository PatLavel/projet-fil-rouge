<?php
include_once("../Model/Topic.php");

class Reponse extends Topic
{
    private $idReponse;
    private $message;
    private $dateAjout;
    private $jaime;
    private $jaimepas;
    private $counterReponse;
    private $idTopic;

    /**
     * Get the value of idReponse
     */
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * Set the value of idReponse
     *
     * @return  self
     */
    public function setIdReponse($idReponse)
    {
        $this->idReponse = $idReponse;

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
     * Get the value of counterReponse
     */
    public function getCounterReponse()
    {
        return $this->counterReponse;
    }

    /**
     * Set the value of counterReponse
     *
     * @return  self
     */
    public function setCounterReponse($counterReponse)
    {
        $this->counterReponse = $counterReponse;

        return $this;
    }

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
}
