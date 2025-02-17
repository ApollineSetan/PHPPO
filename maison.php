<?php
class Maison {
    private ?string $nom;
    private ?int $longueur;
    private ?int $largeur;
    private ?int $nbrEtage;

    // Constructeur
    public function __construct(?string $nom, ?int $longueur, ?int $largeur, ?int $nbrEtage){
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->nbrEtage = $nbrEtage;
    }

    // Getter et setter
    public function getNom(): ?string {
        return $this->nom;
    }
    public function getLongueur(): ?int {
        return $this->longueur;
    }
    public function getLargeur(): ?int {
        return $this->largeur;
    }
    public function getNbrEtage(): ?int {
        return $this->nbrEtage;
    }

    // Méthodes
    public function surface(): void {
        $superficie = ($this->longueur * $this->largeur) * $this->nbrEtage;
        echo '<p>La surface de la ' .$this->nom. ' est égale à ' .$superficie. 'm2.';
    }

}
