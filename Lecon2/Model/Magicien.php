<?php 
class Magicien extends AbstractPersonnage {

    // Attributs
    private ?int $mana;

    // Constructeur
    public function __construct(?string $nom, ?InterfaceArme $arme, ?string $type, ?int $mana){
        parent::__construct($nom, $arme, $type);
        $this->mana = $mana;
    }

    public function getMana():int{
        return $this->mana;
    }
    public function setMana(?int $mana): Magicien{
        $this->mana = $mana;
        return $this;
    }

    // Méthodes
    public function afficher():void {
        echo "<p>Le magicien est nommé " .$this->getNom(). ".</p>";
    }

    public function attaquer():?int {
        if ($this->mana > 0){
            $this->mana--;
            echo "<p>" .$this->getNom().  " tente d'attaquer :</p>";
            echo "<p> Il inflige des dégâts avec sa magie.</p>";
            echo "<p> La mana restante est de " .$this->mana. ".</p>";
            return 30;
        } else {
            echo "<p>Le magicien n'a plus de mana. Il est inconscient et ne peut plus attaquer.</p>";
            return 0 ;
        }
    }
}
