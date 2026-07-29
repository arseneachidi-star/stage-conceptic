<?php
class Voiture{
    public string $marque;
    public string $model;
    public string $annee;

    public function __construct(string $marque, string $model , string $annee)
    {
        $this->marque = $marque;
        $this->model = $model; 
        $this->annee = $annee;
    }

    public function AfficherDetails():string{
        return "La voiture {$this->marque} est de model {$this->model}";
    }
}
$type = new Voiture("Mescedes", "BBB", "2000");
echo $type->AfficherDetails();
?>