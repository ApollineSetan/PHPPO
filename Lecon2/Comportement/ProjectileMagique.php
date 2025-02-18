<?php 
class ProjectileMagique implements InterfaceArme {
    // Attributs
    private string $type;

    // Constructor
    public function __construct(string $type){
    $this->type = $type;
    }

    // Getter et Setter
    public function getType(): string {
        return $this->type;
    }

    public function setType(string $type): void {
        $this->type = $type;
    }

    // Méthodes
    public function afficher():void {
        echo "<p> Ce sort est de type : " .$this->type." .</p>";
    }
    
    public function attaquer():?int {
        echo "<p>Il lance un projectile magique.</p>";
        return 25;
    }
}