<?php
class ServiceNotification {
    private Loggable $logger;

    // Injection de dépendance par interface
    public function __construct(Loggable $logger) {
        $this->logger = $logger;
    }

    public function envoyer(string $message): void {
        // Envoi effectif...
        $this->logger->log("Notification envoyée : " . $message);
    }
}

// Assemblage
$notificationService = new ServiceNotification(new FichierLogger());