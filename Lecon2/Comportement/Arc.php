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

    public function afficher():void {
    echo "<p> J'utilise un arc de type : " .$this->type. " avec " .$this->munition. " munitions.</p>";
    }

    public function attaquer():void {
        echo "<p> J'inflige des dégâts avec mon arc</p>";
        if ($this->munition > 0){

        }
    }
}

/*     public function attaquer():void {
        echo "<p> J'inflige des dégâts avec mon épée</p>";
        $random = rand(1, 100);
        if ($random >= 1 && $random <= 10){
            $this->durabilite--;
            echo "<p>L'épée perd 1 point de durabilité. Durabilité restante :" .$this->durabilite. "</p>";
        }
        if ($this->durabilite <= 0){
            echo "<p>Mon épée est cassée et ne peut être réutilisée</p>";
        }

}*/