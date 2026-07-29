<?php
 class Rectangle{
    public float $longeur;
    public float $largeur;

    public function __construct(float $longeur, float $largeur)
    {
        $this->longeur = $longeur;
        $this->largeur = $largeur;
    }
    public function CalculerAire():float{
        return  $this->longeur * $this->largeur ;
    }
 }

 $Aire = new Rectangle("500", "400");
 echo $Aire->CalculerAire();
?>