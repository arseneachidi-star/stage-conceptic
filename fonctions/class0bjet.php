<?php
class Utilisateur {
    // Propriétés (état)
    public string $nom;
    public string $email;

    // Constructeur : initialisateurs d'objets
    public function __construct(string $nom, string $email) {
        $this->nom = $nom;
        $this->email = $email;
    }

    // Méthode (comportement)
    public function sePresenter(): string {
        return "Bonjour, je m'appelle {$this->nom} et mon email est {$this->email}.";
    }
}

// Instanciation
$user1 = new Utilisateur("Alice", "alice@example.com");
echo $user1->sePresenter(); 
// Sortie : Bonjour, je m'appelle Alice et mon email est alice@example.com.