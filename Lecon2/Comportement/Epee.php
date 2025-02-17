<?php 
class Epee implements InterfaceArme {
    // Attributs
    private int $durabilite;
    private string $type;

    // Constructor
    public function __construct(int $durabilite, string $type){
        $this->durabilite = $durabilite;
        $this->type = $type;
    }

    // Getter et Setter
    public function getDurabilite(): int {
        return $this->durabilite;
    }

    public function setDurabilite(int $durabilite): void{
        $this->durabilite = $durabilite;
    }

    // Méthodes
    public function afficher():void {
        echo "<p> J'utilise une épée de type : " .$this->type. " avec une durabilité de " .$this->durabilite. "</p>";
    }

    public function attaquer():void {
        echo "<p> J'inflige des dégâts avec mon épée</p>";
        $random = rand(1, 100);
        if ($random >= 1 && $random <= 10){
            $this->durabilite--;
            echo "<p>L'épée perd 1 point de durabilité. Durabilité restante :" .$this->durabilite. "</p>";
        }
        if ($this->durabilite <= 0){
            echo "<p>Mon épée est cassée et ne peut être réutilisée</p>";
        }
    }
}