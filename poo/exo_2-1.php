<?php
class compteBancaire {

private float $solde ;

public function __construct( float $soldeInitial)
{
    $this->solde = max(0, $soldeInitial);
}

public function getSolde():float {
    return $this->solde;
}

public function deposer(float $montant) : void {
    if ($montant > 0) {
       $this->solde += $montant ;
    } else {
        echo " Le montant ne dois pas être négatif";
    }
}

public function  retirer ( float $montant) : void {
    if ($montant > 0  && $montant <= $this->solde){
        $this->solde -= $montant;
    } else {
        "Votre solde est insuffisant. Veillez recharger votre compte.\n";
    }
}
}

$compte = new compteBancaire(5000) ;
$compte->retirer(60);
echo "Le solde restant est :".$compte->getSolde(). "FCFA\n";
?>