<?php 

class Vehicule {
    //Attributs
    private string $nomVehicule;
    private int $nbrRoue;
    private string $couleur;
    private ?string $proprietaire;
    private ?int $vitesseMax;

    //Constructeur
    public function __construct(string $nomVehicule, int $nbrRoue, int $vitesseMax){
        $this->nomVehicule = $nomVehicule;
        $this->nbrRoue = $nbrRoue;
        $this->vitesseMax = $vitesseMax;
    }

    // Getter et Setter
    public function getNomVehicule():string{
        return $this->nomVehicule;
    }
    public function getNbrRoue():int{
        return $this->nbrRoue;
    }
    public function getVitesseMax():int{
        return $this->vitesseMax;
    }
    public function setNomVehicule(string $newNomVehicule):Vehicule{
        $this->nomVehicule = $newNomVehicule;
        return $this;
    }
    public function setNbrRoue(int $newNbrRoue):Vehicule{
        $this->nbrRoue = $newNbrRoue;
        return $this;
    }
    public function setVitesseMax(int $newVitesseMax):Vehicule{
        $this->vitesseMax = $newVitesseMax;
        return $this;
    }

    // Méthodes
    public function accelerer(?int $newVitesse):void{
        $this->setVitesseMax(($this->getVitesseMax() + $newVitesse));
        echo '<br>Je file maintenant à '.$this->getVitesseMax().' km/h !';
    }


    public function detect():string{
        if ($this->nbrRoue === 2) {
            return "C'est une moto";
        } else {
            return "C'est une voiture";
        }
    }

    public function boost():void{
        $this->setVitesseMax($this->getVitesseMax() + 50);
    }
}



//1) Créer une méthode plusRapide() dans le fichier vehicule.php qui compare la vitesse des différents véhicules (moto et voiture) et retourne le véhicule le plus rapide des 2 avec un return.
//2) Exécuter la méthode plusRapide() dans le fichier test_objet.php.
//3) Afficher le véhicule le plus rapide dans le fichier test_objet.php.