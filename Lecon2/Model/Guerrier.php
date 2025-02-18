<?php 
class Guerrier extends AbstractPersonnage {
    public function __construct(?string $nom, ?InterfaceArme $arme, ?string $type){
        parent::__construct($nom, $arme, $type);
    }

    public function afficher():void {
    }
}
