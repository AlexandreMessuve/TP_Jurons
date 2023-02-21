<?php
// On crée la classe PeutEtre
class PeutEtre {
    private int $idRetard; 
    private int $loginUtilisateur; 

    private string $date;

// On crée la méthode construct qui initialise les attributs de l'objet
    public function __construct(int $idRetard, int $loginUtilisateur) {
        $this-> idRetard = $idRetard;
        $this->loginUtilisateur = $loginUtilisateur;
        $this->date = date('Y-m-d H:i:s');
    }


    /**
     * Get the value of idRetard
     */ 
    public function getIdRetard()
    {
        return $this->idRetard;
    }

    /**
     * Set the value of idRetard
     *
     * @return  self
     */ 
    public function setIdRetard($idRetard)
    {
        $this->idRetard = $idRetard;

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