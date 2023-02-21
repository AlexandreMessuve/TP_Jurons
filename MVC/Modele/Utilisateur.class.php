<?php

include_once "../Modele/Personne.class.php";
include_once "../Modele/Roles.class.php";


// on crée la classe Utilisateur héritée de la classe abstraite Personne
class Utilisateur extends Personne {

    private string $login;
    private string $password;
    private Roles $roles;

// On crée la méthode construct qui initialise les attributs de l'objet, en rappelant les attributs de la classe parent Personne

    public function __construct (string $nom,string $prenom,string $date,string $login,string $password, Roles $roles) {
        parent::__construct($nom, $prenom, $date);
        $this-> login = $login; 
        $this-> password = $password;
        $this->roles = $roles;
    }


// On crée la méthode ajoutRole     
    public function ajoutRole() : void {

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
}