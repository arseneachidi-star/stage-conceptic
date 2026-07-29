<?php
class Employer {
    public string $nom; 
    public float $salaire; 


    public function __construct(string $nom, string $salaire)

    { $this->nom = $nom ; 
      $this->salaire = $salaire;   
    }


    public function CalculerPrime():float{
        return $this->salaire * 0.80;
    
    }
}

class Manager extends Employer{
    
    public function CalculerPrime(): float
    {
        return parent::CalculerPrime() +500;
    }
}
$payer = new Manager("Arsène", 1000);
echo " Le prime  est : " . $payer->CalculerPrime(). "FCFA";

?>