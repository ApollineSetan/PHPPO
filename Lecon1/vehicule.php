<?php 

class Vehicule {
    // Attributs
    private ?string $nomVehicule;
    private ?int $nbrRoue;
    private ?int $vitesseMax;

    // Constructeur
    public function __construct(?string $nomVehicule, ?int $nbrRoue, ?int $vitesseMax){
        $this->nomVehicule = $nomVehicule;
        $this->nbrRoue = $nbrRoue;
        $this->vitesseMax = $vitesseMax;
    }

    // Getter et Setter
    public function getNomVehicule():?string{
        return $this->nomVehicule;
    }
    public function getNbrRoue():?int{
        return $this->nbrRoue;
    }
    public function getVitesseMax():?int{
        return $this->vitesseMax;
    }
    public function setNomVehicule(?string $newNomVehicule):Vehicule{
        $this->nomVehicule = $newNomVehicule;
        return $this;
    }
    public function setNbrRoue(?int $newNbrRoue):Vehicule{
        $this->nbrRoue = $newNbrRoue;
        return $this;
    }
    public function setVitesseMax(?int $newVitesseMax):Vehicule{
        $this->vitesseMax = $newVitesseMax;
        return $this;
    }

    // Méthodes
    public function detect():string{
        if ($this->nbrRoue === 2) {
            return "C'est une moto";
        } else {
            return "C'est une voiture";
        }
    }

    public function boost(?int $boost):void{
        $this->setVitesseMax($this->getVitesseMax() + $boost);
    }

    public function plusRapide(Vehicule $vehicule): Vehicule | string{
        if ($this->getVitesseMax() > $vehicule->getVitesseMax()){
            return $this;
        } else if ($this->getVitesseMax() < $vehicule->getVitesseMax()){
            return $vehicule;
        } else {
            return "Les deux véhicules ont la même vitesse.";
        }
    }
}
