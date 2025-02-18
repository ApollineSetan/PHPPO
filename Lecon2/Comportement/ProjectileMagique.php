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

    public function afficher():void {
    }
    
    public function attaquer():void {
    }
}