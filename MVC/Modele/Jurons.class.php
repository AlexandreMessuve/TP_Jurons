<?php
// On crée la classe Jurons
class Jurons {
    private int $idJurons; 
    private string $categorie;

    private float $prix;

// On crée la méthode construct qui initialise les attributs de l'objet
    public function __construct(int $idJurons,string $categorie, float $prix) {
        $this->idJurons = $idJurons;
        $this->categorie = $categorie;
        $this->prix = $prix; 
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
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}