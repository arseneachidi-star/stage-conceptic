<?php
class CompteBancaire {
    private float $solde; // Invisible de l'extérieur

    public function __construct(float $soldeInitial) {
        $this->solde = $soldeInitial;
    }

    // Getter (lecture sécurisée)
    public function getSolde(): float {
        return $this->solde;
    }

    // Setter (écriture contrôlée)
    public function deposer(float $montant): void {
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }
}

$compte = new CompteBancaire(100.0);
$compte->deposer(50.0);
echo $compte->getSolde(); // 150