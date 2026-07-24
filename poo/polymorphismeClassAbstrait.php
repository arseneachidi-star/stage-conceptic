<?php
abstract class Paiement {
    abstract public function traiter(float $montant): string;
}

class PaiementCarte extends Paiement {
    public function traiter(float $montant): string {
        return "Paiement de {$montant}€ validé par Carte Bancaire.";
    }
}

class PaiementPayPal extends Paiement {
    public function traiter(float $montant): string {
        return "Paiement de {$montant}€ validé via PayPal.";
    }
}

// Utilisation polymorphe
function effectuerTransaction(Paiement $methode, float $montant) {
    echo $methode->traiter($montant);
}

effectuerTransaction(new PaiementPayPal(), 49.99);