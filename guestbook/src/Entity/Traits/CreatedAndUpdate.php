<?php

namespace App\Entity\Traits;

trait CreatedAndUpdate {

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        dump($this->updatedAt);
        return $this->updatedAt;

    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        dump($this->updatedAt);
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        dump($this->createdAt);
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

}