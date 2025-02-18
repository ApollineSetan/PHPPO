<?php 
class Arc implements InterfaceArme {
    // Attributs
    private int $munition;
    private string $type;

    // Constructor
    public function __construct(int $munition, string $type){
    $this->munition = $munition;
    $this->type = $type;
    }

    // Getter et Setter
    public function getMunition(): int {
    return $this->munition;
    }

    public function setMunition(int $munition): void{
    $this->munition = $munition;
    }

    // Méthodes
    public function afficher():void {
    echo "<p> Cet arc est de type : " .$this->type. " avec " .$this->munition. " munitions.</p>";
    }

    public function attaquer():?int {
        if ($this->munition > 0){
            echo "<p> Il inflige des dégâts avec son arc.</p>";
            $this->munition--;
            echo "<p> Il reste " .$this->munition. " flêches. </p>";
            return 15;
        } else {
            echo "<p> Plus aucune flêche n'est disponible. Je ne peux plus attaquer.</p>";
            return 0;
        }
    }
}