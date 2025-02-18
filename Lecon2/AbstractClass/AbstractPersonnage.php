<?php

abstract class AbstractPersonnage {
    // Attributs
    private ?string $nom;
    private ?InterfaceArme $arme;
    private ?string $type;

    // Construction
    public function __construct(?string $nom, ?InterfaceArme $arme, ?string $type){
        $this->nom = $nom;
        $this->arme = $arme;
        $this->type = $type;
    }

    // Getter et Setter
    public function getNom():string{
        return $this->nom;
    }
    public function getArme():?InterfaceArme{
        return $this->arme;
    }
    public function getType():string{
        return $this->type;
    }

    public function setNom(?string $nom):?AbstractPersonnage{
        $this->nom = $nom;
        return $this;
    }
    public function setArme(?InterfaceArme $arme):?AbstractPersonnage{
        $this->arme = $arme;
        return $this;
    }
    public function setType(?string $type):?AbstractPersonnage{
        $this->type = $type;
        return $this;
    }

    // Méthodes
    public abstract function afficher():void;

    public function attaquer():?int {
        echo "<p>" .$this->nom. " tente d'attaquer :</p>";
        $arme = $this->getArme();
        
        if ($arme instanceof ProjectileMagique) {
            if ($this instanceof Magicien) {
                $degats = $arme->attaquer();
                echo "<p>" .$this->nom. " utilise son projectile magique, infligeant " . $degats . " dégâts.</p>";
                return $degats;
            } else {
                echo "<p>Cet objet est un projectile magique. Seul un magicien peut l'utiliser.</p>";
                return 0;
            }
        }
        $degats = $arme->attaquer();
        echo "<p>" .$this->nom. " attaque avec son arme, infligeant " . $degats . " dégâts.</p>";
        return $degats; 
    }
} 