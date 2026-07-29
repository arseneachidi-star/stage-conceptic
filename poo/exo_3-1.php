<?php
class Utilisateur {

protected string $nom;
protected string $email;

public function __construct(string $nom, string $email)
{
    $this->nom = $nom; 
    $this->email = $email;
}

}

class  Administrateur extends Utilisateur{
    private int $niveau ;


public function __construct(string $nom, string $email ,int $niveau)
    {
        parent::__construct( $nom,$email);
        $this->niveau = $niveau;
    }


public function DecrireAdmin (): string {
    return " Le nom de l'administrateur est {$this->nom} et son email est {$this->email}. Il a le niveau {$this->niveau} \n";
}

}

$decrire = new Administrateur("ATCHIDI", "arseneachidi@gmail.com", "5");
echo $decrire->DecrireAdmin();
?>

é
2709