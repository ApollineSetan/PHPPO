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

    public function getType(): string {
        return $this->type;
    }

    public function setType(string $type): void {
        $this->type = $type;
    }

    // Méthodes
    public function afficher():void {
        echo "<p> Cette epée est de type : " .$this->type. " avec une durabilité de " .$this->durabilite. "</p>";
    }

    public function attaquer():?int {
        $random = rand(1, 20);
        if ($random >= 1 && $random <= 10){
            $this->durabilite--;
            echo "<p>Il inflige des dégâts avec son épée.</p>";
            echo "<p>L'épée perd 1 point de durabilité. Durabilité restante : " .$this->durabilite. ".</p>";
            return 20;
        }
        if ($this->durabilite <= 0){
            echo "<p>Mon épée est cassée et ne peut être réutilisée</p>";
            return 0;
        }
        return 0;
    }
}