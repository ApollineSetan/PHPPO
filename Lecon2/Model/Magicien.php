<?php 
class Magicien extends AbstractPersonnage {

    private ?int $mana;

    public function __construct(?string $nom, ?InterfaceArme $arme, ?string $type, ?int $mana){
        parent::__construct($nom, $arme, $type);
        $this->mana = $mana;
    }

    public function afficher():void {
    }
}