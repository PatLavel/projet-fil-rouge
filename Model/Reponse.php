<?php
class Reponse
{
    private $id;
    private $message;
    private $jaime;
    private $jaimepas;
    private $id_topic;

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
     * Get the value of id_topic
     */
    public function getId_topic()
    {
        return $this->id_topic;
    }

    /**
     * Set the value of id_topic
     *
     * @return  self
     */
    public function setId_topic($id_topic)
    {
        $this->id_topic = $id_topic;

        return $this;
    }
}
