<?php 
class Guerrier extends AbstractPersonnage {
    // Constructeur
    public function __construct(?string $nom, ?InterfaceArme $arme, ?string $type){
        parent::__construct($nom, $arme, $type);
    }

    // Méthodes
    public function afficher():void {
        echo "<p>Le guerrier est nommé " .$this->getNom(). ".</p>";
    }
}
