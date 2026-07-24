<?php
class Employe {
    public function __construct(protected string $nom, protected float $salaire) {}

    public function calculerPaie(): float {
        return $this->salaire;
    }
}

class Developpeur extends Employe {
    private string $langagePrincipal;

    public function __construct(string $nom, float $salaire, string $langage) {
        parent::__construct($nom, $salaire);
        $this->langagePrincipal = $langage;
    }

    // Spécificité du développeur
    public function coder(): string {
        return "{$this->nom} écrit du code en {$this->langagePrincipal}.";
    }
}

$dev = new Developpeur("Bob", 3000.0, "PHP");
echo $dev->coder();