<?php 
class Magicien extends AbstractPersonnage {

    private ?int $mana;

    public function __construct(?string $nom, ?InterfaceArme $arme, ?string $type, ?int $mana){
        parent::__construct($nom, $arme, $type);
        $this->mana = $mana;
    }

    public function afficher():void {
    }

    public function attaquer():void {
        if ($this->mana > 0){
            $this->mana--;
            echo "<p> Le magicien attaque :</p>";
            echo "<p> Il inflige des dégâts avec sa magie.</p>";
            echo "<p> La mana restante est de " .$this->mana. ".</p>";
        } else {
            echo "<p>Le magicien n'a plus de mana. Il est inconscient et ne peut plus attaquer.</p>";
        }
    }
}
