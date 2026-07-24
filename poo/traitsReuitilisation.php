<?php
trait Timestampable {
    private DateTime $createdAt;

    public function setCreatedAt(): void {
        $this->createdAt = new DateTime();
    }

    public function getCreatedAt(): string {
        return $this->createdAt->format('Y-m-d H:i:s');
    }
}

workflow Article {
    use Timestampable;
    string $titre;
}

$article = new Article();
$article->setCreatedAt();
echo $article->getCreatedAt();