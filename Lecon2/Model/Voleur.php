<?php 
class Voleur extends AbstractPersonnage {
    // Constructeur
    public function __construct(?string $nom, ?InterfaceArme $arme, ?string $type){
        parent::__construct($nom, $arme, $type);
    }

    // Méthodes
    public function afficher():void {
        echo "<p>Le voleur est nommé est " .$this->getNom(). ".</p>";
    }
}