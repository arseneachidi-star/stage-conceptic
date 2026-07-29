<?php

class Utilisateur {

    private string $MotDePass;


    public function __construct(string $mdpClair)
    {
        $this->MotDePass = password_hash($mdpClair, PASSWORD_DEFAULT);
    }

    public function verifierMoDePass(string $essai): bool{

    return password_verify($essai, $this->MotDePass);
    }
}

$user = new Utilisateur("LeMotDePassVrai");
if ($user->verifierMoDePass("LeMotDePassFaux")){
    echo "Connexion réuissit !";
} else 
    echo "Erreur ! Le mot de pass incorrecte. Veillez resayez !";
?>