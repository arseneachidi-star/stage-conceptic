<?php

class Livre{

    public string $titre;
    public string $auteur;
    public string $prix;

    public function __construct(string $titre, string $auteur, string $prix)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }

    public function ObtenirInfos():string{
        return "{$this->titre} d' {$this->auteur} est à {$this->prix}";
    }
}

$infos = new Livre("Le gon à bagayé", "Appolinaire AGBAZAOU", "2000F");
echo $infos->ObtenirInfos();
?>