<?php
class produit {

    private float $prix ; 


public function __construct(float $prixInitial)
{
    $this->setPrix($prixInitial);
}


public function getPrix():float{
   return  $this->prix ;
}

public function setPrix(float $nouveauPrix){
    if ($nouveauPrix > 0){
        $this->prix = $nouveauPrix;
    } else {
        echo " Le prix ne doit pas être négatif\n";
    }
}
}  

$solde = new produit(500);
$solde->setPrix(500);
echo "Le nouveau prix est :" . $solde->getPrix(). "FCFA\n";
?>