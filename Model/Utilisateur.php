<?php
class Utilisateur
{
    private $id;
    private $nom;
    private $prenom;
    private $mail;
    private $photoProfil;
    private $classe;
    private $argent;
    private $profil;
    private $login;
    private $password;
    private $numPari;
    private $sommePari;
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
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of photoProfil
     */
    public function getPhotoProfil()
    {
        return $this->photoProfil;
    }

    /**
     * Set the value of photoProfil
     *
     * @return  self
     */
    public function setPhotoProfil($photoProfil)
    {
        $this->photoProfil = $photoProfil;

        return $this;
    }

    /**
     * Get the value of classe
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     *
     * @return  self
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get the value of argent
     */
    public function getArgent()
    {
        return $this->argent;
    }

    /**
     * Set the value of argent
     *
     * @return  self
     */
    public function setArgent($argent)
    {
        $this->argent = $argent;

        return $this;
    }

    /**
     * Get the value of profil
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of numPari
     */
    public function getNumPari()
    {
        return $this->numPari;
    }

    /**
     * Set the value of numPari
     *
     * @return  self
     */
    public function setNumPari($numPari)
    {
        $this->numPari = $numPari;

        return $this;
    }

    /**
     * Get the value of sommePari
     */
    public function getSommePari()
    {
        return $this->sommePari;
    }

    /**
     * Set the value of sommePari
     *
     * @return  self
     */
    public function setSommePari($sommePari)
    {
        $this->sommePari = $sommePari;

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
