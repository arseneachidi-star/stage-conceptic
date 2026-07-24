<?php
interface Loggable {
    public function log(string $message): void;
}

class FichierLogger implements Loggable {
    public function log(string $message): void {
        file_put_contents('app.log', $message . PHP_EOL, FILE_APPEND);
    }
}