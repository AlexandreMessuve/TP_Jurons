<?php

class Retard {
    private int $idRetard;

    private int $temps;

    private float $prix; 

    public function __construct(int $idRetard, int $temps, float $prix) {
        $this->idRetard = $idRetard;
        $this-> temps = $temps; 
        $this->prix = $prix;
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

    /**
     * Get the value of temps
     */ 
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * Set the value of temps
     *
     * @return  self
     */ 
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
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
}