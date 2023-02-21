<?php

// On crée la classe Balance
class Balance {

    private int $idJurons;

    private int $loginUtilisateur;

    private string $date;

// On crée la méthode construct qui initialise les attributs de l'objet
    public function __construct (int $idJurons, int $loginUtilisateur) {
        $this->idJurons = $idJurons;
        $this->loginUtilisateur = $loginUtilisateur;
        $this->date = date ("Y-m-d H:i:s");
    }


    /**
     * Get the value of idJurons
     */ 
    public function getIdJurons()
    {
        return $this->idJurons;
    }

    /**
     * Set the value of idJurons
     *
     * @return  self
     */ 
    public function setIdJurons($idJurons)
    {
        $this->idJurons = $idJurons;

        return $this;
    }

    /**
     * Get the value of loginUtilisateur
     */ 
    public function getLoginUtilisateur()
    {
        return $this->loginUtilisateur;
    }

    /**
     * Set the value of loginUtilisateur
     *
     * @return  self
     */ 
    public function setLoginUtilisateur($loginUtilisateur)
    {
        $this->loginUtilisateur = $loginUtilisateur;

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
}